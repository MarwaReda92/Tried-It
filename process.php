<?php
include('header.php');
?>

<?php

$first_name = filter_input(INPUT_POST, "firstname");
$last_name = filter_input(INPUT_POST, "lastname");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$birthday = filter_input(INPUT_POST, 'birthday');
$profession = filter_input(INPUT_POST, "profession");
$username = filter_input(INPUT_POST, "username");

$flag = true;

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

if ($username === false) {
    echo "<p> Username must be 15 characters or less! </p>";
    $flag = false;
}


if ($flag === true) {
    try {
        require('connect.php');
        $sql = "INSERT INTO users (first_name, last_name, email, birthday, profession, username) VALUES (:firstname, :lastname, :email, :birthday, :profession, :username);";

        $statement = $db->prepare($sql);

        $statement->bindParam(':firstname', $first_name);
        $statement->bindParam(':lastname', $last_name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':birthday', $birthday);
        $statement->bindParam(':profession', $profession);
        $statement->bindParam(':username', $username);

        $statement->execute();
        $statement->closeCursor();

    } catch (PDOException $e) {
        echo "<p> Something went wrong! </p>";
    }
}

?>
<a href="view.php"> View All Reviews </a>


<?php
include('footer.php');
?>
