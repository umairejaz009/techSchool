<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Find the Quality courses here | TechSchool</title>
</head>

<body>
    <?php include "components/_navbar.php" ?>

    <div id="course_banner" class="banner container-fluid py-5 bg-dark text-white">
        <div class="container">

            <h1 class="py-4">Courses | we have got your future covered</h1>
        </div>
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
                echo
                '
                 <div class="apna-card" class="card m-3" style="width: 18rem;">
                        <img src="assets/images/card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $entry['course_name'] . '</h5>
                            <p class="card-text">' . $entry['course_desc'] . '</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                 </div>
                    
                ';
            }






            ?>


        </div>

    </div>

    <?php include "components/_footer.php" ?>
</body>
<?php include "components/_scripts.php" ?>

</html>