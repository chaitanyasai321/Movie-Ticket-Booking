<?php
    include('connection.php');
    if(isset($_GET['ID']))
    {
      $theater_id=$_GET['ID'];
    }
    $sel_theater = "SELECT * FROM `Theater` WHERE ID = '$theater_id' ";
    $data = mysqli_query($con,$sel_theater);
    if($data)
      echo "go-on";
    else
      echo "try";
   $row= mysqli_fetch_array($data);
   $_SESSION['b_theater']=$row['Theater Name'];
   $_SESSION['b_city']= $row['City'];
   if(isset($_POST['next']))
   {
      $_SESSION['b_timings']= $_POST['timings'];
      $_SESSION['b_seats']= $_POST['seats'];
      $_SESSION['b_amount']= $_POST['seats']*150 ; 
      $user_details =  $_SESSION['row'];
      $_SESSION['b_phone']= $user_details['Phone Number'];
      $_SESSION['b_bookingid']= rand(100000,200000);
     /* $b_bid =  $_SESSION['b_bookingid'];
      $b_movie = $_SESSION['b_movie'];
      $b_city = $_SESSION['b_city'];
      $b_theater= $_SESSION['b_theater'];
      $b_timings = $_SESSION['b_timings'];
      $b_seats = $_SESSION['b_seats'];
      $b_phone = $_SESSION['b_phone'];
      $b_amount = $_SESSION['b_amount'];
      $b_date = date("d-m-Y h:i:sa") ;
 $b_insert = " INSERT INTO `Booking`(`BID`, `Movie`, `City`, `Theater`, `TIming`, `Seats`, `Phone Number`, `Amount`, `Date`) VALUES( '$b_bid' , '$b_movie' , '$b_city' ,'$b_theater' , '$b_timings' , '$b_seats' , '$b_phone','$b_amount' , '$b_date' ) ";
      $data2=mysqli_query($con,$b_insert);
      if($data2)
        echo "success";
      else
        echo "try";*/
      header('location:user_book2.php');     
   }
   else
    echo "hahaha";


?>
<html>
    <head>
        <title> user_booking</title>
        <link rel="stylesheet" href="user_movie.css"/>
    </head>
    <body>
        <div class="down">
           <h1>Movie Ticket Booking System</h1><br>
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

            <h1 style= "color:violet"> <?php echo $row['Theater Name']; ?> </h1>
            <br><br><br>
            <form action="" method="POST" >
              <label for="timings"> Show Time </label>  <select id="timings" name="timings" size="1" required>
                    <option value="11.30AM" > 11.30 AM </option>
                     <option value="2.30AM" > 2.30 PM </option>
                      <option value="6.30AM" > 6.30 PM </option>
                       <option value="9.30AM" > 9.30 PM </option>
                      </select> <br><br><br>
                      <label for="seats"> Number of Seats </label>  <select id="seats" name="seats" size="1" required>
                    <option value="1" > 1</option>
                    <option value="2" > 2</option>
                    <option value="3" > 3</option>
                    <option value="4" > 4</option>
                    <option value="5" > 5</option>
                    <option value="6" > 6</option>        
                </select><br><br><br>
                <input type="submit" value="Next" name="next" >
   </div> 
    </body>
</html>