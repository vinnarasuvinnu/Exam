<?php

session_start();
session_destroy();
?>


<html>

<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
height:100%;
		background: #0e3997;	}
</style>
<script type="text/javascript">
$(document).ready(function(){
	        localStorage.clear();

	setTimeout(function(){
		location.href="index.php";
	},3000);
})
</script>
</head>
<body>
	<nav class="navbar navbar-expand-sm fixed-top" style="background: white;">
		<!-- <ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
		</ul> -->
	</nav>
<div class="container" style="margin-bottom: 100px;">
	<div class="row">
		<div class="col-lg-6 offset-3 align-self-center" style="margin-top: 100px;">

			<div class="card">
				<h4 class="text-center">Note</h4>
			</div><br>
				<div class="card">
					<img src="img/w1.jpg" class="img-responsive">


				</div>

			
		</div>
	</div>
</div>
</body>
</html>