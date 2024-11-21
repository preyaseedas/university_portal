<?php
include_once "conn.php";

$reg_no=trim($_POST['reg_no']);
$roll=trim($_POST['roll']);
$name=trim($_POST['name']);
$dept=trim($_POST['dept']);
$cgpa=trim($_POST['cgpa']);
$password=trim($_POST['password']);

if(isset($_POST['del'])){

    $sql="delete from student where reg='$reg_no'";




    if(mysqli_query($conn,$sql)){
        header("location:index.php?status=201");
    }
    else{
        header("location:index.php?status=404");
    }

}
if(isset($_POST['update'])){
    $sql="update student set reg='$reg_no', roll='$roll',name='$name',dept='$dept', cgpa='$cgpa', pass='$password' where reg='$reg_no'";




    if(mysqli_query($conn,$sql)){
        header("location:index.php?status=200");
    }
    else{
        header("location:index.php?status=404");
    }
}