<?php
session_start();


include_once "../update_delete_data/conn.php";

$reg_no = isset($_POST['reg_no']) ? $_POST['reg_no'] : $_SESSION['student'];

if ($reg_no) {

    $sql = "SELECT name, reg, cgpa, dept FROM student WHERE reg = '$reg_no'";
    $results = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($results);
} else {
    $row = null; 
}
?>

<html> 
<head> 
    <title>Student | Fetch Data</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>  
<body> 
    <center style="margin-top: 5%"> 
        <div style="width: 500px"> 
            <table class="table table-hover"> 
                <tr> 
                    <th >Name</th> 
                    <th >Registration Number</th> 
                    <th >CGPA</th> 
                    <th >Department</th> 
                </tr> 

                <?php 
                if ($row) { 
                ?> 
                <tr> 
                    <td><?php echo ($row['name']); ?></td> 
                    <td><?php echo($row['reg']); ?></td> 
                    <td><?php echo ($row['cgpa']); ?></td> 
                    <td><?php echo ($row['dept']); ?></td> 
                </tr> 
                <?php 
                } else {
                ?> 
                <tr>
                    <td colspan="4" class="text-center">No record found for the provided registration number.</td>
                </tr>
                <?php 
                }
                ?> 
            </table>
        </div> 
    </center> 
</body> 
</html>