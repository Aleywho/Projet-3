<?php
namespace App\src\DAO;

class addMembersDAO extends DAO{
    public function addMembers($pseudo, $password, $email){
        $sql ='INSERT INTO membres (pseudo, password, email, inscription_date) VALUES(:pseudo, :password, :email, CURDATE())';
        $this -> sql ($sql, [$pseudo, $password, $email]);
    }
}
