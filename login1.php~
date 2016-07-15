<?php
session_start();
?>



<html>
<title>Professor Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<header class="w3-container w3-teal">
  <h1>Login Professor</h1>
</header>

<div class="w3-container w3-half w3-margin-top"  style="margin-left: 300px;">

<form class="w3-container w3-card-4"  style="float:inline-block;" method="post" action="login1.php">

<p>
<input class="w3-input" type="text" style="width:90%" required name="stu_name" >
<label class="w3-label w3-validate">UserId</label></p>
<p>
<input class="w3-input" type="password" style="width:90%" required name="stu_pass">
<label class="w3-label w3-validate">Password</label></p>

<p>
 <input class="w3-btn w3-section w3-teal w3-ripple" type="submit" name="login" value="Login"></p>

</form>

</div>

</body>
</html> 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";



if(isset($_POST['login'])){
	
	 $stu_name = mysqli_real_escape_string($conn,$_POST['stu_name']);  //using this fn mysql stop malicious code
	$stu_pass = mysqli_real_escape_string($conn,$_POST['stu_pass']);
	
	$encrypt=md5($stu_pass);
	$admin_query="select * from professor where prof_id='$stu_name' and prof_pass='$stu_pass' ";
	$run=mysqli_query($conn,$admin_query); 

	//$run=mysql_query($admin_query);
	
	
   if($run)
   echo  $numrows = mysqli_num_rows($run);
    else
    die( "something failed");
	
	
	if(mysqli_num_rows($run)>0)
	{
		$_SESSION['prof_id']=$stu_name;
		echo "<script> window.open('http://localhost/dbms/professor/profile.php','_self')  </script>";
	}
	else
	{
		echo "<script>alert('username or password is incorrect')</script>";
	}
	
}

?>


