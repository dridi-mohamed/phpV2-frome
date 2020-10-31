<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pbx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE pbx3 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
phone INT(8) NOT NULL,
CIN INT(8) NOT NULL,
mail VARCHAR(30) NOT NULL,
born DATE ,
datetime DATE,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Rtxai created successfully ..... Good Work";
} else {
  echo "you have Eruer go fixed: " . $conn->error;
}

$conn->close();
?>
