<?php
$conn = new mysqli("localhost", "marts", "Tin2martin", "martsdb1");
if (!$conn) {
    die("Connection failed:" . $conn->connect_error);
}
$request =file_get_contents('php://input');
$jsondata = json_decode($request,TRUE);


$fname = $jsondata["fname"];
$lname = $jsondata["lname"];
$phno = $jsondata["phno"];
$email = $jsondata["email"];
$uname = $jsondata["uname"];
$pwrd = $jsondata["pwrd"];
$staff = $jsondata["staff"];

$query = $conn->prepare("INSERT INTO users(FName,LName,Username,staff,ph_number,email,password) VALUES (?,?,?,?,?,?,?)");

$query->bind_param("sssisss",$fname,$lname,$uname,$staff,$phno,$email,$pwrd);

$query->execute();
$conn->close();



?>