<?php 

include 'database.php';

session_start();

error_reporting(0);

if (isset($_POST['log'])) {
    $user = $_POST['user'];
    $psw= md5($_POST['psw']);

   $sql = "SELECT * FROM login WHERE user='$user' AND psw='$psw'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        header("Location: registration.php");
        echo "<script>alert('Successfully logged in!')</script>";
        

    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";

    }
}

?>



<!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"/>
  
  
  <link rel="stylesheet" href="style.css">
  <link href="df.png" rel="icon">

  <title>DFCAMCLP IT ENTRANCE EXAMINATION PORTAL </title>
 </head>
 <style>

body{
     background-image: linear-gradient(rgba(42,58,74,0.85),rgba(42, 58, 74, 0.85)), url(BG.jpg);

   background-size: cover;
}



       #div2 {
        background-color: #FFFFFF ;
        width: 20%;
        float: right;
        margin-right: 300px;
        margin-top: 389px;
        opacity: 86%;

      }
      .button1 {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
      </style>
 <body>    
<header>  
<div class="text col-md-6">
      <p>SCHEDULING ENTRANCE EXAM</p>
      <h1>DFCAMCLP SATELLITE CAMPUS</h1>
      <span></span>
      <p>Dr. Filemon C. Aguilar Memorial College of Las Piñas Satellite Campus</p>
</div>

 


<div id = "div2" style="font-family: 'Raleway', sans-serif;" class="form-control" align="center">
<br>
<h1 style="color: burlywood; font-weight: bold ;">LOGIN </h1>
</center>

<br>

<form action="" method="POST">               
<div class="row" style="color: black">
    <p><label for="user" align=><b>Username</b></label>
    <input style="color: black" type="text" placeholder="Enter Username" name="user" required><span class="fa fa-user"></span></p>
<br>
</div>

<div class="row" style="color: black">
     <p><label for="psw"><b>Password </b></label>
    &nbsp;<input style="color: black;" type="password" placeholder="Enter Password" name="psw" required><span class="fa fa-lock"></span></p>
    </div>
<br>
<br>   

 <button name="log" class="btn btn-primary">LOG IN</button>
    <a href="signup.php" class="btn btn-secondary">SIGN UP</a>
<br>
<br>
</form>

</div>
    </div>
 </header>   
 </body>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
 </html>