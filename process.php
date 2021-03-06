<?php require('header.php'); ?>

<?php
ob_start();
//variables to store the form data
$first_name = filter_input(INPUT_POST, "firstname");
$last_name = filter_input(INPUT_POST, "lastname");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$birthday = filter_input(INPUT_POST, 'birthday');
$profession = filter_input(INPUT_POST, "profession");
$nickname = filter_input(INPUT_POST, "nickname");
$id = null;
$id = filter_input(INPUT_POST, 'user_id');

//a flag variable
$flag = true;

//validation
if ($email === false) {
    echo "<p> Please use a properly formatted email! </p>";
    $flag = false;
}

if ($flag === true) {
    try {
        //this will connect to the database
        require('connect.php');

        //sql query

        //if we have an id we are editing
        if (!empty($id)) {
            $sql = "UPDATE users SET first_name = :firstname, last_name = :lastname, email = :email, 
                    birthday = :birthday, profession = :profession, nickname = :nickname WHERE user_id = :user_id;";
        } //if not we are adding a new record
        else {
            $sql = "INSERT INTO users (first_name, last_name, email, birthday, profession, nickname) 
                    VALUES (:firstname, :lastname, :email, :birthday, :profession, :nickname);";

        }

        //calls the prepare method of the PDO object
        $statement = $db->prepare($sql);

        //binds the parameters
        $statement->bindParam(':firstname', $first_name);
        $statement->bindParam(':lastname', $last_name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':birthday', $birthday);
        $statement->bindParam(':profession', $profession);
        $statement->bindParam(':nickname', $nickname);

        if (!empty($id)) {
            $statement->bindParam(':user_id', $id);
        }

        //executes the query
        $statement->execute();

        //closes the database connection
        $statement->closeCursor();
        header('location:view.php');

    } catch (PDOException $e) {
        echo "<p> Something went wrong! </p>";
        $error_message = $e->getMessage();
        echo $error_message;
    }
}
ob_flush();

require('footer.php');
?>
