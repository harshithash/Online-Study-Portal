
<html>
<title>Professor Signup</title>
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

 


  
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="float:centre;margin-left:300px;margin-right:300px;margin-top:43px;">

    

   
    <div class="w3-container">
      <form method="post" action="signup_post.php" enctype="multipart/form-data">
   <table align="center" width="600" border="10" bgcolor="#FFFFFF" cellpadding="4px">
      <tr>
        <td align="center" bgcolor="#996699" colspan="6"><h1> Sign up</h1></td> 
      </tr>
      
       <tr>
      <td align="right"> Name</td>
      <td><input type="text" name="stu_name"></td>
      </tr>
      <hr>
      
      <tr>
      <td align="right">Email id</td>
      <td><input type="text" name="stu_email"></td>
      </tr>
      
      <tr>
      <td align="right">City</td>
      <td><input type="text" name="stu_city"></td>
      </tr>

      <tr>
      <td align="right">Country</td>
      <td><input type="text" name="stu_country"></td>
      </tr>
      <td align="right">Professor ID</td>
      <td><input type="text" name="stu_id"></td>
      </tr>
      <tr>
      <td align="right">University</td>
      <td><input type="text" name="stu_dob"></td>
      </tr>

      <tr>
      <td align="right">Password</td>
      <td><input type="password" name="password"></td>
      </tr>
      
      <tr>
      <td align="right">confirm password</td>
      <td><input type="password" name="rpassword"></td>
      </tr>
      
      
      
      <!--<tr>
      <td align="right">Type</td>
      <td><select name="type" >
      <option>Student</option>
      <option>Professor</option>
      </td>
      </tr>
      
      
      <tr> -->
      
      <td align="center" colspan="6"><input type="submit" name="submit" value="Signup"></td>
      </tr>
      
   </table>
</form>



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
