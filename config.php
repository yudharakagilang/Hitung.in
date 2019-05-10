<?php

	$mysqli = mysqli_connect("localhost", "root", "", "hitungin");
    
    if (!$mysqli){
        die("Database Connection failed: " . mysqli_connect_error());
    }
	else {
        session_start();
	}
?>