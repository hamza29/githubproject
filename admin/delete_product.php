<?php
include_once '../requires/connection.php';

$productid= $_GET['prId']; 

$viewsql="SELECT picture FROM tblproducts where productid='$productid'";
$viewresult=mysqli_query($viewsql);
$viewrow = mysqli_fetch_array($connection,$viewresult);

$picture = $viewrow["picture"];


$sql = "DELETE from tblproducts WHERE productid='$productid' ";

//mysql_select_db('test_db');
 
$result = mysqli_query($connection,$sql);
 
if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 unlink('../images/uploads/'.$picture);
	echo "yes";
	header("Location: view_products.php?status=deleted");
 

mysqli_close($connection);
?>