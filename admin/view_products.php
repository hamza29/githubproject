<?php 
 include_once '../requires/connection.php'; 
?>
<table style="background-color: lightgreen; font-family: serif " width="80%" border="1" align="center">
  <tr>
    <td height="77"<?php include("header.php"); 

if(isset($_SESSION['loggedin']))

 {
?></td>
  </tr>
  <tr>
    <td>
	<?php
 include_once 'nav.php';
 ?>

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
			
			<table style="background-color: lightgreen; font-family: serif " width="100%" border="0">
			  <tr>
				<td style="border-bottom:1px solid" width="10%"><strong>ProductId</strong></td>
                                
				<td style="border-bottom:1px solid" width="10%"><strong>ProductImg</strong></td>
				<td style="border-bottom:1px solid" width="10%"><strong>Product Name</strong></td>
                               
				<td style="border-bottom:1px solid" width="20%"><strong>Product Price</strong></td>
				<td style="border-bottom:1px solid" width="40%"><strong>Product Code</strong></td>
				<td style="border-bottom:1px solid" width="5%"><strong>Product InStock</strong></td>
                                
				<td style="border-bottom:1px solid" width="40%"><strong>Product Discount</strong></td>
				<td style="border-bottom:1px solid" width="5%"><strong>Product Size</strong></td>
                                
				<td style="border-bottom:1px solid" width="5%"><strong>Product details</strong></td>
                                
                                
				<td style="border-bottom:1px solid" width="5%"><strong>Product Image</strong></td>
                                
				<td style="border-bottom:1px solid" width="10%"><strong>Operations</strong></td>
			  </tr>
			  

	<?php	
	
		$sql="SELECT * FROM tblproducts";
		$result=mysqli_query($connection,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
                             
			?>
                          
			<tr style="border-bottom:1px solid">
                            <td style="border-bottom:1px solid"> <?php echo $row["productid"]; ?> </td>
			<td style="border-bottom:1px solid"><?php echo $row["productName"]; ?></td>
                        
			<td style="border-bottom:1px solid"><?php echo $row["productPrice"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productCode"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productInstock"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productDiscount"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productSizes"]; ?></td>
			<td style="border-bottom:1px solid"><?php echo $row["productDetails"]; ?></td>
                        <td style="border-bottom:1px solid">
                            
                            <img style="padding:40px;" src="../images/uploads<?php echo $row["image"]; ?>" alt="image not found" width="360" height="360">
                        
                        </td>     
                        <td style="border-bottom:1px solid">
                        <td style="border-bottom:1px solid">
                        <a href="edit_product.php?prId=<?php echo $row["productid"]; ?>">Edit</a> | 
			<a href="delete_product.php?prId=<?php echo $row["productid"]; ?>">Delete</a></td>
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
<?php

 }
 else{
     
     $_SESSION['notloggedin']='notloggedin';
     header('Location:index.php');
 }


?>