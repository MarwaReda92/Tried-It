<?php require('header.php'); ?>
    <main>
        <form action="process.php" method="post">
            <div class="form-group">
                <input type="text" name="firstname" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="lastname" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="birthday">Date of Birth:</label>
                <input type="date" id="birthday" name="birthday" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="profession" placeholder="Profession" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="nickname" placeholder="Nickname" class="form-control">
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </form>
    </main>
<?php
require('footer.php');
?>