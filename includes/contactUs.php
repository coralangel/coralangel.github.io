
<?php
//include auth_session.php file on all user panel pages
require('db.php');
include("auth_session.php");

?>

<?php

include 'header.php';

?>
  
        
  <main id="main">

		  <section class="bread">
      <div class="container">

        
         <h1 class="BigCoteret ">דברו איתנו</h1>
        
      </div>
    </section>
	
    <section class="about contor-bg">
	
	
      <div class="container">
	  
        <div class="row">
		

           <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
		   
		            <div class="col-lg-6">

      <div class="carousel-item active">
        <div class="carousel-container">
          <img class="imageOpacity" src= "../assets/img/pop1.png" >
        </div>
      </div>	
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
      
  </main>
    
<?php

include 'footer.php';

?>