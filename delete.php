<?php

include('classes/Task.php');

$id= $_GET['id'];
$task = new Task();
$task->deleteTask($id); 
header('Location:index.php');
