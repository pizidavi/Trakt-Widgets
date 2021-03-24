<?php

class FanArt {

  public $website = "https://webservice.fanart.tv/v3";
  private $api_key;

  function __construct($api_key) {
    $this->api_key = $api_key;
  }

  function getImages($type, $id) {
    /*
    type: movies / tv
    id: tmdb id / thetvdb id / imdb id
    */
    return $this->getData("/$type/$id");
  }

  private function getData($link) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->website.$link."?api_key=".$this->api_key);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json"
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
