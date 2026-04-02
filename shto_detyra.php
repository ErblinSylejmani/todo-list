<?php
include('header.php');
?>

<div class="container mt-5">



<form action="store.php" class="shadow p-3 rounded w-50" method="post">

<h4>Shto Detyra</h4>
    <!-- Detyra -->
    <div class="mb-3">
        <label for="emri_detyres" class="form-label">Detyra</label>
        <input type="text" name="emri_detyres" id="emri_detyres" class="form-control">
    </div>
    <!-- Data e Fillimit -->
    <div class="mb-3">
        <label for="data_fillimit" class="form-label">Data e Fillimit</label>
        <input type="date" name="data_fillimit" id="data_fillimit" class="form-control">
    </div> 
    <!-- Data e Mbarimit -->
    <div class="mb-3">
        <label for="data_mbarimit" class="form-label">Data e Mbarimit</label>
        <input type="date" name="data_perfundimit" id="data_perfundimit" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary">Shto</button>
    </div>

</form>


</div>


<?php
include('footer.php');
?>
