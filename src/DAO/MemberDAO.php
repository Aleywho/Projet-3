<?php

namespace App\src\DAO;

class MemberDAO extends DAO
{
    public function addMember($pseudo, $password, $email)
    {
        $sql = 'INSERT INTO member (pseudo, password, email, inscription_date) VALUES(?, ?,?, NOW())';
        $this->sql($sql, [$pseudo, $password, $email]);
    }


    public function connectMember($pseudo, $password, $email)
    {
        $sql = 'SELECT pseudo, id , password, email FROM member WHERE pseudo = ?';
        $resultat = $this->sql($sql, [$pseudo]);
        $resultat = $resultat->fetch();
        var_dump($sql);
        var_dump($resultat);
        var_dump($password);
        var_dump($email);
        $isPasswordCorrect = password_verify($password, $resultat['password']);
        var_dump($isPasswordCorrect);
        $data = [$resultat, $isPasswordCorrect];
        return $data;

    }

    public function afficherMember($pseudo, $password, $email)
    {
        $sql = 'SELECT pseudo, password, email FROM member WHERE pseudo = ?';
        $this->sql($sql, [$pseudo, $password, $email]);
    }


    public function editPass($password, $pseudo)
    {
        $sql = "UPDATE member SET password = ? WHERE pseudo= ? ";
        $this->sql($sql, [$password, $pseudo]);

    }
}

