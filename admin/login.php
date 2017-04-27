<?php
session_start();

include("../requires/connection.php");


if (isset($_SESSION['logout']))
{
	
	unset ($_SESSION['logout']);
        header('Location:index.php');
}

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$sql=" SELECT * FROM tblusers WHERE myusername='$myusername' and mypassword='$mypassword'";
$result= mysqli_query($connection, $sql);
$count=mysqli_num_rows($result);
if($count==1)
{
    $_SESSION['myusername']=$myusername;
     $_SESSION['mypassword']=$mypassword;
      $_SESSION['loggedin']=abc;
      header('Location:welcome.php');
}
else{
    echo('wrong username');
}