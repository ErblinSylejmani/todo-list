<?php

include('header.php');
include('classes/Task.php');

$id=$_GET['id'];
$task = new task();
$result = $task->getTaskById($id);

if($result){
    $task = $result->fetch_assoc();
}

else{
    echo "Error";
}

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="update_status.php" class="shadow-lg p-3 rounded-3" method="post">

            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                
                <h3>Edit</h3>
                <!-- Emri -->

                <div class="mb-3">
                    <input type="text" name="change_status" class="form-control" placeholder="Edito Statusin" value="<?php echo $task['change_status'] ?>">
                </div>
                

                

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

