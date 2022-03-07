<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geeting information from user</title>
</head>

<body>
    <?php
?>
    <form action="site.php" method= "get">
        Name: <input type="text" name="username">
        <input type="submit">
        <br>
        age: <input type="number" name="age">
            <input type="submit">
    </form>

    <br>
    your name is <?php echo $_GET["username"] ?>
    <br>
    your age is <?php echo $_GET["age"] ?>
</body>

</html>