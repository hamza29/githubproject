<?php 
include_once '../requires/connection.php';
?>
<table width="80%" border="1" align="center">
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
		<td width="11%"><a href="profile.php" 		style="text-decoration:none; color:#666666" >My Profile</a></td>
		<td width="10%"><a href="add-page.php" 		style="text-decoration:none; color:#666666" >Add Page</a></td>
		<td width="12%"><a href="view-pages.php" 	style="text-decoration:none; color:#666666" >View Pages</a></td>
                <td width="10%"><a href="add_product.php" 	style="text-decoration:none; color:#666666" >Add Product</a></td>
                <td width="12%"><a href="view_products.php" 	style="text-decoration:none; color:#666666" >View Product</a></td>
		<td width="58%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Login</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
  <?php	
		$productid = $_GET['prId'];
		$sql="SELECT * FROM tblproducts where productid='$productid'";
		$result=mysqli_query($connection,$sql);
		
		$count=mysqli_num_rows($result);
			
		if ($count > 0) 
		{
			$row = mysqli_fetch_array($result);
		} 
	
	?>
	
    <td height="463" align="center" valign="middle">
        <form name="myform" action="edit_process_product.php" method="post" >
	<input type="hidden" name="hdpicture" value="<?php echo$row["picture"]?>" />
	<table width="80%" border="0">
 
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Edit Page Record</strong></td>
  </tr>
   <tr>
    <td>Product Id</td>
    <td><input type="text" name="productid" value="<?php echo$row["productid"]?>" /></td>
  </tr>
  <tr>
    <td>Product Name</td>
    <td><input type="text" name="productName" value="<?php echo$row["productName"]?>" /></td>
  </tr>
   <tr>
    <td>Product price</td>
    <td><input type="text" name="productPrice" value="<?php echo$row["productPrice"]?>" /></td>
  </tr>
   <tr>
    <td>Product code</td>
    <td><input type="text" name="productCode" value="<?php echo$row["productCode"]?>" /></td>
  </tr>
   <tr>
    <td>Product Discount</td>
    <td><input type="text" name="productDiscount" value="<?php echo$row["productDiscount"]?>" /></td>
  </tr>
   <tr>
    <td>Product SIZE</td>
    <td><input type="text" name="productSizes" value="<?php echo$row["productSizes"]?>" /></td>
  </tr>
    <tr>
    <td>Product Details</td>
    <td><input type="text" name="productDetails" value="<?php echo$row["productDetails"]?>" /></td>
  </tr>
<tr>
   	 <td valign="top">Picture</td>
    <td valign="top"><input type="file"  name="product_image"  /></td>
   </tr>
   <tr>
    <td>Product in Stock</td>
    <td><select name="productInstock" >
		<option value="Y" <?php if($row["productInstock"]=='Y') echo 'selected'; else ''; ?> >In Stock</option>
		<option value="N" <?php if($row["productInstock"]=='N') echo 'selected'; else ''; ?> >Not In Stock</option>
		</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="EditProduct" /></td>
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