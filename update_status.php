<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $error=[];
    if(isset($_POST['change_status']) && !empty($_POST['change_status'])){
      $change_status = htmlspecialchars(strip_tags(trim($_POST['change_status'])));
    }

    else{
        $error[]="Ju lutem plotesoni fushen e E Statusit";
    }

      if(count($error)){
        foreach($error as $e){
            echo $e."<br>";
        }
      }

      else{
        include('classes/Task.php');
        $id=$_POST['id'];
        
        $task = new Task();
        $result = $task->changeStatus($id,$change_status);

        header('Location:index.php');
      }
}