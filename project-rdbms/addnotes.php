<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard  Note System</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Javascript:void(0)"><b>Note System</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li <?php if(@$_GET['p']==0) echo'class="active"'; ?>><a href="addnotes.php?p=0">TEACHER PAGE<span class="sr-only">(current)</span></a></li>
                    <li class="dropdown <?php if(@$_GET['p']==4 || @$_GET['p']==5) echo'active"'; ?>">
                    <li><a href="addnotes.php?p=4">Add Note</a></li>
                    <li><a href="addnotes.php?p=5">Remove Note</a></li>
                    <li><a href="teacherhub.php">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo''; ?> > <a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(@$_GET['p']==0)
                {
                   echo "<h1> WELCOME TO Teacher Page!!
					</h1>";
					
                }

                if(@$_GET['p']== 2) 
                {
                    $q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
                    echo  '<div class="panel title"><div class="table-responsive">
                    <table class="table table-striped title1" >
                    <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Score</b></center></td></tr>';
                    $c=0;
                    while($row=mysqli_fetch_array($q) )
                    {
                        $e=$row['email'];
                        $s=$row['score'];
                        $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
                        while($row=mysqli_fetch_array($q12) )
                        {
                            $name=$row['name'];
                            $college=$row['college'];
                        }
                        $c++;
                        echo '<tr><td style="color:#99cc32"><center><b>'.$c.'</b></center></td><td><center>'.$e.'</center></td><td><center>'.$s.'</center></td>';
                    }
                    echo '</table></div></div>';
                }
                ?>
                <?php 
                    if(@$_GET['p']==1) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>College</b></center></td><td><center><b>Email</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $email = $row['email'];
                            $college = $row['college'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$college.'</center></td><td><center>'.$email.'</center></td><td><center><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>

                <?php
                    if(@$_GET['p'] == 4 ) 
                    {
                        echo '<div class="row"><span class="title1" style="margin-left:40%;font-size:30px;color:#fff;"><b>Enter Note Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6">   
                        <form class="form-horizontal title1" name="form" action="update2.php?p=4"  method="POST">
                            <fieldset>
                            <div class="form-group">
                            <label class="col-md-12 control-label" for="stream"></label>  
                            <div class="col-md-12">
                                <input id="stream" name="stream" placeholder="Enter Stream" class="form-control input-md" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-12 control-label" for="sem"></label>  
                        <div class="col-md-12">
                            <input id="sem" name="sem" placeholder="Enter Semester" class="form-control input-md" type="number">
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <label class="col-md-12 control-label" for="subject"></label>  
                    <div class="col-md-12">
                        <input id="subject" name="subject" placeholder="Enter Subject" class="form-control input-md" type="text">
                    </div>
                </div>

                    <div class="form-group">
                    <label class="col-md-12 control-label" for="module"></label>  
                    <div class="col-md-12">
                        <input id="module" name="module" placeholder="Enter Module" class="form-control input-md" type="number">
                    </div>
                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="name"></label>  
                                    <div class="col-md-12">
                                        <input id="name" name="name" placeholder="Enter Note title" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="file"></label>  
                                    <div class="col-md-12">
                                        <input id="file" name="file" placeholder="Upload Note Here" class="form-control input-md" type="file" accept="pdf">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="uploadedby"></label>  
                                    <div class="col-md-12">
                                        <input id="uploadedby" name="uploadedby" placeholder="Enter Your Name" class="form-control input-md" min="0" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="extra"></label>  
                                    <div class="col-md-12">
                                        <input id="extra" name="extra" placeholder="Enter Extra Details Here" class="form-control input-md" min="0" type="text">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12"> 
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                    </div>
                                </div>

                            </fieldset>
                        </form></div>';
                    }
                ?>

                <?php
                    if(@$_GET['p']==4 && (@$_GET['step'])==2 ) 
                    {
                        echo ' 
                        <div class="row">
                        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
                        <fieldset>
                        ';
                
                        for($i=1;$i<=@$_GET['n'];$i++)
                        {
                            echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br /><!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
                                        <div class="col-md-12">
                                            <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'1"></label>  
                                        <div class="col-md-12">
                                            <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'2"></label>  
                                        <div class="col-md-12">
                                            <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'3"></label>  
                                        <div class="col-md-12">
                                            <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'4"></label>  
                                        <div class="col-md-12">
                                            <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <br />
                                    <b>Correct answer</b>:<br />
                                    <select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
                                    <option value="a">Select answer for question '.$i.'</option>
                                    <option value="a"> option a</option>
                                    <option value="b"> option b</option>
                                    <option value="c"> option c</option>
                                    <option value="d"> option d</option> </select><br /><br />'; 
                        }
                        echo '<div class="form-group">
                                <label class="col-md-12 control-label" for=""></label>
                                <div class="col-md-12"> 
                                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                </div>
                              </div>

                        </fieldset>
                        </form></div>';
                    }
                ?>

                <?php 
                    if(@$_GET['p']==5) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM note ORDER BY date DESC") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Stream</b></center></td><td><center><b>Subject</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) {
                            $title = $row['title'];
                            $stream = $row['stream'];
                            $subject = $row['subject'];
                            $nid = $row['nid'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$title.'</center></td><td><center>'.$stream.'</center></td><td><center>'.$subject.'</center></td>
                            <td><center><b><a href="update2.php?q=5&nid='.$nid.'" class="pull-right btn sub1" style="margin:0px;background:red;color:black"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
