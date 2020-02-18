<?php

$id = $_GET['id'];

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );

$car = getCar( $pdo, $id );

