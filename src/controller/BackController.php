<?php

namespace App\src\controller;


use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;



class BackController
{
    private function checkAdmin()
    {
        if ($_SESSION['pseudo'])
        {
            return true;
        }
        else{
            header('location: ../public/index.php?route=connect');

        }
    }
    public function home()
    {
        $article = new ArticleDAO();
        $articles = $article->getArticles();
        $comment = new CommentDAO();
        $comments = $comment->getComments();
        if (isset($article)&& isset($comment))

        if ($this->checkAdmin()) {

            require '../templates/admin_home.php';
        }
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
        else {
            header('location:../public/index.php?route=connect');
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
        else {
            header('location:../public/index.php?route=connect');
        }
    }
    public function deleteArticle($id){

        $deleteArt = new ArticleDAO();
        $deleteArt->deleteArticle($id);
        header("location:../public/index.php?route=deleteArticle&id=$id");
    }
    public function postDelete()
        {
            if ($this->checkAdmin())
            {

                require '../templates/delete_Article.php';
            }
            else {
                header('location:../public/index.php?route=connect');
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
        else {
            header('location:../public/index.php?route=connect');
        }
    }
    public function signalement()
    {
        if (!empty($_POST['id'])) {
        $comment = new CommentDAO();
        $comments -> $comments -> getComments($_POST['id']);
        $comment ->signalement();
        $id= $_POST['id'];

            header("location:../public/index.php?route=signalement&id=$id");
        }
    }
    public function signalcoment()
    {
        if ($this->checkAdmin())
        {
            require '../templates/signalement.php';
        }
        else
        {
            header('location:../public/index.php?route=connect');
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
