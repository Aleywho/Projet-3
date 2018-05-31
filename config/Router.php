<?php

namespace App\config;

class Router
{
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
            else{
                require '../templates/home.php';
            }
        }
        catch (\Exception $e)
        {
            echo 'Erreur';
        }
    }
}