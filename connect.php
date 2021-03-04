<?php
try {
    //data source name (includes the type of data, hostname, and database name)
    $dsn = 'mysql:host=127.0.0.1;dbname=tried_it';
    $username = 'root';
    $password = '';
    $db = new PDO($dsn, $username, $password);
    echo "<p> Success </p>";
} catch (PDOException $e) {
    echo "<p> Something went wrong </p>";
    $error_message = $e->getMessage();
    echo $error_message;
}
