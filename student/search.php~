<html>
<title>Search Result</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-family: "Raleway", sans-serif;}
</style>
<body class="w3-light-grey">
  <?php include '../session.php';?>
  <?php include '../connect.php';?>
  <!-- Top container -->
  <div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
    <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open()">☰  Menu</button>
    <span>Your Search Result is Here</span>
    <span class="w3-right"><a href="../logout.php">LOGOUT</a></span>
  </div>
<div id="main_content">
<?php
include("../connect.php");
if(isset($_GET['search'])){
   
	
	 $search_id = $_GET['value1'];
	$query= "select * from course where crs_ref like '%$search_id%'";
    $run= mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run,MYSQLI_ASSOC))
    {
	
	
      $crs_id = $row['crs_id'];
	 $crs_name = $row['crs_name'];	
         $crs_duration=$row['crs_duration'];
	 $prof_id = $row['prof_id'];	
	 $crs_img = $row['crs_img'];	
	 $crs_chapters = $row['crs_chapters'];
	  $crs_ref = substr($row['crs_ref'],0,200);	
	
?>

<div class="w3-quarter" style="margin-left:50px;margin-top:43px;padding-top:50px;">
<div class="w3-card-2 w3-white" align="center" style="padding-top:10px">
<a href="../course/course.php?crs_id=<?php  echo $crs_id ;?>" >
<img src="../uploads/<?php echo $crs_img ; ?> "  width="300" height="200"/>
</a>



 <div class="w3-container" align="left">
<a href="../course/course.php?crs_id=<?php  echo $crs_id ;?>" >
<p>
<b>Course id : </b><?php echo $crs_id ; ?><br></a>
<b>Course Name: </b><?php echo $crs_name; ?><br>
<b>Course reference : </b><?php echo $crs_ref; ?><br>
<b>Total Chapters: </b><?php echo $crs_chapters; ?><br>
<b>Course Duration: </b><?php echo $crs_duration; ?>
</p>

<a href="enroll.php?crs_id=<?php echo $crs_id; ?>">
<h3><p align="center"><b>Enroll</b></p></h3></a>


</div> 

</div>
</div>








 
<?php }  }  ?>
</div>


</body>

</html>





