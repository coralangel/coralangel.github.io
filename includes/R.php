
<?php

include 'header.php';

?>
       
<main id="main">

	<section class="bread">
      <div class="container"> 
         <h1 class="BigCoteret">צור חשבון</h1> 
      </div>
   </section>

   <section class="about contor-bg" >
      <div class="container RformBox">

        <div class="row">
		            <div class="col-lg-6 contor-bg">
                  <form action="insertIntoDatabase.php" method="post">
                      <label for="username">שם משתמש</label><br>
                      <input type="text" name="username" placeholder="TheAmazingOr" required><br>
                      <label for="password">סיסמא</label><br>
                      <input type="password" name="password" placeholder="*********" required><br>
                      <label for="email">מייל</label><br>
                      <input type="text" name="email" placeholder="orR@gmail.com" required><br>
                      <label for="fullName">שם מלא</label><br>
                      <input type="text" name="fullName" placeholder="אור"><br>
                      <label for="age">גיל</label><br>
                      <input type="number" name="age" placeholder="27"><br>
                      <label for="phoneNumber">מספר טלפון</label><br>
                      <input type="number" name="phoneNumber" placeholder="0546688624"><br><br>
                      <h4> מין </h4>
                      <input type="radio" name="gender" value="גבר">
                      <label for="male" >גבר</label><br>
                      <input type="radio" name="gender" value="אישה">
                      <label for="female">אישה</label><br>
                      <h4> רמת משחק </h4>
                      <input type="radio" name="level" value="חובבן">
                      <label for="amt">חובבן</label><br>
                      <input type="radio"  name="level" value="בינוני">
                      <label for="mid">בינוני</label><br>
                      <input type="radio" name="level" value="מקצוען">
                      <label for="pro">מקצוען</label><br>
                      
                      <input type="reset" value="נקה טופס" id="submitA">
                      <input type="submit" value="שלח" id="submitA">
      
                 </form>
         </div>
  </div>
  </section><!-- End About Section -->
      
</main>
    
    
<?php

include 'footer.php';

?>