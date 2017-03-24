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
		 <form action="updatepagesponsori.php" method="GET" align="center">
		<h2><p id="titlu_adaugare">Modifica datele despre sponsorul cu numele :</p><br>
		
		
		Nume  : <input type="text" name="Nu"></h2><br><br>
		NumeNou: <input type="text" name="CursantID" ><br>
		Reclama: <input type="text" name="Nume" ><br>
		Domeniu: <input type="text" name="format" ><br>

		
		
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
  			  
			$query="UPDATE sponsori SET Nume='".$CursantID. "', Reclama='". $Nume ."',Domeniu='". $format ."' WHERE Nume='".$Nu."' ; " ;
			$result=executiequery($connection,$query); 
			 } 
}}}
			
						


?>

</body>
</head>
</html>