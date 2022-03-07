<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <?php
?>
    <form action="site.php" method= "get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
            <input type="submit">
    </form>

    <br>
    ANSWER <?php
                 echo $_GET["num1"] + $_GET["NUM2"]
                 ?>
    
</body>

</html>