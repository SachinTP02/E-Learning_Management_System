<?php
    include_once 'database.php';
    session_start();
    if(isset($_SESSION["username"]))
	{
		session_destroy();
    }
    
   
    if(isset($_POST['submit']))
	{	
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email = stripslashes($email);
        $email = addslashes($email);
        $password = stripslashes($password); 
        $password = addslashes($password);

        $email = mysqli_real_escape_string($con,$email);
        $password = mysqli_real_escape_string($con,$password);
        
        $result = mysqli_query($con,"SELECT email FROM admin WHERE email = '$email' and password = '$password'") or die('Error');
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            session_start();
            if(isset($_SESSION['email']))
            {
                session_unset();
            }
            $_SESSION["loggedin"] = true;
            $_SESSION["name"] = 'Admin';
            $_SESSION["key"] ='admin';  
            $_SESSION["email"] = $email;
            header("location:teacherhub.php");
        }
        else
        {
            echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
            header("refresh:0;url=admin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div id="particles-js"></div>
<body class="login">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="logo">
				<i class="fa fa-sign-in"></i>
			</div>
			<div class="welcome"><strong>Welcome,</strong> Teacher login</div>

			<form class="form-horizontal login-form" action="" method="post">
				<div class="form-group relative">
					<input id="username" name="email" class="form-control input-lg" type="email" placeholder="E-mail I D" required>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group relative password">
					<input id="password" name="password" class="form-control input-lg" type="password" placeholder="Password" required>
					<i class="fa fa-lock"></i>
				</div>
			  <div class="form-group">
			    <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Login">
			  </div>
       
			</form>
		</div>
    
    
	</div>

  </body>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script><script  src="./script.js"></script>

</body>
</html>
