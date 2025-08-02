<link rel="stylesheet" href="css/review.css">
<?php
 include "include/header.php";
 include_once "connect.php";

 if(!mysqli_connect_errno())
 {
   $reviews = mysqli_query($con, "SELECT * FROM bestrating");
   mysqli_close($con);
 }
?>

<!-- <div class="stars" >
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
   </div> -->
   <br>
  <center><h1>Reviews</h1></center> 

   <table>
    <thead>
      <th>Stars</th>
      <th>Comments</th>
    </thead>

    <tbody>
      <?php

        foreach($reviews as $review)
        { ?>
          <tr>
            <td> <?php echo $review['star'];?></td>
            <td> <?php echo $review['comnt'];?></td>
          </tr>
          <?php

        };



       ?>
