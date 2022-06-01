<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "components/_links.php"; ?>
    <title>JoIn Us </title>
</head>

<body>
    <?php include "components/_navbar.php"; ?>
    <div class="">
        <div class="course_banner center-bt p-5">
            <h2>Don't have an account! create one </h2>
            <a href="signup.php" class="btn btn-lg btn-outline-success">Create an account</a>
        </div>
    </div>
    <div class="container my-5 centered">
        <div class="inner-container">
            <form action="#" class="form">
               
                <div class="my-3">
                    <label for="Email">Email Address</label>
                    <input type="email" id="Email" class="form-control">
                </div>
                <div class="my-3">
                    <label for="password">Password</label>
                    <input type="text" id="password" class="form-control">
                </div>
                
                <div class="my-3 centered">
                   <button class="btn btn-lg px-5 btn-success">Login Now</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>