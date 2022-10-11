<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
  

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Settings</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="settingsdaily-ui-007\settingsdaily-ui-007\dist\style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
  <div class="container">
    <header>
      <div></div>
      <h2>Settings</h2>
    <div></div>
    </header>
    <div class="user-img">
      <img src="https://img.icons8.com/metro/26/000000/guest-male.png" alt="user">
      <h3><?php        echo  $_SESSION['email']
      
      ?>
      </h3>
      
    </div><!-- end user img -->
    <div class="content">
      <div class="user-settings">
        <h4>USER SETTINGS</h4>
        <ul>
          <li><a href="studentprofile.php"><i class="fa fa-user"></i>My account</a></li>
          <li><a href=""><i class="fa fa-shield-alt"></i>Security</a></li>
          <li><a href=""><i class="fa fa-globe"></i>About</a></li>
        </ul>
        <h4>MORE SETTINGS</h4>
        <ul>
          <li><a href=""><i class="fab fa-dribbble"></i>Explore</a></li>
          <li><a href=""><i class="fa fa-bell"></i> Notifications</a></li>
          <li><a href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
        </ul>
    </div><!-- end content -->
  </div><!-- end container -->
</div> <!-- end wrapper -->
<!-- partial -->
  
</body>
</html>
