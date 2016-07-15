<!DOCTYPE html>
<html>
<title>Completed Courses</title>
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
    <span class="w3-right"><a href="../logout.php">LOGOUT</a></span>
  </div>

  <!-- Sidenav/menu -->
  <nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;"><br>
    <div class="w3-container">
      <h5>Dashboard</h5>
      <!-- Profile -->
     <?php
	$stu_id=$_SESSION['stu_id'];
	$q = $stu_id;
	$sql="SELECT * FROM student WHERE stu_id = '".$q."'";
	$result = mysqli_query($con,$sql);
	if (!$result) {
	    printf("Error: %s\n", mysqli_error($con));
	    exit();
	}

	while($row = mysqli_fetch_array($result)) {
	    echo "<div class=\"w3-card-2 w3-round w3-white\">
		<div class=\"w3-container\">
		 <a href=\"profile.php\"><h4 class=\"w3-center\">My Profile</h4></a>
		
		 <p class=\"w3-center\"><img src=\"".$row['stu_image']."\" class=\"w3-circle\" height=\"106\" width=\"106\" alt=\"".$row['stu_image']."\"></p>
		 <form action=\"stu_comp_crs.php.php\" method=\"post\" enctype=\"multipart/form-data\">
		  Select image to upload:
		  <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
		  <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
		 </form>
		 <hr>
		 <p><i class=\"fa fa-pencil w3-margin-right w3-text-theme\"></i>".$row['stu_name']."</p>
		 <p><i class=\"fa fa-home w3-margin-right w3-text-theme\"></i>".$row['stu_city'].",".$row['stu_country']."</p>
		 <p><i class=\"fa fa-birthday-cake w3-margin-right w3-text-theme\"></i>".$row['stu_dob']."</p>
		 <p><i class=\"fa fa-chain w3-margin-right w3-text-theme\"></i>".$row['stu_email']."</p>
		</div>
	      </div>";
	    }

	$target_dir = "../uploads";
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    
	if($check !== false&&move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
		$update_query1 = "update student set stu_image='$target_file' where stu_id='".$q."' ";
		 $res=mysqli_query($con,$update_query1);
		$_SESSION['stu_id']=$stu_id;
		echo " <script>window.open('stu_comp_crs.php','_self')</script>";
	    } else {
		echo "File is not an image.";
		$uploadOk = 0;
	    }
	}
	
	?>
      <br>
    </div>
  </nav>


  <!-- Overlay effect when opening sidenav on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
	 <div class="searchbox"  >
<form action="search.php" method="get" enctype="multipart/form-data" style="float:right;padding-top:10px;" >

   <input type="text"  name="value1" placeholder="Search course" size="25" >
   <input type="submit"  name="search" value="Search" >

</form>
</div>

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><b>My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter" style="height:100%;">
        <div class="w3-container w3-red w3-padding-16">
          <div class="w3-left"><i class="fa fa-comment w3-jumbo"></i></div>
          <div class="w3-right"></div>
          <div class="w3-clear"></div>
          <h4><a href="stu_comp_crs.php">Courses<br>Completed</a></h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-blue w3-padding-16">
          <div class="w3-left"><i class="fa fa-eye w3-jumbo"></i></div>
          <div class="w3-right"></div>
          <div class="w3-clear"></div>
          <h4><a href="profile.php">Current<br>Courses</a></h4>
        </div>
      </div>
	<div class="w3-quarter">
        <div class="w3-container w3-teal w3-padding-16">
          <div class="w3-left"><i class="fa fa-share-alt w3-jumbo"></i></div>
          <div class="w3-right"></div>
          <div class="w3-clear"></div>
          <h4><a href="stu_ass_pending.php">Assignments Pending</a></h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-orange w3-text-white w3-padding-16">
          <div class="w3-left"><i class="fa fa-share-alt w3-jumbo"></i></div>
          <div class="w3-right"></div>
          <div class="w3-clear"></div>
          <h4><a href="stu_ass.php">Assignments Completed</a></h4>
      </div>
	</div>
    </div>

    <div class="w3-container w3-section">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-twothird">
          <h5>Feeds</h5>
          <table class="w3-table w3-striped w3-white" id="page-content">
      <tr class="w3-grey w3-text-white w3-padding-16">
                          <td><i class=\"fa fa-user w3-blue w3-padding-tiny\"></i></td>
                          <td><b>Course Name</b></td>
                          <td><i><b>Date of Completion</b></i></td>
                </tr>
            <?php

            $q = $_SESSION['stu_id'];
            //$con=$_SESSION["con"];
            $sql="SELECT crs_id,completion_date FROM stu_crs_completed WHERE stu_id= '".$q."'";
            $result = mysqli_query($con,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($con));
                exit();
              }

            while($row = mysqli_fetch_array($result)) {
              $sql = "SELECT crs_name FROM course WHERE crs_id = '".$row['crs_id']."'";
              $name = mysqli_fetch_array(mysqli_query($con,$sql));
                echo "<tr>
                          <td><i class=\"fa fa-user w3-blue w3-padding-tiny\"></i></td>
                          <td><a href=\"../course/course.php?crs_id=".$row['crs_id']."\">".$name['crs_name']."</a></td>
                          <td>".$row['completion_date']."</a></td>
                        </tr>";
                }
          ?>
          </table>
        </div>
      </div>
    </div>
    <hr>

   
   
    <hr>

    <br>
   
    

  <!-- End page content -->
  </div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
 
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}


function
</script>

</body>
</html>
