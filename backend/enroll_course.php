<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        echo "<h1>You have been enrolled</h1><br>";
        $course_id = $_POST['id'];
        $user_id = $_SESSION['user_id'] ;

        echo "course id = $course_id<br>User id = $user_id";
        echo "<br>";
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){
            include "dbconfig.php";
            echo "user is logged in  <br>";
            //if user is logged in then we are going to enroll it with that course 
            //we will grab user id from session and course id from post request
            $course_insertion = "INSERT INTO `enrollments` ( `enr_course_id`, `enr_user_id`, `enr_completed`, `enr_created`) VALUES ( '$course_id', '$user_id', '0', current_timestamp());";
            $course_insertion_run = mysqli_query($connection,$course_insertion);
            header("location: ../course_detail.php?login=true&id=$course_id");
            echo $course_insertion;
        }else{
            echo "user is not logged in <br>";
            // header("location: ../course_detail.php?login=false&id=$course_id");
        }

    }

?>