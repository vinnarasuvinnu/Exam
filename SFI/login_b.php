<?php
session_start();
include('admin/db.php');

$pass=$_POST['pass'];
$date=$_POST['date'];


$q1="select * from Test where dateofT='$date' and pc_id in (select pc_id from Passcode where passcode='$pass')";
$res=mysqli_query($db,$q1);
if(mysqli_num_rows($res)>=1){

	$_SESSION['qpid']=$row['qp_id'];
	$_SESSION['date']=$date;
	$_SESSION['pass']=$pass;


echo "1";

}
else{
	echo "your date has not matched with the test";
}

?>