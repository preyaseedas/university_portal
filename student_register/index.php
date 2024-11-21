<?php 
if(isset($_GET["status"])) {
    if($_GET["status"]==200){
        echo"<script> 
        alert('Registration Sucessfull!');
        </script>";
    } 
    if($_GET["status"]==404) {
        echo"<script> 
        alert('Registration Failed !')"
        ;   
     }
    
}
?>


<html>
    <head>
        <title>INSERT DATA</title>
    </head>

    <body>
        <center   style="margin-top: 5%">
            <h6>STUDENT REGISTRATION</h6>
            <form  method="post" action="register.php">
                <input type="text" placeholder="Enter your name" name="name" required >
                <input type="text" placeholder="Reg No" name="reg_no" required >
                <input type="text" placeholder="Roll No" name="roll" required >
              <select name="dept" required>
               <option>SELECT DEPERTMENT</option>
                <option>B.tech</option>
                <option> MCA</option>
                <option> BCA</option>
              </select>
              <input type="password" placeholder="Create Password" name="password" required >
              <br/>   <br/>
              <button> Get Registered</button>
             <!--<input style="border-radius: 0px;width: 100px" class="btn btn-success"  type="submit" value="REGISTER"> -->

            </form>
        </center>
    </body>
</html>
