
<?php
include('connection.php');
 session_start();   
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
        header("location:admin_home.php");
       }
       else
       {
        echo "fail";
       }
       }
echo "!doctype html";
?>
<html>
    <head>
        <title> admin my account</title>
        <link rel="stylesheet" href="admin_myaccount.css"/>
    </head>
    <body>
        <div class="down">
           <h1>Welcome <?php echo $_SESSION['name']; ?> to Movie Ticket Booking System</h1><br>
           <hr>
            <ul>
              <a href="admin_home.php">  <li> Home</li> </a>
              <a href="admin_dash.php">  <li> Dashboard</li> </a>
              <a href="admin_addmovie.php">  <li> Add Movie</li> </a>
              <a href="admin_addmovie.php">  <li> Movies</li> </a>
              <a href="admin_booking.php">  <li> Bookings</li> </a>
              <a href="admin_myaccount.php">  <li> My Account</li> </a>
              <a href="admin_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
          </div>
 <div class="creates">
            <form action="" method="POST">
                <p>Name</p><input type="text" name="Name" placeholder="Enter Name" value= <?php echo $name ?> required>
                <p>Phone Number</p><input type="text" name="Phone_Number" minlength="10" placeholder= "Number without +91"  value= <?php echo $pn ?> required>
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
   
