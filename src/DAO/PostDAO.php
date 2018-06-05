<?php

namespace App\src\DAO;


class PostDAO extends DAO
{
    public function getPosts()
    {
        $sql = 'SELECT id, title, content, author, date_added FROM article ORDER BY id DESC';
        $result = $this->sql($sql);
        return $result;
    }

    public function getPost($id)
    {
        $sql = 'SELECT id, title, content, author, date_added FROM article ORDER BY id DESC';
        $result = $this->sql($sql);
        return $result;
    }
}
