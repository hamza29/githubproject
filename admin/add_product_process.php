<?php
 include_once '../requires/connection.php'; 

$productName	= $_POST['productName']; 
$productPrice	= $_POST['productPrice']; 
$productCode	=  $_POST['productCode']; 
$productInstock	= $_POST['productInstock'];
$productDiscount=  $_POST['productDiscount']; 
$productSizes	= $_POST['productSizes']; 
$productDetails	=  $_POST['productDetails'];


$target = "../images/uploads".basename($_FILES['product_image']['name']);

$imageit = $_FILES['product_image']['name'];

 $sql = "insert into `tblproducts` (productName,productPrice,productCode,productInstock,productDiscount,productSizes,productDetails,image) values ('$productName','$productPrice','$productCode','$productInstock','$productDiscount','$productSizes','$productDetails','$imageit')";
  /* $sql = "INSERT INTO ``  SET ='$productName',  productPrice='$productPrice',  productCode='$productCode', productInstock='$productInstock',productDiscount='$productDiscount',  productSizes='$productSizes', productDetails='$productDetails',image='$imageit' ";*/

$result = mysqli_query($connection,$sql);
move_uploaded_file($_FILES['product_image']['tmp_name'],$target);

if(!$result)
{
  die('Could not enter data: ' . mysqli_error());
}

	header("Location: add_product.php?status=yes");
 

mysqli_close($connection);



?>