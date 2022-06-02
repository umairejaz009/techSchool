<?php

include "backend/signup_handler.php";





$account = false;
if (isset($_GET['acc']) == "done") {
    $account = true;
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php" ?>
    <script>
        console.log("connection ban gia")

        let alertx = document.getElementById(alertx);
        alertx.addEventListener('click', () => {

            alertx.style.display = 'none';

        })
        console.log(alertx);
    </script>
    <title>Home Page</title>
</head>

<body>
    <?php include "components/_navbar.php" ?>

    <img class="home_img" src="assets/images/tech1.jpg " alt="image not loading">
    <main>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg>
        <?php
        if ($account) {
            echo '  <div class="container">
            <div id="alertx" class="alert alert-warning alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
               <strong>Your Account Is created Succesfully
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
            </div>
            ';
        }


        ?>


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



    <?php include "components/_footer.php" ?>


</body>
<?php


// include "components/_scripts.php" 





?>

</html>