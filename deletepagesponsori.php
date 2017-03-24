<!DOCTYPE html>
<html>

<head>
  <title>eventS</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
<div id="main">

<h1><center>eventS</center></h1> 
<h2><center>Organizare Evenimente</center></h2>
<div>	
	

	<div class="body1">
			<div class="search1">
		 
	<form action="deletepagesponsori.php" method="GET" align="center">
		<h2><p id="titlu_adaugare">Sterge un sponsor cu numele:</p><br>
		Nume  : <input type="text" name="Nu"></h2><br><br>
		<input type="submit" value="Sterge">
	</form>
	</div>
	
	

</div>
</div>
</div>
</body>
</head>
</html>



<?php
require_once("conexiune.php");
require_once("functii.php");
         if(isset($_GET['Nu'])){
		if ($_GET['Nu'] != "")
		{$Nu = $_GET['Nu'];
		$query5="DELETE  
 				FROM sponsori 
 				WHERE Nume='$Nu' ;" ;
 		}
 		if (executiequery($connection,$query5))
		{
		 echo "Am sters";
		} else 
		 echo "EROARE";}
?>