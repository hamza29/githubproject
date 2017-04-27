	<table style="background-color: lightgreen; font-family: serif " width="100%" border="0">
  <tr>
    <td width="64%"><h1>ADMIN SITE</h1></td>
	<?php
        session_start(); 
        ?>
    <td width="36%" align="right">Welcome <?php echo $_SESSION['myusername'] ?> | <a href="logout.php">
                Logout</a></td>
  </tr>
</table>