<?php
$distance = rand(500, 1000);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = round($distance / $consumption, 2);
$price_trip = round($fuel_total/$price_1, 2);
$h1 = "Keliones skaiciuokle";
$li_1 = "Nuvaziuota distancija $distance";
$li_2 = "Sunaudota $fuel_total l kuro";
$li_3 = "Kaina $price_trip pinigu";
?>

<html>
<head>
    <title>Greitis & jega</title>
    <style>
        .dacia {
            height: 500px;
            width: 500px;
            background-image: url("https://www.lautra.lt/images/default/source/gallery/sandero-gall-3216.jpg");
            background-size: cover;
            background-position: 60%;
        }
    </style>
</head>
<body>
<h1><?php print $h1; ?></h1>
<ul>
    <li><?php print $li_1; ?></li>
    <li><?php print $li_2; ?></li>
    <li><?php print $li_3; ?></li>
</ul>
<div class="dacia"></div>
</body>
