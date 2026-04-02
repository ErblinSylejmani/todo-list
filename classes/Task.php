<?php

include_once('config/Database.php');

class Task extends Database{
    public function getAllTasks(){
       $sql="select * from detyrat";

       return $this->conn->query($sql);
       
    }

    public function getTaskById($id){
        $sql = "select * from detyrat where id='$id' ";

        return $this->conn->query($sql);
       
    }

    public function addTask($emri_detyres,$data_fillimit,$data_perfundimit){
        $sql = "insert into detyrat(emri_detyres,data_fillimit,data_perfundimit) values('$emri_detyres','$data_fillimit','$data_perfundimit')";

        return $this->conn->query($sql);

        if($result){
            header('Location:index.php');
        }
    }

    public function updateTask($id,$emri_detyres,$data_fillimit,$data_perfundimit){
        $sql = "update detyrat set emri_detyres='$emri_detyres',data_fillimit='$data_fillimit',data_perfundimit='$data_perfundimit' where id='$id' ";

        return $this->conn->query($sql);
    }

    public function deleteTask($id){
        $sql = "delete from detyrat where id='$id'";

        return $this->conn->query($sql);

        if($result){
            header('Location:index.php');
        }
    }

    public function changeStatus($id,$change_status){
       $sql = "update detyrat set change_status='$change_status' where id='$id' ";

       return $this->conn->query($sql);

    }

    public function totaliDetyra(){ 
        $sql = "SELECT COUNT(*) as totali FROM detyrat";

        return $this->conn->query($sql);
    }

    public function detyraP(){ 
        $sql = "SELECT COUNT(*) as totalip FROM detyrat where change_status='e perfunduar' ";

        return $this->conn->query($sql);
    }

    public function detyraPa(){ 
        $sql = "SELECT COUNT(*) as totali FROM detyrat where change_status='e paperfunduar' ";

        return $this->conn->query($sql);
    }

    public function detyratPerfunduara(){
        $sql = "select * from detyrat where change_status = 'e perfunduar' ";

        return $this->conn->query($sql);
    }

    public function detyratPaperfunduara(){
        $sql = "select * from detyrat where change_status = 'e paperfunduar' ";

        return $this->conn->query($sql);
    }
}