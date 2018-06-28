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
	public function addComment($id, $pseudo , $content)
    {
        $sql = 'INSERT INTO comment (pseudo, content, date_added, article_id) VALUES (?, ?, NOW(), ?) ';
        $this->sql($sql, [$pseudo, $content, $id]);
    }
        public function editComment($newComment, $commentID)
        {
            $db = $this->dbConnect();
            $editcomment = $db->prepare('UPDATE comments SET comment = ? WHERE id=?');
            $affectedComment = $editcomment->execute(array($newComment, $commentID));

            return $affectedComment;
        }

}