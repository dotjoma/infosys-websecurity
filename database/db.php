<?php
    $host = "localhost";
    $database = "bank";
    $user = "root";
    $password = "";
    $dsn = "mysql:host={$host};dbname={$database};";

    try
    {
        $con = new PDO($dsn, $user, $password);
        // if($con) echo "Connected to database successfully.";
    }
    catch (PDOException $th)
    {
        echo $th->getMessage();
    }
?>