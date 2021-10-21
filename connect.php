<?php

$con = new mysqli("localhost","root","","crm");
if(!$con){
	die("Error".mysqli_error($con));
}
?>
