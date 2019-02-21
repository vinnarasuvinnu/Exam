<?php
session_start();
include('db.php');
$out=array();

$q2="select * from answer";
	$result=mysqli_query($db,$q2);

	while($row=mysqli_fetch_array($result)){

$atten=0;$totalquest=0;$correct=0;$wrong=0;

$uid=$row['uid'];
$q1="select fname from userinfo where uid='$uid'";
$res=mysqli_query($db,$q1);
$row3=mysqli_fetch_array($res);
$uname=$row3['fname'];
$sel=$row['selectedanswer'];
$ans=$row['allans'];

$data=json_decode($sel);
$data1=json_decode($ans);
$data=$data->result;
$data1=$data1->result;
//print_r($data);
//print_r($data1);


	foreach ($data as $key => $value) {
		$totalquest++;
		
			if($value != "x"){
				$atten++;
			}
		
				if($value==$data1[$key]){

					$correct++;
				}
				else{
					$wrong++;
				}



	}
	$out []=array('username'=>$uname,'all'=>$totalquest,'atten'=>$atten,'correct'=>$correct,'wrong'=>$wrong,'marks'=>$correct);

}


echo json_encode(array('result'=>$out));
?>