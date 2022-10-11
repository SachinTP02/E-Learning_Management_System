 


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register-page</title>
  <link rel='stylesheet' href='https://fonts.gstatic.com'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,700;1,900&amp;display=swap'><link rel="stylesheet" href=".\register-page\register-page\dist\style.css">

</head>
<body>

<main class="main">
    <div class="container">
        <div class="forms">

            <div class="sign__blog">

                <form action="login.php" class="signin">
                    
                

                    <div class="profile__img__blog">
                        <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_profile_pic_ic5t.svg" alt="" class="profile">
                    </div>

                    <h2 class="title">Sign in</h2>

                    <p class="signin__text">Already a member?</p>


                    <button type="submit" name="login_user" class="btn login" id="mybutton">Login</button>
                    
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "login.php";
    };
</script>
                    
                    

                </form>
                <script>
                function register(){

                   
                    var username=document.form1.username.value;
                    var password=document.form1.password.value;
                    var button=document.form1.reg_user.value;
                    if(username==null || username=="" || password==null || password="" || buttom==null || button==""){
                        alert("usesrname cannot be blank");
                        return false;
                    }
                    

                }
                </script>

                <form method="post" action="gateway.php" class="register" name="form1" id="validform">
                

                    <div class="profile__img__blog">
                        <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_profile_pic_ic5t.svg" alt="" class="profile">
                    </div>
                    <h2 class="title">Register</h2>  
                     <div><?php include 'respond.php';?></div>
                    <div class="input__blog">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required="required">
                        
                    </div>
                    <div class="input__blog">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="E-Mail" type="email" name="email" required="required">
                        
                    </div>               
                                      
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="number" min="20000000" max="30000000" name="regno" placeholder="Register Number" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <input type="number" min="1" max="70" name="rollno" placeholder="Roll Number" required="required">
                    </div>
                    <div class="input__blog">
                        
                        <i class="fas fa-lock"></i>
                        <select name="stream" id="stream" style="background: none;
    background-image: none;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: initial;
    border: none;
    border-top-color: initial;
    border-top-style: none;
    border-top-width: initial;
    border-right-color: initial;
    border-right-style: none;
    border-right-width: initial;
    border-bottom-color: initial;
    border-bottom-style: none;
    border-bottom-width: initial;
    border-left-color: initial;
    border-left-style: none;
    border-left-width: initial;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    color: #444;" required>
  <option value="" selected>STREAM</option>
  <option value="IT">IT</option>
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="CIVIL">CIVIL</option>
  <option value="MECH">MECH</option>
  <option value="EEE">EEE</option>
</select>
                    </div>  
                                    
                    <input type="submit" name="reg_user" value="Register" class="btn login" onclick="ValidateEmail(document.form1.email)">
                    

                </form>

            </div>

        </div>
        <script>
     function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{

return true;
}
else
{
alert("You have entered an invalid email address!");

return false;
}
}
</script>

        <div class="panels__blog">

            <div class="panel left__panel">

                <div class="content">

                    <h3 class="panel__title">New here ?</h3>
                    <p class="panel__text">SIGN UP and join us </p>
                    <button class="btn transparent" id="register__btn">Register</button>

                </div>
                <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_Login_re_4vu2.svg" alt="" class="panel__img">
            </div>

            <div class="panel right__panel">

                <div class="content">

                    <h3 class="panel__title">Already have account</h3>
                    <p class="panel__text">SIGN IN</p>
                    <button class="btn transparent" id="signin__btn">Sign in</button>

                </div>
                <img src="https://raw.githubusercontent.com/Uzcoin404/Register-page/9efae3a1f7178386748b478ff47cb3bb118a784e/img/undraw_authentication_fsn5.svg" alt="" class="panel__img">
            </div>

        </div>

    </div>
</main>

  <script  src=".\register-page\register-page\dist\script.js"></script>
  <script  src=".\registervalid.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
</body>
</html>
