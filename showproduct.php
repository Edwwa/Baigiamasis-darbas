<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>Gabora</title>
</head>

<body>
<div class="logo-row">
    <div class="container">
        <div class="row">
            <div class="col-4"><img src="images/gaboralogo.png" alt="gabora"></div>
            <div class="col-8">
                <div class="row">
                    <div class="col-6">
                        <p>Baldinės medinės kojelės ir skardos gaminiai</p>
                    </div>
                    <div class="col-3">
                        <p>Pagalba:<i style="color:red">+370 555 555</i></p>
                    </div>
                    <div class="col-3"><a href="#"><i class="fal fa-shopping-basket"></i>Krepšelis</a></div>
                </div>
            </div>

        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">Pradžia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="galerija.php">Produktai <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="skaiciuokle.html">Skaiciuokle <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="apiemus.html">Apie mus <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="kontaktai.html">Kontaktai <span class="sr-only">(current)</span></a>
            </li>

        </ul>
    </div>
</nav>


<div class="galery">
    <h3>Produktai</h3>
    <div class="row">

        <div class="col-lg-2 col-sm-12">
            <?php

            require __DIR__ . '\vendor\autoload.php';

            try {
                $db = new \KCS\lib\DB\DB();

                $products = $db->showAllProducts();
                //  var_dump($products);

                foreach ($products as $product) {
                    echo
                    "<a href='showproduct.php?tb_name={$product->getPrTable()}'>{$product->getProduct()}</a><br>";
                }
            } catch (\Exception $e) {
                echo 'Err..';
            }


            ?>
        </div>


        <div class="col-lg-10 col-sm-12 element">

<?php
require __DIR__ . '\vendor\autoload.php';

try {
    $db = new \KCS\lib\DB\DB();
    $table_name = $_GET['tb_name'];

    echo $table_name . "<br>";


    if (empty($table_name)) {
        throw new \Exception('Nera produktu lenteliu');
    }

    $products = $db->showAllProductList($table_name);
    // var_dump($products);

    foreach ($products as $product) {

        echo "<img onclick='div_show()' src='images/{$product->getImage()}' alt='kojeles' width='25%'>".
        "<span> {$product->getName()}" . " {$product->getPrice()} Eur" . " {$product->getQuantity()} vnt." . "</span><br><br>"
        ;
    }

               } catch (\Exception $e) {
                echo 'Klaida...';
            }

            ?>
            <div class="box" style="padding-left: 25em; display: flex; border-color: #00b1f5"  >
            <div id="popupas-uzklausa" style="align-content: center" style="border: 10px" class="col-12">
                <form class="popup">
                    <input type="name" placeholder="Vardas"><br>
                    <input type="email" placeholder="El. pastas"><br>
                    <input type="text" placeholder="Norimas kiekis"><br>
                    <button type="submit" class="btn">Siusti</button>
                </form>
            </div></div>

        </div>
    </div>
</div>

</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="popupas.js"></script>
</body>

</html>

