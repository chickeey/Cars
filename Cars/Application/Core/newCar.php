<?php

$car = $_POST;

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );

newCar( $pdo, $car );

header('Location: index.php?page=cars');

die;