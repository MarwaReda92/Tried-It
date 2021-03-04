<?php
try {
    //data source name (includes the type of data, hostname, and database name)
    $dsn = 'mysql:host=localhost;dbname=tried_it';
    $username = 'root';
    $password = '';
    $db = new PDO($dsn, $username, $password);
    echo "<p> Success </p>";
} catch (PDOException $e) {
    echo "<p> Something went wrong </p>";
}
