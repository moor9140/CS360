<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<!------------- HTML ------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup Page</title>
  <link href="../css/main.css" rel='stylesheet'>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/effects.js"></script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>
</head>

<div class="header">
  <h1>My Health Patient Portal</h1>
  <p>CS 360 Group 4</p>
</div>


<div class="navbar">
  <a href="http://myhealth4.kb-projects.com">Home</a>
  <a href="http://myhealth4.kb-projects.com/php/signup.php">Signup</a>
</div>

<body>
<div class="container">
        <p>Please fill in this form to create an account.</p>
        <h1>Sign Up</h1>
	<hr>
   <section class="signup_area" id="signup_area">
      <form class="form-signup" role="form" action="/index.php" method = "post">
         <label for="pid"><b>Patient ID (PID)</b></label>
         <input type="text" class="form-signup" placeholder="Enter PID" name="pid" required><br>

         <label for="name"><b>Full Name</b></label>
         <input type="text" class="form-signup" placeholder="name" name="name" required><br>

         <label for="DoB"><b>Date of Birth MM/DD/YYYY</b></label>
         <input type="text" class="form-signup" placeholder="Date of Birth" name="DoB" required><br>
          
         <label for="Address"><b>Address</b></label>
         <input type="text" class="form-signup" placeholder="Address" name="address" required><br>

         <label for="family"><b>Family Info</b></label>
         <input type="text" class="form-signup" placeholder="family info" name="family" required><br>

         <label for="employment"><b>Emploment Info</b></label>
         <input type="text" class="form-signup" placeholder="employement info" name="employment" required><br>

         <label for="pwd"><b>Password</b></label>
         <input type="password" class="form-control" placeholder="Password" name="pwd" required><br>

         <label for="repeatpwd"><b>Repeat Password</b></label>
         <input type="password" class="form-control" placeholder="Repeat Password" name="repeatpwd" required><br>
	 <button class="loginbtn" type="submit" name="submit">submit</button>
      </form>
   </section>
   <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
   </label><br>
   <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>      
</div>
</body>
<div class="footer">
  <h2>Fall 2020</h2>
</div>
</html>
