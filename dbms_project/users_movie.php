<?php
  include('connection.php');
  $lis = "SELECT * FROM `movies` order by `ReleaseDate` DESC limit 8 ";
 $rec=mysqli_query($con,$lis);
 $paa=mysqli_query($con,$lis);
?>
<?php 
   if($_POST['submit'])
   {
       $movie = $_POST['movie'];
       $_SESSION['smovie']=$movie;
       header("location:user_mt.php");
   }
 ?>
<html>
    <head>
        <title> user_movie</title>
        <link rel="stylesheet" href="user_movie1.css"/>
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
            <h2> Search Your Movie </h2>
             <!--search bar-->
             <div class="wrap">
                <div class="search">
                  <form action="" method="POST" >
                <input type="text" class="bttt" name="movie" placeholder="Search Your Movie or Theater">
                <input  class="m" type="submit" name="submit" value="M" >
              </form>
                </div>
            </div>
            <br><br><br>
            <table style=" width:100% " >
          <tbody>
            <?php
            $count=0;
            $counts=0;
for ($x = 0; $x < 2; $x+=1) {
           ?>  <tr>
                <?php 
                  while($rows= mysqli_fetch_array($rec)){
                ?>    
                  <td class="posters"><?php echo "<img src='movies/".$rows['Poster']."' width=250px height=250px/>"; echo "<br>"; echo ($rows['Rating']*10)."%";    ?> </td>
                  <?php $count+=1; 
                        if($count==4)
                          break; 
                        ?>
                   <?php  }  ?>
                    </tr>
                <tr>
                <?php 
                  while($rowss= mysqli_fetch_array($paa)){
                ?>    
                  <td class="pn">  <a href="user_mt.php?ID=<?php echo $rowss['ID']; ?>">  <?php echo $rowss['Movie']; ?></a> </td> 
                  <?php $counts+=1; if($counts==4)  break;  ?>
            <?php  }  ?>
                    </tr>
              <?php  }  ?>



          </tbody>
        </table>
   </div> 
    </body>
</html>