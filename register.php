<?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "taw";

        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);

	    if($con->connect_error){
		echo "$con->connect_error";
		die("Connection Failed : ". $con->connect_error);
	    }

?>