<?php
session_start();
include("admin/db.php");
 echo '<body style="background: #0e3997;">';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$opt=$_POST['optradio'];
$cont=$_POST['cont'];
$email=$_POST['email'];
$board=$_POST['board'];
$yearofpass=$_POST['yearpass'];
$agg=$_POST['agg'];
$presel=$_POST['presel'];
$preyear=$_POST['preyear'];
$preagg=$_POST['preagg'];
$gregno=$_POST['gregno'];
$gsel1=$_POST['gsel1'];
$gsel2=$_POST['gsel2'];
$gsel3=$_POST['gsel3'];
$gcname=$_POST['gcname'];
$gcuname=$_POST['gcuname'];
$gpass=$_POST['gpass'];
$gcpga=$_POST['gcpga'];
$gaggri=$_POST['gaggri'];
$gsel4=$_POST['gsel4'];
$postreg=$_POST['postreg'];
$postsel1=$_POST['postsel1'];
$postsel2=$_POST['postsel2'];
$postsel3=$_POST['postsel3'];
$postcol=$_POST['postcol'];
$postuni=$_POST['postuni'];
$postyear=$_POST['postyear'];
$postcpg=$_POST['postcpg'];
$postagg=$_POST['postagg'];


$q1="INSERT INTO `userinfo` ( `fname`, `lname`, `dob`, `gender`, `contact`, `email`, `board`, `yearofpass`, `aggri`, `pboard`, `pyearofpass`, `pagri`, `universityregno`, `typeofdegree`, `degree`, `stream`, `College`, `university`, `gyearofpass`, `Cgpa`, `gaggri`, `mdgeree`, `muniversityregno`, `mtypeofdegree`, `mdegree`, `mstream`, `mCollege`, `muniversity`, `myearofpass`, `mCgpa`, `maggri`) VALUES ('$fname', '$lname', '2018-12-19', '$opt', '$cont', '$email', '$board', '$yearofpass', '$agg', '$presel', '$preyear', '$preagg', '$gregno', '$gsel1', '$gsel2', '$gsel3', '$gcname', '$gcuname', '$gpass', '$gcpga', '$gaggri', '$gsel4', '$postreg', '$postsel1', '$postsel2', '$postsel3', '$postcol', '$postuni','$postyear', '$postcpg', '$postagg')";
$res=mysqli_query($db,$q1);
if($res){
$_SESSION['uid']=$db->insert_id;

	echo '<script language="javascript">';
echo 'alert("your registration is successful");location.href="login.php";';
echo '</script>';

}else{

	echo '<script language="javascript">';
echo 'alert("your registration is unsuccessful");location.href="fin.php";';
echo '</script>';

}

?>