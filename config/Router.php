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


                elseif($_GET['route']== 'addComment') {
                    $id = $_GET['id'];
                    $this->homeController->addComment($id);
                }
                elseif($_GET['route']== 'register') {
                    $this->homeController->register();
                }

                else{
                    echo 'erreur';
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