<?php

$host        = "host = ec2-54-228-174-49.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dflortvvo307l5";
   $credentials = "user = hwmoqdvmjvljhr password=d13d6be7d2de8bde9552bdaa74a6ca5aad54fd48a3167e87ad9683d784e3add1";
   $db = pg_connect( "$host $port $dbname $credentials");
   

	 
	$name = $_GET['name'];
	$uname = $_GET['uname'];
	$email = $_GET['email'];
	$dob = $_GET['date'];
	$psw = $_GET['psw'];
	
	
	 $query = "INSERT INTO CLIENT_DETAILS(C_NAME, C_UNAME, C_EMAIL, C_DOB, C_PASS) values('$name', '$uname', '$email', '$dob', '$psw')";

	 if($result = pg_query($query))
		{
			echo "Added Successfully!";
                }
		else
		     {echo "Something went wrong!";}
	 
		
		 

?>