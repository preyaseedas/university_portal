<?php
session_start();
if(isset($_GET["admin"])){
    if($_GET['admin']==404){
        echo "
        <script>
        alert('Invalid Credentials !')
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 100px; max-width: 400px;">
        <h3 class="text-center">Admin Login</h3>
        <form action="validation_admin.php" method="POST">
            <div class="mb-3">
                <label for="admin_id" class="form-label">Admin ID</label>
                <input type="text" class="form-control" id="admin_id" name="admin_id" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
