<?php
  include('connection.php');

?>

<html>
    <head>
        <title> create account</title>
        <link rel="stylesheet" href="print_ticket.css"/>
    </head>
    <body>
        <div class="down">
           <h1><?php echo $_SESSION['name']." "; ?> Your Ticket </h1><br>
           <hr>
         
 <div class="creates">
          <h1 style = "color:cyan"> Thankyou For Booking </h1><br><br>
           <table style="width:100%; font-weight: bold;">
              <tbody>
                <tr>
                	<td colspan="2"><h1> Movie Ticket Receipt</h1> </td>
                </tr>
                <tr>
                	<td> Booking Id :<?php echo $_SESSION['b_bookingid']; ?> </td>
                	<td> Movie Name : <?php echo $_SESSION['b_movie']; ?>    </td>
               </tr>
               <tr> :  <td colspan="2"> Theater Name :   <?php echo $_SESSION['b_theater']; ?> </td>  </tr>
               <tr> <td colspan="2">City : <?php echo $_SESSION['b_city']; ?></td></tr>
               <tr>  <td> Show Timings : <?php echo $_SESSION['b_timings']; ?> </td>
               	<td> No of Seats :  <?php echo $_SESSION['b_seats']; ?> </td> </tr>
               <tr>	<td colspan="2">Phone Number :  <?php echo $_SESSION['b_phone']; ?> </td> </tr>
               <tr> <td> <?php echo $_SESSION['b_amount']; ?> INR </td>

               	<td style="color:green">  <?php  echo  $_SESSION['b_date'] ;?> </td> </tr>
              </tbody>
            </table>
            <br><br><br>
            <a href="user_home.php" > GO TO HOME </a>
             </div>
        </div>
    </body>
</html>