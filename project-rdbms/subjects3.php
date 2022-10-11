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
<link rel="stylesheet" href="subjects.css"/>
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
                <li><a href="dashboard.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                
                <li><a href="subjects.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 1</span>
                </a></li>
                <li><a href="subjects2.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 2</span>
                </a></li>
                <li><a href="subjects3.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 3</span>
                </a></li>
                <li><a href="subjects4.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 4</span>
                </a></li>
                <li><a href="subjects5.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 5</span>
                </a></li>
                <li><a href="subjects6.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 6</span>
                </a></li>
                <li><a href="subjects7.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 7</span>
                </a></li>
                <li><a href="subjects8.php">
                <i class="fas fa-circle"></i>
                    <span class="nav-item">SEMESTER 8</span>
                </a></li>
                

                
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>SUBJECTS :</h1>
                <i class="fas-fa-user-cog"></i>
            </div>
                <div class="main-skills">
                    <div class="card">
                        
                        <h3>LINEAR ALGEBRA & TRANSFORM TECHNIQUES</h3>
                        <p><br>Faculty: Megha Pradap</p>
                        <br>
                        <form action="semester.php"><button>Get Started</button> </form>
                    </div>
                    <div class="card">
                        
                        <h3>COMPUTER ORGANIZATION & ARCHITECTURE</h3>
                        <p><br>Faculty: Sreelakshmi</p><br>
                        <button>Get Started</button> 
                    </div>
                
                    <div class="card">
                        
                        <h3>DISCRETE COMPUTATIONAL STRUCTURES</h3>
                        <p><br>Faculty: Preetha</P><br>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                        
                        <h3>DIGITAL <br> ELECTRONICS</h3>
                        <p><br>Faculty: Jayaprabha</p><br>
                        <button>Get Started</button> 
                    </div>
                    
                
                    <div class="card">
                      
                        <h3>DATABASE MANAGEMENT SYSTEM</h3>
                        <p><br>Faculty: Nidhin Sani</p><br>
                        <button>Get Started</button> 
                    </div>
                    <div class="card">
                       
                        <h3>DATA STRUCTURES & ALGORITHMS IN C</h3>
                        <p><br>Faculty: Jabir K</p><BR>
                        <button>Get Started</button> 
                    </div>
                </div>
        </section>
    </div>


</body>
</html>