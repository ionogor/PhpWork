<?php
include ('db.php');

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$city=$_POST['city'];

$insert="insert into persons (LastName,FirstName,Address,City) values ('$lastname','$name','$address','$city')";

mysqli_query($CONNECT,$insert);
header("Location:index.php");
?>