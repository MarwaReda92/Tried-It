<?php
ob_start();
try {
    $tried_id = filter_input(INPUT_GET, 'id');
    //connect to db
    require('connect.php');
    //set up query
    $sql = "DELETE FROM users WHERE user_id = :user_id;";
    //prepare
    $statement = $db->prepare($sql);
    //bind
    $statement->bindParam(':user_id', $tried_id);
    //execute
    $statement->execute();
    //close the DB connection
    $statement->closeCursor();
    header('location:view.php');
} catch (PDOException $e) {
    header('location:view.php');
}
ob_flush();