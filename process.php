<?php require('header.php'); ?>

<?php

//variables to store the form data
$first_name = filter_input(INPUT_POST, "firstname");
$last_name = filter_input(INPUT_POST, "lastname");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$birthday = filter_input(INPUT_POST, 'birthday');
$profession = filter_input(INPUT_POST, "profession");
$nickname = filter_input(INPUT_POST, "nickname");

//a flag variable
$flag = true;

//some validation
if ($first_name === false) {
    echo "<p> Names must be letters only and 20 characters or less! </p>";
    $flag = false;
}

if ($last_name === false) {
    echo "<p> Names must be letters only and 20 characters or less! </p>";
    $flag = false;
}

if ($email === false) {
    echo "<p> Please use a properly formatted email! </p>";
    $flag = false;
}

if ($profession === false){
    echo "<p> Please enter a valid profession, it must be under 100 characters. </p>";
    $flag = false;
}

if ($nickname === false) {
    echo "<p> Nickname must be 15 characters or less! </p>";
    $flag = false;
}


if ($flag === true) {
    try {
        //this will connect to the database
        require('connect.php');

        //sql query
        $sql = "INSERT INTO users (first_name, last_name, email, birthday, profession, nickname) VALUES (:firstname, :lastname, :email, :birthday, :profession, :nickname);";

        //calls the prepare method of the PDO object
        $statement = $db->prepare($sql);

        //binds the parameters
        $statement->bindParam(':firstname', $first_name);
        $statement->bindParam(':lastname', $last_name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':birthday', $birthday);
        $statement->bindParam(':profession', $profession);
        $statement->bindParam(':nickname', $nickname);

        //executes the query
        $statement->execute();

        //closes the database connection
        $statement->closeCursor();

    } catch (PDOException $e) {
        echo "<p> Something went wrong! </p>";
    }
}

?>
<a href="view.php"> View All Reviews </a>


<?php
require('footer.php');
?>
