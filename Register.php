<?php
    include "connect.php";
    session_start();
    if(isset($_POST['sub'])) {
        $id=$_POST['Id'];
        $pass=$_POST['password'];
        $retype=$_POST[`Retype`];
        $qry="INSERT INTO `data`(`username' `email`,`password` 'retype') VALUES(`$name`,`$email`,`$pass`,`$retype`);";
        $res=mysqli_query($conn,$qry) or die("Error inserting");
        header(`location:home.php`);
?>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <div class="p">
                <h1>News Project</h1>
                <ul class="nav">
                    <li><a href="register9.php">Register</a></li>
                    <li><a href="login9.php">Login</a></li>
                </ul>
            </div>
    <div class="main-content">
        <h2>Register</h2>
    <form method="post" action="">
                Your Name<br> <br><input type="text" id="Your Name" name="Name"> </br><br>
                Email<br> <br><input type="Email" id="Email" name="Email"> </br><br
                Password<br> <br> <input type="text" id="Password" name="password"></br></br>
                Retype Password<br><br> <input type="text" id="Retype Password" name="Retype"></br></br>
                <input type="submit" name="sub" value="Click To Submit " class="bold"> 
    </form>
</div>
</body>
</html>

