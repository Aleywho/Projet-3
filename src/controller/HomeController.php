<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;


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
    public function article($id){
        $article = new ArticleDAO();
        $articles = $article->getArticle($id);
        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle($_GET['id']);
        require '../templates/single.php';
    }
}
