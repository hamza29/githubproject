<?php

 include_once '../requires/connection.php';

$pageId		= $_POST['pageId']; 
$pageName	= $_POST['pageName']; 
$pageTitle	= $_POST['pageTitle']; 
$pageContent	=  $_POST['pageContent']; 
$pageStatus	= $_POST['pageStatus']; 


$sql = "UPDATE  `tblpages`  SET pageName='$pageName',  pageTitle='$pageTitle',  pageContent='$pageContent', pageStatus='$pageStatus' WHERE pageId='$pageId' ";

 
$result = mysqli_query($connection,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header("Location: view-pages.php?status=updated");
 

mysqli_close($connection);
?>