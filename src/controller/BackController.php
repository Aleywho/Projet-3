<?php

namespace App\src\controller;

use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;


class BackController
{


    public function addArticle(){
        require '../templates/add_article.php';
    }
    public function postArticle($title, $content, $author)
    {
        $ArticleDAO = new ArticleDAO();
        $ArticleDAO->postArticle($title, $content, $author);
        header ("location:../public/index.php?route=addArticle" );
    }

    public function postEdit (){
        require'../templates/edit_comment.php';
    }

    public function editComment ($newContent, $id)
    {
        $editDAO = new CommentDAO();
        $editDAO->editComment($newContent, $id);
        header("location:../public/index.php?route=editComment&id=$id");
    }

    public function deleteArticle($title, $content, $author){
        $deleteArt = new ArticleDAO();
        $deleteArt->deleteArticle($title, $content, $author);
        header("location:../public/index.php?route=deleteArticle&id");
    }
    public function editArticle($content, $title, $id){
        $editArt = new ArticleDAO();
        $editArt->editArticle($content, $title, $id);
        header("location:../public/index.php?route=editArticle&id=$id");
    }
    public function postEditA(){
        require '../templates/edit_article.php';
    }

    public function register(){
        require "../templates/register.php";
    }
}
