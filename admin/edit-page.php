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
		<td width="58%"><a href="welcome.php" 		style="text-decoration:none; color:#666666" >Login</a></td>
	  </tr>
	</table>

	</td>
  </tr>
  <tr>
  <?php	
		$pageId = $_GET['pId'];
		$sql="SELECT * FROM tblpages where pageid='$pageId'";
		$result=mysqli_query($connection,$sql);
		
		$count=mysqli_num_rows($result);
			
		if ($count > 0) 
		{
			$row = mysqli_fetch_array($result);
		} 
	
	?>
	
    <td height="463" align="center" valign="middle">
	<form name="myform" action="edit-process.php" method="post" >
	
	<table width="80%" border="0">
 
  </tr>
   <tr>
    <td height="34" colspan="2"><strong>Edit Page Record</strong></td>
  </tr>
   <tr>
    <td>Page Id</td>
    <td><input type="text" name="pageId" value="<?=$row["pageId"]?>" /></td>
  </tr>
  <tr>
    <td>Page Name</td>
    <td><input type="text" name="pageName" value="<?=$row["pageName"]?>" /></td>
  </tr>
   <tr>
    <td>Page Title</td>
    <td><input type="text" name="pageTitle" value="<?=$row["pageTitle"]?>" /></td>
  </tr>
   <tr>
    <td valign="top">Page Content</td>
    <td valign="top"><textarea cols="80" rows="15" name="pageContent"><?php $row["pagecContent"]?></textarea></td>
  </tr>
   <tr>
    <td>Page Status</td>
    <td><select name="pageStatus" >
		<option value="Y" <?php if($row["pageStatus"]=='Y') echo 'selected'; else ''; ?> >Published</option>
		<option value="N" <?php if($row["pageStatus"]=='N') echo 'selected'; else ''; ?> >Not Published</option>
		</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Edit Page" /></td>
  </tr>
</table>
</form>
	
	</td>
  </tr>
  <tr>
    <td align="center" >Copyright Webeng</td>
  </tr>
</table>
