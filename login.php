<?php
session_start();
require_once("functii.php");
require_once("conexiune.php");

if (isset($_POST["submit"]))
{
	$Utilizator=$_POST["Utilizator"];
	$Parola=$_POST["Parola"];
	$query="SELECT * FROM planneri WHERE Utilizator='{$Utilizator}' AND Parola='{$Parola}';";
	$rezultat=executiequery($connection, $query);
	$row=mysqli_fetch_assoc($rezultat);
	if ($row) {
		$_SESSION["Logged"]=true;
		header("Location: index.php");
	}
}
if(isset($_SESSION["Logged"])) header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logare</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<style type="text/css">
	form.form-nadina{
	width: 80%;
	margin: 50% auto;
}
	</style>
</head>
<body>
<div class="col-md-4">
	
</div>
<div class="col-md-4">
	<form action="login.php" method="POST" class="form-horizontal form-nadina" >
	<div class="form-group text-center">
	<label>
		Utilizator:<input type="text" name="Utilizator" class="form-control">

	</label>
	</div>
	<div class="form-group text-center" >
	<label>
		Parola:<input type="password" name="Parola" class="form-control">

	</label>
	</div>
	<div class="form-group text-center" >
	<input type="submit" name="submit" value="Logheaza-te" class="btn btn-primary ButonLogat">
	</div>
	</form>
</div>
<div class="col-md-4">
	
</div>

</body>
</html>