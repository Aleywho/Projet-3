<?php

namespace App\config;

use App\src\controller\BackController;
use App\src\controller\HomeController;

class Router
{

    private $homeController;
    private $backController;

    public function __construct()
    {
        $this->homeController = new HomeController();
        $this->backController = new BackController();

    }

    public function start()
    {
        try {
            if (isset($_GET['route'])) {
                if ($_GET['route'] === 'article') {
                    $id = $_GET['id'];
                    $this->homeController->article($id);

                } elseif ($_GET['route'] == 'addComment') {
                    $id = $_GET['id'];
                    extract($_POST);
                    $this->homeController->addComment($id, $content, $pseudo);

                } elseif ($_GET['route'] == 'register') {
                    $this->homeController->register();

                } elseif ($_GET['route'] == 'addArticle') {
                    if (isset ($_POST['submit'])) {
                        $title = $_POST['title'];
                        $content = $_POST['content'];
                        $author = $_POST['author'];
                        $this->backController->postArticle($title, $content, $author);
                    }
                    $this->backController->addArticle();

                } elseif ($_GET['route'] == 'editComment') {
                    if (isset ($_POST['submit'])) {
                        $newContent = $_POST['newContent'];
                        $id = $_GET['id'];
                        $this->backController->editComment($newContent, $id);
                    }
                    $this->backController->postEdit();

                } elseif ($_GET['route'] == 'editArticle') {
                    if (isset ($_POST['submit'])) {
                        var_dump($_POST);
                        $content = $_POST['content'];
                        $title = $_POST['title'];
                        $id = $_GET['id'];
                        $this->backController->editArticle($content, $title, $id);
                    }
                    $this->backController->postEditA();
                } elseif ($_GET['route'] == 'deleteArticle') {
                    if (isset ($_POST['delete'])) {
                        var_dump($_POST);
                        $id = $_GET['id'];
                        $content = $_POST['content'];
                        $author = $_POST['author'];
                        $this->backController->deleteArticle($id, $content, $author);
                    }
                    $this->backController->postDelete();

                } elseif ($_GET['route'] == 'addMember') {
                    if (isset($_POST['submit'])) {
                        $pseudo = $_POST['pseudo'];
                        $email = $_POST['email'];
                        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $this->homeController->addMember($pseudo, $password, $email);

                    }
                } elseif ($_GET['route'] == 'connect') {
                    $this->homeController->connect();

                } elseif ($_GET['route'] == 'connectMember') {
                    var_dump($_POST);
                    if (isset($_POST['submit'])) {
                        var_dump("connecté");
                        $password = $_POST['password'];
                        $pseudo = $_POST['pseudo'];
                        $this->homeController->connectMember($pseudo, $password);
                    }
                    var_dump("nonconnecté");

                        $this->homeController->connectAdm();

                } elseif ($_GET['route'] == 'deconnect') {
                    $this->homeController->deconnect();

                } else {
                    echo 'erreur';
                }
            } else {
                $this->homeController->index();
            }
        } catch (\Exception $e) {
            echo 'Erreur';
        }
    }
}