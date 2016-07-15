<!DOCTYPE html>
<html>
<title>Assignments Uploaded</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-family: "Raleway", sans-serif;}
</style>
<body class="w3-light-grey">
  <?php include '../connect.php';?>
<?php include '../session.php';?>
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

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
  	<hr>

    <div class="w3-container w3-section" style="width:150%">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-twothird">
       <h4>Assignments Uploaded</h4>
          <table class="w3-table w3-striped w3-white">
<tr class="w3-grey w3-text-white w3-padding-16">
                          <td><i class=\"fa fa-user w3-blue w3-padding-tiny\"></i></td>
                          <td><b>Student ID</b></td>
                          <td><i><b>Course ID</b></i></td>
                          <td><i><b>Chapter Number</b></i></td>
                                                    <td><i><b>Assignment Link</b></i></td>
                                                    <td><i><b>Date of Submission</b></i></td>
                </tr>
          <!-- script for contents table -->
            <?php
             $q = $_SESSION['prof_id'];
                $sql="SELECT crs_id FROM course WHERE prof_id = '".$q."'";
              $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($result)) {
                $query = "SELECT * FROM assignment A WHERE A.crs_id = '".$row['crs_id']."' ";
                 $res=mysqli_query($con,$query);
             while($name = mysqli_fetch_array($res)){
			$addr="../uploads/".$name['ass_link'];
                  echo "<tr>
                            <td><i class=\"fa fa-file-pdf-o w3-blue w3-padding-tiny\" ></i></td>
                            <td>".$name['stu_id']."</td>
                            <td>".$name['crs_id']."</a></td>
                            <td>".$name['chap_no']."</a></td>
                            <td><a href=\"../course/pdf.php?link=".$name['ass_link']."\">".$name['ass_link']."</a></td>
                            <td>".$name['date_of_sub']."</td>
                          </tr>";
                  }
               }
            ?>
          </table>
        </div>
      </div>
    </div>
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
</script>

</body>
</html>
