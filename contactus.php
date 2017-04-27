<?php 
include_once './includes/top.php';

?>
    </head>
    <body class="container">
         <?php
         
         include_once './includes/header.php';
         
         ?>
                
        </div>
              
              
              <div class="container row" id="contact">
  <h2>Contact</h2>
  <form class="form-horizontal "  method="post" action="#" >
      <div class="col-md-8">
      <div class="form-group ">
      <label class="control-label col-sm-2" for="text">
          Name:</label>
      <div class="col-sm-10 formsize">
          <input type="text" class="form-control input_field"  name="name" placeholder="Enter Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control input_field" name="email" placeholder="Enter email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tel">Phone:</label>
      <div class="col-sm-10">
        <input  type="tel" class="form-control input_field" name="number" placeholder="Enter number"  required>
      </div>
    </div>
       <div class="form-group">
           <label class="control-label col-sm-2" for="Role">Role:</label>
      <div class="col-sm-10 radio-inline">
        
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input  type="radio" name="role"> Student  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input  type="radio" name="role"> Teacher 
      </div>
    </div>
        
      
      
      
    <div class="form-group">
        <label class="control-label col-sm-2" for="dropdown">City:</label> 
      <div class="col-sm-10 dropdown-header">
        <label style="margin-top: 5px;" ><select name="city">
                                  <option value="0">City</option>
                                  <option value="1">Lahore</option>
                                  <option value="2">Karachi</option>
                                 <option value="3">Islamabad</option>
                                 <option value="4">Peshawar</option>
                                 <option value="5">Faislabad</option>
                                 <option value="6">Multan</option>
                              </select></label>
      </div>
    </div>
      
       <div class="form-group">
        <label class="control-label col-sm-2" for="textarea">Message:</label> 
      <div class="col-md-12 formsize">
       
          <textarea style="margin-left: 00px; " id="message" placeholder="Enter text">
 
                                 

                             
           </textarea>   
      
      </div>
    </div>
      
        
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default">Send Message</button>
      </div>
    </div>
          </div>
  </form>
  
  
  
  
  <div class=" col-md-4 left">
                      <div id="address">
                          <b>   Address : </b>
                          <address>
                              
						4885 Main Boulevard<br>
                                                Gulberg, Lahore Pakistan.
                          </address>
                      </div>
      <br/>
      <br/>
      <br/>
      
                      <div class="maps">
                          <b>      Map : </b>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.8086819020346!2d74.37649051476009!3d31.52941418136662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919050c65cf88c7%3A0x640ecde6ca852c31!2sMall+Of+Lahore!5e0!3m2!1sen!2s!4v1488635564962" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>


                  </div>  
</div>
      
      
 
         <footer class="row">
<?php
include_once './includes/footer.php';

?>
             </footer>
    </body>
</html>
