<?php

include ('db.php');

$idUser=$_POST['id'];
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$address=$_POST['address'];
$city=$_POST['city'];


$update="update persons set LastName='$lastname',FirstName='$lastname',Address='$address', City='$city' where PersonID='$idUser' ";

echo $update;

mysqli_query($CONNECT,$update);
header("Location:index.php");

