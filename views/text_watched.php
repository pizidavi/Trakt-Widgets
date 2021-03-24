<?php

// Text Watched
$dataHistory = $trakt->getHistory('all', 1);
if ($dataHistory["code"] != 200 && $dataHistory["code"] != 201 && $dataHistory["code"] != 204) {
  error("Trakt API Error", 720, 52); }
$dataHistory = $dataHistory["data"];

$trakt_icon = URLtoBase64('images/trakt-icon-white.png');
$last_watched_title = NULL;
$last_watched_year = NULL;
$last_watched_episode = NULL;

if (count($dataHistory) > 0) {
  $dataHistory = $dataHistory[0];

  $type = ($dataHistory["type"] == "movie" ? "movie" : "show");
  $id = $dataHistory[$type]["ids"][ ($type == "movie" ? "tmdb" : "tvdb") ];

  $last_watched_title = $dataHistory[$type]["title"];
  $last_watched_year = $dataHistory[$type]["year"];
  $last_watched_episode = ($dataHistory["type"] == "episode" ? $dataHistory["episode"]["season"]."x".$dataHistory["episode"]["number"] : "");
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

    <text x="9%" y="40%" fill="#bfbfbf" font-size="14" dominant-baseline="bottom" text-anchor="left"><?php echo strtoupper($user." "._T("LAST_WATCHED", $lang)); ?></text>
    <text x="9%" y="80%" fill="#e6e6e6" font-size="20" dominant-baseline="bottom" text-anchor="left"><?php echo $last_watched_title; ?><tspan dx="7"><?php echo ($last_watched_episode != NULL ? $last_watched_episode : $last_watched_year); ?></tspan></text>
  </g>

</svg>
