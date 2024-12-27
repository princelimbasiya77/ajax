<?php

$connect = mysqli_connect("localhost","root","","gmail");
    

    if(!empty($_POST['view']))
    {
        echo 1;
        // $query = "SELECT * FROM `createaccount`";
        // $res =  mysqli_query($connect , $query);

        // $row = mysqli_fetch_all($res , MYSQLI_ASSOC);

        // // print_r($row);
        // $encode = json_encode($row);

        // echo $encode;
        // $decode = json_decode($encode);

        // print_r($decode);
    }
    else
    {
        echo 0;
    }


?>
                                                                                                                 