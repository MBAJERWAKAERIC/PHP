<?php
if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
        die("invalid name. name should be alphebetic");
    }
    echo "Hello" . $_POST['name'] . "<br/>";
    echo "your age is " . $_POST["age"] . "<br/>";
    exit();
}
?>

<html>
    <body>
        <form action = "<?php $_PHP_SELF?>" method = "post" >
            Name: <input type = "text" name = />
            age: <input type = "text" name = "age" />
            <input type = "submit" />
        </form>
    </body>
</html>