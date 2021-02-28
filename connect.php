<?php
try {
    $dsn = 'mysql:host=localhost;dbname=tried_it';
    $username = 'root';
    $password = '';
    $db = new PDO($dsn, $username, $password);
    echo "<p> Success </p>";
} catch (PDOException $e) {
    echo "<p> Something went wrong </p>";
}
