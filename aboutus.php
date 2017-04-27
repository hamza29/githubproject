<?php
include_once 'requires/connection.php'; 
include_once './includes/top.php';
?>
             
         </head>
          <body class="container">
     <?php
     include_once './includes/header.php';
     ?>             
             <div class="jumbotron">
                 <p>
                     
                      <?php 
                            if($_GET)
			
                                {
				
                                if($_GET['status']=='updated') echo "<span style='color:green'>Record Successfully Updated!</span>";
				
                                elseif($_GET['status']=='deleted') echo "<span style='color:green'>Record Successfully Deleted!</span>"; 
				
                                else "<span style='color:red'>Sorry There is some issue, Try Again</span>"; 
				
                                }?>
                     
                 </p>
            
			  

	<?php	
	
		$sql="SELECT * FROM tblpages";
		$result=mysqli_query($connection,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			
                         
                        
                        
			
                       
                        echo $row["pageContent"]; 
                        
                        
			
                        
			
		  
			
			}
		} 
	
	
	?>		
			
                 
                 <h2> About Buisness</h2>
            
                 
                 <!--
            <p class="para">
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
quality control and management systems, and the often low level of skills.   */
                     
                     
                 </p>
                 -->
                 
                 
             </div>
             
             
             
             
             
             
             
             
             
             
         </div>
             <footer class="row">
                 <?php
                      include_once './includes/footer.php';
                 
                 ?>
             </footer>
       
    </body>
</html>
