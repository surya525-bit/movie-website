

<?php
  session_start();
  include 'dbh.php';


    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $phn =  $_POST['phn'];
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $date = $_POST['date'];
    $subs = $_POST['subs'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."/".$month."/".$year;


    $sql = "INSERT INTO user1(username, passwd, name, phone, email, DOB, subs)
    values('$username','$password','$name','$phn','$email','$dob','$subs')";
    $result = $conn->query($sql);

    header("Location: user-login.php");
?>
