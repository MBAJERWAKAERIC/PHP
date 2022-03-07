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
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

    <br>
    <?php echo $_GET ["name"]?>
</body>

</html>