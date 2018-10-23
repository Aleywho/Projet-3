<?php
namespace App\src\DAO;

class ArticleDAO extends DAO
{
    public function getArticles()
    {
        $sql = 'SELECT id, title, content, author, date_added FROM article ORDER BY id DESC';
        $result = $this->sql($sql);
        return $result;
    }

    public function getArticle($idArt)
    {
        $sql = 'SELECT id, title, content, author, date_added FROM article WHERE id = ?';
        $result = $this->sql($sql, [$idArt]);
        return $result;
    }
            public function postArticle($title, $content, $author){
             $sql = 'INSERT INTO article (title, content, author, date_added ) VALUES (?, ?,?, NOW()) ';
        $this->sql($sql, [$title, $content, $author]);

    }
    public function editArticle($content, $title, $id){
        $sql = 'UPDATE article SET content = ? , title = ? WHERE id=?';
        $this ->sql($sql, [$content, $title, $id]);
    }
    public function deleteArticleCom ($id){
        $sql = 'DELETE FROM article.id, comment.article_id WHERE article.id.article_id = comment.id  ';
        $this ->sql($sql, [$id]);

    }
}
