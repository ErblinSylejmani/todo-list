<?php 
include('header.php');
include('classes/Task.php');



?>

<div class="container mt-5">

<div class="row">

<div class="col-md-10">

<table class="table table-dark table-striped">
    <h1>Detyrat e Paperfunduara 
        <?php
    $task = new Task();
    $result = $task->detyraPa();

         foreach($result as $t){ 
              
         echo $t['totali'];



         };

         ?>


    
    </h1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Emri Detyres</th>
                    <th>Data Fillimit</th>
                    <th>Data Perfundimit</th>
                    <th>Statusi</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $task = new Task();
                $result = $task->detyratPaperfunduara();
                foreach($result as $t){ ?>
              
                    <tr>
                        <td><?php echo $t['id'] ?></td>
                        <td><?php echo $t['emri_detyres'] ?></td>
                        <td><?php echo $t['data_fillimit'] ?></td>
                        <td><?php echo $t['data_perfundimit'] ?></td>
                        <td><?php echo $t['change_status'] ?></td>
                        
                        
                        

                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
          </div>

        </div>
</div>