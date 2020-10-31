<?php
$servername='localhost';
$username='root';
$password='root';
$dbname = "pbx";
try {   
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $CIN = $_POST['CIN'];
    $mail = $_POST['mail'];
    $born = $_POST['bron'];
    date_default_timezone_set("Europe/Paris");
    $insertdate = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO pbx3(first_name,last_name,phone,CIN,mail,born,datetime)
    VALUES ('$first_name', '$last_name','$phone','$CIN','$mail','$born','$insertdate')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
