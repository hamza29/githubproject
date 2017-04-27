<?php


$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "webeng";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_error());
    
} 
 else {
echo'<h6>CONNECTED TO DATABASE</h6>';    
}

$mydatabase = mysqli_select_db($connection,$dbname) ; 

if(!$mydatabase) 
    die("Database Selection failed"  .mysqli_error() );
else
    echo'<h6>SELECTED DATABASE</h6> ';

?>