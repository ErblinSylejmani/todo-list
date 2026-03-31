<?php 
include('header.php');
include('classes/Task.php');

$task = new Task();
$result = $task->getAllTasks();
?>
    <div class="container mt-5">

    <div class="row">

    <div class="col-md-10">

    <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Emri Detyres</th>
                        <th>Data Fillimit</th>
                        <th>Data Perfundimit</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($result as $t){ ?>
                        <tr>
                            <td><?php echo $t['id'] ?></td>
                            <td><?php echo $t['emri_detyres'] ?></td>
                            <td><?php echo $t['data_fillimit'] ?></td>
                            <td><?php echo $t['data_perfundimit'] ?></td>
                            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $t['id']; ?>">Delete</a> <a class="btn btn-warning" href="edit.php?id=<?php echo $t['id']; ?>">Edit</a></td>
                            

                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
              </div>
            </div>
    </div>

<?php 
include('footer.php')
?>