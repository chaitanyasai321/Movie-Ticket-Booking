
<?php
include('connection.php');
 //session_start();   
      $record=$_SESSION['row'];
       $name=$record['Name'];
       $pn=$record['Phone Number'];
       $em=$record['Email'];
       $city=$record['City'];

       if(isset($_POST['update']))
       {
          $name=$_POST['Name'];
          $pn=$_POST['Phone_Number'];
          $emo=$_POST['Email'];
          $city=$_POST['city'];
          $update = " update `creating` set `Name`='".$name."',`Phone Number`='".$pn."',`Email`= '".$emo."' ,`City`= '".$city."' WHERE `Email`='".$em."' ";
          //$update = " UPDATE `creating` SET `Name`='$name',`Phone Number`='$pn' ',`Email`= '$emo' ,`City`= '$city' WHERE `Email`='$em' ";
          //$update ="update creating set Name='$name' `Phone Number`='$pn' Email='$emo' where Email='$emo' ";
          $data = mysqli_query($con,$update);
       if($data)
       {
        echo "successful";
       }
       else
       {
        echo "fail";
       }
       }
?>

<html>
    <head>
        <title> user my account</title>
        <link rel="stylesheet" href="user_myaccount.css"/>
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
 <div class="creates">
            <h2> UserAccount </h2>
            <form action="" method="POST">
                <p>Name</p><input type="text" name="Name" placeholder="Enter Name" value= <?php echo $name ?> required>
                <p>Phone Number</p><input type="text" name="Phone_Number" minlength="10" value= <?php echo $pn ?> placeholder= "Number without +91" required>
                <p>Email </p><input type="email" name="Email" placeholder="Enter mail" value= <?php echo $em ?> required>
               <p>City</p>
                <select name="city" size=1 value= <?php echo $city ?> required>
                    <option value="Visakhapatnam"> Visakhapatnam</option>
                    <option value="Vijayanagaram"> Vijayanagaram</option>
                    <option value="Srikakulam"> Srikakulam  </option>
                    <option value="Vijayawada">Vijayawada</option>
                    <option value="Guntur">Guntur</option>
                    <option value="Rajamundry"> Rajamundry</option>
                    <option value="Tirupathi">Tirupathi</option>
                </select><br><br>
                <input type="submit" name="update" value="Update">
            </form>
        </div>
    </body>
</html>
   
