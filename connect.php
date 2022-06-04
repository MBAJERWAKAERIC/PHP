<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'test1') or die("connection failed:" . mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $bgroup = $_POST['bgroup'];

        $sql= "INSERT INTO 'users' ('name', 'email', 'phone', 'bgroup') VALUES ('$name', '$email', '$phone', '$bgroup')";

        $query = mysqli_query($conn, $sql);
        if($query) {
            echo 'Entry Successful';

        } 
         else {
            echo 'Error occured';
        }
    }
}
?>