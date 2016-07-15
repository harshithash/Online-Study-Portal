<html>
<title>Add Course</title>
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
    <span class="w3-right"><a href="../logout.php">Logout</a></span> 
  </div>

 


  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="float:centre;margin-left:300px;margin-right:300px;margin-top:43px;">

    

   
    <div class="w3-container">
      <form method="post" action="add_course.php" enctype="multipart/form-data">
   <table align="center" width="600" border="10" bgcolor="#FFFFFF" cellpadding="4px">
      <tr>
        <td align="center" bgcolor="#996699" colspan="6"><h1> Add Course</h1></td> 
      </tr>
      
       <tr>
      <td align="right">course_id</td>
      <td><input type="number" name="crs_id"></td>
      </tr>

       <tr>
      <td align="right">Course_name</td>
      <td><input type="text" name="crs_name"></td>
      </tr>
      
      <tr>
      <td align="right">Total Chapters</td>
      <td><input type="number" name="crs_chapters"></td>
      </tr>
      
      
      
       <tr>
      <td align="right">DURATION</td>
      <td><input type="number" name="crs_duration"></td>
      </tr>
      <tr>
      <td align="right">course image</td>
      <td><input type="file" name="crs_img"></td>
      </tr>
      <tr>
      <td align="right">course description</td>
      <td><input type="text" name="crs_ref"></td>
      </tr>
      
      
      <tr>
      
      <td align="center" colspan="6"><input type="submit" name="submit" value="Add now"></td>
      </tr>
      
   </table>
</form>
</body>
</html>

<?php
include("../connect.php");
if(isset($_POST['submit'])){
     $crs_id=$_POST['crs_id'];
	 $crs_chapters=$_POST['crs_chapters'];
	 $crs_name=$_POST['crs_name'];
	 $prof_id=$_SESSION['prof_id'];
	 //$ass_link=$_POST['ass_link'];
	// $chap_link=$_POST['chap_link'];
         $crs_duration=$_POST['crs_duration'];
	 $crs_ref=$_POST['crs_ref'];
	 $crs_img=$_FILES['crs_img']['name'];	
	 $tmp_link1=$_FILES['crs_img']['tmp_name'];
         
	if($crs_id=='' or  $crs_name=='' or $crs_ref=='')
	{
		echo "<script>alert('any of fields is empty');</script>";
		exit();
		
	}
	else
	{
                  move_uploaded_file($tmp_link1,"../uploads/$crs_img");
		
		$insert_query = "insert into course values('$crs_id','$crs_name','$prof_id','$crs_duration' ,'$crs_chapters','NULL','NULL','$crs_img','$crs_ref')";
	}
	
	if(mysqli_query($con,$insert_query))
	{
		echo "<center><h1>Course added successfully</h1></center>";
                echo "<script>window.open('profile.php','_self')</script>";
	}
	
	

}


?>
