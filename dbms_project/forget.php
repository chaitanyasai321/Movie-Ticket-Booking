<?php
    include('connection.php');
    $password=null;
    if(isset($_POST['submit']))
    {
        $mail = $_POST['email'];
        $select= "select * from creating where Email='$mail' ";
        $data=mysqli_query($con,$select);
        $row= mysqli_fetch_array($data);
        $password=$row['Password'];
        if($password){

            echo "success";
        }
        else
            echo "fail";
    }

?>

<html>
    <head>
        <link rel="stylesheet" href="forget.css"/>
        <title> Forget_password</title>
    </head>
    <body>
        <div class="forget">
            <h2> Forgotten Your Password?</h2>
            <p> Don't worry, Enter your Email and you get your password link</p>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Enter Email" required>
                <input type="submit" name="submit" value="Continue" required>
                <h3> <?php if($password){echo 'Your Password is '; echo $password; } ?> </h3>
                <a href="login.php" > Return to log in </a>
            </form>
        </div>
    </body>
</html>
