<?php

namespace App\config;

use App\src\controller\BackController;
use App\src\controller\HomeController;

class Router
{

   private $homeController;
   private $backController ;
    public function __construct()
    {
        $this->homeController = new HomeController();
        $this->backController = new BackController();

    }

    public function start()
    {
        try{
            if(isset($_GET['route'])) {
                if ($_GET['route'] === 'article') {
                    $id = $_GET['id'];
                    $this ->homeController->article($id);

                } elseif ($_GET['route'] == 'addComment') {
                    $id = $_GET['id'];
                   extract($_POST);
                    $this->homeController->addComment($id, $content, $pseudo);

                } elseif ($_GET['route'] == 'register') {
                    $this->backController->register();

                } elseif ($_GET['route'] == 'addArticle') {
                    if (isset ($_POST['submit'])){
                       $title = $_POST['title'];
                        $content = $_POST['content'];
                        $author = $_POST['author'];
                        $this->backController->postArticle($title, $content, $author);
                    }
                    $this->backController->addArticle();

                } elseif ($_GET['route'] == 'editComment'){
                    if (isset ($_POST['submit'])){
                        $newContent = $_POST['newContent'];
                        $id = $_GET['id'];
                        $this ->backController->editComment($newContent, $id);
                    }
                    $this->backController->postEdit();

            }elseif ($_GET['route'] == 'editArticle'){
                    if (isset ($_POST['submit'])){
                        var_dump($_POST);
                        $content = $_POST['content'];
                        $title = $_POST['title'];
                        $id = $_GET['id'];
                        $this ->backController->editArticle($content, $title, $id);
                    }
                    $this->backController->postEditA();
                }elseif ($_GET['route'] == 'deleteArticle') {
                    if (isset ($_POST['delete'])) {
                        $id = $_GET['id'];
                        $this->backController->deleteArticle($id);
                    }
                    $this->backController->postDelete();
                }elseif ($_GET['route'] == 'admin_page'){
                    if (isset($_POST['submit'])){
                        $pseudo = $_POST['pseudo'];
                        $password = $_POST['password'];
                        $email = $_POST['email'];
                        $this->backController->addMembers($pseudo, $password, $email);
                    }

                }else{
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