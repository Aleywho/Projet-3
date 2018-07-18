<?php
namespace App\src\DAO;

class addMembersDAO extends DAO{
    public function addMembers($pseudo, $password, $email){
        $sql ='INSERT INTO member (pseudo, password, email, inscription_date) VALUES(?, ?,?, NOW())';
        $this -> sql ($sql, [$pseudo, $password, $email]);
    }
}
