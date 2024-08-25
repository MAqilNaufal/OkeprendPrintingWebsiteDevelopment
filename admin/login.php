<html lang="en" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
  
<div class="container" align = "center";">
    <h1 class="h2 mt-3" >User Login</h1>
	<hr style="height:1px;border:none;color:#333;background-color:#333;">
    <br>
    <form action="login_proses.php" method="post">
      <div class="form-group">
        <label style="float:left">Username:</label> 
        <input type="text" name="uname" class="form-control">
      </div>
    <br>
      <div class="form-group">
        <label style="float:left">Password: </label> 
        <input type="password" name="upass" class="form-control">
      </div>

      <br>
      <button type="submit" class="btn btn-success" style="background-color:#0000FF; float:right">Login</button>
	  <button class="btn btn-success" style="background-color:#0000FF; float:right">
        <a href="register.php" style="color: white;">Register</a>
      </button>
    </form>
</div>
</body>
</html>