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
    <title>Image Dashboard </title>
    <!-- This href tag shows how to use files in parent folder -->
    <link rel="shortcut icon" href="../css/img/favicon.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/showmore.js"></script>

</head>
<body> 
    <div class="header"> 
        <h1> Welcome to the Photo Dashboard </h1>
        <h2> Please select what album you would like to view </h2>
    </div>
    <div id="viewall">
        <a href=view.php>
            <button class="button">
                <span> View all </span> 
            </button>
        </a>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
  </div>
</div> 
