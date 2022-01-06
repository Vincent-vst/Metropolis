<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\BrowserKit\Response;

class homeFilm 
{
    public function hello(){
        return new Response("hello world");
    }

}
