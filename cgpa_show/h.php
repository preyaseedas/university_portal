<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("Location: ../student_login/index.php");
    exit;
}

$reg_no = $_SESSION['student']; // Retrieve the registration number from session
?>

<html> 
<head> 
    <title>Student | Fetch cgpa</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>  
<body> 
    <center style="margin-top: 5%"> 
        <div style="width: 500px"> 
            <h2>Welcome, student</h2>

            <form action="cgpa.php" method="POST" style="margin-bottom: 20px;">
    
                <button type="submit" class="btn btn-primary">view CGPA</button>
            </form>
        </div> 
    </center>
</body> 
</html>
