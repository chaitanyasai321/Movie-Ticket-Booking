<?php
 include('connection.php');
  $record= $_SESSION['row'];
  $email=$record['Email'];
  $email=stripcslashes($email);
  if(isset($_POST['update']))
  {
  	$pass=$_POST['password'];
  	$con_pass=$_POST['conf_password'];
  	    $pass=stripcslashes($pass);
  	    $con_pass=stripcslashes($con_pass);
  	if($pass != $con_pass)
  	{
  		header("location:user_pass.php");
  		//echo '<p> Password and Confirm-Password not matched <p>';
  	}
  	else
  	{
  		//$update = " update from `creating` set `Password`='".$pass."' WHERE `Email`= '".$email."' ";
  		$update = "UPDATE `creating` SET `Password`='$pass' ,`Confirm Password`='$con_pass' WHERE Email = '$email'" ;
  		$data = mysqli_query($con,$update);
       if($data)
       {
        echo "successful";
        header("location:user_home.php");
       }
       else
       {
        echo "fail";
       }
  	}
  }

?>
<html>
    <head>
        <title> user_pass</title>
        <link rel="stylesheet" href="user_pass.css"/>
    </head>
    <body>
        <div class="down">
           <h1>Welcome <?php echo $_SESSION['name']; ?> to Movie Ticket Booking System</h1><br>
           <hr>
            <ul>
              <a href="user_home.php">  <li> Home</li> </a>
              <a href="user_dash.php">  <li> Dashboard</li> </a>
              <a href="users_movie.php">  <li> Movies</li> </a>
              <a href="users_movie.php">  <li> Book Tickets</li> </a>
              <a href="user_booking.php">  <li> Bookings</li> </a>
              <a href="user_myaccount.php">  <li> My Account</li> </a>
              <a href="user_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
            </div>
        <div class="creates" >
          <h2> Enter your new Password  </h2> <br> <br>
             <form action="" method="POST">
                <p>New Password</p><br><input type="password" name="password" placeholder="Enter New Password" required>
                <p>Confirm New Password</p><br><input type="password" name="conf_password" placeholder="Re-Enter New Password" required>
                <br><br>
                <input type="submit" name="update" value="Update">
            </form>
           </div>
        </div>
    </body>
</html>