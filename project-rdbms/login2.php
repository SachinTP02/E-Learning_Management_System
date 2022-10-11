<?php

session_start();


if(isset($_SESSION['username']))
{
    header("location: dashboard.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";


if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username or password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password, email,regno,rollno,stream FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    $sql2="SELECT check_key FROM users WHERE email= '$username'";
    $query = $conn->query($sql2);
    if($query->num_rows > 0){

      while($row = $query->fetch_assoc()){
        $check = $row["check_key"];
      }

    }
    if($check=="yes"){
   
    if(mysqli_stmt_execute($stmt)){
       mysqli_stmt_store_result($stmt);	
        $resultCheck = mysqli_stmt_num_rows($stmt);
        
          
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $name, $param_regno, $param_rollno, $param_stream);
                    if(mysqli_stmt_fetch($stmt))
                    {
                     
                        if($hashed_password==$password)
                        {
                      
                          
                            
                            session_start();
                            $_SESSION["email"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["name"]=$name;
                            $_SESSION["stream"]=$param_stream;
                            $_SESSION["rollno"]=$param_rollno;
                            $_SESSION["regno"]=$param_regno;
                            
                            
                            header("location: dashboard.php");
                            
                        }
                        else
                        {
                            echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
                            header("refresh:0;url=login.php");
                        } 
                  }

                }

    }}else{
      echo "<center><h3><script>alert('Sorry.. You Are Not Yet Verified');</script></h3></center>";
                            header("refresh:0;url=login.php");
    }
    
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
			<div class="welcome"><strong><?php echo "Welcome "?>You've Successfully Registered.!!!<br></strong> please login</div>

			<form class="form-horizontal login-form" action="" method="post">
				<div class="form-group relative">
					<input id="username" name="username" class="form-control input-lg" type="email" placeholder="E-mail I D" required>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group relative password">
					<input id="password" name="password" class="form-control input-lg" type="password" placeholder="Password" required>
					<i class="fa fa-lock"></i>
				</div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
			  </div>
        
			</form>
		</div>
    
    
	</div>

  </body>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script><script  src="./script.js"></script>

</body>
</html>