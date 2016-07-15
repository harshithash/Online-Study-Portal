<html>
<title>Upload Chapter</title>
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
      <form method="post" action="upload_chapter.php" enctype="multipart/form-data">
   <table align="center" width="600" border="10" bgcolor="#FFFFFF" cellpadding="4px">
      <tr>
        <td align="center" bgcolor="#996699" colspan="6"><h1> Sign up</h1></td> 
      </tr>
      
       <tr>
      <td align="right">Course_id</td>
      <td><input type="number" name="crs_id"></td>
      </tr>
      
      <tr>
      <td align="right">Chapter_Number</td>
      <td><input type="number" name="chap_no"></td>
      </tr>
      
      <tr>
      <td align="right">Chapter_Name</td>
      <td><input type="text" name="chap_name"></td>
      </tr>
      
       <tr>
      <td align="right">DURATION</td>
      <td><input type="number" name="duration"></td>
      </tr>
      <tr>
      <td align="right">Assignment_link</td>
      <td><input type="file" name="ass_link"></td>
      </tr>
      <tr>
      <td align="right">Chapter_link</td>
      <td><input type="file" name="chap_link"></td>
      </tr>
      
      
      <tr>
      
      <td align="center" colspan="6"><input type="submit" name="submit" value="Upload now"></td>
      </tr>
      
   </table>
</form>
</body>
</html>

<?php
include("../connect.php");
if(isset($_POST['submit'])){
     $crs_id=$_POST['crs_id'];
	 $chap_no=$_POST['chap_no'];
	 $chap_name=$_POST['chap_name'];
	
	// $ass_link=$_POST['ass_link'];
	// $chap_link=$_POST['chap_link'];
         $duration=$_POST['duration'];
	 $ass_link=$_FILES['ass_link']['name'];	
	 $tmp_link=$_FILES['ass_link']['tmp_name'];	
	 $chap_link=$_FILES['chap_link']['name'];	
	 $tmp_link1=$_FILES['chap_link']['tmp_name'];
         
       $imageFileType = pathinfo($ass_link,PATHINFO_EXTENSION);

      //check for particular assignment format

     if($imageFileType != "pdf" ) {
       echo "Sorry, pdf files are allowed.";
       exit();
     }
      $imageFileType = pathinfo($chap_link,PATHINFO_EXTENSION);

      //check for particular assignment format

     if($imageFileType != "pdf" ) {
       echo "Sorry, pdf files are allowed.";
       exit();
     }
	if($crs_id=='' or  $chap_name=='' or $ass_link=='')
	{
		echo "<script>alert('any of fields is empty');</script>";
		exit();
		
	}
	else
	{
		 move_uploaded_file($tmp_link,"../course/$ass_link");
                  move_uploaded_file($tmp_link1,"../course/$chap_link");
		
		$insert_query = "insert into crs_content values('$crs_id','$chap_no','$chap_name','$chap_link' ,'$ass_link','$duration')";
	}
	
	if(mysqli_query($con,$insert_query))
	{
		echo "<center><h1>uploaded successfully</h1></center>";
	}
	
	

}


?>
