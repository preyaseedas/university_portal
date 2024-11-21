<?php
 // Include database connection file

$admin_id = $_POST['admin_id'];
$password = $_POST['password'];
include_once "conn.php";

$sql="select u_id,pass from admin where u_id='$admin_id ' and pass='$password'";


$results=mysqli_query($conn,$sql);

$data=mysqli_fetch_all($results);


if($u_id==$data[0][0] && $pass==$data[0][1]){
  
    $_SESSION['admin']=$admin_id;
    header("location: ../fetch_data/index.php");
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


