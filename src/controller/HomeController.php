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
}