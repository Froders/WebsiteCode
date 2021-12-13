<?php
/* Database credentials. Assumption that they haven't been changed */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME',' oxjbdjmy_WPHLZ');
define('DB_PASSWORD','Froders654');
define('DB_NAME','oxjbdjmy_salmewebsite');

/*Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check connection 
if($link == false){
    die("ERROR: Could not connect. ". mysqli_connect_error());  
}


?>