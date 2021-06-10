<?php 
   $movie_id=0;
  include('connection.php');
   if(isset($_GET['ID']))
   {
   	   $movie_id = $_GET['ID'];
   }
   else
   {
   	   $movie=$_SESSION['smovie'];
   }
   if($movie_id==0)
   {
   	$select= "SELECT * FROM `movies` WHERE Movie='$movie'";
   }
   else
   	$select = "SELECT * FROM `movies` WHERE ID='$movie_id' ";
  
   $data = mysqli_query($con,$select);
   $row= mysqli_fetch_array($data);
     $sea_mov= $row['Movie'];
       if($data)
       {
        echo "successful";
       }
       else
       {
        echo "fail";
       }
        $user_data= $_SESSION['row'];
        $user_city= $user_data['City'];
        $finds= " SELECT  `ID`,`Theater Name`, `City`, `Movie Name` FROM `Theater` WHERE City='$user_city' AND `Movie Name`= '$sea_mov'  ";
        $_SESSION['b_movie']=$sea_mov;
       // $_SESSION['b_city']=$row['City'];
        $data1=mysqli_query($con,$finds);

        $finds1= " SELECT  `ID`,`Theater Name`, `City`, `Movie Name` FROM `Theater` WHERE City<>'$user_city' AND `Movie Name`= '$sea_mov' ORDER BY '$user_city'";
        $data2=mysqli_query($con,$finds1);
        //$theater_row=mysqli_fetch_array($data1);
        if($data1)
        	echo "chaitu_good";
        else
        	echo "try";


 ?>
 <html>
    <head>
        <title> user_mt</title>
        <link rel="stylesheet" href="user_mt.css"/>
    </head>
    <body>
        <div class="down">
           <br><br><br>
           <h1><?php echo " <span style = 'color:gold;'> ".$_SESSION['name']." </span> " ; ?>Profile</h1><br>
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
         <div class="poster" > <?php echo "<img src='movies/".$row['Poster']."'   width=300px height=300px/>"; ?> </div>
         <div class="naa">  <?php    echo $row['Movie']; ?>  </div>
         <div class="name"> Rating : <?php  echo ($row['Rating'])."/10" ; ?>  </div>
              <div class="name"> Release Date: <?php  echo $row['ReleaseDate']; ?>  </div>
          <div class="name"> Certificate : <?php   echo $row['Certificate']; ?> Certificate </div>
           <div class="name"> Language : <?php    echo $row['Language']; ?>  </div>
            <div class="name"> Screen:  <?php   echo $row['Screen']; ?> Screen </div>
             <div class="name"> Movie Type: <?php  echo $row['type']; ?>  </div>
              <div class="name"> Duration: <?php  echo $row['Duration']; ?>  </div>
               <div class="name"> Casting: <?php  echo $row['Casting']; ?>  </div>

               <br><br><Br>   <h1> Theaters List in Registered City </h1>   <br><br><br>
               <table style="width:100%; font-weight: bold;">
              <tbody>
                <?php 
                  while($rows= mysqli_fetch_array($data1)){
                ?>    
                    <tr>
                     
                      <td><a href="user_book1.php?ID=<?php echo $rows['ID']; ?> "> <?php echo $rows['Theater Name']; ?> </a> </td>
                      <td style="color:crimson"> <?php echo $rows['City'] ?> </td>
                         </tr>
                <?php  }  ?>
              </tbody>
            </table>

            <br><br>
            <h1> Other Cities  </h1> 
             <table style="width:100%; font-weight: bold;">
              <tbody>
                <?php 
                  while($rowss= mysqli_fetch_array($data2)){
                ?>    
                    <tr>
                     
                      <td><a href="user_book1.php?ID=<?php echo $rowss['ID']; ?> "> <?php echo $rowss['Theater Name']; ?> </a> </td>
                      <td style="color:crimson"> <?php echo $rowss['City'] ?> </td>
                         </tr>
                <?php  }  ?>
              </tbody>
            </table>
            <br><br><br><br><br><br>
        </div>
    </body>
</html>