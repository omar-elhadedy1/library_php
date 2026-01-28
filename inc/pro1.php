  <div class="container">
        <h1 class="text-center text-danger">all products</h1>
        <div class="row">
            <?php foreach (array_slice($array,0,3) as $key=> $item) { ?>
                <div class="col-3">
                    <div class="card mp-3">
                        <img src="<?php echo $item["img"] ?>" alt="">
                        <h4 class="text-center "><?php echo $item["name"] ?></h4>
                        <a href="details.php ?omer=<?php echo $key?>" class="btn btn-primary w-100">more details</a>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>