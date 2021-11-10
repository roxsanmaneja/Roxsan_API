<?php
$servername = "127.0.0.1";
$username = "vienna";
$password = "Luke1:37";
$dbname = "activty";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO residents (firstname, lastname, email)
  VALUES ('Bevien', 'Pepito', 'bevienp@gmail.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>