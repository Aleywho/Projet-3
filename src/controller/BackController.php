<?php

namespace App\src\controller;


use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;



class BackController
{
    private function checkAdmin()
    {
        session_start();
        if ($_SESSION['pseudo'])
        {
            return true;
        }
        else{
            header('location: ../public/index.php?route=admin');

        }
    }
    public function home()
    {
        if ($this->checkAdmin())
        {

            require '../templates/admin_home.php';
        }
    }

    public function AdmArt()
    {
    require'../templates/admin_art.php';
    }
    public function postArticle($title, $content, $author)
    {

        $ArticleDAO = new ArticleDAO();
        $ArticleDAO->postArticle($title, $content, $author);

        header ("location:../public/index.php?route=addArticle" );
    }
    public function addArticle()
    {
        if ($this->checkAdmin())
        {
            require '../templates/add_article.php';
        }
    }

//editer les commentaires
    public function editComment ($newContent, $id)
    {

        $editDAO = new CommentDAO();
        $editDAO->editComment($newContent, $id);
        header("location:../public/index.php?route=editComment&id=$id");
    }
    public function postEdit ()
    {
        if ($this->checkAdmin())
        {

            require '../templates/edit_comment.php';
        }
    }
    public function deleteArticle($id, $content, $author){

        $deleteArt = new ArticleDAO();
        $deleteArt->deleteArticle($id, $content, $author);
        header("location:../public/index.php?route=deleteArticle&id=$id");
    }
    public function postDelete()
        {
            if ($this->checkAdmin())
            {

                require '../templates/delete_Article.php';
            }
        }
    public function editArticle($content, $title, $id){

        $editArt = new ArticleDAO();
        $editArt->editArticle($content, $title, $id);
        header("location:../public/index.php?route=editArticle&id=$id");
    }
    public function postEditA()
    {
        if ($this->checkAdmin())
        {

            require '../templates/edit_article.php';
        }
    }
public function deconnect(){
    $_SESSION = array();
    session_destroy();
    setcookie('login', '');
    setcookie('password', '');
    header("location:../public/index.php");


}
    }
