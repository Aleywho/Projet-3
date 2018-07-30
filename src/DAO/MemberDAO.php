<?php
namespace App\src\DAO;

class MemberDAO extends DAO{
    public function addMember($pseudo, $passhash, $email){
        $sql ='INSERT INTO member (pseudo, password, email, inscription_date) VALUES(?, ?,?, NOW())';
        $this -> sql ($sql, [$pseudo, $passhash, $email]);
    }


    public function  connectMember($pseudo, $passhash){
        $sql = 'SELECT id, password FROM member WHERE pseudo = ?';
        $resultat = $this->sql($sql, [$pseudo, $passhash]);
        $isPasswordCorrect = password_verify($_POST['password'], $resultat['passhash']);
        $data = [$resultat, $isPasswordCorrect];
        return $data;

    }

}
