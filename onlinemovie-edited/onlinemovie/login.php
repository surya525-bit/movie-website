<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DAWN</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000;">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           

            <ul class="navbar-nav">
			<li class="nav-item"> <a href="login.php" class="nav-link"> Home</a> </li>
              <li class="nav-item"> <a href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> SignIn</a> </li>
			  

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime... </h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> Dawn is available on Android phones and tablets running Android 2.3 or later. The current version of the dawn app requires Android version 7 or later.

Some older Android devices work with dawn but aren't able to download the dawn app from the Google Play Store. These devices may be able to get a version of dawn directly from us. If you can't find the dawn app in the Google Play Store on Android.
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> dawnnnn</p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br>   dawnnnn</p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    
  </body>
</html>
