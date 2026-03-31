<?php

include_once('Database.php');

class Task extends Database{
    public function getAllTasks(){
       $sql="select * from detyrat";

       return $this->conn->query($sql);
       
    }

    public function getTaskById($id){
        $sql = "select * from detyrat where id='$id'";

        return $this->conn->query($sql);
       
    }

    public function addTask($emri_detyres,$data_fillimit,$data_perfundimit,$change_status){
        $sql = "insert * into detyrat(emri_detyres,data_fillimit,data_perfundimit,change_status) value('$emri_detyres','$data_fillimit','$data_perfundimit','$change_status')";

        return $this->conn->query($sql);
    }

    public function updateTask($emri_detyres,$data_fillimit,$data_perfundimit,$change_status){
        $sql = "update detyrat set emri_detyres='$emri_detyres',data_fillimit='$data_fillimit',data_perfundimit='$data_perfundimit'";

        return $this->conn->query($sql);
    }

    public function deleteTask($id){
        $sql = "delete from detyrat where id='$id'";

        return $this->conn->query($sql);
    }

    public function changeStatus($change_status){
       $sql = "update from detyrat where change_status='$change_status'";

       return $this->conn->query($sql);

    }
}