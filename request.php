<?php
if (isset($_REQUEST["name"]) || isset($_POST["age"])) {
    echo "Hello" . $_REQUEST['name'] . "<br/>";
    echo "your age is " . $_REQUEST["age"] . "years";
    exit();
}

?>

<html>
    <body>
        <form action = "<?php $_PHP_SELF?>" method = "POST" >
            Name: <input type = "text" name = />
            age: <input type = "text" name = "age" />
            <input type = "submit" />
        </form>
    </body>
</html>