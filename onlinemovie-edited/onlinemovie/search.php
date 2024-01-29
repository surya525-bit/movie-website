<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>DAWN-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000;padding-bottom:0px;padding-top:0px;">
            <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            


            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add movie</a> </li>
				  <li class='nav-item'> <a href='admin.php' class='nav-link'>Add genre</a> </li>";
				  
                }
              }
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>
                  <div class='nav-item'>
                  <li>
                  <form id='search-form' action='genre.php' method='POST' style='padding-top:10px;'>
                    <select  name='option' id='option' style='padding-bottom:2px;background-color:transparent;color:rgba(255,255,255,.5);font-size: 25px;  border: none;'>
                    <option selected style='background-color:black;color:rgba(255,255,255,.5);'>GENRE</option>
                      <option value='fiction' style='background-color:black;color:rgba(255,255,255,.5);'>FICTION</option>
                      <option value='adventure' style='background-color:black;color:rgba(255,255,255,.5);'>ADVENTURE</option>
                      <option value='horror'style='background-color:black;color:rgba(255,255,255,.5);'>HORROR</option>
                    </select>
                    </form>
                </div>
                <script>
                document.getElementById('option').addEventListener('change', function() {
                  document.getElementById('search-form').submit();
                });
              </script>
              </li>
              <div class='col' style='padding-left:175px;'>
                    <form action='search.php' method='POST' style='padding-top:10px;'>
                      <input type='text' placeholder='search by name . .' style='color:white;margin-left:10px;padding:5px;background-color: transparent;border-bottom: 1px solid #daa520;border-right: 1px solid #daa520;' name='textoption'>
                      <style>
::placeholder {
  color: rgba(255,255,255,.5);
  opacity: 1; /* Firefox */
}
</style>

                      <input type='submit' name='submit' class='btn btn-outline-warning' style='display:inline;height:28px;padding-top:1px;padding-bottom:1px;width:100px;margin-left:20px;margin-right:20px;' value='Search'/></h4>
                    </form>
                  </div>

              <div class='nav-item' style='padding-left:175px'> <a href='logout.php' class='nav-link'>Logout</a> </div>
                  </ul>
                  </nav>
                  <div class='container-fluid' style='height:500px'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);
                  ?>
                  <style>
		              #background-video {
			            position: fixed;
			            top: 0;
			            left: 0;
			            width: 50;
			            height: auto;
			            z-index: -1;
		              }
                  </style>
                  <video id="background-video" autoplay loop muted poster="images/back2.png" style="position: fixed; top: 0; left: 0; min-width: 100%; min-height: 100%; z-index: -1;">
                  <source src="video-uploads/background-video.mp4" type="video/mp4">
                  <source src="video-uploads/background-video.webm" type="video/webm">
                  </video>
              <?php
              echo"<h1 style='color:white;position:sticky;'>WELCOME </h1><b style = 'color: white;font-size: 25px'><i> ".ucwords($rel['name'])." !</i></b>
                  </div>
                  </header>
                  <section>
				  
				  
                <div class='jumbotron' style='margin-top:0px;margin-bottom:0px;border-radius:0px;padding-top:30px;padding-bottom:30px; background-color:#0D0D0D'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:black;font-size:30px;color:white; '>Recent :
                    <input type='submit' name='submit' class='btn btn-outline-warning' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='".ucwords($rel2['name'])."'/></h4>
                    </form>
                  </div>
                  
                </div>
                </div>";
                  ?>
      <div class="jumbotron"style="background-color: #0D0D0D;margin-top:0px;margin-bottom:0px;border-radius:0px;border-top: 2px solid #daa520;">
        <h2 style='margin-top:0px;padding-top:0px;'>Results : </h2>

            <?php
            include 'searchback.php';
            ?>

      </div>


  </section>
  
  </body>
</html>
