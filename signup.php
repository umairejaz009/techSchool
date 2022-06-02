











<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php"; ?>
    <title>JoIn Us </title>
</head>

<body>
    <?php include "components/_navbar.php"; ?>
    <div class="">
        <div class="course_banner p-5 center-bt">
            <h2>Already had an Account! Sign in  </h2>
            <a href="login.php" class="btn btn-lg btn-outline-success">Sign In</a>
        </div>
    </div>
    <div class="container my-5 centered">
        <div class="inner-container">
            <form action="index.php" class="form" method="POST">
                <div class="my-3">
                    <label for="FullName">Full Name</label>
                    <input type="text" id="FullName" class="form-control" name="fname">
                </div>
                <div class="my-3">
                    <label for="Email">Email Address</label>
                    <input type="email" id="Email" class="form-control" name="email">
                </div>
                <div class="my-3">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <div class="my-3">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" class="form-control" name="password2">
                </div>
                <div class="my-3 centered">
                   <button class="btn btn-lg px-5 btn-success" type="submit">Signup Now</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>




<!-- INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_roll`, `user_created`) VALUES (NULL, 'Noman Iqbal', 'noman@mail.com', 'noman555', '0', 'current_timestamp()'); -->