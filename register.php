<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <title>Register Account
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-glyphicons.css"
    rel="stylesheet">
	<link href="home.css" rel="stylesheet" type="text/css">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
  </head>
  
  <body>
    <div class="container">
      <h3>
      </h3>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">
            Register
          </h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>
              Username
            </label>
            <input type="text" id="username" required class="form-control">
          </div>
          <div class="form-group">
            <label>
              Password
            </label>
            <input type="password" id="password"  required class="form-control">
          </div>
          <div class="form-group">
            <label>
              Email
            </label>
            <input type="text" id="email" required class="form-control">
          </div>
          <div class="form-group">
            <label>
              Phone
            </label>
            <input type="number" id="phone" required class="form-control">
          </div>
          <div class="form-group">
            <label>
              Name
            </label>
            <input type="text" id="name" required class="form-control">
          </div>
          <center>
            <a href="BPP.php"><button type="submit"  class="btn btn-success">
              Register
            </button></a>
          </center>
          &nbsp;
        </div>
      </div>
      <center>
      </center>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
    >
    </script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"
    >
    </script>
  </body>
</html>
<?php 
  require_once('databaseSensitiveInfo.php');

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }

  $username_Insert = "INSERT INTO Users (Username, Email, Name, Phone, Password) VALUES ($_GET('username'), $_GET('email'), $_GET('name'),$_GET('phone'), $_GET('password'))";

  if(mysqli_query($conn, $sql_Insert)){
     echo "You are registerd!";
    } else{
      echo "ERROR: Could not excute: $sql. " . mysqli_error($conn);
    }

  mysqli_close($conn);
?>