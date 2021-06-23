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

$name = $_POST['name'];
	$dob = $_POST['date'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$mob = $_POST['mob'];

echo"<h4>Sending these detailes to the database:</h4>Name: $name<br> DOB: $dob<br> Email: $email<br> Passsword: $psw<br> Mobile: $mob<br>";

echo "<br><br>";

$sql =<<<EOF
      INSERT INTO STUDENT_DETAILS (S_NAME, S_DOB, S_EMAIL, S_PASS, S_MOB)
      VALUES ('$name', '$dob', '$email', '$psw', '$mob');
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Record successfully added to database\n";
   }
   pg_close($db);
?>
