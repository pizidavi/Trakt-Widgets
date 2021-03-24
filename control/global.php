<?php

function URLtoBase64($url=NULL) {
  if(!$url) { return False; }
  $data = file_get_contents($url);
  return strlen($data) ? 'data:image/;base64,'.base64_encode($data) : False;
}

function minuteToTime($input) {
  $input = isset($input) && $input > 0 ? (int)$input : 0;
  $days = floor($input / 1440); // Giorni
  $hourSeconds = $input % 1440; // Ore
  $hours = floor($hourSeconds / 60);
  $minuteSeconds = $hourSeconds % 60; // Minuti
  $remainingMinute = $minuteSeconds % 60;
  $minute = ceil($remainingMinute);

  return [$days, $hours, $minute];
}

?>