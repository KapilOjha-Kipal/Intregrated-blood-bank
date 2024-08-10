<?php
@include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensor_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dht11 ORDER BY id DESC";


session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bloodgrp.css">
    <link rel="shortcut icon" href="blood.png" type="image/x-icon">
    <title>BloodGroup</title>
</head>
<body>
  
    <div class="btn"><a href="map.php">View Blood Bank Location</a></div>
    <div class="container">
        <div class="box">
            <div class="blood">
                <img src="blood.png" alt="blood1">
                <h1>A+</h1>
                 <?php if ($result = $conn->query($sql)) {
    if ($row = $result->fetch_assoc()) {?>

                <p>Tem:<span class="val"> <?php echo $row["temperature1"]?>°C</span></p>
                <p>Hum:<span class="val"> <?php echo $row["humidity1"]?>%</span></p>
                <p>Blood packs:<span class="val"> <?php echo $row["weight1"]?></span><p>
            </div>
        </div>
        <div class="box">

            <div class="blood">
                <img src="blood.png" alt="blood2">
                <h1>A-</h1>
                <p>Tem:<span class="val"><?php echo $row['temperature2']?>°C</span></p>
                <p>Hum:<span class="val"> <?php echo $row["humidity2"]?>%</span></p>
                <p>Blood packs:<span class="val"><?php echo $row["weight2"]?> </span><p>
            </div>
        </div>
        <div class="box">
            
            <div class="blood">
                <img src="blood.png" alt="blood3">
                <h1>B+</h1>
                <p>Tem:<span class="val"> <?php echo $row['temperature2']?>°C</span></p>
                <p>Hum:<span class="val">  <?php echo $row["humidity1"]?>%</span></p>
                <p>Blood packs:<span class="val"> 4</span><p>
            </div>
        </div>
        <div class="box">

            <div class="blood">
                <img src="blood.png" alt="blood4">
                <h1>B-</h1>
                <p>Tem:<span class="val"><?php echo $row['temperature1']?>°C </span></p>
                <p>Hum:<span class="val">  <?php echo $row["humidity2"]?>%</span></p>
                <p>Blood packs:<span class="val"> 6</span><p>
            </div>
        </div>
        <div class="box">

            <div class="blood">
                <img src="blood.png" alt="blood5">
                <h1>AB+</h1>
                <p>Tem:<span class="val"><?php echo $row['temperature1']?>°C</span></p>
                <p>Hum:<span class="val"> <?php echo $row["humidity1"]?>%</span></p>
                <p>Blood packs:<span class="val"> 8</span><p>
            </div>
        </div>
        <div class="box">

            <div class="blood">
                <img src="blood.png" alt="blood6">
                <h1>AB-</h1>
                <p>Tem:<span class="val"> <?php echo $row['temperature2']?>°C</span></p>
                <p>Hum:<span class="val">  <?php echo $row["humidity2"]?>%</span></p>
                <p>Blood packs:<span class="val"> 2</span><p>
            </div>
        </div>
        <div class="box">

            <div class="blood">
                <img src="blood.png" alt="blood7">
                <h1>O+</h1>
                <p>Tem:<span class="val"> <?php echo $row['temperature2']?>°C</span></p>
                <p>Hum:<span class="val">  <?php echo $row["humidity2"]?>%</span></p>
                <p>Blood packs:<span class="val"> 5</span><p>
            </div>
        </div>
        <div class="box">

            <div class="blood">
                <img src="blood.png" alt="blood8">
                <h1>O-</h1>
                <p>Tem:<span class="val"> <?php echo $row['temperature1']?>°C</span></p>
                <p>Hum:<span class="val">  <?php echo $row["humidity1"]?>%</span></p>
                <p>Blood packs:<span class="val"> 10</span><p>
                    </div>
                    <?php }?>
                    <?php }?>

        </div>
        </div>
    
</body>
</html>