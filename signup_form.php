<?php
include('header.php');
?>

<div class="container mt-5">



<form action="signup.php" class="shadow p-3 rounded w-50" method="post">

<h4>SignUp</h4>
    <!-- Emri -->
    <div class="mb-3">
        <label for="emri" class="form-label">Emri</label>
        <input type="text" name="emri" id="emri" class="form-control">
    </div>

    <!-- Mbiemri -->
    <div class="mb-3">
        <label for="mbiemri" class="form-label">Mbiemri</label>
        <input type="text" name="mbiemri" id="mbiemri" class="form-control">
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div> 
    

    <div class="mb-3">
        <button class="btn btn-primary">SignUp</button>
    </div>

</form>


</div>


<?php
include('footer.php');
?>
