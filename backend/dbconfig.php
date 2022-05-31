<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "techSchool";
    $connection = mysqli_connect($server,$user,$pass,$database);
    // if(!$connection){
    //     echo "connection failed" . mysqli_connect_error();
    // }else{
    //     echo "connection successful ";
    // }

?>