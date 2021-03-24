<?php
require 'flight/Flight.php';
require 'language/language.php';
require 'control/global.php';
require 'control/Trakt.php';
require 'control/TMDB.php';
require 'control/FanArt.php';
require 'views/error.php';

// Variables
Flight::set('flight.views.path', './views');

// Routes
Flight::route('/', function () {
  Flight::render('home');
});

Flight::route('/@user/@view/@type', function ($user, $view, $type) {
  $query = Flight::request()->query;

  header('Cache-Control: no-cache');
  header('Content-type: image/svg+xml');

  if (!$user || !$view || !$type) {
    error("MISSING_INFORMATION", 720, 480); }
  $lang = isset($query['language']) ? $query['language'] : "en";

  $trakt = new Trakt($user, "CLIENT_ID");
  $tmdb = new TMDB("API_KEY");
  $fanart = new FanArt("API_KEY");

  if ($type == "poster" && $view == "profile") { // Poster Profile
    require 'views/poster_profile.php';
  }
  elseif ($type == "poster" && $view == "watched") { // Poster Watched
    require 'views/poster_watched.php';
  }
  elseif ($type == "poster" && $view == "watching") { // Poster Watching
    require 'views/poster_watching.php';
  }

  elseif ($type == "card" && $view == "watched") { // Card Watched
    require 'views/card_watched.php';
  }
  elseif ($type == "card" && $view == "watching") { // Card Watching
    require 'views/card_watching.php';
  }

  elseif ($type == "banner" && $view == "watched") { // Banner Watched
    require 'views/banner_watched.php';
  }
  elseif ($type == "banner" && $view == "watching") { // Banner Watching
    require 'views/banner_watching.php';
  }

  elseif ($type == "fanart" && $view == "watched") { // FanArt Watched
    require 'views/fanart_watched.php';
  }
  elseif ($type == "fanart" && $view == "watching") { // FanArt Watching
    require 'views/fanart_watching.php';
  }

  elseif ($type == "text" && $view == "watched") { // Text Watched
    require 'views/text_watched.php';
  }
  elseif ($type == "text" && $view == "watching") { // Text Watching
    require 'views/text_watching.php';
  }

  else {
    error("UNDEFINED_VIEW_TYPE", 720, 480);
  }

});

Flight::start();
