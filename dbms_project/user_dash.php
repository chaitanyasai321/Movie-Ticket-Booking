<?php
//session_start();
include('connection.php');
?>
<html>
    <head>
        <title> user_dash</title>
        <link rel="stylesheet" href="user_dash.css"/>
    </head>
    <body>
        <div class="down">
           <h1> Movie Ticket Booking System</h1><br>
           <hr>
            <ul>
              <a href="user_home.php">  <li> Home</li> </a>
              <a href="user_dash.php">  <li> Dashboard</li> </a>
              <a href="users_movie.php">  <li> Movies</li> </a>
              <a href="users_movie.php">  <li> Book Tickets</li> </a>
              <a href="user_booking.php">  <li> My Bookings</li> </a>
              <a href="user_myaccount.php">  <li> My Account</li> </a>
              <a href="user_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
            <div class="aa"> 
                <a href="users_movie.php"><button class="b1">Movies</button> </a>
                <a href="users_movie.php"><button class="b1">Book Tickets</button> </a>
                <a href="user_booking.php"><button class="b2">My Bookings</button> </a>
                <a href="user_myaccount.php"><button class="b3">My Account</button> </a>
                <a href="user_pass.php"><button class="b4">Change Password</button> </a>
                <a href="login.php"><button class="b5">Logout</button> </a>  
                <img src="images/imgu1.jpeg" alt="movie"  width=400px height=400px/>
            </div>
    </body>
</html>
