<?php
include('header.php');
?>

<div class="container mt-5">
<h4>Shto Detyra</h4>


<form action="" class="shadow p-3 rounded w-50" method="post">
    <!-- Detyra -->
    <div class="mb-3">
        <label for="detyra" class="form-label">Detyra</label>
        <input type="text" name="detyra" id="detrya" class="form-control">
    </div>
    <!-- Data e Fillimit -->
    <div class="mb-3">
        <label for="data_fillimit" class="form-label">Data e Fillimit</label>
        <input type="date" name="data_fillimit" id="data_fillimit" class="form-control">
    </div> 
    <!-- Data e Mbarimit -->
    <div class="mb-3">
        <label for="data_mbarimit" class="form-label">Data e Mbarimit</label>
        <input type="date" name="data_mbarimit" id="data_mbarimit" class="form-control">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary">Send</button>
    </div>

</form>


</div>


<?php
include('footer.php');
?>
