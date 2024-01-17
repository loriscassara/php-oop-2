<?php
require __DIR__ . '/data.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals E-Commerce</title>

    <!-- 
        Import Bootstrap v5.3 link
    -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center fw-bold text-uppercase pt-3 pb-4">Pet Store</h1>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="<?= $product->image ?>" alt="...">
                            <div class="card-title">
                                <h4><?= $product->name ?></h4>
                            </div>
                            <div class="card-subtitle">
                                <p><?= $product->type ?></p>
                                <p><?= (isset($product->weight)) ? "Peso: (" . $product->weight . ")" : "/" ?></p>
                                <p><?= (isset($product->size)) ? "Misura: (" . $product->size . ")" : "/" ?></p>
                                <p><?= (isset($product->suggestion)) ? "Consiglio: (" . $product->suggestion . ")" : "/" ?></p>
                                <p><?= (isset($product->brand)) ? "Marchio: (" . $product->brand . ")" : "/" ?></p>
                                <p class="text-right fw-bold"><?= $product->price ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- 
        Import Bootstrap v5.3 script
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>