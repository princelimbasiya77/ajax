
<?php

$connect = mysqli_connect("localhost","root","","gmail");

    // $edit = $_POST['edit'];
  
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $qry = "UPDATE `createaccount` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id` = '$id' ";

    mysqli_query($connect , $qry);





?>