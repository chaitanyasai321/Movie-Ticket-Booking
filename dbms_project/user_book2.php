<?php
  include('connection.php');

  if(isset($_POST['pay']))
   {
      $b_bid =  $_SESSION['b_bookingid'];
      $b_movie = $_SESSION['b_movie'];
      $b_city = $_SESSION['b_city'];
      $b_theater= $_SESSION['b_theater'];
      $b_timings = $_SESSION['b_timings'];
      $b_seats = $_SESSION['b_seats'];
      $b_phone = $_SESSION['b_phone'];
      $b_amount = $_SESSION['b_amount'];
      date_default_timezone_set('Asia/Kolkata');
      $b_date = date("d-m-Y h:i:sa") ;
      $_SESSION['b_date']=$b_date;
 $b_insert = " INSERT INTO `Booking`(`BID`, `Movie`, `City`, `Theater`, `TIming`, `Seats`, `Phone Number`, `Amount`, `Date`) VALUES( '$b_bid' , '$b_movie' , '$b_city' ,'$b_theater' , '$b_timings' , '$b_seats' , '$b_phone','$b_amount' , '$b_date' ) ";
      $data2=mysqli_query($con,$b_insert);
      if($data2)
        echo "success";
      else
        echo "try";
      header('location:print_ticket.php');     
   }
   else
    echo "hahaha";




?>

<html>
    <head>
        <title> user_booking</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="user_movie.css"/>
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
              <a href="#">  <li> Change Password</li> </a>
              <a href="login.php">  <li> Logout</li> </a>
            </ul>
<br> <br> 
<form action=""  method="POST">
   <h2> Paying Rupees <span style="color:gold" > <?php echo $_SESSION['b_amount'] ; ?>  </span> for <span style="color:gold" > <?php echo $_SESSION['b_seats']; ?> </span> Seats </h2>
  <label for="cdnum">CARD NUMBER:</label><br>
  <input type="text" id="cdnum" name="cnumber"placeholder="Enter 12 digits card Number:"  required ><br><br> <br>
  <label for="cdname">NAME OF THE CARD HOLDER:</label><br>
  <input type="text" id="cdname" name="cdname"placeholder="________"   required ><br><br> <br>
     <label for="exdt">EXPIRY DATE:</label><br>
  <input type="text" id="exdt" name="exdt" placeholder="month/year"   required ><br><br> <br>
  <label for="cvv">CVV:</label><br>
  <input type="password" id="cvv" name="cvv"  required ><br><br> <br>
  <input class="bb" name="pay" type="submit" value="Pay" >
</form>
<br><br>
 <i class="fa fa-cc-visa" style="font-size:48px;color:blue"></i>
<i class="fa fa-paypal" style="font-size:48px;color:blue and white"></i>
<i class="fa fa-credit-card" style="font-size:48px;color:yellow" ></i> 

</body>
</html>