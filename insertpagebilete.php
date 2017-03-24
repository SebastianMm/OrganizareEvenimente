<html>
<head>
  <title>eventS</title>
  <link href="style.css" rel="stylesheet">
<body>
	<div>	
	
		<div class="body1">
			<div class="search1">
		 
	<form action="insertpagebilete.php" method="GET">
		<h1><p id="titlu_adaugare">Adauga un nou bilet in baza de date:</p> 
		BiletID 	<input type="text" name="Me"><br><br>
		Pret   		<input type="text" name="Pr"><br><br>
		EvenimentID  		    <input type="text" name="Nu"><br><br>
		Format		<input type="text" name="St"><br><br>
		
	
	
	</h1>
<br>

		<input type="submit" value="Adauga">
		</form>
	</div>
</div>





</body>
</head>
</html>

<?php 
	 	require_once("conexiune.php");
        require_once("functii.php");
		if(isset($_GET['Me']) && isset($_GET['Pr'])&& isset($_GET['Nu']) && isset($_GET['St'])){
		if ($_GET['Me'] != "" && $_GET['Pr'] != ""&& $_GET['Nu'] != ""  && $_GET['St'] != "") 
			{
				$Me = $_GET['Me'];
				$Pr = $_GET['Pr'];
   				$Nu = $_GET['Nu'];
   				$St = $_GET['St'];
   				
			
				
				$query="INSERT into bilete (BiletID,Pret,EvenimentID,Format) 
						VALUES ('$Me','$Pr','$Nu','$St') ;" ;
		    }
	if (executiequery($connection,$query))
		{
		echo "succes";}}
?> 