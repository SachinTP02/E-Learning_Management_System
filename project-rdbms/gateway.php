
  
  
  
 <?php 
 
 require_once "config.php";
 
 $username = $password = $confirm_password = "";
 $username_err = $password_err = $confirm_password_err = "";
 


 if ($_SERVER['REQUEST_METHOD'] == "POST"){
   
     // Check if username is empty
     if(empty(trim($_POST["username"]))){
         $username_err = "Username cannot be blank";
         header("location:register.php?mg=usernameblank");
     }
     else{
         $sql = "SELECT id FROM users WHERE username = ?";
         $stmt = mysqli_prepare($conn, $sql); 
         if($stmt)
         {
             mysqli_stmt_bind_param($stmt, "s", $param_username);
 
            
             $param_username = trim($_POST['username']);
             
            
             if(mysqli_stmt_execute($stmt)){
                 mysqli_stmt_store_result($stmt);
                 if(mysqli_stmt_num_rows($stmt) == 1)
                 {
                     $username_err = "This username is already taken"; 
                     echo '<script type="text/JavaScript">
              if(!alert("Username Already taken")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/login/project-rdbms/register.php";
              </script>';
                 }
                 else{
                     $username = trim($_POST['username']);
                 }
             }
             else{
                 echo "Something went wrong";
             }
         }
     }
 
     
 
 
 // Check for password
 if(empty(trim($_POST['password']))){
     $password_err = "Password cannot be blank";
     echo '<script type="text/JavaScript">
     if(!alert("Password cannot be blank")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/login/project-rdbms/register.php";
     </script>';
     
     exit();
 }
 elseif(strlen(trim($_POST['password'])) < 5){
     $password_err = "Password cannot be less than 5 characters";
     echo '<script type="text/JavaScript">
     if(!alert("Password cannot be less than 5 characters")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/login/project-rdbms/register.php";
     </script>';
    
     exit();
 }
 else{
     $password = trim($_POST['password']);
 }
 
 // Check for confirm password field
 if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
     $password_err = "Passwords should match";
     echo '<script type="text/JavaScript">
     if(!alert("Passwords should match")) document.location = "http://'.$_SERVER['HTTP_HOST'].'/login/project-rdbms/register.php";
     </script>';
    
     
     exit();
 }
 $param_regno= trim($_POST['regno']);
 $param_rollno= trim($_POST['rollno']);
 $param_stream= trim($_POST['stream']);
 









 


 
 if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
 {
     $sql = "INSERT INTO users (username, password,email,regno,rollno,stream) VALUES (?, ?, ?, ?, ?, ?)";
     $stmt = mysqli_prepare($conn, $sql);
     if ($stmt)
     {
         mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password, $param_email, $param_regno, $param_rollno, $param_stream);
 
      
         $param_username = $username;
         $param_password = $password; 
         $param_email = mysqli_real_escape_string($conn, $_POST['email']);
         $param_regno = mysqli_real_escape_string($conn, $_POST['regno']);
         $param_rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
         $param_stream = mysqli_real_escape_string($conn, $_POST['stream']); 
      
         if (mysqli_stmt_execute($stmt))
         {
            
       
             header("location: login2.php");
         }
         else{
             echo "Something went wrong... cannot redirect!";
             exit();
         }
     }
     mysqli_stmt_close($stmt);
 }
 echo "$password_err";
 
 mysqli_close($conn);
 }
 
 
 ?>