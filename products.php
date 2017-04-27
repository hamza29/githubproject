<?php
include_once './includes/top.php';


?>
    </head>     
    <body class="container">
        <?php
        include_once './includes/header.php';
        ?>
        <?php
        include_once './requires/connection.php';
          $sql="SELECT * FROM tblproducts";
		$result=mysqli_query($connection,$sql);
		
		if (!$result) 
		{
                    die("not found ");
                }
                else {
                    while($row = mysqli_fetch_array($result))
			{
                            $prid= $row['productid']; 
                            $productName	= $row['productName']; 
$productPrice	= $row['productPrice']; 
$productCode	=  $row['productCode']; 
$productInstock	= $row['productInstock'];
$productDiscount=  $row['productDiscount']; 
$productSizes	= $row['productSizes']; 
$productDetails	=  $row['productDetails'];
$img=$row['image'];
//echo "<h1 style='color:black'> image is ".$row['image']."</h1>";

echo"<div class='row'>
  <h2>$productName:</h2>
 
                <div class='col-md-4'>
                    
                    <a href='productsdetails.php?pro_id=$prid'>   <img class='thumbnail product_img '  src='images/uploads$img' alt='image' height='200px'width='250px'> </a>
            
                </div>
                </div>";
                }
                
                        }


?>            
               <!-- <div class="row">
  
   <h2>OUTDOORS :</h2>
                <div class="col-md-4">
                    
                    <a href="productsdetails.php?pr_id=$prid.">   <img class=" thumbnail product_img"  src="images/uploads" alt="woodenchairs" height="200px" width="250px"> </a>
                <p>   Terrace Chairs</p>
                </div>
                <div class="col-md-4">
                   <a href="productsdetails.php"> <img  class="  thumbnail product_img"  src="images/uploads" alt="woodenchairs"  height="200px" width="250px"></a>
              <p>   Lawn Chairs</p>
                </div>
                <div class="col-md-4">
                    <a href="productsdetails.php"><img class="  thumbnail product_img"  src="images/uploads" alt="woodenchairs"  height="200px" width="250px"></a>
                    <p>  Terrace Chair</p>
                </div>
                
            <!--</div>
              <div class="row">
  

                <div class="col-md-4">
                    
                    <a href="productsdetails.php">   <img class=" thumbnail product_img"  src="images/terace6.jpg" alt="woodenchairs" height="200px" width="250px"> </a>
                <p>   Terrace Chairs</p>
                </div>
                <div class="col-md-4">
                   <a href="productsdetails.php"> <img  class="  thumbnail product_img"  src="images/terace5.jpg" alt="woodenchairs"  height="200px" width="250px"></a>
              <p>   Lawn Chairs</p>
                </div>
                <div class="col-md-4">
                    <a href="productsdetails.php"><img class="  thumbnail product_img"  src="images/terace3.jpg" alt="woodenchairs"  height="200px" width="250px"></a>
                    <p>  Terrace Chair</p>
                </div>
                
            </div>
         
            
            <div class="row">
                <h2 >
                   BED ROOMS :
                </h2>
                <div class="col-md-4">
                    <a href="productsdetails.php"><img  class="  thumbnail product_img"  src="images/bed1.jpg" alt="beds" height="200px" width="250px"></a>
                 <p>   Bed Style 1</p>
                </div>
                <div class="col-md-4">
                    <a href="productsdetails.php">  <img class=" thumbnail product_img"  src="images/bed3.jpg" alt="beds"  height="200px" width="250px"></a>
                 <p>   Bed Style 2</p>
                </div>
                <div class="col-md-4">
                    <a href="productsdetails.php"> <img class="  thumbnail product_img"  src="images/bed2.jpg" alt="beds" height="200px" width="250px"> </a>
                 <p>   Bed Style 3</p>
                </div>
                
            </div>
             
             <div class="row">
                 <h2>
                   DINING :
                 
                 </h2>
                <div class="col-md-4">
                    <a href="productsdetails.php">    <img  class="thumbnail product_img"  src="images/din1.jpg" alt="woodentable" height="200px" width="250px"> </a>
                  <p>   Dinning Style 1</p>
                </div>
                <div class="col-md-4">
                    <a href="productsdetails.php">  <img class="thumbnail product_img "  src="images/din3.jpg" alt="woodentable"  height="200px" width="250px"> </a>
                  <p>   Dinning Style 2</p>
                </div>
                <div class="col-md-4">
               <a href="productsdetails.php">      <img class="thumbnail product_img "  src="images/wood8.jpg" alt="woodentable"  height="200px" width="250px"></a>
                  <p>   Dinning Style 3</p>
                </div>
                
            </div>
             <div class="row">
                 
                <div class="col-md-4">
                    <a href="productsdetails.php">    <img  class="thumbnail product_img"  src="images/kitchen.jpg" alt="woodentable" height="200px" width="250px"> </a>
                  <p>   Dinning Style 1</p>
                </div>
                <div class="col-md-4">
                    <a href="productsdetails.php">  <img class="thumbnail product_img "  src="images/wood6.jpg" alt="woodentable"  height="200px" width="250px"> </a>
                  <p>   Dinning Style 2</p>
                </div>
                <div class="col-md-4">
               <a href="productsdetails.php">      <img class="thumbnail product_img"  src="images/wood7.jpg" alt="woodentable"  height="200px" width="250px"></a>
                  <p>   Dinning Style 3</p>
                </div>
                
            </div>-->
<!--<

                }
                
                        }
           
           
           
           
-->
<br/>
<br/>
<br/>
<br/>
<br/>
<footer class="row">
<?php

include_once './includes/footer.php';
?>
</footer> 
        </div>
    </body>
</html>
