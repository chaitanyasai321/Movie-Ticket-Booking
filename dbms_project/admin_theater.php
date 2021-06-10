<?php
  include('connection.php');
   if(isset($_POST['submit']))
   {
      $theater = $_POST['theater'];
      $city = $_POST['city'];
      $movie = $_POST['moviename'];
       $insert = "INSERT INTO `Theater`(`Theater Name`, `City`, `Movie Name`) VALUES ('$theater' , '$city' , '$movie')";
       $data= mysqli_query($con,$insert);
       if($data)
        echo "theaters";
      else
        echo "no";

    }
?>

<html>
    <head>
        <title> admin_theater</title>
        <link rel="stylesheet" href="admin_theater.css"/>
    </head>
    <body>
        <div class="down">
           <h1> Movie Ticket Booking System</h1><br>
           <hr>
            <ul>
              <a href="admin_home.php">  <li> Home</li> </a>
              <a href="admin_dash.php">  <li> Dashboard</li> </a>
              <a href="admin_addmovie.php">  <li> Add Movie</li> </a>
              <a href="admin_movielist.php">  <li> Movies List </li> </a>
              <a href="admin_booking.php">  <li> Bookings</li> </a>
              <a href="admin_myaccount.php">  <li> My Account</li> </a>
              <a href="admin_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
            <h2><u> Add Theater</u></h2>
            <div class="detail">
            <form action="" method="POST" enctype="multipart/form-data" >
                <label for="theater">Theater Name</label><input type="text" name="theater" id="theater" required><br>
                <label for="city">City</label><select name="city" id="city" size=1 required>
                    <option value="Visakhapatnam"> Visakhapatnam</option>
                    <option value="Vijayanagaram"> Vijayanagaram</option>
                    <option value="Srikakulam"> Srikakulam  </option>
                    <option value="Vijayawada">Vijayawada</option>
                    <option value="Guntur">Guntur</option>
                    <option value="Rajamundry"> Rajamundry</option>
                    <option value="Tirupathi">Tirupathi</option>
                </select><br><br>
                <label for="moviename">Movie Name</label><input type="text" id="moviename" name="moviename" required><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
            </div>
        </div>
    </body>
</html>