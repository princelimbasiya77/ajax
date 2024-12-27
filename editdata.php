<?php

$connect = mysqli_connect("localhost","root","","gmail");
        if(!empty($_POST['edit']))
        {
            $edit = $_POST['edit'];
            $query = "SELECT * FROM `createaccount` WHERE `id`='$edit' ";
            $res =  mysqli_query($connect , $query);
            $row = mysqli_fetch_assoc($res);
            $encode = json_encode($row);
    
            echo $encode;
        }

        // if(!empty($_POST['data']))
        // {
        //     $edit = $_POST['id'];
        //  $name = $_POST['name'];
        //  $email = $_POST['email'];
        //  $password = $_POST['password'];
        //  $qry = "UPDATE `createaccount` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id` = '$edit' ";

        //      mysqli_query($connect , $qry);
// }
?>