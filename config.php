<?php

	$conn = mysqli_connect('localhost','root','sangam@1999','sparks_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error - ".mysqli_connect_error());
	}

?>