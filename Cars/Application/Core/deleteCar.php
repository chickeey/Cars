<?php

$id = $_GET['id'];

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );

deleteCar( $pdo, $id );

header('Location: index.php?page=cars');

die;