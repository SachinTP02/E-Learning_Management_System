<?php
  include_once 'database.php';
  session_start();

  
  if(isset($_SESSION['key']))
  {
    if( $_SESSION['key']=='admin') 
    {
        
        $note_name = $_GET['$note_name'];
      $result = mysqli_query($con,"DELETE * FROM note WHERE note_name='$_SESSION['sub']' ") or die('Error');
      header("location:addnotes.php?p=5");
    }
  }
  ?>