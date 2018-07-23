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

    public function getComments()
    {

        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle();
        require '../templates/single.php';

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
    public function connectMember($pseudo, $password){

        $connect = new MemberDAO();
        $connect ->connectMember($pseudo, $password);

        header("location:../public/index.php?route=connectMember");
    }
}