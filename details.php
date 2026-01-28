<?php
include "inc/header.php";
include "inc/nav.php"; 
$id=$_GET["omer"];
$omar=$array[$id];
?>

<div class="container">
    <h1>details</h1>
    <div class="row">
        <div class="col-6">

            <div class="card">
                <img src="<?php echo $omar["img"]?>" alt="">
                <div class="mb-3">
                    <h1><?php echo $omar["name"]?></h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>


</div>

<?php

include "inc/footer.php";

?>