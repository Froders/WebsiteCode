<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/timer.js"></script>
    <script src="js/Welcome.js"></script>
    <link rel="shortcut icon" href="css/img/favicon.ico">
</head>
<body>
    <div class="welcomebackground">
        <header>
            <div style="float:right;">
                <a  href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </div>
        </header>
        <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>

        <div class="importantinfo">
            <h2> Since I've given this to you, now you can figure out your christmas present </h2>
            <h2> If its not figured out before Christmas, the countdown will run out and you will have access to it </h2> 


            <h1 id="demo"></h1>

            <div id="timer_pretty">
                <h1> Important events comming up </h1>
                <h2> Christmas </h2>
                <h2 id="xmas"></h2>

            </div>

            <div id="Forum">
                <h1> Welcome to the Message Board </h1> 
                <?php
                echo 


        </div>
    </div>
</body>
</html>