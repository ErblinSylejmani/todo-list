<?php

include_once('config/Database.php');

class User extends Database{
    public function signUp($emri,$mbiemri,$password){
        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "insert into roles(emri,mbiemri,password) values('$emri','$mbiemri','$password')";

        return $this->conn->query($sql);
    }
}