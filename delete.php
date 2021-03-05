<?php
ob_start();
try {
    $tried_id = filter_input(INPUT_GET, 'id');

    require('connect.php');

    $sql = "DELETE FROM users WHERE user_id = :user_id;";

    $statement = $db->prepare($sql);

    $statement->bindParam(':user_id', $tried_id);

    $statement->execute();

    $statement->closeCursor();

    header('location:view.php');
} catch (PDOException $e) {
    echo "<p> Something went wrong. </p>";
}

ob_flush();