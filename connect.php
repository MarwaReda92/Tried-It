<?php
try {
    //data source name (includes the type of data, hostname, and database name)
    $dsn = 'mysql:host=172.31.22.43;dbname=Marwa200394610';
    $username = 'Marwa200394610';
    $password = 'HB48IGQgTy';

    $db = new PDO($dsn, $username, $password);

    echo "<p> Success </p>";

} catch (PDOException $e) {
    echo "<p> Something went wrong </p>";
    $error_message = $e->getMessage();
    echo $error_message;
}
