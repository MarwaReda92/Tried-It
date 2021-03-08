<?php
require('header.php');

//connects to the database
require('connect.php');

//set up SQL statement
$sql = "SELECT * FROM users;";

//prepare
$statement = $db->prepare($sql);

//execute
$statement->execute();

//this will return to us an array of all the records stored in users
$records = $statement->fetchAll();

//creating the table
echo "<table class='table table-striped'><tbody>";

foreach ($records as $record) {
    echo "<tr><td>" . $record['first_name'] . "</td><td>" . $record['last_name'] . "</td><td>" .
        $record['email'] . "</td><td>" . $record['birthday'] . "</td><td>" . $record['profession'] . "</td><td>" .
        $record['nickname'] . "</td><td><a href='delete.php?id=". $record['user_id'] ."'> Delete Nickname </a></td>
        <td><a href='index.php?id=". $record['user_id'] . "'> Edit Nickname </a></td></tr>";
}
echo "</tbody></table>";

//closes the database connection
$statement->closeCursor();

require('footer.php');
