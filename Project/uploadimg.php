<?php
$conn = new mysqli("localhost", "marts", "Tin2martin", "martsdb1");
if (!$conn) {
    die("Connection failed:" . $conn->connect_error);
    
}
$pname = $_POST["pname"];
$pid = $_POST["pid"];
$qty= $_POST["qty"];
$price = $_POST["price"];
$category = $_POST["category"];
$usrname = $_POST["uname"]; 
$pwrd = $_POST["pwrd"];
 /*"joel123";/*$jsonitem["usrname"]; */

$cquery = $conn->prepare("SELECT password,staff FROM users where Username = ?;");
$cquery->bind_param("s",$usrname);
$cquery->execute();
$result = $cquery->get_result();

$row = mysqli_fetch_row($result);
if ($row[0] ===$pwrd && $row[1] === 1){
    if( $_FILES['file']['name'] != "" ) {
        $path=$_FILES['file']['name'];
        $pathto="uploads/".$path;
        move_uploaded_file( $_FILES['file']['tmp_name'],$pathto) or die( "Could not copy file!");
    }
    else {
        die("No file specified!");}
    
    $query = $conn->prepare("INSERT INTO products(product_id,item,Avail_qty,price,category,img_path) VALUES (?,?,?,?,?,?)");
    
    $query->bind_param("isidss",$pid,$pname,$qty,$price,$category,$pathto);
    
    $query->execute();
    
    print "added to db";
}
else{
    print "null";
}echo $usrname;

$conn->close();

if(whatever_condition_set_true) {
    header('Location: additem.php');
    exit; 
}

?>
