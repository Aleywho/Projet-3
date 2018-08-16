<?php

namespace App\src\controller;


use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;



class BackController
{
    public function home(){
        var_dump($_SESSION['pseudo']);
        require'../templates/admin_home.php';
    }

    public function AdmArt(){
    require'../templates/admin_art.php';
    }
    public function postArticle($title, $content, $author)
    {
        session_start();
        $ArticleDAO = new ArticleDAO();
        $ArticleDAO->postArticle($title, $content, $author);

        header ("location:../public/index.php?route=addArticle" );
    }
    public function addArticle(){
        require '../templates/add_article.php';
    }

//editer les commentaires
    public function editComment ($newContent, $id)
    {
        session_start();
        $editDAO = new CommentDAO();
        $editDAO->editComment($newContent, $id);
        header("location:../public/index.php?route=editComment&id=$id");
    }
    public function postEdit (){
        require'../templates/edit_comment.php';
    }
    public function deleteArticle($id, $content, $author){
        session_start();
        $deleteArt = new ArticleDAO();
        $deleteArt->deleteArticle($id, $content, $author);
        header("location:../public/index.php?route=deleteArticle&id=$id");
    }
    public function postDelete(){
        require '../templates/delete_Article.php';
    }
    public function editArticle($content, $title, $id){
        session_start();
        $editArt = new ArticleDAO();
        $editArt->editArticle($content, $title, $id);
        header("location:../public/index.php?route=editArticle&id=$id");
    }
    public function postEditA(){
        require '../templates/edit_article.php';
    }

public function deconnect(){
    $_SESSION = array();
    session_destroy();
    setcookie('login', '');
    setcookie('password', '');
    header("location:../public/index.php");


}
    }
