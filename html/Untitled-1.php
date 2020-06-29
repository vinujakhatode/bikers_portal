<?php

$dbhost= "localhost";
$dbuser = "root";
$dbpass = "";
$db = "final_project";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db)
	or die("Error " . mysqli_error($conn));



$s="SELECT * FROM recommend ";
$result = $conn->query($s);
while($row=$result->fetch_assoc()) {


// $z = substr($my_array, 27,4);
    $a=$row['bike1'];
    $b=$row['bike2'];
    $c=$row['bike3'];
    $d=$row['bike4'];

    echo $a, $b, $c, $d;

    $ar="SELECT * FROM bikes_info WHERE model_id='$a' ";
    $arr = $conn->query($ar) or die($conn-> error);
    $arres=$arr->fetch_assoc()  ?>

        <div class="card-body">
            <h4 class="card-title text-danger">
                 Price : RS.<?= $arres['price_per_hr']; ?> /hr
            </h4>
            <p>
                        Brand : <?= $arres['brand_name']; ?><br>
                        Category : <?= $arres['category_id']; ?><br>
                        Mileage : <?= $arres['mileage']; ?><br>
                        Engine : <?= $arres['engine']; ?><br>
                        Power : <?= $arres['power']; ?><br>
                        Fuel Type : <?= $arres['type_of_fuel']; ?> <br>
                        Price per day : RS.<?= $arres['price_per_day']; ?> /day<br>
                        Availability : <?= $arres['count']; ?> bikes <br>
            </p>
        </div>



<?php
    $ar="SELECT * FROM bikes_info WHERE model_id='$b' ";
    $arr = $conn->query($ar) or die($conn-> error);
    $arres=$arr->fetch_assoc()  ?>

        <div class="card-body">
            <h4 class="card-title text-danger">
                 Price : RS.<?= $arres['price_per_hr']; ?> /hr
            </h4>
            <p>
                        Brand : <?= $arres['brand_name']; ?><br>
                        Category : <?= $arres['category_id']; ?><br>
                        Mileage : <?= $arres['mileage']; ?><br>
                        Engine : <?= $arres['engine']; ?><br>
                        Power : <?= $arres['power']; ?><br>
                        Fuel Type : <?= $arres['type_of_fuel']; ?> <br>
                        Price per day : RS.<?= $arres['price_per_day']; ?> /day<br>
                        Availability : <?= $arres['count']; ?> bikes <br>
            </p>
        </div>
    <?php
    $ar="SELECT * FROM bikes_info WHERE model_id='$c' ";
    $arr = $conn->query($ar) or die($conn-> error);
    $arres=$arr->fetch_assoc()  ?>

        <div class="card-body">
            <h4 class="card-title text-danger">
                 Price : RS.<?= $arres['price_per_hr']; ?> /hr
            </h4>
            <p>
                        Brand : <?= $arres['brand_name']; ?><br>
                        Category : <?= $arres['category_id']; ?><br>
                        Mileage : <?= $arres['mileage']; ?><br>
                        Engine : <?= $arres['engine']; ?><br>
                        Power : <?= $arres['power']; ?><br>
                        Fuel Type : <?= $arres['type_of_fuel']; ?> <br>
                        Price per day : RS.<?= $arres['price_per_day']; ?> /day<br>
                        Availability : <?= $arres['count']; ?> bikes <br>
            </p>
        </div>
    <?php
    $ar="SELECT * FROM bikes_info WHERE model_id='$d' ";
    $arr = $conn->query($ar) or die($conn-> error);
    $arres=$arr->fetch_assoc()  ?>

        <div class="card-body">
            <h4 class="card-title text-danger">
                 Price : RS.<?= $arres['price_per_hr']; ?> /hr
            </h4>
            <p>
                        Brand : <?= $arres['brand_name']; ?><br>
                        Category : <?= $arres['category_id']; ?><br>
                        Mileage : <?= $arres['mileage']; ?><br>
                        Engine : <?= $arres['engine']; ?><br>
                        Power : <?= $arres['power']; ?><br>
                        Fuel Type : <?= $arres['type_of_fuel']; ?> <br>
                        Price per day : RS.<?= $arres['price_per_day']; ?> /day<br>
                        Availability : <?= $arres['count']; ?> bikes <br>
            </p>
        </div>







<?php } ?>
