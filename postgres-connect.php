<h2>Attempting Postgres connection from php...</h2>

<?php


$host        = "host = ec2-54-228-174-49.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dflortvvo307l5";
   $credentials = "user = hwmoqdvmjvljhr password=d13d6be7d2de8bde9552bdaa74a6ca5aad54fd48a3167e87ad9683d784e3add1";
   $db = pg_connect( "$host $port $dbname $credentials");
   
if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Connected to database successfully\n";
   }

echo "<br>";

$name = $_GET['name'];
	$uname = $_GET['uname'];
	$email = $_GET['email'];
	$dob = $_GET['date'];
	$psw = $_GET['psw'];
	
echo $name;
echo $uname;
echo $email;
echo $dob;
echo $psw;

echo "<br><br>";

$sql =<<<EOF
      INSERT INTO STUDENT_DETAILS (C_NAME, C_UNAME, C_EMAIL, C_DOB, C_PASS)
      VALUES ('$name', '$uname', '$email', '$dob', '$psw');
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Record successfully added to database\n";
   }
   pg_close($db);
?>
