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
		 <form action="updatepagebilete.php" method="GET" align="center">
		<h2><p id="titlu_adaugare">Modifica datele despre biletul cu ID-ul:</p><br>
		
		
		ID  : <input type="text" name="Nu"></h2><br><br>
		Pret: <input type="text" name="CursantID" ><br>
		EvenimentID: <input type="text" name="Nume" ><br>
		Format: <input type="text" name="format" ><br>

		
		
		<input type="Submit" value="Modifica" >
			
		
	</form>
	</div>
	
	




					


<?php
require_once("conexiune.php");
require_once("functii.php");
if(isset($_GET['Nu'])){
    if ($_GET['Nu'] != ""){
		if(isset($_GET['CursantID'])&& isset($_GET['Nume'])&& isset($_GET['format'])){
    				if ($_GET['CursantID'] != "" && $_GET['Nume'] != ""&& $_GET['format'] != "" ) 
							{
		     $Nu=$_GET['Nu'];
  			 $CursantID = $_GET['CursantID'];
  			 $Nume = $_GET['Nume']; 
  			 $format=$_GET['format'];
  			  
			$query="UPDATE bilete SET Pret='".$CursantID. "', EvenimentID='". $Nume ."',Format='". $format ."' WHERE BiletID='".$Nu."' ; " ;
			$result=executiequery($connection,$query); 
			 } 
}}}
			
						


?>

</body>
</head>
</html>