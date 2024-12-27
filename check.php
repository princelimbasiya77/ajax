<?php

$connect = mysqli_connect("localhost","root","","gmail");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = "INSERT INTO `createaccount` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
    mysqli_query($connect , $qry);





?>
