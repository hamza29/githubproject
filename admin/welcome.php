<?php 
 include_once '../requires/connection.php'; 

 
 ?>
<table style="background-color: lightgreen; font-family: serif "width="80%" border="1" align="center">
  <tr>
    <td height="77">
<?php include("header.php"); 

if(isset($_SESSION['loggedin']))

 {
?>

	</td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="0" style="font-weight:bold; ">
	  <tr>
	  	<td width="9%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Home</a></td>
		<td width="10%"><a href="add_product.php" 	style="text-decoration:none; color:#666666" >Add Product</a></td>
		   <td width="12%"><a href="view_products.php" 	style="text-decoration:none; color:#666666" >View product</a></td>
             <td width="58%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Login</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="291" align="center" valign="middle">WELCOME TO ADMIN PAGE</td>
  </tr>
  <tr>
    <td align="center" >Copyright Webeng</td>
  </tr>
</table>
<?php

 }
 else{
     
     $_SESSION['notloggedin']='notloggedin';
     header('Location:index.php');
 }


?>