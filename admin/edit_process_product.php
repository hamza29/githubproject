<?php

 include_once '../requires/connection.php';
 

$productid	= $_POST['productid']; 

$oldPicture	= $_POST['hdpicture']; 
$productName	= $_POST['productName']; 
$productPrice	= $_POST['productPrice']; 
$productCode	=  $_POST['productCode']; 
$productInstock	= $_POST['productInstock']; 
$productDiscount=  $_POST['productDiscount']; 
$productSizes	= $_POST['productSizes']; 
$productCode	=  $_POST['productDetails']; 


$sql = "UPDATE  `tblproducts`  SET productName='$productName',  productPrice='$productPrice',  productCode='$productCode', productInstock='$productInstock',productDiscount='$productDiscount',  productSizes='$productSizes', productDetails='$productDetails' ,
									 image='$imageit' WHERE productid='$productid' ";

 
$result = mysqli_query($connection,$sql);

if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}
 
        
	header("Location:view_products.php?status=updated");
 

mysqli_close($connection);
?>