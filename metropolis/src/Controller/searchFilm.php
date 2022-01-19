<?php
namespace App\Controller;


class searchFilm  {
    public static function search ($nomFilm) 
    {
        $descriptionFilm = NULL;
        $apiKey = '3830c4bd'; 
         
        $url = "http://www.omdbapi.com/?apikey=" . $apiKey . "&t=" . $nomFilm;
         
        $response = file_get_contents($url);

        try
        {
            $descriptionFilm = json_decode($response,true)["Plot"];
        }catch (\Exception $e)
        {
            error_log($e->getMessage());
        }


        return $descriptionFilm;
    }


}

?>
