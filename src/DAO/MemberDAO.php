<?php
namespace App\src\DAO;

class MemberDAO extends DAO
{
    public function addMember($pseudo, $passhash, $email)
    {
        $sql = 'INSERT INTO member (pseudo, password, email, inscription_date) VALUES(?, ?,?, NOW())';
        $this->sql($sql, [$pseudo, $passhash, $email]);
    }


    public function connectMember($pseudo, $password)
    {
        $sql = 'SELECT id, password FROM member WHERE pseudo = ?';
        $resultat = $this->sql($sql, [$pseudo, $password]);
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);
        $data = [$resultat, $isPasswordCorrect];
        return $data;

    }
}

