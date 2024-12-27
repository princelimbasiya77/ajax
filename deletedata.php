<?php

$connect = mysqli_connect("localhost","root","","gmail");
$delete = $_POST['delete'];
    $qry = "DELETE FROM `createaccount` WHERE `id` = '$delete' ";
    mysqli_query($connect , $qry);




    

?>

