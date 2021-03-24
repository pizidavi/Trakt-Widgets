<?php

$words = [
  "HELLO" => [
    "en"=> "Hello",
    "it"=> "Ciao",
  ],
  "VIP" => [
    "en"=> "VIP",
    "it"=> "VIP",
  ],
  "PRIVATE" => [
    "en"=> "PRIVATE",
    "it"=> "PRIVATO",
  ],
  "DAYS"=> [
    "it"=> "Giorni",
    "en"=> "Days",
  ],
  "HOURS"=> [
    "it"=> "Ore",
    "en"=> "Hours",
  ],
  "MINUTES"=> [
    "it"=> "Minuti",
    "en"=> "Minutes",
  ],
  "D"=> [
    "it"=> "G",
    "en"=> "D",
  ],
  "H"=> [
    "it"=> "O",
    "en"=> "H",
  ],
  "M"=> [
    "it"=> "M",
    "en"=> "M",
  ],
  "MOVIE"=> [
    "it"=> "Film",
    "en"=> "Movie",
  ],
  "MOVIES"=> [
    "it"=> "Film",
    "en"=> "Movies",
  ],
  "SHOW"=> [
    "it"=> "Serie TV",
    "en"=> "Show",
  ],
  "SHOWS"=> [
    "it"=> "Serie TV",
    "en"=> "Shows",
  ],
  "EPISODE"=> [
    "it"=> "Episodio",
    "en"=> "Episode",
  ],
  "EPISODES"=> [
    "it"=> "Episodi",
    "en"=> "Episodes",
  ],
  "LAST_WATCHED"=> [
    "it"=> "ULTIMO GUARDATO",
    "en"=> "LAST WATCHED",
  ],
  "IS_WATCHING"=> [
    "it"=> "STA GUARDANDO",
    "en"=> "IS WATCHING",
  ],
  "IS_NOT_WATCHING_ANYTHING"=> [
    "it"=> "Non sta guardando nulla al momento",
    "en"=> "Is not watching anything at the moment",
  ],
  "ERROR"=> [
    "it"=> "Errore",
    "en"=> "Error",
  ],
  "MISSING_INFORMATION"=> [
    "it"=> "Information mancanti",
    "en"=> "Missing information",
  ],
  "UNDEFINED_VIEW_TYPE"=> [
    "it"=> "Information mancanti",
    "en"=> "Undefined View or Type",
  ],
  "TRAKT_API_ERROR"=> [
    "it"=> "Information mancanti",
    "en"=> "Trakt API Error",
  ],
];

$supported_lang = [
  "en",
  "it",
];

function _T($word, $lang) {
  global $words, $supported_lang;

  if (in_array($lang, $supported_lang)) {
    return $words[$word][$lang];
  } else {
    return $words[$word]["en"];
  }
}

 ?>