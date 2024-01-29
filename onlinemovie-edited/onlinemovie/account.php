<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>DAWN-Account</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
             <span class="navbar-text">DAWN</span>

             <ul class="navbar-nav">

               <li class="nav-item"> <a href="homepage.php" class="nav-link">Home</a> </li>

               <li class="nav-item"> <a href="logout.php" class="nav-link">Logout</a> </li>
             </ul>


         </nav>

      </header>

      <div class="container">
        <?php
              $conn = mysqli_connect("localhost","root","","main_db");
              if(! $conn ) {
                  die('Could not connect: ' . mysqli_error());
               }
              $host = 'localhost';
              $dbname = 'main_db';
              $user = 'root';
              $pass = '';
              
              $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
              
              $pdo = new PDO($dsn, $user, $pass);
              
              // set error mode to exceptions
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $record_id = $_SESSION['id'];
              $sql = "SELECT subs FROM user1 WHERE id = :id";
              $stmt = $pdo->prepare($sql);
              $stmt->execute(['id' => $record_id]);
              $row = $stmt->fetch();
              $subs = $row['subs'];
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Enter full name' name='fname' value='".ucwords($result['name'])."'>
          <br>
          <input type='text' class='form-control' placeholder='Enter mobile number' name='phn' value='".$result['phone']."'>
          <br>
          <label><b>Date of Birth : </b></label>
          <input type='text' class='from-control' placeholder='Enter Date of Birth' name='dob' value='".$result['DOB']."'><br>";
      if($subs==1){
        echo" 
        <br><form  action='update.php' method='POST'>
      <label><b> Subscription : PREMIUM ACCOUNT</b></label>";
      }
      elseif($subs==0){
        echo" 
        <br><form  action='update.php' method='POST'>
      <label><b> Subscription : NO CURRENT PLAN</b></label>";
      }
      


              echo" <form  action='update.php' method='POST'>
               <div class='signupbutton'>
                <br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>

              </div>
              </form>

              <br><br>

              <label><b>Email Id : </b>".$result['email']."</label>
              <br><br>
              <a href='accountp.php'>Change Password</a>



              ";
         ?>




      </div>

    </body>

  </html>
