
<?php
include('connection.php');
 $lis = "SELECT * FROM `Theater`";
 $rec=mysqli_query($con,$lis);
 //$mov_rows= mysqli_fetch_array($rec);

?>

<html>
    <head>
        <title> admin_theater_list</title>
        <link rel="stylesheet" href="admin_movielist.css"/>
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
              <a href="#">  <li> Bookings</li> </a>
              <a href="admin_myaccount.php">  <li> My Account</li> </a>
              <a href="admin_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
             <h1 style=" text-align: center; color:cyan  ; ">  Movie List</h1><br><br>
            <table style="width:100%; font-weight: bold;">
              <thead>
                <tr>
                  <th> Theater Name </th>
                  <th> City </th>
                  <th> Movie name</th>
                  <th> Action </th>
                </tr>
                 </thead>
              <tbody>
                <?php 
                  while($rows= mysqli_fetch_array($rec)){
                ?>    
                    <tr>
                      <td> <?php echo $rows['Theater Name']; ?> </td> 
                      <td> <?php echo $rows['City']; ?> </td> 
                      <td> <?php echo $rows['Movie Name']; ?> </td> 
                      <td>  <button class="edit"> edit </button>  </td> 
                <?php  }  ?>

              </tbody>
            </table>
        </div>
    </body>
</html>

