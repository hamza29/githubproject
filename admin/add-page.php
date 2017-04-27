<?php require("../requires/connection.php"); ?>
<table width="80%" border="1" align="center">
  <tr>
    <td height="77"><?php include("header.php"); ?></td>
  </tr>
  <tr>
    <td>
	<table width="100%" border="0" style="font-weight:bold; ">
	  <tr>
	  	<td width="9%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Home</a></td>
		<td width="11%"><a href="profile.php" 		style="text-decoration:none; color:#666666" >My Profile</a></td>
		<td width="10%"><a href="add-page.php" 		style="text-decoration:none; color:#666666" >Add Page</a></td>
		<td width="12%"><a href="view-pages.php" 	style="text-decoration:none; color:#666666" >View Pages</a></td>
                <td width="10%"><a href="add_product.php" 		style="text-decoration:none; color:#666666" >Add Product</a></td>
                <td width="12%"><a href="view_products.php" 	style="text-decoration:none; color:#666666" >View Products</a></td>
		<td width="58%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Login</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="463" align="center" valign="middle">
	<form name="myform" action="add-process.php" method="post" >
	<table width="80%" border="0">
  <tr>
    <td height="33" colspan="2" style="font-weight:bold" ><?php 
									if($_GET)
									{
									if($_GET['status']=='yes') echo "<span style='color:green'>Record Entered Successfully!</span>"; 
									else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
									}?></td>
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Add Page Record</strong></td>
  </tr>
  <tr>
    <td>Page Name</td>
    <td><input type="text" name="pageName" value="" /></td>
  </tr>
   <tr>
    <td>Page Title</td>
    <td><input type="text" name="pageTitle" value="" /></td>
  </tr>
   <tr>
    <td valign="top">Page Content</td>
    <td valign="top"><textarea cols="80" rows="15" name="pageContent"></textarea></td>
  </tr>
   <tr>
    <td>Page Status</td>
    <td><select name="pageStatus" >
		<option value="Y" >Published</option>
		<option value="N" >Not Published</option>
		</select></td>
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
