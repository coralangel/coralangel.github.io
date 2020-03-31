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
            <h1 class= "BigCoteret" >פרופיל אישי</h1>
     </div>
  </section>

 <section class="about contor-bg" >
  <div class="container">
   <div class="row">

          <div class="col-lg-6 pt-4 pt-lg-0 ">
		    
           <img src="../assets/img/myPic.jpg" alt="John" style="width:70%">
           <div class="overlay containerProfileImg">
           <div class="textOnImg">בחר תמונה</div>
           </div>
           
            
          </div>

		 <div class="col-lg-6 about contor-bg">
      <div class="carousel-item active">
        <div class="carousel-container">
                <p class= "ProfileBox">שם פרטי<p>
                <p class= "ProfileBox">שם משתמש</p>
                <p class= "ProfileBox">סיסמא</p>
                <p class= "ProfileBox">מייל</p>
                <p class= "ProfileBox">גיל</p>
                <p class= "ProfileBox">מספר טלפון</p>
                <p class= "ProfileBox">מין</p>
                <p class= "ProfileBox">רמת משחק</p>
                <p><button class= "SendFormRdiv" id="submitA">עדכון פרטים</button></p>
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