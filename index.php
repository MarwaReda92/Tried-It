<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tried It</title>
</head>
<body>
<header>
    <h1> Make Better Purchases Because We've Tried It!  </h1>
</header>
<main>
    <form action="process.php" method="post">
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="email" name="email" placeholder="Email">
        <input type="date" name="bday" placeholder="Date of Birth">
        <input type="text" name="prof" placeholder="Profession">
        <input type="text" name="username" placeholder="Username">
        <input type="submit" value="submit" name="submit">
    </form>
</main>
<footer>
    <p>&copy; TriedIt <?php echo getdate()['year']; ?> </p>
</footer>
</body>
</html>