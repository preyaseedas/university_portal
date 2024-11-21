<?php

if(isset($_GET["student"])){
    if($_GET['student']==404){
        echo "
        <script>
        alert('Invalid Credentials !')
        </script>
        ";
    }
}

?>


<html>
    <head>
        <title>INSERT DATA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <center   style="margin-top: 5%">
            <h6>STUDENT LOGIN</h6>
            <form  method="post" action="login.php">
                <input type="text" placeholder="Reg no" name="reg_no" required >
                <input type="password" placeholder="Enter Password" name="password" required >
                <br/><input style="margin-top: 3%;border-radius: 0px;width: 100px" class="btn btn-primary" name="submit" type="submit" value="LOGIN">
                <p>Dont have account?<a href="../student_register/index.php">Register !</a></p>
           </form>
        </center>
    </body>
</html>