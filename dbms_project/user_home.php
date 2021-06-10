<?php
 //session_start();
include('connection.php');
include('login.php');
?>

<html>
    <head>
        <title> user_home</title>
        <link rel="stylesheet" href="user_home.css"/>
    </head>
    <body>
        <div class="down">
           <br><br><br>
           <h1>Welcome <?php echo " <span style = 'color:gold;'> ".$_SESSION['name']." </span> " ; ?> to Movie Ticket Booking System</h1><br>
           <hr>
            <ul>
              <a href="users_home.php">  <li> Home</li> </a>
              <a href="user_dash.php">  <li> Dashboard</li> </a>
              <a href="users_movie.php">  <li> Movies</li> </a>
              <a href="users_movie.php">  <li> Book Tickets</li> </a>
              <a href="user_booking.php">  <li> Bookings</li> </a>
              <a href="user_myaccount.php">  <li> My Account</li> </a>
              <a href="user_pass.php">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
            <h1> Introduction to Online Movie Ticket Booking</h1>
            <p class="intro"> 
                Online movie ticket booking system is the process by which customer can purchase their movie tickets directly using internet and pay through online banking.
                Online movie ticket booking system is measurable, cost effective and has very good user interface .This web based Asp.Net C# project provides the all working of the cinema ticket booking system.
            </p>
            <p class="intro">
                Customers with cinema website to know about new movies, show timings and cinema locations . Customer can buy tickets without wasting their time.

Cinema owner can inform to customers about new release and discounts and also can get feedback from customer. This feedback will be helpful for him to make new strategy for business.
            </p>
            <p class="intro">
                Online movie ticket booking system is basically made for providing the customers an anytime and anywhere service for booking cinema tickets and providing information about the movies and their schedule online.
                Admin can use Online Movie Ticket Booking System Project to insert and delete data such as movie description, movie schedule which will update the related webpage and will be accessible by the customers .
                Online Movie Ticket Booking System provide another way for the customers to buy cinema ticket.<br><br> This system reduces work load on customers ,it is an automatic ticket booking system.
                This system is basically aimed to provide complete information of the movie and schedule to the customer, according to which he can book the tickets.
            </p>

        </div>
    </body>
</html>