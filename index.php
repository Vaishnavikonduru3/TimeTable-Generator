<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time Table Generator</title>
    
    <style>
	a{margin-left:15px;text-decoration:none; font-size:20px}
	a:hover{background:#FF0000;color:#FFFFFF;}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > 
	img { margin:auto;}
</style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <![endif]-->

</head>
    <body>
    
      <!-- /.navbar -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><font color="#FF0000">Time Table Generator</font></a>
    </div>
    <ul class="nav navbar-nav">
    
      <li class="active"><a href="#">Home</a></li>
      
      <li><a class="page-scroll" href="#about">About Us</a></li> 
     
     
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
           <li><a href="../Timetablegenerator/admin/index.php">Admin Login</a></li> 
          <li><a href="../Timetablegenerator/staff/index.php">Staff Login</a></li>
          <li><a href="../Timetablegenerator/student/index.php">Student Login</a></li> 

        </ul>
      </li> 
    </ul>
  </div>
</nav>

   <!-- /.navbar-end -->
   
        <!-- /.slider -->

<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Time Table Generator</h1>
                <hr>
               
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

<!--container-->


  <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading">About Time Table Generator</h2>
                        <hr class="primary">
                    </div>
                    
                  
                    
                    <div class="row mb90">
                        <div class="col-md-12 text-justify">
                        
                                <p>Most colleges have a number of different courses and each course has a number of subjects. With  limited faculties, each faculty teaching more than one subject the time table needs to be scheduled with the faculty at provided time slots in such a way that their timings do not overlap and the time table schedule makes best use of all faculty subject demands.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-">
                            <div class="st-member">
                                
                                </div>
                                </div></div></div></div>
                                
    
<?php 
include('config.php');
extract($_POST);
if(isset($save))
{
	
	mysqli_query($con,"insert into contactus values('','$name','$e','$s','$m')");
	

	$err="<font color='blue'>Congrats Your Data Saved!!!</font>";
	
}

?>
  
    
    
    
    <!--end registration-->
    
    <!--slider-->
    
      <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    
    <script src="js/owl.carousel.js"></script>
                         

    </body>
</html>