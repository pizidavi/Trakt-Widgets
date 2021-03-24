<?php

class Trakt {

  public $website = "https://api.trakt.tv/";
  public $user;
  private $client_id;

  function __construct($user, $client_id) {
    $this->user = $user;
    $this->client_id = $client_id;
  }

  function getInfo($id, $type, $type_id="trakt", $extended="full") {
    /*
    id: TraktID/Slug/IMDB
    type: movies/shows/episodes
    type_id: trakt/slug/.
    $extended: full/metadata (only Collection)
    */
    return $this->getData("search/$type_id/$id?type=$type&extended=$extended");
  }

  function getTranslations($id, $type, $language="en") {
    /*
    id: TraktID/Slug/IMDB
    type: movies/shows/episodes
    language: 2 character
    */
    return $this->getData("$type/$id/translations/$language");
  }

  function getWatchlist($type, $sort="title") {
    /*
    type: movies/shows/.
    sort: title/rank/added/released
    */
    return $this->getData("users/".$this->user."/watchlist/$type/$sort");
  }

  function getWatched($type, $extended=NULL) {
    /*
    type: movies/shows/.
    extended: noseasons
    */
    return $this->getData("users/".$this->user."/watched/$type?".(isset($extended) ? "extended=$extended" : ""));
  }

  function getWatching() {
    return $this->getData("users/".$this->user."/watching");
  }

  function getWatchedProgress($id, $hidden="false", $specials="true", $count_specials="false") {
    /*
    id: TraktID/Slug/IMDB
    */
    return $this->getData("shows/$id/progress/watched?hidden=$hidden&specials=$specials&count_specials=$count_specials");
  }

  function getCustomList($id, $type="all") {
    /*
    id: list id
    type: all/movies/shows
    */
    $type = ($type == "all" ? "" : $type);
    return $this->getData("users/me/lists/$id/items/$type");
  }

  function getHistory($type="all", $page=1, $extended=NULL) {
    /*
    type: all/movies/shows/.
    page: numero pagina
    extended: full
    */
    $type = ($type == "all" ? "" : $type);
    return $this->getData("users/".$this->user."/history/$type?page=$page".(isset($extended) ? "&extended=$extended" : ""));
  }

  function getCalendar($type, $start_date="", $days=7) {
    /*
    type: movies/shows
    start_date: YYYY-mm-dd
    days: d
    */
    $start_date = ($start_date == "" ? date("Y-m-d") : $start_date);
    return $this->getData("calendars/my/$type/$start_date/$days");
  }

  function getProfile($extended) {
    /*
    extended: full/vip/.
    */
    return $this->getData("users/".$this->user.(isset($extended) ? "?extended=$extended" : ""));
  }

  function getStats() {
    return $this->getData("users/".$this->user."/stats");
  }

  function getSettings() {
    return $this->getData("users/settings");
  }

  private function getData($link) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->website.$link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json",
      "trakt-api-version: 2",
      "trakt-api-key: ".$this->client_id
    ));

    $response = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
      "code"=> $code,
      "data"=> json_decode($response, True)
    ];
  }

}

?>
