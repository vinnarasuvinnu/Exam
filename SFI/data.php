	<?php
	session_start();
	$qpid=$_SESSION['qpid'];
$date=$_SESSION['date'];
$pass=$_SESSION['pass'];
				include('admin/db.php');
				$q1="select * from Test where dateofT='$date' and pc_id in (select pc_id from Passcode where passcode='$pass')";

				$res=mysqli_query($db,$q1);
				$i=1;
				$output=array();
				while($row1=mysqli_fetch_array($res)){
						$qpid=$row1['qp_id'];



					$q1="select * from Questions where qp_id='$qpid'";
					$result=mysqli_query($db,$q1);

					while ($row=mysqli_fetch_array($result)) {


						array_push($output, $row['q_id']);





					}
				}
				echo json_encode(array($output));
				?>
