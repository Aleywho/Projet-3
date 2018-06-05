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

    function addComment($postId, $author, $comment)
    {
        $affectedLines = addComment($postId, $author, $comment);

        if ($affectedLines === false) {
            die('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }
}
