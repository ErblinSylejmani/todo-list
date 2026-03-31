<?php

include_once('Database.php');

class Task extends Database{
    public function getAllTasks(){
       $sql="select * from tasks";

       return $this->conn->query($sql);
       
    }

    public function getTaskById($id){
        $sql = "select * from tasks where id='$id'";

        return $this->conn->query($sql);
       
    }

    public function addTask(){
        $sql = "insert * into tasks";
    }
}