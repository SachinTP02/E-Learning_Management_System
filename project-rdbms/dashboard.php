<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dashboard.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>

    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="./logo.png" alt="" />
                    <span class="nav-item"> <?php if($_SESSION['name']=="Admin") {echo "Hi Teacher";} else {echo "Hi " . $_SESSION['email'];} ?></span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <?php if($_SESSION['name']=="Admin") : echo ""?>
                <?php else : ?>

                <li><a href="studentprofile.php">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="https://cucek.cusat.ac.in/" target="_blank">
                <i class="fas fa-home"></i>
                    <span class="nav-item">CUCEK-HOME</span>
                </a></li>
                <li><a href="https://cusat.ac.in/" target="_blank">
                <i class="fas fa-home"></i>
                    <span class="nav-item">CUSAT-HOME</span>
                </a></li>
                <li><a href="settings.php">
                <i class="fas fa-cog"></i>
                    <span class="nav-item">Settings</span>
                </a></li>
                
                <li><a href="help.php">
                <i class="fas fa-question-circle"></i>
                    <span class="nav-item">Help?</span>
                </a></li>
                <?php endif; ?>
                <li><a href="logout.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>ENGINEERING BRANCHES :</h1>
                <i class="fas-fa-user-cog"></i>
            </div>
                <div class="main-skills">
                    <div class="card">
                        
                        <h3>Information Technology Engineering</h3>
                        <p>Technology is Best When it Brings People Together!</p><br>
                        <form action="subjects.php"><button>Get Started</button> </form>
                    </div>
                    <div class="card">
                        
                        <h3>Computer Science Engineering</h3>
                        <p>Computer Science is a Science of Abstraction</p><br>
                        <button>Get Started</button> 
                    </div>
                
                    <div class="card">
                        
                        <h3>Electronics <br>Engineering</h3>
                        <p>In the World of Fluctuations<br>be Someone's Regulator!</p><br>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                        
                        <h3>Electrical<br> Engineering</h3>
                        <p>Peace be Amplified<br>World be Rectified!</p><br>
                        <button>Get Started</button> 
                    </div>
                
                    <div class="card">
                      
                        <h3>Mechanical <br>Engineering</h3>
                        <p>When the Mechanical Rest<br>the World Rust.!</p><br>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                       
                        <h3>Civil <br>Engineering</h3>
                        <p>The Road to Success is Always Under Construction!</p><BR>
                        <button>Get Started</button> 
                    </div>
                </div>
        </section>
    </div>


</body>
</html>