<?php 
session_start();
$email= $_SESSION['e_id'];
include('../config.php');

if($_SESSION['stu_id']=="" && $_SESSION['name']=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time table Staff Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
              <p> <span style="color:#FFF" >Hello <?php echo $_SESSION['name'];?>
              </span>
<span style="margin-left:1200px" class="glyphicon-glyphicon-off" aria-hidden="true">
<a href="logout.php"><font color="#FFFFFF">Logout</font></a></span>
</p>
            </div>
            
            <!-- Top Menu Items -->
                                             
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="background-image:url(../admin/img/Stitched%20Leather%20Texture%20Desktop%20Wallpaper.jpg)">
                 
                    <li>
                        <a href="studentdashboard.php?info=timeschedule"><i class="fa fw-fa -dashboard"></i>Time Schedule</a>
                    </li>
                   
                   
                   
                    
                </ul>
                       

            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="col-lg-12" style="background-image:url(../admin/img/Pink%20Blue%20Gradient%20Scratched%20Texture%20Free%20Wallpaper%20HD.jpg);" height="1000px;" align="center" margin-top="20px">
                   
                   
                   
               
                
                <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
				if($info=="timeschedule")
				{
					include('timeschedule.php');
				}
				
					}
				else
				{
				?>
                  
                  
                      
                        
                <?php }?>
                
                
                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
