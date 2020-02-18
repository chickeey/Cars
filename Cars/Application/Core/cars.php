<?php

$producer = @$_POST['producer'] ? $_POST['producer'] : null;

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );

$producers = getProducers( $pdo );

$cars = getCars( $pdo, $producer );
