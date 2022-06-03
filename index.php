<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
    <h1>Blood donation camp</h1>

<body bgcolor="FBB917">
    <div> <h2>registration form</h2></div>
    <form action='connect.php' method='post'>
        <Label for="user"> Name:</Label><br/>
        <input type="text" name='name' id='name' required/> <br/> <br/>

        <Label for="email"> Email:</Label><br/>
        <input type="text" name='email' id='email' required/> <br/> <br/>

        <Label for="phone"> phone:</Label><br/>
        <input type="text" name='phone' id='phone' required/> <br/> <br/>

        <Label for="bgroup"> blood group:</Label><br/>
        <input type="text" name='bgroup' id='bgroup' required/> <br/> <br/>

        <input type='submit' name='submit' id="submit"/>
    </form>

</body>

</html>
