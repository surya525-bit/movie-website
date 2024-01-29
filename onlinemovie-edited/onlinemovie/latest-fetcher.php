<?php
include 'dbh.php';

  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);
  $subs = $row['subs'];
  $i=$count+300;
  $j=$count+700;
  $newim = "SELECT * FROM movies WHERE mid BETWEEN 1 AND 3" ;
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){
          echo"<form action='movie.php' method='POST'>";
      echo"<div class='col'>";
      echo "<img src='uploads/".$fetchr['imgpath']."' height='250' width='200' style='margin-top: 30px;margin-left:50px;margin-right:20px;' />";
        echo"<div class='noob'>";
          echo "<input type='submit' name='submit' class='btn btn-outline-warning'  style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:50px;margin-right:20px;' value='".ucwords($fetchr['name'])."'/>";
        echo"</div>";
      echo"</div>";
      echo"</form>";
    }
?>
