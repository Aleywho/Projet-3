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
                    var_dump($_GET, $_POST);
                    $id = $_GET['id'];
                    $pseudo = $_POST['pseudo'];
                    $content = $_POST['content'];
                    $this->homeController->addComment($id, $content, $pseudo);
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