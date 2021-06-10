<?php
   include('connection.php');
   $phone = $_SESSION['b_phone'];
   $lis = "SELECT * FROM `Booking`";
 $rec=mysqli_query($con,$lis);
?>

<html>
    <head>
        <title> admin booking</title>
        <link rel="stylesheet" href="admin_booking.css"/>
    </head>
    <body>

        <div class="down">
           <h1> Movie Ticket Booking System</h1>
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
         
 <div class="creates">
          <h1 style = "color:cyan"> Bookings Statuses </h1><br><br>
           <table style="width:100%; font-weight: bold;">
              <thead>
                <tr>
                  <th> BID </th> 
                  <th> Movie </th>
                  <th> City </th>
                  <th> Phone Number</th>
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
                      <td> <?php echo $rows['Phone Number']; ?> </td>
                      <td> <?php echo $rows['Theater']; ?> </td> 
                      <td> <?php echo $rows['TIming']; ?> </td> 
                      <td> <?php echo $rows['Seats']; ?> </td> 
                      <td> <?php echo $rows['Amount']; ?> </td> 
                       <td >  <?php  echo $rows['Date'] ;?> </td> 
                         </tr>
                <?php  }  ?>
              </tbody>
            </table>
             </div>
        </div>
    </body>
</html>