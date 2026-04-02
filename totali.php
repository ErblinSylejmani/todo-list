<?php

include('header.php');
include_once('classes/Task.php');


?>

<div class="container">
<div class="row mt-3  d-flex justify-content-center">

            
        <div class="col-md-4">
              <div class="card" style="width: 20rem;">
  
                  <div class="card-body">
                    <h3>Numri Total i Detyrave</h3>
                  <h1 class="card-title text-center">
                   <?php
                   $task = new Task();
                   $result = $task->totaliDetyra();

                   foreach($result as $s) {?>

                    <?php echo $s['totali'] ?>

                    <?php } ?>
                  </h1>

<div class="mb-3">
    <a class="btn btn-primary" href="perfunduara.php">Te Perfunduara</a>
    <a class="btn btn-warning" href="paperfunduara.php">Te Paperfunduara</a>

</div>

                
                  </div>
              </div>

              
                </div>


    </div>

</div>