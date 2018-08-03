<?php
namespace App\src\DAO;

class MemberDAO extends DAO
{
    public function addMember($pseudo, $password, $email)
    {
        $sql = 'INSERT INTO member (pseudo, password, email, inscription_date) VALUES(?, ?,?, NOW())';
        $this->sql($sql, [$pseudo, $password, $email]);
    }


    public function connectMember($pseudo, $password)
    {
        $sql = 'SELECT pseudo, id , password FROM member WHERE pseudo = ?';
        $resultat = $this->sql($sql,[$pseudo]);
        $resultat= $resultat->fetch();
        var_dump($sql);
        var_dump($resultat);
        $isPasswordCorrect = password_verify($password, $resultat['password']);
        var_dump($isPasswordCorrect);
        $data = [$resultat, $isPasswordCorrect];
        return $data;

    }
}

