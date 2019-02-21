	
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>

</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(e){
			 var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    e.preventDefault();
		})
	})
</script>
</head>
<body style="background-color: #0e3997;"> 
	<nav class="navbar navbar-expand-sm fixed-top" style="background-color: white;">
		<a class="navbar-brand" href="index.php"><img src="../img/logo.png" alt="Logo" style="width:70px;"></a>
	</nav>
	<div class="container-fluid">
	<div class="row">
<div class="col-lg-6 col-sm-6 text-center offset-3  vertical-center" style="margin-top: 200px;">
		<div class="card">

	<h1 style="font-weight: bold;color: black;" class="text-center">Exam</h1>

	<form action="reg_b.php" method="post">
	<div class="form-group">
		<label for="email">Username:</label>
		<input type="text" name="uname" class="form-control" placeholder="Username" required style="width:300px;margin-left: 150px;"/>
	</div>
	<div class="form-group">
			<label>Password:</label>
			<input type="password" name="pass" class="form-control" placeholder="Password" required style="width:300px;margin-left: 150px;" />
	</div><center>
<input name="submit" type="submit" value="Register" class="btn btn-primary" /></center>
</form>
<br>
<br>
<a href="login.php">Login from here</a>

</div>
<!-- <p>Not registered yet? <a href='signup.php'>Register Here</a></p></center> -->
</div>
</div>
</div>
</body>
</html>
