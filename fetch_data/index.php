<?php
include_once "../update_delete_data/conn.php";


$sql="select count('reg_no') from student";
$results=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($results);
$rows=$data[0][0];





$sql="select * from student";
$results=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($results);


?>

<html>
<head>
    <title>
       student| Fetch Data
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<center style="margin-top: 5%">


    <div style="width: 500px"><h2>STUDENT DATA</h2><br/>

        <table class="table table-hover">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Reg</th>
                <th scope="col">Roll</th>
                <th scope="col">CGPA</th>
                <th scope="col">Dept.</th>
            </tr>
        
         <?php
            for($i=0;$i<$rows;$i++){
            ?>

            <tr>
                <th> <?php echo $row[$i][0] ?></th>
                <td> <?php echo $row[$i][1] ?></td>
                <td> <?php echo $row[$i][2] ?></td>
                <td> <?php echo $row[$i][3] ?></td>
                <td> <?php echo $row[$i][4] ?></td>
                <td> <?php echo $row[$i][5] ?></td>
            </tr>

            <?php
                }
            ?>
          
        </table>

    </div>

<a href="../update_delete_data/index.php"> <button class="btn btn-primary">EDIT</button></a>
</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>