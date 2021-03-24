<?php

// Poster Watching
$dataWatching = $trakt->getWatching();
if ($dataWatching["code"] != 200 && $dataWatching["code"] != 201 && $dataWatching["code"] != 204) {
  error("Trakt API Error", 480, 720); }
$dataWatching = $dataWatching["data"];

$trakt_icon = URLtoBase64('images/trakt-icon-white.png');
$watching_title = NULL;
$watching_year = NULL;
$watching_episode = NULL;
$watching_image = NULL;

if ($dataWatching != "") {
  $type = ($dataWatching["type"] == "movie" ? "movie" : "show");
  $id = $dataWatching[$type]["ids"]["tmdb"];

  $watching_title = $dataWatching[$type]["title"];
  $watching_year = $dataWatching[$type]["year"];
  $watching_episode = ($dataWatching["type"] == "episode" ? $dataWatching["episode"]["season"]."x".$dataWatching["episode"]["number"] : "");

  if ($id != NULL) {
    $images = $tmdb->getImages(($type == "show" ? "tv" : "movie"), $id, $lang, "en,null");
    if ($images["code"] == 200 && count($images["data"]["posters"]) > 0) {
      $watching_image = URLtoBase64($tmdb->images_website.$images["data"]["posters"][0]["file_path"]);
    }
  }
}

?>

<svg id="poster_watching" width="480" height="720" viewBox="0 0 480 720" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
    <rect x="0" y="0" width="100%" height="90%" fill="#f2f2f2" />
    <image x="0" y="0" width="100%" xlink:href="<?php echo $watching_image; ?>" />
  </g>

  <!-- Text -->
  <g id="text">
    <rect x="0" y="90%" width="100%" height="10%" fill="#1c1c1c" />

    <rect x="0" y="90%" width="15%" height="10%" fill="#737373" />
    <image x="1.9%" y="91.4%" width="11%" xlink:href="<?php echo $trakt_icon; ?>" />

    <text x="18%" y="93.9%" fill="#bfbfbf" font-size="14" dominant-baseline="bottom" text-anchor="left"><?php echo strtoupper($user." "._T(($watching_title != NULL ? "IS_WATCHING" : "IS_NOT_WATCHING_ANYTHING"), $lang)); ?></text>
    <text x="18%" y="97.5%" fill="#e6e6e6" font-size="22" dominant-baseline="bottom" text-anchor="left"><?php echo $watching_title; ?><tspan dx="7"><?php echo ($watching_episode != NULL ? $watching_episode : $watching_year); ?></tspan></text>
  </g>

</svg>
