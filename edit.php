<?php

include('header.php');
include('classes/Task.php');

$task = new task();
$result = $task->getAllTasks();

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
            <form action="update.php" class="shadow-lg p-3 rounded-3" method="post">
                
                <h3>Edit</h3>
                <!-- Emri -->

                <div class="mb-3">
                    <input type="text" name="emri_detyres" class="form-control" placeholder="Sheno Emrin" value="<?php echo $task['emri_detyres'] ?>">
                </div>

                <!-- Mbiemri -->

                <div class="mb-3">
                    <input type="text" name="data_fillimit" class="form-control" placeholder="Sheno Mbiemrin" value="<?php echo $task['data_fillimit'] ?>">
                </div>

                <!-- Klasa -->

                <div class="mb-3">
                    <input type="text" name="data_perfundimit" class="form-control" placeholder="Sheno Klasen" value="<?php echo $task['data_perfundimit'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

