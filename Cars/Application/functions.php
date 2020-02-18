<?php

function getConfig( $configPath )
{
    return json_decode( file_get_contents($configPath), true );
}

function getConection( $config )
{
    try 
    {    
        $pdo = new PDO(
            "mysql:host={$config['hostName']};dbname={$config['database']};charset=utf8",
            $config['userName'],
            $config['password']
        );

        return $pdo;
    } 
    catch ( PDOException $e) 
    {
        var_dump( $e->getMessage());
        die;
    }
}


function  getCars( PDO $pdo, $producer )
{
 
    try
    {
        if ( $producer )
        {
            $smt = $pdo->prepare( "SELECT * FROM `cars` WHERE `producer` = :producer" );
            $smt->bindParam(':producer', $producer);
        }
        else
        {
            $smt = $pdo->prepare( "SELECT * FROM `cars`" );
        }
        $smt->execute();        
        
        $result = $smt->fetchAll();

        if ( count( $result ) == 0 )
        {
            throw new RuntimeException('A tábla üres');
        }

        return $result;

    }
    catch ( RuntimeException $r )
    {        
        return false;
    }
   
}

function getProducers( $pdo )
{
    try
    {
       
        $smt = $pdo->prepare( "SELECT producer FROM `cars`" );
        
        $smt->execute();        
        
        $result = $smt->fetchAll();

        if ( count( $result ) == 0 )
        {
            throw new RuntimeException('A tábla üres');
        }
    
        return $result;

    }
    catch ( RuntimeException $r )
    {        
        return false;
    }
}

function getCar( $pdo, $id )
{
    try
    {
       
        $smt = $pdo->prepare( "SELECT * FROM `cars` WHERE id = :id" );
        $smt->bindParam( ':id', $id );

        $smt->execute();        
        
        $result = $smt->fetchAll();

        if ( count( $result ) == 0 )
        {
            throw new RuntimeException('A tábla üres');
        }
    
        return $result[0];

    }
    catch ( RuntimeException $r )
    {        
        return false;
    }
}


function updateCar( $pdo, $car )
{
    try
    {
     
        $smt = $pdo->prepare( "UPDATE `cars` SET `producer` = :producer, `type` = :type, `vintage` = :vintage, `fuel` = :fuel WHERE `id` = :id"  );
        
        $smt->bindParam( ':producer',   $car['producer'] );
        $smt->bindParam( ':type',       $car['type'] );
        $smt->bindParam( ':vintage',    $car['vintage'] );
        $smt->bindParam( ':fuel',       $car['fuel'] );
        $smt->bindParam( ':id',         $car['id'] );


                
        

        if ( !$smt->execute() )
        {
            throw new RuntimeException( $smt->errorInfo()[2] );
        }
    
        return true;

    }
    catch ( RuntimeException $r )
    {        
        var_dump( $r->getMessage() );
        return false;
    }
}

function deleteCar( $pdo, $id )
{
    try
    {
     
        $smt = $pdo->prepare( "DELETE FROM `cars` WHERE `id` = :id"  );
        

        $smt->bindParam( ':id', $id );                        

        if ( !$smt->execute() )
        {
            throw new RuntimeException( $smt->errorInfo()[2] );
        }
    
        return true;

    }
    catch ( RuntimeException $r )
    {        
        var_dump( $r->getMessage() );
        return false;
    }
}