<?php

$connection = mysqli_connect('localhost','root','0708','login_db');

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $request = "insert into login_form(username, password)
    values ('$name','$password')";

    mysqli_query($connection, $request);

    header('location:login.php');

}

else{
    echo 'something went wrong, try again!';
}

?>