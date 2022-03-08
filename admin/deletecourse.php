<?php 
include('../config.php');
$courseid=$_REQUEST['department_id'];
if(isset($_REQUEST['department_id']))
{

mysqli_query($con,"delete from department where department_id='$courseid'");


header('location:admindashboard.php?info=course');
}
?>
