<?php
session_start();
echo '<body style="background-color:#0e3997">';
$uid=$_SESSION['uid'];
$date=$_SESSION['date'];
$pass=$_SESSION['pass'];
include('admin/db.php');
$q1="select * from Test where dateofT='$date' and pc_id in (select pc_id from Passcode where passcode='$pass')";
$i=0;
	$output=array();
	$allans=array();

$result=mysqli_query($db,$q1);
while($row1=mysqli_fetch_array($result)){
$qpid=$row1['qp_id'];
$q1="select * from Questions where qp_id='$qpid'";

$res=mysqli_query($db,$q1);
	while($row=mysqli_fetch_array($res)){
		$ans='';
		$qqid=$row['q_id'];
		$ans=$_POST[$qqid];
		$allans[$i]=$row['ans'];
		if($ans==''){
			$ans="x";
		}

		$output[$i]=$ans;
$i++;

	}

}

	$output=json_encode(array('result'=>$output));
	$allans=json_encode(array('result'=>$allans));
	//echo $output;

			$q2="INSERT INTO `answer` (`selectedanswer`, `uid`, `qid`,`allans`) VALUES ( '$output', '$uid', '$qpid','$allans');";
		$res1=mysqli_query($db,$q2);
		if($res1){
		echo '<script>';
		echo 'alert("your answeres are submitted succesfully");location.href="endres.php"';

		echo '</script>';
		}
		else{

		echo '<script>';
		echo 'alert("Some things went wrong with your submission");location.href="question.php"';

		echo '</script>';

		}


?>