<?php 
//session_start();
include('connection.php');
if(isset($_POST['login']))
{
    $email=$_POST['Email'];
    global $email;
    $password=$_POST['Password'];
    $email=stripcslashes($email);
    $password=stripcslashes($password);
    $result="select * from creating where Email='$email' and Password='$password' ";
    $data=mysqli_query($con,$result);
    $row= mysqli_fetch_array($data);
   // global row;
    $_SESSION['row']=$row;  // in user_myaccount.php
    $name=$row['Name'];
    $_SESSION['name'] = $name; // in userpass.php
    global $name;
    if($row['Email']==$email && $row['Password']==$password)
    {
        echo "login success!!";
        if($row['Role']=='admin')
            header("location:admin_home.php");
        else
            header("location:user_home.php");
        exit;
    }
    else
    {
        echo "falied to login";
    }


}
?>
<html>
<HEAD>
    <link rel="stylesheet" href="mains.css"/>
    <title> MOVIE TICEKT BOOKING</title>
</HEAD>
<body>
    <div class="loginbox">
        <h2> MOVIE TICKET BOOKING</h2>
        <h1> LOGIN</h1>
        <form action= "" method="POST" >
        <p>Email</p>
        <input type="email" name="Email" placeholder="Enter Email" required>
        <p> Password</p>
        <input type="password" name="Password" placeholder="Enter Password" required>
         <input type="submit"  name="login" value="Login">
        <a href="forget.php"> Forget Password</a><br>
        <a href="signup.php"> Create new account</a>
        </form>
        
    </div>

</body>

</html>
