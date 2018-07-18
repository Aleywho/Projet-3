<?php
namespace App\src\DAO;
use PDO;
class DAO
{
    private $connection;

    private function checkConnection()
    {

        if ($this->connection == null) {
            return $this->getConnection();
        }

        return $this->connection;
    }
    function editArticle($content, $title, $id){
        $db = dbConnect();
        $editComment = $db->prepare('UPDATE article SET content = ? title = ? WHERE id=?');
        $affectedLines = $editComment->execute(array($content, $title, $id) );
        return $affectedLines;
    }
    function deleteArticle($id){
        $db = dbConnect();
        $deleteArticle = $db-> prepare('DELETE FROM article WHERE title =?, content = ? , author = ? ');
        $affectedLines = $deleteArticle->execute(array ($id));
        return $affectedLines;
    }
    function postComment($postId, $author, $comment)
    {
        $db = dbConnect();
        $comments = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;

}
    function editComment($newContent, $id ){
        $db = dbConnect();
        $editComment = $db->prepare('UPDATE comment SET comment = ? WHERE id=?');
        $affectedLines = $editComment->execute(array($newContent, $id) );
        return $affectedLines;
    }
    function addComment($id, $pseudo , $content)
    {
        $db = dbConnect();
        $comments = $db->prepare('INSERT INTO comment(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($id, $content, $pseudo));

        return $affectedLines;
    }
    function AddArticle($id,$author, $content)
    {
        $db = dbConnect();
        $article = $db->prepare('INSERT INTO article (id, author, content, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $article->execute(array($id,$author, $content));

        return $affectedLines;
    }
    function addMembers($pseudo, $password, $email){
        $db = dbConnect();
        $member = $db ->prepare('INSERT INTO membres (pseudo, password, email, inscription_date) VALUES(:pseudo, :pass, :email, CURDATE())');
        $affectedLines = $member->execute(array($pseudo, $password, $email));
        return $affectedLines;
    }
private
function getConnection()
{

    try {
        $this->connection = new PDO(DB_HOST, DB_USER, DB_PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connection;
    } catch (\Exception $errorConnection) {
        die ('Erreur de connection :' . $errorConnection->getMessage());
    }
}

protected
function sql($sql, $parameters = null)
{
    if ($parameters) {
        $result = $this->checkConnection()->prepare($sql);
        $result->execute($parameters);
        return $result;
    } else {
        $result = $this->checkConnection()->query($sql);
        return $result;
    }
}

}
