<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        echo "<h1>You have been enrolled</h1><br>";
        $course_id = $_POST['id'];
        echo "course id = $course_id";
        echo "<br>";
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){
            echo "user is logged in  <br>";
        }else{
            echo "user is not logged in <br>";
            header("location: ../course_detail.php?login=false&id=$course_id");
        }

    }

?>