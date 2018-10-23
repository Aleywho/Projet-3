<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\MemberDAO;

class HomeController
{


    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $article = new ArticleDAO();
        $articles = $article->getArticles();
        require '../templates/home.php';
    }


    public function article($id)
    {
        $article = new ArticleDAO();
        $articles = $article->getArticle($id);
        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle($id);

        require '../templates/single.php';
    }

    public function addComment($id, $content, $pseudo)
    {
        $commentDAO = new CommentDAO();
        $commentDAO->addComment($id, $content, $pseudo);
        header("Location: ../public/index.php?route=addComment&id=$id");

}
    public function addMember($pseudo, $password, $email)
    {
        $admin_page = new MemberDAO();
        $admin_page->addMember($pseudo, $password, $email);

        header("location:../public/index.php?route=addMember");
    }

    public function register()
    {
        require "../templates/register.php";

    }


    public function connect()
    {

        require '../templates/connect.php';
    }

    public function checkMember($pseudo, $password, $email)
    {
        $this->check($pseudo, $password, $email);
    }

    private function check($pseudo, $password, $email)
    {
        var_dump("abcdefghijklmnopqrstuvwxyz");
        var_dump($pseudo);
        var_dump($password);
        var_dump($email);
        $MemberDAO = new MemberDAO();
        $data = $MemberDAO->connectMember($pseudo, $password, $email);
        if ($data[1]) {
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;


            header("location:../public/index.php?route=admin");

        } else {
            header("location:../public/index.php?route=connect");

        }
    }

    public function signalement($id)
    {
        if (isset ($_POST['submit'])) {
            $comment = new CommentDAO();
            $comments = $comment->signalement($id);
            header("location:../public/index.php?route=signalement&id=$id");
        }
    }


    public function signalcoment()
    {
        require '../templates/signalement.php';
    }


    public function connectAdm()
    {
        require '../templates/home.php';
    }
}