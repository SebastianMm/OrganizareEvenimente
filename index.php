<?php
session_start();
require_once("functii.php");
require_once("conexiune.php");
if(!isset($_SESSION["Logged"])) {
	header("Location: login.php");
} 

if(isset($_POST["submit"]) and $_POST["submit"]==="Cauta") {
	$query="SELECT * FROM bilete WHERE BiletID='{$_POST["id"]}'; ";
	$rezultat=executiequery($connection, $query);
 

} 
else{

 $query="SELECT * FROM bilete;";
 $rezultat=executiequery($connection, $query);
 
 $query="SELECT * FROM sponsori;";
 $rezultat3=executiequery($connection, $query);
 
 

 }
 if(isset($_POST["Logout"])) {
	unset($_SESSION["Logged"]);
		header("Location: login.php");

}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="style.css">
        <title>eventS</title>
    </head>

    <body>

        <div class="row header">
            <div class="logo col-md-10">

                <p class="titlu" style="text-align:center;"><img src="logo.png" alt="eventS" height="150" width="200" align="left"> eventS </p>

            </div>
            <div class="logout col-md-2 text-center">
                <form action="index.php" method="POST">
                    <input type="submit" name="Logout" id = "logoutButton" value="Logout" class="btn btn-primary ButonIesire">
				</form>
            </div>
            


        </div>

        <div class="row content">

			<div id="menu1">
                <!--<class="selected">-->
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="insertpagebilete.php">INSERT</a></div>
                     <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="updatepagebilete.php">UPDATE</a></div>
						<div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="deletepagebilete.php">DELETE</a></div>
                        <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogari.php">INTEROGARI</a></div>
                <!--</class="selected">-->
            </div>
			
            <div class="col-md-10 Bilete" id = "bileteContainer"> 
				<?php
				$string1="";
				while($bilet=mysqli_fetch_assoc($rezultat))
				{
					$string1.="<div class=\"Bilet\">";
					$string1.="<br><br><span class=\"Last\" > Pret:{$bilet["Pret"]}</span><br>";
					$string1.="<span class=\"First\" > Format: {$bilet["Format"]}</span><br>";
					$string1.="</div>";
				}	
				echo $string1;
				?>
            </div>
            
        </div>



        <div class="row header">
            <div class="logo col-md-10">

                <p class="titlu" style="text-align:center;"><img src="sponsorlogo.png" alt="eventS" height="180" width="200" align="left"> Sponsori </p>

            </div>
        </div>

        </div>

        <div id="menu2">
            <ul>
                <class="selected">

                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="insertpagesponsori.php">INSERT</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="updatepagesponsori.php">UPDATE</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="deletepagesponsori.php">DELETE</a></div>


                </class="selected">
            </ul>
        </div>
		
		<div class="col-md-10 Sponsori">
            <?php
	$string2="";
	//$string1="<ul>";
	while($sponsor=mysqli_fetch_assoc($rezultat3))
	{
		$string2.="<div class=\"Sponsor\">";
		$string2.="<span class=\"Cat\"> Nume:{$sponsor["Nume"]}</span><br>";
		$string2.="<span class=\"Dif\" > Domeniu: {$sponsor["Domeniu"]}</span><br>";
		
		
		$string2.="</div>";

	}
		//$string1.="</ul>";
	echo $string2;
	?>


    </body>

    </html>