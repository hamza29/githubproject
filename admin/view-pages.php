<?php 
 include_once '../requires/connection.php'; 
?>
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
                <td width="12%"><a href="view_products.php" 	style="text-decoration:none; color:#666666" >View Product </a></td>
		<td width="58%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Login</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
    <td height="463" align="center" valign="middle">
			<table> 
			<tr>
			<td height="33" colspan="2" style="font-weight:bold" >
                            <?php 
                            if($_GET)
			
                                {
				
                                if($_GET['status']=='updated') echo "<span style='color:green'>Record Successfully Updated!</span>";
				
                                elseif($_GET['status']=='deleted') echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
				
                                else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
				
                                }?></td>
			</tr>
			</table>
			
			<table width="100%" border="0">
			  <tr>
				<td style="border-bottom:1px solid" width="10%"><strong>Page Id</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Page Name</strong></td>
				<td style="border-bottom:1px solid" width="20%"><strong>Page Title</strong></td>
				<td style="border-bottom:1px solid" width="40%"><strong>Page Content</strong></td>
				<td style="border-bottom:1px solid" width="5%"><strong>Page Status</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Operations</strong></td>
			  </tr>
			  

	<?php	
	
		$sql="SELECT * FROM tblpages";
		$result=mysqli_query($connection,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
                          <?php
                          
                          echo($row['pageTitle']);
                          
                          ?>
			<tr style="border-bottom:1px solid">
                            <td style="border-bottom:1px solid"> <?php echo $row["pageId"]; ?> </td>
			<td style="border-bottom:1px solid"><?php echo $row["pageName"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["pageTitle"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["pageContent"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["pageStatus"]; ?></td>
			<td style="border-bottom:1px solid">
			<a href="edit-page.php?pId=<?php echo $row["pageId"]; ?>">Edit</a> | 
			<a href="delete-page.php?pId=<?php echo $row["pageId"]; ?>">Delete</a></td>
		  </tr>
			<?php
			}
		} 
	?>
	
			
			</table>
	</td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <tr>
    <td align="center" >Copyright Webeng</td>
  </tr>
</table>
