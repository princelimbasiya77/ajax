<?php

$connect = mysqli_connect("localhost","root","","gmail");
    
        $query = "SELECT * FROM `createaccount` ";
        $res =  mysqli_query($connect , $query);
        $row = mysqli_fetch_all($res , MYSQLI_ASSOC);
        $encode = json_encode($row);

?>
                                                                                                                 