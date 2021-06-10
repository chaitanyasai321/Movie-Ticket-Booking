
<?php
include('connection.php');
 $lis = "SELECT * FROM `movies` order by `ReleaseDate` DESC ";
 $rec=mysqli_query($con,$lis);
 //$mov_rows= mysqli_fetch_array($rec);

?>

<html>
    <head>
        <title> admin_movielist</title>
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
              <a href="admin_booking.php">  <li> Bookings</li> </a>
              <a href="admin_myaccount.php">  <li> My Account</li> </a>
              <a href="admin_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
             <h1 style=" text-align: center; color:cyan  ; ">  Movie List</h1><br><br>
            <table style="width:100%; font-weight: bold;">
              <thead>
                <tr>
                  <th>         </th> 
                  <th> Movie Name </th>
                  <th> Language </th>
                  <th> Movie Type </th>
                  <th> Duration </th>
                  <th> Release date </th>
                  <th> Action</th>
                </tr>
                 </thead>
              <tbody>
                <?php 
                  while($rows= mysqli_fetch_array($rec)){
                ?>    
                    <tr>
                      <td><?php echo "<img src='movies/".$rows['Poster']."'   width=100px height=150px/>"; ?> </td>
                      <td> <?php echo $rows['Movie']; ?> </td> 
                      <td> <?php echo $rows['Language']; ?> </td> 
                      <td> <?php echo $rows['type']; ?> </td> 
                      <td> <?php echo $rows['Duration']; ?> </td> 
                      <td> <?php echo $rows['ReleaseDate']; ?> </td> 
                      <td>  <button class="edit"> edit </button>  </td> 
                         </tr>
                <?php  }  ?>
              </tbody>
            </table>
        </div>
    </body>
</html>

