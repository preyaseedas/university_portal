<?php

$reg_no=$_POST['reg_no'];
$password=$_POST["password"];

include_once "../update_delete_data/conn.php";

$sql="select reg,pass from student where reg='$reg_no' and pass='$password'";


$results=mysqli_query($conn,$sql);

$data=mysqli_fetch_all($results);


if($reg==$data[0][0] && $pass==$data[0][1]){
    session_start();
    $_SESSION['student']=$reg_no;
    header("location: ../cgpa_show/h.php");
}
else{
    echo "
    <script>
    alert('Invalid Username or Password')
    window.location.href='index.php';
    </script>
    ";

}
?>