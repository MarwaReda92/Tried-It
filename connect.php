<?php

function dbo(): PDO
{
    $dsn = 'mysql:host=172.31.22.43;dbname=Marwa200394610';
    $username = 'Marwa200394610';
    $password = 'HB48IGQgTy';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "<p> Something went wrong </p>";
        $error_message = $e->getMessage();
        echo $error_message;
    }
}

