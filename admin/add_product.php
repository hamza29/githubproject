<?php 
include_once("../requires/connection.php"); ?>
<table  style="background-color: lightgreen; font-family: serif "width="80%" border="1" align="center">
  <tr>
    <td height="77"><?php include("header.php"); 

if(isset($_SESSION['loggedin']))

 {
?></td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="0" style="font-weight:bold; ">
	  <tr>
	  	<td width="9%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Home</a></td>
                <td width="10%"><a href="add_product.php" 		style="text-decoration:none; color:#666666" >Add Product</a></td>
                <td width="12%"><a href="view_products.php" 	style="text-decoration:none; color:#666666" >View product</a></td>
                <td width="58%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Login</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="463" align="center" valign="middle">
        <form name="myform" action="add_product_process.php" method="post" enctype="multipart/form-data">
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" ><?php 
									if($_GET)
									{
									if($_GET['status']=='yes') echo "<span style='color:green'>PRODUCT ADDED </span>"; 
									else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
									}?></td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add PRODUCT Record</strong></td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="" /></td>
  </tr>
   <tr>
    <td>Product price</td>
    <td><input type="text" name="productPrice" value="" /></td>
  </tr>
   <tr>
    <td>Product code</td>
    <td><input type="text" name="productCode" value="" /></td>
  </tr>
   <tr>
    <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="" /></td>
  </tr>
   <tr>
    <td>Product SIZE</td>
    <td><input type="text" name="productSizes" value="" /></td>
  </tr>
    <tr>
    <td>Product Details</td>
    <td><input type="text" name="productDetails" value="" /></td>
  </tr>

   <tr>
    <td>Product in Stock</td>
    <td>
        <select name="productInstock" >
	
            <option value="Y"  >In Stock</option>
	
            <option value="N">Not In Stock</option>
	
        </select>
    </td>
  </tr>
 <tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file"  name="product_image"  /></td>
   </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add Page" /></td>
  </tr>
</table>
</form>
	
	</td>
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