<?php
namespace App\Controller;


class searchFilm  {
    public static function search ($nomFilm) {
        $descriptionFilm = 'lorem';
      $nomFilm = 'PulpFiction';
      $apiKey = '3830c4bd'; 
       
      $url = "http://www.omdbapi.com/?apikey=" . $apiKey . "&t=" . $nomFilm;
       
      $response = file_get_contents($url);


      $plot = json_decode($response,true)["Plot"];


        return $descriptionFilm;
    }


}

?>
