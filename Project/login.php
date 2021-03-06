<?php
$conn = new mysqli("localhost", "marts", "Tin2martin", "martsdb1");
if (!$conn) {
    die("Connection failed:" . $conn->connect_error);
}
$request =file_get_contents('php://input');
$jsondata = json_decode($request,TRUE);



$luname = $jsondata["luname"];
$lpwrd = $jsondata["lpwrd"];

$query = $conn->prepare("SELECT * FROM users where Username = ?;");
$query->bind_param("s",$luname);
$query->execute();
$result = $query->get_result();

$row = mysqli_fetch_row($result);
if ($row[6] ===$lpwrd){
    
print json_encode($row);
}
else{
    print "null";
}
        
$conn->close();




?>