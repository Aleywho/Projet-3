<?php

namespace App\config;

use App\src\controller\HomeController;

class Router
{

   private $homeController;
    public function __construct()
    {
        $this->homeController = new HomeController();
    }

    public function start()
    {
        try{
            if(isset($_GET['route']))
            {
                if($_GET['route'] === 'article'){
                    $id = $_GET['id'];
                    require '../templates/single.php';
                }
                else{
                    echo 'page inconnue';
                }
            }
            if(isset($_GET['route'] ))
            {
                if($_GET['route']== 'addComment') {
                    $id = $_GET['id'];
                    require '../templates/single.php';
                }
                else{
                    echo'identifiant inconnue';
                }
            }
            else{
                $this->homeController->index();
            }
        }
        catch (\Exception $e)
        {
            echo 'Erreur';
        }
    }
}