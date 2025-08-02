<?php
include "include/header.php";
include "connect.php";
 ?>
 <link rel="stylesheet" type="text/css" href="style.css">

<center><h1>FALCON RESORT</h1>
   <center><img src="img/Resort.jpg" id="himg">

<br><br><br>


<div class="home">
  <form action="home.php" method="post">
      <div class="stars" > 
     <form action="home.php" method="post">
       <h2><center>Review</center></h2>
       <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
       <label class="star star-5" for="star-5"></label>
       <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
       <label class="star star-4" for="star-4"></label>
       <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
       <label class="star star-3" for="star-3"></label>
       <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
       <label class="star star-2" for="star-2"></label>
       <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
       <label class="star star-1" for="star-1"></label>
       <input type="text" class="starinput" name="Comment" placeholder="Comment">
       <input type="submit" class="starbutton" name="review"  value="Submit">
    </form>
   </div> 
   <?php

   if (isset($_POST['review'])) {
     //echo '<script type="text/javascript"> alert("review button click")</script>';

     $query = "INSERT INTO rating (star,comnt) VALUES ('".$_POST['star']."','".$_POST['Comment']."')";


     $query_run = mysqli_query ($con,$query);

     if ($query_run) {
         echo '<script type="text/javascript"> alert("Review Submitted")</script>';
     }
     else {
        echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
     }
   }

mysqli_close($con);

    ?>

      <div id="hdiscrp">
         <article >
            <h2><center>Description</center></h2>
            Welcome to FALCON RESORT, where luxury meets serenity. Nestled on the pristine shores of a secluded island, our resort offers an unparalleled escape 
            from the ordinary. Indulge in breathtaking ocean views from your private villa, each meticulously designed to blend modern elegance with island charm. 
            Immerse yourself in our world-class amenities, from rejuvenating spa treatments to exquisite dining experiences featuring locally sourced ingredients. 
            Whether you seek adventure or relaxation, Falcon Resort promises an unforgettable retreat tailored to your desires. Book your slice of paradise 
            today and discover the ultimate tropical getaway.
         </article>
         
      </div>
      
</div>


<div id="hbooknow">
   <center>
      <a href="room.php">Rooms</a>
      <a href="booking.php">Book Now</a>
   </center>
</div>


<?php
include "include/footer.php";
 ?>
