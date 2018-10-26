<?php

namespace App\src\controller;


use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\DAO\MemberDAO;


class BackController
{
    private function checkAdmin()
    {
        if ($_SESSION['pseudo'] && ($_SESSION['password']) && ($_SESSION['email'])) {
            return true;
        } else {
            header('location: ../public/index.php?route=connect');

        }
    }

    public function home()
    {
        $article = new ArticleDAO();
        $articles = $article->getArticles();
        $comment = new CommentDAO();
        $comments = $comment->getComments();


            if ($this->checkAdmin()) {

                require '../templates/admin_home.php';
            }
    }

    public function postArticle($title, $content, $author)
    {

        $ArticleDAO = new ArticleDAO();
        $ArticleDAO->postArticle($title, $content, $author);

        header("location:../public/index.php?route=addArticle");
    }

    public function addArticle()
    {
        if ($this->checkAdmin()) {
            require '../templates/add_article.php';
        } else {
            header('location:../public/index.php?route=connect');
        }
    }
    public function deleteArticle($id)
    {
        if (isset ($_POST['submit'])) {
            $delete = new ArticleDAO();
            $delete->deleteArticle($id);

            header("location:../public/index.php?route=deleteArticle&id=$id");
        }

    }
    public function SupprCom($id)
    {
        $editDAO = new CommentDAO();
        $editDAO->SupprCom($id);
        header("location:../public/index.php?route=SupprCom&id=$id");
    }


    public function postSuppr()
    {
        if ($this->checkAdmin()) {

            require '../templates/Suppr_com.php';
        } else {
            header('location:../public/index.php?route=connect');
        }
    }



    public function postDelete()
    {
        if ($this->checkAdmin()) {

            require '../templates/delete_Article.php';
        } else {
            header('location:../public/index.php?route=connect');
        }
    }

    public function editArticle($content, $title, $id)
    {

        $editArt = new ArticleDAO();
        $editArt->editArticle($content, $title, $id);
        header("location:../public/index.php?route=editArticle&id=$id");
    }

    public function postEditA()
    {
        if ($this->checkAdmin()) {

            require '../templates/edit_article.php';
        } else {
            header('location:../public/index.php?route=connect');
        }
    }

    public function deSignal($id)
    {
        if (isset ($_POST['submit'])) {
            $comment = new CommentDAO();
            $comments = $comment->deSignal($id);

            header("location:../public/index.php?route=deSignal&id=$id");

        }
    }

    public function designalCom()
    {
        if ($this->checkAdmin()) {

            require '../templates/deSignal.php ';
        } else {
            header('location:../public/index.php?route=connect');
        }
    }

    public function editPass($password, $pseudo)
    {
        if(isset($_POST['submit'])){
            $MemberDAO = new MemberDAO();
            $MemberDAO ->editPass($password, $pseudo);
            header("location: ../public/index.php?route=editPass");
        }
    }
public function postModif()
{
        if($this ->checkAdmin()){

            require '../templates/modif_Pass.php';
        }else{
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
