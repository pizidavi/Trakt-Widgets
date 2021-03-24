<?php

// Text Watching
$dataWatching = $trakt->getWatching();
if ($dataWatching["code"] != 200 && $dataWatching["code"] != 201 && $dataWatching["code"] != 204) {
  error("Trakt API Error", 720, 52); }
$dataWatching = $dataWatching["data"];

$trakt_icon = URLtoBase64('images/trakt-icon-white.png');
$watching_title = NULL;
$watching_year = NULL;
$watching_episode = NULL;

if ($dataWatching != "") {
  $type = ($dataWatching["type"] == "movie" ? "movie" : "show");
  $id = $dataHistory[$type]["ids"][ ($type == "movie" ? "tmdb" : "tvdb") ];

  $watching_title = $dataWatching[$type]["title"];
  $watching_year = $dataWatching[$type]["year"];
  $watching_episode = ($dataWatching["type"] == "episode" ? $dataWatching["episode"]["season"]."x".$dataWatching["episode"]["number"] : "");
}

?>

<svg id="poster_watched" width="720" height="52" viewBox="0 0 720 52" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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

  <!-- Text -->
  <g id="text">
    <rect x="0" y="0" width="100%" height="100%" fill="#1c1c1c" />

    <rect x="0" y="0" width="7%" height="100%" fill="#737373" />
    <image x="0.6%" y="10%" width="5.8%" xlink:href="<?php echo $trakt_icon; ?>" />

    <text x="9%" y="40%" fill="#bfbfbf" font-size="14" dominant-baseline="bottom" text-anchor="left"><?php echo strtoupper($user." "._T(($watching_title != NULL ? "IS_WATCHING" : "IS_NOT_WATCHING_ANYTHING"), $lang)); ?></text>
    <text x="9%" y="80%" fill="#e6e6e6" font-size="20" dominant-baseline="bottom" text-anchor="left"><?php echo $watching_title; ?><tspan dx="7"><?php echo ($watching_episode != NULL ? $watching_episode : $watching_year); ?></tspan></text>
  </g>

</svg>
