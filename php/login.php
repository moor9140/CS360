<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<link href="../css/login.css" rel='stylesheet'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<div class="header">
  <h1>My Health Patient Portal</h1>
  <p>Login Page</p>
</div>

<div class="navbar">
   <a align=left href="/index.html">Home</a>
   <a align=right href="/php/logout.php">Logout</a>
</div>

<body>
<div class="row">
  <div class="side">
      <a href="#">Medical Facilities</a></br>
      <a href="#">Pharmacies</a></br>
      <a href="#">Labs</a></br>
      <a href="#">Service Quality</a></br>
      <a href="#">Insurance Providers</a></br>
      <a href="#">Records</a></br>
  </div>
  <div class="main">
    Welcome <?php echo $_POST["uname"]; ?><br>
    Your password is: <?php echo $_POST["pwd"]; ?><br>
  </div>
</div>

<div class="footer">
  <h2>Fall 2020</h2>
</div>

</body>
</html>

