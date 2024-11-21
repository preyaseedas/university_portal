<?php
include_once("conn.php");

$name=$_POST["name"];
$reg_no=$_POST["reg_no"];
$roll=$_POST["roll"];
$dept=$_POST["dept"];
$password=$_POST["password"];

$sql="insert into student(name,reg,roll,dept,pass) values('$name','$reg_no','$roll','$dept','$password')";

$status=mysqli_query($con,$sql);


if(!$status){
    header("location:index.php?status=404");
}
else{
    header("location:index.php?status=200");
}

?>
