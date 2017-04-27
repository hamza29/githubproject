<?php
 include_once '../requires/connection.php'; 


$pageName		= $_POST['pageName']; 
$pageTitle		= $_POST['pageTitle']; 
$pageContent     	= $_POST['pageContent']; 
$pageStatus		= $_POST['pageStatus']; 


$sql = "INSERT INTO `tblpages`  SET pageName='$pageName',  pageTitle='$pageTitle',  pageContent='$pageContent',pageStatus='$pageStatus' ";

$result = mysqli_query($connection,$sql);
  
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header("Location: add-page.php?status=yes");
 

mysqli_close($connection);
?>