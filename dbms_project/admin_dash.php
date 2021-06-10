<?php

echo'<!DOCTYPE html>
<html>
    <head>
        <title> admin_dashboard</title>
        <link rel="stylesheet" href="admin_dash.css"/>
    </head>
    <body>
        <div class="down">
           <h1> Movie Ticket Booking System</h1><br>
           <hr>
            <ul>
              <a href="admin_home.php" >  <li class="hm"> Home</li> </a>
              <a href="admin_dash.php" >  <li class="db"> Dashboard</li > </a>
              <a href="admin_addmovie.php" >  <li class="am"> Add Movie</li > </a>
              <a href="admin_movielist.php" >  <li class="ml"> Movies List </li > </a>
              <a href="admin_booking.php" >  <li class="bk"> Bookings</li > </a>
              <a href="admin_myaccount.php" >  <li class="ma"> My Account</li> </a>
              <a href="admin_pass.php" >  <li class="cp"> Change Password</li> </a>
              <a href="login.php">  <li class="lg"> Logout</li> </a>
            </ul>
            <div class="aa"> 
                <a href="admin_addmovie.php"><button class="b1">Add Movie</button> </a>
                <a href="admin_movielist.php"><button class="b1">Movies list</button> </a>
                <a href="admin_theater.php"><button class="b1">Add Theater</button> </a>
                <a href="admin_theaterlist.php"><button class="b1">Theater List</button> </a>
                <a href="admin_myaccount.php"><button class="b1">My Account</button> </a>
                <a href="admin_booking.php"><button class="b1">Bookings</button> </a>
                <a href="admin_pass.php"><button class="b1">Change Password</button> </a>
                <a href="login.php"><button class="b1">Logout</button> </a>  
                <img src="images/imgu1.jpeg" alt="movie"  width=400px height=400px/>
            </div>
    </body>
</html>'
?>