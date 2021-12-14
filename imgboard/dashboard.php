<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Dashboard </title>
    <!-- This href tag shows how to use files in parent folder -->
    <link rel="shortcut icon" href="../css/img/favicon.ico">
    <link rel="stylesheet" href="../css/comingsoon.css">
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
    <div class="dropbtn">
        <button onclick="myFunction()" class="dropbtn">
        Dropdown
        </button>
        <div id="myDropdown" class="dropdown-content">
            <a href="view.php"> Link 1 </a>
            <a href="view.php"> Link 2 </a>
            <a href="view.php"> Link 3 </a> 
        </div>
    </div>
