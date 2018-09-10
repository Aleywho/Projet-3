<?php 
namespace App\src\DAO;
class CommentDAO extends DAO
{
    public function getCommentsFromArticle($id)
    {
        $sql = 'SELECT id, pseudo, content, date_added FROM comment WHERE article_id = ?';
        $result = $this->sql($sql, [$id]);
        return $result;
    }

    public function addComment($pseudo, $content, $id)
    {
        $sql = 'INSERT INTO comment (pseudo, content, date_added, article_id) VALUES (?, ?, NOW(), ?) ';
        $this->sql($sql, [$pseudo, $content, $id]);
    }

    public function editComment($newContent, $id)
    {

        $sql = 'UPDATE comment SET content = ? WHERE id=?';
        $this->sql($sql, [$newContent, $id]);

    }

    public function getCommentsFromArticleAdm($id)
    {
        $sql = 'SELECT id, pseudo, content, date_added FROM comment WHERE article_id = ?';
        $result = $this->sql($sql, [$id]);
        return $result;
    }
    public function signalement($id){
        $sql = "UPDATE comment SET signalement = ? WHERE id=?";
        $this->sql($sql, [$id]);

}

}
