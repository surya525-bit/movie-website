<?php
  $conn = mysqli_connect("localhost","root","","main_db");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
