<?php
   include('db.php');
  session_start();

   $u= $_POST['uname'];
   $p= $_POST['pass'];
   $p=md5($p);
 $query = "SELECT * FROM `register` WHERE `uname`='$u' AND `password`='$p'";
    $result = mysqli_query($db,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1)
    {
      echo "1";
      $_SESSION['uname']=$u;
  }
  else{
   echo "your login is unsuccessful";
  }