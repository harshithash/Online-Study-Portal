<?php
include '../connect.php';
include '../session.php';
 echo $crs_id = $_GET['crs_id'];
echo  $stu_id=$_SESSION['stu_id'];
 //$start_date=CURDATE();
$dur=0;
 $chaps_comp=0;

 $sub = "SELECT duration from crs_content where crs_id = '$crs_id' and chap_no = 1";
$run=mysqli_query($con,$sub);
if (!$run) {
	    printf("Error: %s\n", mysqli_error($con));
	    exit();
	}
$res= mysqli_fetch_assoc($run);
$dur = $res['duration'];
$query="insert into stu_course values('$crs_id','$stu_id',CURDATE(),'$chaps_comp','$dur')";
$run=mysqli_query($con,$query);
if (!$run) {
	    printf("Error: %s\n", mysqli_error($con));
	    exit();
	}
if(!$run)
{
     echo " NOt enrolled " ;
}
else
{
  echo "<script>window.open('profile.php','_self')</script>";
}

?>



