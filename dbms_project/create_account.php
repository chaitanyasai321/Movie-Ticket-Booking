<?php

echo '<!doctype html>
<html>
    <head>
        <title> create account</title>
        <link rel="stylesheet" href="create.css"/>
    </head>
    <body>
        <div class="creates">
            <h2> Welcome<br>New User!! </h2>
            <form action="" method="POST">
                <p>Name</p><input type="text" name="Name" placeholder="Enter Name" required>
                <p>Phone Number</p><input type="text" name="Phone_Number" minlength="10" placeholder="Number without +91" required>
                <p>Email </p><input type="email" name="Email" placeholder="Enter mail" required>
                <p> Password</p><input type="password" name="Password" placeholder="Enter Password" required>
                <p> Confirm Password</p> <input type="password" name="Confirm_Password" placeholder="Re-enter Password" required> 
                <p> Select City</p>
                <select name="city" size='1' required>
                    <option value="Visakhapatnam"> Visakhapatnam</option>
                    <option value="Vijayanagaram"> Vijayanagaram</option>
                    <option value="Srikakulam"> Srikakulam  </option>
                    <option value="Vijayawada">Vijayawada</option>
                    <option value="Guntur">Guntur</option>
                    <option value="Rajamundry"> Rajamundry</option>
                    <option value="Tirupathi">Tirupathi</option>
                </select>
                <input type="submit" value="Get Started!!">
            </form>
            <h3>Already Signed up? </h3>    
            <a href="login.php" ><u> Log in</u> </a> 
        </div>

    </body>
</html>'
?>
