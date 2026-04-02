<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $error=[];
    if(isset($_POST['emri_detyres']) && !empty($_POST['emri_detyres'])){
      $emri_detyres = htmlspecialchars(strip_tags(trim($_POST['emri_detyres'])));
    }

    else{
        $error[]="Ju lutem plotesoni fushen e Emrit te Detyres";
    }

    if(isset($_POST['data_fillimit']) && !empty($_POST['data_fillimit'])){
        $data_fillimit = htmlspecialchars(strip_tags(trim($_POST['data_fillimit'])));
      }
  
      else{
          $error[]="Ju lutem plotesoni fushen e Emrit te Detyres";
      }

      if(isset($_POST['data_perfundimit']) && !empty($_POST['data_perfundimit'])){
        $data_perfundimit = htmlspecialchars(strip_tags(trim($_POST['data_perfundimit'])));
      }
  
      else{
          $error[]="Ju lutem plotesoni fushen e Emrit te Detyres";
      }

      if(count($error)){
        foreach($error as $e){
            echo $e."<br>";
        }
      }

      else{
        include('classes/Task.php');
        
        $task = new Task();
        $result = $task->updateTask($emri_detyres,$data_fillimit,$data_perfundimit);
      }
}