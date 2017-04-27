<?php
include_once '../requires/connection.php';

$pageId= $_GET['pId']; 


$sql = "DELETE from tblpages WHERE pageId='$pageId' ";

//mysql_select_db('test_db');
 
$result = mysqli_query($connection,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
	header("Location: view-pages.php?status=deleted");
 

mysqli_close($connection);
?>