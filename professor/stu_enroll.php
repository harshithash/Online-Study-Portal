<!DOCTYPE html>
<html>
<title>Enrolled students</title>
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
      <?php include 'prof_info.php';?>
      <br>
    </div>
  </nav>


  <!-- Overlay effect when opening sidenav on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h5><b>My Dashboard</b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom">
      <div class="w3-quarter">
        <div class="w3-container w3-red w3-padding-16">
          <div class="w3-left"><i class="fa fa-comment w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>52</h3></div>
          <div class="w3-clear"></div>
          <h4><a href="stu_comp_crs.php">Students Enrolled</a></h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-blue w3-padding-16">
          <div class="w3-left"><i class="fa fa-eye w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>99</h3></div>
          <div class="w3-clear"></div>
          <h4><a href="profile.php">Courses</a></h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-teal w3-padding-16">
          <div class="w3-left"><i class="fa fa-share-alt w3-jumbo"></i></div>
          <div class="w3-right">
            <h3>23</h3></div>
          <div class="w3-clear"></div>
          <h4><a href="stu_ass.php">Assignments</h4>
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
                          <td><b>Student ID</b></td>
                          <td><i><b>Student Name</b></i></td>
                          <td><i><b>Course ID</b></i></td>
                          <td><i><b>Course Name</b></i></td>
                </tr>
            <?php

            $q = $_SESSION['prof_id'];
            //$con=$_SESSION["con"];
            $sql="SELECT crs_id FROM course WHERE prof_id= '".$q."'";
            $result = mysqli_query($con,$sql);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($con));
                exit();
              }

            while($row = mysqli_fetch_array($result)) {
              $query = "SELECT S.stu_id,S.stu_name,C.crs_name FROM course C,student S,stu_course E WHERE C.crs_id = '".$row['crs_id']."' and E.crs_id=C.crs_id and E.stu_id=S.stu_id";
              $res=mysqli_query($con,$query);
             while($name = mysqli_fetch_array($res)){
                echo "<tr>
                          <td><i class=\"fa fa-user w3-blue w3-padding-tiny\"></i></td>
                           <td>".$name['stu_id']."</a></td>
                           <td>".$name['stu_name']."</a></td>
                          <td>".$row['crs_id']."</a></td>
                          <td><a href=\"../course/course.php?crs_id=".$row['crs_id']."\">".$name['crs_name']."</a></td>
                          
                          
                        </tr>";
                  }
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
