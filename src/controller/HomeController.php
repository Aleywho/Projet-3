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

    public function addComment($id, $content, $pseudo)
    {
        $commentDAO = new CommentDAO();
        $commentDAO->addComment($id, $content, $pseudo);
        header("Location: ../public/index.php?route=article&id=$id");
    }

    public function article($id)
    {
        $article = new ArticleDAO();
        $articles = $article->getArticle($id);
        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle($id);
        require '../templates/single.php';
    }

    public function addMember($pseudo, $passhash, $email)
    {
        $admin_page = new MemberDAO();
        $admin_page->addMember($pseudo, $passhash, $email);

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

    public function checkMember($pseudo, $password){
        $this->check($pseudo, $password);
    }
    private function check($pseudo, $password){
        var_dump("abcdefghijklmnopqrstuvwxyz");
        var_dump($pseudo);
        $MemberDAO = new MemberDAO();

        $data = $MemberDAO->connectMember($pseudo, $password);
        if ($data[1]) {
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['pseudo'] = $pseudo;

            header("location:../public/index.php?route=admin");

        }
        else
            {
            header("location:../public/index.php?route=connect");

        }
    }

    public function connectAdm()
    {
        require '../templates/home.php';
    }
}