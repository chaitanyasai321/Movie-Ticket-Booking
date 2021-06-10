<?php
include('connection.php');
if(isset($_POST['submit']))
{
  $movie=$_POST['movie'];
  $cert=$_POST['certificate'];
  $lang=$_POST['language'];
  $screen=$_POST['screen'];
  $movietype=$_POST['movietype'];
  $duration=$_POST['duration'];
  $castings=$_POST['castings'];
  $rating=$_POST['rating'];
  $dates=$_POST['releasedate'];
////////////////////////////////////////////////////////
  $image= $_FILES["image"]["name"];

  //$insert =  "insert into `movies`(`Movie`, `Certificate`, `Language`, `Screen`, `type`, `Duration`, `Casting`, `Rating`, `ReleaseDate`) VALUES ('$movie' , '$cert' , '$lang' , '$screen' , '$movietype' , '$duration' , '$castings' , 'rating' , '$dates'  )";
  $insert =  "INSERT INTO `movies`(`Movie`, `Certificate`, `Language`, `Screen`, `type`, `Duration`, `Casting`, `Rating`, `ReleaseDate`,`Poster`) VALUES('$movie' , '$cert' , 
  '$lang' , '$screen' , '$movietype' , '$duration' , '$castings' , '$rating' , '$dates' , '$image' )"; 

  $data = mysqli_query($con,$insert);
       if($data)
       {
        echo "successful";
       }
       else
       {
        echo "fail";
       }

}
else
{
  echo "not entered";
}


?>
<html>
    <head>
        <title> admin_addmovie</title>
        <link rel="stylesheet" href="admin_addmovie.css"/>
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
            <h2><u> Add Movie Form</u></h2>
            <div class="detail">
            <form action="" method="POST" enctype="multipart/form-data" >
                <label for="mname">Movie Name </label> <input type="text" name="movie" id="mname" required><br>               
                <label for="certificate"> Movie Certificate</label>  <select id="certificate" name="certificate" size="1" required>
                    <option value="U" >U Certificate</option>
                    <option value="U/A">U/A Certificate</option>
                    <option value="A">A Certificate</option>
                    <option value="B">B Certificate</option>
                </select><br><br><br>
               
                <label for="language">Movie Language</label><select id="language"  name="language" size="1" required>
                    <option value="Telugu">Telugu</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Malayalam">Malayalam</option>
                </select><br><br> <br>

                 <label for="screen">Screen</label><select id="screen" name="screen" size="1" required>
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                </select><br><br> <br>

                <label for="movietype">Movie Type</label><input type="text" name="movietype" id="movietype" required><br>
                <label for="duration">Duration</label><input type="text" id="duration" name="duration" required><br>
                <label for="castings">Castings</label><input type="text" id="castings" name="castings" required><br>
                <label for="rating">Rating </label><input type="text" id="rating" name="rating" required><br>
                <label for="release">Release Date</label><input type="date"id="release" name="releasedate" required><br>
                <label for="image">Poster</label><input type="file" id="image"  name="image" required><br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
            </div>
        </div>
    </body>
</html>