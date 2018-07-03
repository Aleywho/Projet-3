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
    public function addArticle(){
        require '../templates/add_article.php';
    }
    public function postArticle($title, $content, $author)
    {
        $ArticleDAO = new ArticleDAO();
        $ArticleDAO->postArticle($title, $content, $author);
      header ("location:../public/index.php?route=addArticle" );
    }
    public function editComment ($newContent, $id){
        $editDAO = new CommentDAO();
        $editDAO ->editComment($newContent, $id);
        header ("location:../public/index.php?route=editComment&id=$id");

}
    public function postEdit (){
        require'../templates/edit_comment.php';
    }
    public function getComments()
    {

        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle();
        require '../templates/single.php';

    }
    public function register(){
        require "../templates/register.php";
}
}
