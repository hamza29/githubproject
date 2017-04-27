<?php
session_start();
require("../requires/connection.php");


if (isset($_SESSION['myusername'])){
	$myusername = $_SESSION['myusername'];
	$mypassword = ($_SESSION['mypassword']);
	
	
	
	
	$query = "SELECT * FROM tblusers";
$result = mysqli_query($connection,$query);
if (!$result)
{
    die ("Error");
}
$temp=0;
while ($row = mysqli_fetch_array($result)){
	
	
	if($row['myusername'] == $myusername &&  $row['mypassword'] == $mypassword){
	
	$temp=1;
	$_SESSION['login']="login";
	header("Location: welcomepage.php");
		
		
	}
	
}
if ($temp==0)
    {
	
    $_SESSION['msg']="Wrong User Name or Password";
					
        header("Location: login.php");
	}


}

?>