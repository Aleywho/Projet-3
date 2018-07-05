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
            if(isset($_GET['route'])) {
                if ($_GET['route'] === 'article') {
                    $id = $_GET['id'];
                    require '../templates/single.php';

                } elseif ($_GET['route'] == 'addComment') {
                    $id = $_GET['id'];
                    $pseudo = $_POST['pseudo'];
                    $content = $_POST['content'];
                    $this->homeController->addComment($id, $content, $pseudo);

                } elseif ($_GET['route'] == 'register') {
                    $this->homeController->register();

                } elseif ($_GET['route'] == 'addArticle') {
                    if (isset ($_POST['submit'])){
                       $title = $_POST['title'];
                        $content = $_POST['content'];
                        $author = $_POST['author'];
                        $this->homeController->postArticle($title, $content, $author);
                    }
                    $this->homeController->addArticle();

                } elseif ($_GET['route'] == 'editComment'){
                    if (isset ($_POST['submit'])){
                        $newContent = $_POST['newContent'];
                        $id = $_GET['id'];
                        $this ->homeController->editComment($newContent, $id);
                    }
                    $this->homeController->postEdit();

            }elseif ($_GET['route'] == 'editArticle'){
                    if (isset ($_POST['submit'])){
                        var_dump($_POST);
                        $content = $_POST['content'];
                        $title = $_POST['title'];
                        $id = $_GET['id'];

                        $this ->homeController->editArticle($content, $title, $id);
                    }
                    $this->homeController->postEditA();
                }elseif ($_GET['route'] == 'deleteArticle'){
                    if (isset ($_POST['delete']))
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $author = $_POST['author'];
                    $this->homeController->deleteArticle($title, $content, $author);
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