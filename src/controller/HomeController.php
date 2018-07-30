<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\MemberDAO;


class HomeController
{
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
        $comments = $comment->getCommentsFromArticle($_GET['id']);
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

    public function admin()
    {
        require '../templates/admin_page.php';
    }

    public function connectMember($pseudo, $passhash)
    {
        $MemberDAO = new MemberDAO();
        $data = $MemberDAO->connectMember($pseudo, $passhash);


        if (!$data[0]) {
            header("location:../index.php?route=connect");
        } else {
            if ($data[1]) {
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['pseudo'] = $pseudo;
                header("location:../index.php?route=admin");
            } else {
                header("location:../index.php?route=connect");
            }

        }

    }

        public
        function connect()
        {

            require '../templates/connect.php';
        }

}
