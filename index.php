<?php
include('header.php');
?>
    <main>
        <form action="process.php" method="post">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <label for="birthday">Date of Birth:</label>
            <input type="date" id="birthday" name="birthday">
            <input type="text" name="profession" placeholder="Profession">
            <input type="text" name="username" placeholder="Username">
            <input type="submit" value="submit" name="submit">
        </form>
    </main>
<?php
include('footer.php');
?>