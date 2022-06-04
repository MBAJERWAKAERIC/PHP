<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        .error {color: #FF0000}
    </title>
</head>
<body>
    
    <?php 
    //define variables and set to empty
    $namErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $website = "";
    if($_SERVER[REQUEST_METHOD] == "POST"){
        if(empty($_POST["name"])){
            $nameErr = "Please enter a valid name";
        }
        else{
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-']*$/", $name)){
                $namErr = "only letters and white spaces allowed";
            }
        }
    }

    if(empty($_POST["email"])){
        $emailErr = "Valid email adress";
    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             $emailErr = "The email adress is incorect";
         }
    }

    if(empty($_POST['website'])){
        $website = "";
    }
    else{
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%/=~_|:,.;]*[-a-z0+&@#\/%=~_|]/i", $website)){
            $websiteErr = "Enter a valid website URL";
        }
    }
    if(empty($_POST["comment"])){
        $comment = "";
    }
    else{
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST["gender"])){
        $genderErr = "please select a gender";
    }
    else{
        $gender = test_input($_POST["gender"]);
    }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP form validation</h2>
    <p> <span class="Error">* required field </span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP"]);?>">
        Fullname: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br> <br>
        E-mail adress: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br> <br> 
        Website: <input type="text" name="website">
        <span class="error">* <?php echo $websiteErr;?></span>
        <br><br> 
        comment: <textarea name="comment" rows="10" cols="30"></textarea>
        <br> <br> 
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="Male">Male
        <span class="error">* <?php echo $genderErr;?></span>
        <br> <br> 
        <input type="submit" name="click here" value="click here">
        <br> <br> 
</form>

<?php
        echo "<h2> your input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        echo "<br>";

    ?>
</body>
</html>