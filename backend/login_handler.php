<?php
echo "<h1> Hello There! this is php login handler.</h1>";
if($_SERVER['REQUEST_METHOD']=='POST'){
    include "dbconfig.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<email>  $email<br><password> $password<br>";
    if(empty($email) && empty($password)){
        echo "empty fields found<br>";
    }else{

        $email_verify = "SELECT * FROM `users` WHERE `user_email`='$email'";
        $email_verify_run = mysqli_query($connection,$email_verify);
        $num_user = mysqli_num_rows($email_verify_run);
        if($num_user == 1 ){
           while($row = mysqli_fetch_assoc($email_verify_run)){
               $user_pass_in_db = $row['user_password'];
               echo $user_pass_in_db;
               echo "<br>";
              
               if(password_verify($password,$user_pass_in_db)){
                   echo "password matched<br>";
                   session_start();
                   $_SESSION['loggedin'] = true;
                   $_SESSION['user_name']  =  $row['user_name'];
                   $_SESSION['user_email']  =  $row['user_email'];
                   header("location:../index.php?acc=done");

               }else{
                   echo "password does not matched<br>";
               }
           }
            // $password_verify = password_verify($password,)



        }else{
            echo "No user found<br>";
            
        }
    }
}

?>