<?php
namespace App\src\DAO;

class MemberDAO extends DAO{
    public function addMember($pseudo, $password, $email){
        $sql ='INSERT INTO member (pseudo, password, email, inscription_date) VALUES(?, ?,?, NOW())';
        $this -> sql ($sql, [$pseudo, $password, $email]);
    }
    public function  connectMember($pseudo, $password, $email){
        $sql = 'SELECT id, password FROM member WHERE pseudo = :pseudo';
        $this->sql($sql, [$pseudo, $password, $email]);
    }

}
