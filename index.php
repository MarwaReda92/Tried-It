<?php
include('header.php');
?>
<main>
    <form action="process.php" method="post">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="email" name="email" placeholder="Email">
        <label for="bday">Date of Birth:</label>
        <input type="date" id="bday" name="bday">
        <input type="text" name="prof" placeholder="Profession">
        <input type="text" name="username" placeholder="Username">
        <input type="submit" value="submit" name="submit">
    </form>
</main>
<?php
include('footer.php');
?>