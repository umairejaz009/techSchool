<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Find the Quality courses here | TechSchool</title>
</head>

<body>
    <?php include "components/_navbar.php" ?>

    <div class="course_banner p-5 fontsize">
        <h2>Courses | we have got your future covered</h2>
    </div>



    <div class="container my-5">
        <div class="course_cards">
            <?php
            // including database configuration
            include "backend/dbconfig.php";

            //fetch courses from databasse
            $course_fetch = "SELECT * FROM `courses`";
            $course_fetch_run  = mysqli_query($connection, $course_fetch);
            while ($entry = mysqli_fetch_assoc($course_fetch_run)) {

                echo '<div class="custom-card">
                <div class="c-card-head">
                    <img src="' . $entry['course_image'] . '" alt="">
                </div>
                <div class="c-card-body">
                    <div class="c-card-body-content">
                        <h3 class="fontsize">' . $entry['course_name'] . '</h3>
                        <p class="">' . $entry['course_desc'] . '</p>
                        <a href="course_detail.php?id=' . $entry['course_id'] . '" class="btn btn-md btn-success">Learn More</a>
                    </div>
                </div>
            </div>';
               
               
            }






            ?>


        </div>

    </div>

    
</body>
<?php include "components/_scripts.php" ?>

</html>