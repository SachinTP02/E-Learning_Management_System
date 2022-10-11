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
  <title>Study-Hub!</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./studyhub.css">

</head>
<body>

<div class="container mt-2">

  <div class="row">
   
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
      <h4 class="item-card-title text-right"><i class="material-icons">settings</i></h4>
    <a href="addnotes.php"><img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Notes"></a>
        <h5 class="card-title  mt-3 mb-3">NOTES</h5>
        <p class="card-text">Upload And Edit Your Notes...from Here </p>
        <form action=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
        </svg></form> 
  </div>
    </div>
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
      <h4 class="item-card-title text-right"><i class="material-icons">settings</i></h4>
    <a href="dashboard2.php?q=0"><img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Quiz"></a>
        <h5 class="card-title  mt-3 mb-3">QUIZ</h5>
        <p class="card-text">Create New Quizes And Edit Prvious Ones...from here</p> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
        </svg>
  </div>
    </div>
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block">
      <h4 class="item-card-title text-right"><i class="material-icons">settings</i></h4>
    <a href="logout.php"><img src="logoutimg.jpg" alt="LogOut"></a>
        <h5 class="card-title  mt-3 mb-3">LogOut</h5>
        <p class="card-text">Log Out</p> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.854 10.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
        </svg>
  </div>
    </div>
   
    </div>    
  </div>
  
</div>
  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
</body>
</html>
