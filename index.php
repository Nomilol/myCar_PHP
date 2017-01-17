<?php
require 'lib/Car.php';
require 'lib/MyCar.php';
$car = new MyCar();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>My Car</h1>
<p>Constructeur : <?=  $car->getManufacturer() ?></p>
<p>Nombre de roue : <?=  $car->getWheels() ?></p>
<p>Kilométrage : <?= $car->getKilometrage() ?></p>
<p>Airbag : <?= $car->getAirbag() ?></p>
<p>Abs : <?= $car->getAbs() ?></p>
<p>Nombre de porte : <?= $car->getDoors() ?></p>

	
</body>
</html>