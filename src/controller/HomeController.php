<?php
namespace App\src\controller;
use App\src\DAO\ArticleDAO;
class HomeController
{
    public function index()
    {
        $article = new ArticleDAO();
        $articles = $article->getArticles();
        require '../templates/home.php';
    }
}