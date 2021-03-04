<?php
//includes the header
include('header.php');

//connects to the database
require('connect.php');

//selects everything from users database
$sql = "SELECT * FROM users;";

//calls the prepare method of the PDO object to prepare the statement stored in sql
$statement = $db->prepare($sql);

//execute
$statement->execute();

//this will return to us an array of all the records stored in users
$records = $statement->fetchAll();

//creating the table
echo "<table><tbody>";

foreach ($records as $record) {
    echo "<tr><td>" . $record['first_name'] . "</td><td>" . $record['last_name'] . "</td><td>" .
        $record['email'] . "</td><td>" . $record['birthday'] . "</td><td>" . $record['profession'] . "</td><td>" .
        $record['username'] . "</td><td>";
}

echo "</tbody></table>";

//closes the database connection
$statement->closeCursor();


include('footer.php');