<?php
include('db.php');
$pid=$_POST['pid'];
$date=$_POST['date'];
$time=$_POST['time'];
$qpid=$_POST['qpid'];
$tname=$_POST['tname'];
$perc=$_POST['perc'];

//INSERT INTO `Test` (`tid`, `testname`, `dateofT`, `etime`, `qp_id`, `pc_id`, `percentage`) VALUES (NULL, '', '2018-12-11', '34', '7', '1', '343')
$q1="INSERT INTO `Test` (`testname`, `dateofT`, `etime`, `qp_id`, `pc_id`, `percentage`) VALUES ('$tname', '$date', '$time', '$qpid', '$pid', '$perc')";
$res=mysqli_query($db,$q1);
if($res){
	echo "Test is added successfully";
}
else{
	echo "Test is unsuccessful";
}
?>