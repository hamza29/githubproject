<?php
require 'includes/top.php';
?>
    </head>
    <body class="container">
        <?php
        require 'includes/header.php';
        ?>
<br/>

<br/>
<br/>
<br/>
       <?php
       include_once 'requires/connection.php';;
       $id=null;
       if(isset($_GET['pro_id']))
       {
           $pr_id=$_GET['pro_id'];
           $result=mysqli_query($connection,"SELECT * FROM tblproducts where productid=$pr_id");
           if(!$result)
               {
               die("no data ");
               
               
           }
 else 
     {
               
          
          while($row=mysqli_fetch_array($result))
          {
              
     $productName= $row['productName']; 
$productPrice	= $row['productPrice']; 
$productCode	=  $row['productCode']; 
$productInstock	= $row['productInstock'];
$productDiscount=  $row['productDiscount']; 
$productSizes	= $row['productSizes']; 
$productDetails	=  $row['productDetails'];
$img=$row['image'];
echo "<div id='details' class='row container '>
                 <div id='product_image' class='left col-md-4'>
                     <img class='thumbnail product_img'  src='images/uploads$img' alt='woodenchairs' height='200px'width='250px'> </a>
                 
</div>
                     <div class=' col-md-4 left '> 
                         <span class='product_detail'>
                             Product-Price : <b>$productPrice PKR.</b> 
                     
                         </span>
                         <br/>
                         <span class='product_detail'>
                             Product-code : <b>$productCode</b> 
                     </span>
                         <br/>
                         <span class='product_detail'>
                             Product-available : <b>Yes</b> 
                     
                    </span>
                <br/>
                         <span class='product_detail'>Disscount : <b>$productDiscount %.</b> 
                     
                     </span>
                         <span class='product_detail'> Available-size : 
                             <ul type='I'>
                                 <li >
                                    $productSizes
                                 </li>
                                 
                             </ul> 
                     </span>
                 </div>
             </div>
";   
              
              
          }
                  }
           
           
           
           }
       
       
       
       ?>    
           <!--  <div id="details" class="row container ">
                 <div id="product_image" class="left col-md-4">
                     <img src="images/din3.jpg" alt="dinningtable"  width="350px" height="300px"/>
                 </div>
                     <div class=" col-md-4 left "> 
                         <span class="product_detail">
                             Product-Price : <b>250000 PKR.</b> 
                     
                         </span>
                         <br/>
                         <span class="product_detail" >
                             Product-code : <b>P021SD-21</b> 
                     </span>
                         <br/>
                         <span class="product_detail">
                             Product-available : <b>Yes</b> 
                     
                    </span>
                <br/>
                         <span class="product_detail">Disscount : <b>10%.</b> 
                     
                     </span>
                         <span class="product_detail" > Available-size : 
                             <ul type="I">
                                 <li >
                                    small 
                                 </li>
                                 <li>
                                     large
                                 </li>
                                 <li>
                                     medium
                                 </li>
                             </ul> 
                     </span>
                 </div>
             </div>

<div  class="row jumbotron " id="paragraph">
    <h1 style="font-size: 40px">
        Product Details
    </h1>
    
    
                 <p id="paragraph">
                     Wooden furniture industries make a substantial contribution to development in tropical countries,
producing important economic benefits and playing a significant role in promoting economic growth. As
wood-processing industries such as the wooden furniture sector develop, they create employment (which
in turn expands the tax base in the country), generate a trained workforce, and contribute to the
development of physical and institutional infrastructure. These industries also contribute to foreign
exchange earnings and stimulate investment in a range of secondary support industries.
With the publication of the joint ITTO–ITC report Wooden Household Furniture: A study of major markets in
1990, ITTO producer members fully recognized the potential of the wooden furniture sector in the
context of sustainable development. However, given weaknesses in human resources and the absence of
efficient processing technologies and marketing capacity in many tropical countries, it is not surprising
that the current development of the wooden furniture sector remains less than optimal in many tropical
countries.
The opportunities and challenges for the further processing of tropical timber were analysed in another
joint ITTO–ITC report, Tropical Timber Products: Development of further processing in ITTO producer countries,
which was published in 2002. The recommendations of that report included the production of a series of
market research reports on wooden furniture in the main consumer markets of the United States, the
European Union, Japan and elsewhere in order to promote the development of further processing timber
sectors in tropical countries. The report also found a need to identify furniture networks and clusters for
the creation of wider knowledge among the players involved and of the inter-linkages and synergies
within the sector.
In order to update information on wooden furniture markets, ITTO commissioned ITC to conduct a
further study in 2002. This report presents the results of that study. It provides a wealth of information
including on the world’s eight leading furniture markets: United States, Japan, Germany, United
Kingdom, France, Canada, China, and Belgium, the Netherlands and Luxembourg, and the major
furniture markets of Spain, Italy, Denmark, Sweden and Egypt.
This report also outlines a strategy for developing the wooden furniture sector in tropical countries. It
predicts that the overall balance of furniture-making will move in favour of the southern hemisphere,
where a green ‘wall of wood’ is maturing in the plantations of the tropics, while natural forests will
continue to provide unique raw materials for the world’s furniture industry. In order to make full use of
the opportunity created by the coming availability of the plantation resources and the high-value niche
markets for natural hardwoods, the report suggests that developing countries need to overcome several
hurdles. These include changing economics of logistics, low productivity and efficiency, inadequate
quality control and management systems, and the often low level of skills.   
                     

                     
                     
                 </p>
</div>
             
<br/>
<br/>
<br/><br/>
<br/>
<br/>-->
         <footer class="row">
<div id="footer">
		<?php
                require 'includes/footer.php';
                
                ?>
             </footer>     
        </div>
    </body>
</html>
