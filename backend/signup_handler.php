<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    // echo "name: $name <br>email: $email";

    if(empty($name) && empty($email) && empty($password) && empty($password2)){
        echo "<br>Empty fields found";
    }else{

        
        if($password===$password2){
            // echo "<br>Password matched successfully";
            include "dbconfig.php";
            $sql  = "SELECT * FROM `users` WHERE `user_email`='$email' ";
            $sql_run = mysqli_query($connection,$sql);
            $num = mysqli_num_rows($sql_run);
            if($num < 1){
                // echo "user email is unique";
                $hashed = password_hash($password,PASSWORD_DEFAULT);



                $insert_user = "INSERT INTO `users` ( `user_name`, `user_email`, `user_pass`, `user_roll`, `user_created`) VALUES ( '$name', '$email', '$hashed', '0', 'current_timestamp()');";
                $insert_user_run = mysqli_query($connection,$insert_user);

                header( "location: index.php?acc=done");





            }else{
                echo "user already exists";
            }





        }else{
            echo "<br>Password does not matched";
            
        }
    }

}


?>