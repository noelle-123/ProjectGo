<?php
$firstname =$_POST['First name'];
$lastname =$_POST['Last Name'];
$age =$_POST['Age'];
$gender =$_POST['Gender'];
$emailaddress =$_POST['Email Address'];
$phonenumber =$_POST['Phone number'];
$conn = new mysqli('localhost','root','','details');
 if($conn->connect_error){
    die('connection Failed:' .$conn->connect_error);

}
 else{
    $stmt = $conn->prepare("insert into details(firstname,lastname,age,gender,emailaddress,phonenumber) values(?,?,?,?,?,?)");
    $stmt->bind_param("ss,$firstname,$lastname,$age,$gender,$emailaddress,$phonenumber);
    $stmt->execute();
    echo "Details entered Successfully--------";
    $stmt->close();
    $conn->close();

}
?>
