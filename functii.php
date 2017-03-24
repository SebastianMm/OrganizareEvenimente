<?php

function executiequery($connection,$query){

$result=mysqli_query($connection,$query);
if(!$result)
	die("Connection failed" . 
    mysqli_connect_error());
return $result;

}


?>