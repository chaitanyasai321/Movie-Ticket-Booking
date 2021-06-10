<?php
   include('connection.php');
   //$phone = $_SESSION['b_phone'];
      $caa=$_SESSION['row'];
      $caa_ema = $caa['Email'];
      //echo $caa_ema;
   $sele= "SELECT * FROM `creating` WHERE Email= '$caa_ema'";
   $rec1=mysqli_query($con,$sele);
   $rowss= mysqli_fetch_array($rec1);
   $phone = $rowss['Phone Number'];
   //echo $phone;
   $lis = "SELECT * FROM `Booking` WHERE `Phone Number`='$phone' ";
   //$lis = "SELECT * FROM `Booking`";
   $rec=mysqli_query($con,$lis);
   if($rec)
    echo "good";
  else
    echo "oh no";
?>

<html>
    <head>
        <title> user_booking</title>
        <link rel="stylesheet" href="user_booking.css"/>
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
         
 <div class="creates">
          <h1 style = "color:cyan"> Bookings Statuses </h1><br><br>
           <table style="width:100%; font-weight: bold;">
              <thead>
                <tr>
                  <th> BID </th> 
                  <th> Movie </th>
                  <th> City </th>
                  <th> Theater </th>
                  <th> Timing </th>
                  <th> Seats </th>
                  <th> Amount  </th>
                  <th> Date </th>
                </tr>
                 </thead>
              <tbody>
                <?php 
                  while($rows= mysqli_fetch_array($rec)){
                ?>    
                    <tr>
                      <td> <?php echo $rows['BID']; ?> </td> 
                      <td> <?php echo $rows['Movie']; ?> </td> 
                      <td> <?php echo $rows['City']; ?> </td> 
                      <td> <?php echo $rows['Theater']; ?> </td> 
                      <td> <?php echo $rows['TIming']; ?> </td> 
                      <td> <?php echo $rows['Seats']; ?> </td> 
                      <td> <?php echo $rows['Amount']; ?> </td> 
                      <td > <?php echo $rows['Date'] ;?> </td> 
                         </tr>
                <?php  }  ?>
              </tbody>
            </table>
             </div>
        </div>
    </body>
</html>
   