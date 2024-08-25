<html lang="en" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>

<div class="container" align = "center";">
<h1 class="h2 mt-3">User Register</h1>
<hr style="height:1px;border:none;color:#333;background-color:#333;">
  <br>
<form action="register_proses.php" method="post">
  <div class="form-group">
  <label style="float:left">Username :</label>
  <input type="text" name="uname" class="form-control">
  </div>
  <br>
    <div class="form-group">
      <label style="float:left">Password : </label> 
  <input type="password" name="upass" class="form-control">
      </div>

      <br>
  <div class="input-group">
  <select name="role" class="custom-select" id="inputGroupSelect04">
    <option selected>Choose...</option>
    <option value="dosen">Dosen</option>
    <option value="mahasiswa">Mahasiswa</option>
  </select>

  <div class="input-group-append">
    <button class="btn btn-success" type="submit" style="background-color:#0000FF">Register</button>
  </div>
</div>

</form>

</div>


</body>
</html>