<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <title>Home Page</title>
</head>

<body>
    <?php include "components/_navbar.php" ?>
    <img class="home_img" src="assets/images/tech1.jpg " alt="image not loading">
    <main>
        <!-- site tital -->
        <section class="site-title">
            <div class="site-background">
                <h3 class="head_title">
                    TECH SCHOOL
                </h3>
                <h1 class="heading">we have got your future covered</h1>
                <a href="courses.php">

                    <button class="head_btn"> Read More </button>

                </a>
            </div>
        </section>
    </main>
    <div class="container gallery">
        <div class="container">
            <div class="gallery-name">
                 <h1>Our Gallery</h1>
            </div>
            <div class="my-3">
                <hr>
            </div>
        </div>

        <div class="section">
            <div class="pic"><img class="image" src="assets/images/pic1.jpg" alt="image not loading"></div>
            <div class="pic"><img class="image" src="assets/images/pic8.jpg" alt="image not loading"></div>
            <div class="pic"><img class="image" src="assets/images/pic3.jpg" alt="image not loading"></div>
        </div>
        <div class="section">
            <div class="pic"><img class="image" src="assets/images/pic4.jpg" alt="image not loading"></div>
            <div class="pic"><img class="image" src="assets/images/pic5.jpg" alt="image not loding "></div>
            <div class="pic"> <img class="image" src="assets/images/pic6.jpg" alt="image not loading"></div>
        </div>

    </div>

    <div class="container container1">
    <div class="container">
            <div class="gallery-name">
                 <h1>Registration</h1>
            </div>
            <div class="my-3">
                <hr>
            </div>
        </div>
        <div class=" register">
            <div class="login">
                <img class="mysvg1" src="assets/svg/svg1.svg" alt="svg not loading">
                <a class="register_btn" href="login.php">
                   <p class="btn_contnt"> Login Here</p>
                   <svg class="mysvg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                    </a>
            </div>
            <div class="signup">
                <img class="mysvg2" src="assets/svg/svg2.svg" alt="svg not loading">
                <a class="register_btn" href="signup.php">
                <p class="btn_contnt2"> Signup </p>
                     <svg class="mysvg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                    </a>
            </div>

        </div>
    </div>

    <!------------- footer site----------- -->

    

<?php include"components/_footer.php"?>


</body>
<?php include "components/_scripts.php" ?>

</html>