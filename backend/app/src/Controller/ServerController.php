<?php
namespace App\Controller;

use App\Route\Route;

class ServerController
{

    #[Route('/', name: "home", methods: ["GET"])]
    public function homePage(){
        echo "test";
    }
}