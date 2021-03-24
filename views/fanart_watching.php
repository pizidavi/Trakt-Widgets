<?php

// FanArt Watching
$dataWatching = $trakt->getWatching();
if ($dataWatching["code"] != 200 && $dataWatching["code"] != 201 && $dataWatching["code"] != 204) {
  error("Trakt API Error", 720, 480); }
$dataWatching = $dataWatching["data"];

$trakt_icon = URLtoBase64('images/trakt-icon-white.png');
$watching_title = NULL;
$watching_year = NULL;
$watching_episode = NULL;
$watching_image = NULL;

if ($dataWatching != "") {
  $type = ($dataWatching["type"] == "movie" ? "movie" : "show");
  $id = $dataHistory[$type]["ids"][ ($type == "movie" ? "tmdb" : "tvdb") ];

  $watching_title = $dataWatching[$type]["title"];
  $watching_year = $dataWatching[$type]["year"];
  $watching_episode = ($dataWatching["type"] == "episode" ? $dataWatching["episode"]["season"]."x".$dataWatching["episode"]["number"] : "");

  if ($id != NULL) {
    $images = $fanart->getImages(($type == "show" ? "tv" : "movies"), $id);
    if ($images["code"] == 200) {
      $images = $images["data"];
      $image_type = ($type == "show" ? "tvthumb" : "moviethumb");
      if (isset($images[$image_type]) && count($images[$image_type]) > 0) {
        $watching_image = URLtoBase64($images[$image_type][0]["url"]);
      }
    }
  }
}

?>

<svg id="poster_watched" width="720" height="480" viewBox="0 0 720 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <style>
    <?php require 'fonts/Exo-2.php'; ?>
    text,
    tspan {
      font-family: 'Exo 2', sans-serif;
    }
    tspan {
      fill: #bfbfbf;
      font-size: 80%;
    }
    </style>
  </defs>

  <!-- Sfondo -->
  <rect id="sfondo" x="0" y="0" width="100%" height="100%" fill="#ffffff" />

  <!-- Image -->
  <g id="image">
    <rect x="0" y="0" width="100%" height="88%" fill="#f2f2f2" />
    <image x="0" y="0" width="100%" xlink:href="<?php echo $watching_image; ?>" />
  </g>

  <!-- Text -->
  <g id="text">
    <rect x="0" y="88%" width="100%" height="12%" fill="#1c1c1c" />

    <rect x="0" y="88%" width="8%" height="12%" fill="#737373" />
    <image x="1%" y="89.6%" width="6%" xlink:href="<?php echo $trakt_icon; ?>" />

    <text x="10%" y="92.8%" fill="#bfbfbf" font-size="14" dominant-baseline="bottom" text-anchor="left"><?php echo strtoupper($user." "._T(($watching_title != NULL ? "IS_WATCHING" : "IS_NOT_WATCHING_ANYTHING"), $lang)); ?></text>
    <text x="10%" y="97.5%" fill="#e6e6e6" font-size="22" dominant-baseline="bottom" text-anchor="left"><?php echo $watching_title; ?><tspan dx="7"><?php echo ($watching_episode != NULL ? $watching_episode : $watching_year); ?></tspan></text>
  </g>

</svg>
