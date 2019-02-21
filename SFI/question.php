<?php

session_start();
if(!isset($_SESSION['date'])){
	echo '<script>';
	echo 'alert("please do proceed with registration");location.href="fin.php"';
	echo '</script>';
}
;
$qpid=$_SESSION['qpid'];
$date=$_SESSION['date'];
$pass=$_SESSION['pass'];
$_SESSION['storetime']=0;

include('admin/db.php');

$q5="select * from Test where dateofT='$date' and pc_id in (select pc_id from Passcode where passcode='$pass')";

$res5=mysqli_query($db,$q5);
$add=0;
while($row=mysqli_fetch_array($res5)){
	$add=$add+(int)$row['etime'];

}
$finaltime=$add*60;
echo '<script>console.log("Thisis '.$finaltime.'")</script>';




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Questionaire</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style type="text/css">
	body,html{
		height:100%;
		background: #0e3997;
	}
	.button {
		background-color: #4881ff;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: bolder;
		display: inline-block;
		font-size: 16px;
		box-shadow: 0px 8px 15px #0e2351;
		transition: all 0.3s ease 0s;
		cursor: pointer;
		outline: none;
	}
	.button:hover {
		background-color: #4881ff;
		box-shadow: 0px 15px 20px #1c46a3;
		color: #fff;
		transform: translateY(-3px);
	}
	.bg-dark{
		background-color: #fff !important;

	}
</style>
<script type="text/javascript"> 

	var seconds=0;




	function my_onkeydown_handler( event ) {	
    switch (event.keyCode) {
        case 116 : // 'F5'
            event.preventDefault();
            event.keyCode = 0;
            window.status = "F5 disabled";
            break;
    }
}
document.addEventListener("keydown", my_onkeydown_handler);






function checkval(){
	localStorage.removeItem('countsecond');

	localStorage.clear();
	return true;
}


var j=0;
var listofquestion=[];
	$(document).ready(function(){









			$.ajax({
			type: "post",
			url: "data.php",
			data: {},
			success: function (data) {
				console.log(data);
				var data=JSON.parse(data);
				console.log(data);
				var i=0
				var size = Object.keys(data).length;
					listofquestion=data[0];
					console.log(listofquestion[1]);

			
/*        						console.log("this is the logic:"+listofquestion);
*/ 

			}
		});
	})
	if(localStorage.getItem('countsecond') == null){

	seconds =<?php echo $finaltime; ?>;
}
else{
	seconds=parseInt(localStorage.getItem('countsecond'));
}

	function secondPassed() {
		var minutes = Math.round((seconds - 30)/60),
		remainingSeconds = seconds % 60;

		if (remainingSeconds < 10) {
			remainingSeconds = "0" + remainingSeconds;
		}

		document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
		if (seconds == 0) {
			clearInterval(countdownTimer);
             //form1 is your form name
             $('#sub').click();
         } else {
         	seconds--;
         }
         localStorage.setItem('countsecond',seconds);
        
     }
     var countdownTimer = setInterval('secondPassed()', 1000);
   /*  $(document).ready(function(){
     	setTimeout(function(){
     		$('#sub').click();
     	},3000);
     })*/

	
	window.setInterval(function(){
if(navigator.onLine){


	if(localStorage.length == 0){
	console.log("system online");
}
else{
	if(j==0){


		$('#danger1').hide();
	$('#success1').show();
	setTimeout(function(){
		$('#success1').fadeOut();
	},3000)

			for(var i=0;i<listofquestion.length;i++){

$('input[value="'+localStorage.getItem(listofquestion[i])+'"]').prop("checked",true)

}
}
j++;

}
	}
	else{



		$('#danger1').show();
	$('#success1').hide();
	setTimeout(function(){
		$('#danger1').fadeOut();
	},3000)



		var val;
		for(var i=0;i<listofquestion.length;i++){
			try{

		val = document.querySelector('input[name = "'+listofquestion[i]+'"]:checked').value;
		console.log(val);
	}
	catch(err){
		val=null;
		console.log("something went wrong");

	}
		if(val != null){
		localStorage.setItem(listofquestion[i],val);
	}


		}
	}

		},5000)	
	var mylist={};


	
$(document).ready(function(){
	$('#success1').hide();
	$('#danger1').hide();

})


 </script>


</head>
<body onload="checkRefresh()">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<div class="alert alert-success" id="success1">
  <strong>Success!</strong> your system is online and your datas are retrived


</div>
<div class="alert alert-danger" id="danger1">
  <strong>Danger!</strong> your internet went offline so unless please do refresh your page when your system comes back to online to get back your data
</div>
		<!-- <ul class="navbar-nav ml-auto mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#" >&nbsp;&nbsp;&nbsp;</a>
			</li>
			<li class="nav-item">
				<center><a class="nav-link" href="#" style="color: red !important"> </a></center>
			</li>
		</ul> -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
							<p>Total Time Remaining <b><time id="countdown">25:00</time></b></p>


			</li>
			
		</ul>
	</nav>








	<div class="row justify-content-center align-items-center">
		<div class="col-lg-8"  style="background: #fff !important; box-shadow: 0px 8px 15px #0e2351; padding: 40px; margin-top: 80px">
			<h4 style="font-weight: bold">Attempt all the questions, there is no negative marking for this Test</h4>


			<form action="submitform.php" method="post" id="form1" onsubmit="checkval();">
				<?php
				include('admin/db.php');
				$q1="select * from Test where dateofT='$date' and pc_id in (select pc_id from Passcode where passcode='$pass')";

				$res=mysqli_query($db,$q1);
				$i=1;
				while($row1=mysqli_fetch_array($res)){
						$qpid=$row1['qp_id'];



					$q1="select * from Questions where qp_id='$qpid'";
					$result=mysqli_query($db,$q1);
					while ($row=mysqli_fetch_array($result)) {



									


				?>
				<h5 style="font-weight: bold">Q<?php echo $i; ?> . <?php echo $row['q_name'];?> ?</h5>
				<input type="radio" name="<?php echo $row['q_id']; ?>" value="<?php echo $row['opt1']; ?>">&nbsp;&nbsp;<?php echo $row['opt1']; ?><br>
				<input type="radio" name="<?php echo $row['q_id']; ?>" value="<?php echo $row['opt2']; ?>">&nbsp;&nbsp;<?php echo $row['opt2']; ?><br>
				<input type="radio" name="<?php echo $row['q_id']; ?>" value="<?php echo $row['opt3']; ?>">&nbsp;&nbsp;<?php echo $row['opt3']; ?><br>
				<input type="radio" name="<?php echo $row['q_id']; ?>" value="<?php echo $row['opt4']; ?>">&nbsp;&nbsp;<?php echo $row['opt4']; ?><br>
				<input type="hidden" name="questionid" value="<?php echo $row['q_id']; ?>">
				<br>
				<?php
				$i++;
			}
			}
			?>

				<br><br>
				<center>
				<input type="submit" id="sub" name="submit" value="Submit Quiz" class="button" style="
				box-shadow: none !important">
			</center>
			</form>
			<br>
			<br>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
