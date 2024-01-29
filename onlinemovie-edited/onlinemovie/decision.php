<?php
/*  session_start();
  if (isset($_POST['subs'])) {
    echo $_POST['subs'];
  } else {
    echo "subs is not set";
  }*/
  include 'dbh.php';

   $subs = $_REQUEST['subs'];
if($subs=='false')
{header("Location: subscription.php");}
else{
    define('BASEPATH', "foobar");
    include("subs.php");
}
?>