<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "components/_links.php" ?>
 <title>User Dashboard || Learning made easy</title>
</head>
<body>
    <?php include "components/_navbar.php" ?>
    <?php include "backend/dbconfig.php" ?>
    <div class="container">
        <h1 class="my-5">Dashboard</h1>
    </div>
    <div class="container my-3">
        <h2>Course Enrolled by</h2>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col"  colspan="2">Course Name</th>
      <th scope="row" >Completed</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
      $user_id = $_SESSION['user_id'];
      $sql1 = "SELECT * FROM `enrollments` WHERE `enr_user_id`='$user_id'";
      $sql1_run = mysqli_query($connection,$sql1);
      while($enroll = mysqli_fetch_assoc($sql1_run)){
        $course_id = $enroll['enr_course_id'];
        $sql2 = "SELECT * FROM `courses` WHERE `course_id`='$course_id'";
        $sql2_run = mysqli_query($connection,$sql2);
        $array = mysqli_fetch_array($sql2_run);
        $course_name = $array['course_name'];
        echo '
        <tr>
            <th scope="row">'.$enroll['enr_id'].'</th>
            <td  colspan="2">'.$course_name.'</td>
            <td>Not yet</td>
        </tr>
        
        
        ';
        // echo $enroll['enr_id'];
        // echo "<br>";
        // echo $enroll['enr_course_id'];
        // echo "<br>";
        // echo $enroll['enr_user_id'];
        // echo "<br>";
      }
    ?>
  </tbody>
</table>
    </div>











    
    
    <?php include "components/_scripts.php" ?>
</body>
</html>