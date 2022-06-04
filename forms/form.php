<!DOCTYPE html>
<html>
    <head>
        <body>
            
        <?php
        // define variables and set to empty values
        $fullname= $email= $gender= $comment= $number= $age= "";
        if($_server["REQUEST_METHOD"] == "POST") {
            $fullname = test_input($POST[name]);
            $email = test_input($POST[email]);
            $gender = test_input($POST[gender]);
            $comment = test_input($POST[comment]);
            $number = test_input($POST[number]);
            $age = test_input($POST[age]);
        } 

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2> Form validation</h2>
        <form method="POST" action=" <?php echo htmlspecialchars($_server["PHP_SELF"]); ?>" 
        Fullname: <input type="text" name="name">
        <br> <br>
        E-mail: <input type="text" name="email">
        <br> <br> 
        Number (optional): <input type="text" name="number">
        <br> <br> 
        comment: <textarea name="comment" rows="10" cols="30"></textarea>
        <br> <br> 
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="Male">Male
        <br> <br> 
        <input type="submit" name="click here" value="click here">
        <br> <br> 
    </form>

    <?php
        echo "<h2> your input:</h2>";
        echo $fullname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $age;
        echo "<br>";
        echo $number;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        echo "<br>";

    ?>
        </body>
    </head>
</html>