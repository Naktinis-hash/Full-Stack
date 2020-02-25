<?php

$speed_of_sound = 333;
$max_db = 120;
$db_decr = 6;
$db = 120;
$p = '';

for ($dist = 1; $db > 0; $dist *= 2) {
    $db -= $db_decr;
    $sec = round($dist / $speed_of_sound);
    $p .= "Po $sec s ($dist)m: $db db <br><br>";
}

$h1 = 'Griaustinio zona';

?>

<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php print $h1; ?></title>
</head>
<body>
    <h1><?php print $h1; ?></h1>
    <p><?php print $p; ?></p>
</body>
</html>