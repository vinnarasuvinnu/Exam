<?php
if(!isset($_SESSION["email"])){
?>
<script type="text/javascript">
	alert('You will need to login to continue');
	window.location= "fin.php";
</script>
<?php
exit(); }
?>
