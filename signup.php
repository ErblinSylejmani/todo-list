<?php

include('header.php');
include('classes/User.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $error = [];

    //Emri
    if(isset($_POST['emri']) && !empty($_POST['emri'])){
        $emri = htmlspecialchars(strip_tags(trim($_POST['emri'])));
    }

    else{
        $error[]="Ju lutem plotesoni fushen e Emrit";
    }

    //Mbiemri
    if(isset($_POST['mbiemri']) && !empty($_POST['mbiemri'])){
        $mbiemri = htmlspecialchars(strip_tags(trim($_POST['mbiemri'])));
    }

    else{
        $error[]="Ju lutem plotesoni fushen e Mbiemrit";
    }

    //Password
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = htmlspecialchars(strip_tags(trim($_POST['password'])));
    }

    else{
        $error[]="Ju lutem plotesoni fushen e Passwordit";
    }

    
    if(count($error)){
        foreach($error as $e){
            echo $e."<br>";
        }
      }

      else{
        include('classes/User.php');
        $signup = new User();
        $result = $signup->signup($emri,$mbiemri,$password);

        header('Location:index.php');
      }
}