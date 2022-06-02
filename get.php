<?php
if (isset($_GET['name']) || isset($_GET['age'])) {
    echo "hi" . $_GET['name'] . "<br/>";
    echo "your age is" . $_GET['age'] . "years";
    exit();
}
?>

    <html>
        <body>
            <form action = "<?php $_PHP_SELF?>" method = "GET">
                Name:<input type="text" name = "name" />
                Age: <input type="text" name = "age" />
                <input type="submit" />
            </form>

        </body>
    </html>