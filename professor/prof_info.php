<?php
$q = $_SESSION['prof_id'];
$sql="SELECT * FROM professor WHERE prof_id = '".$q."'";
$result = mysqli_query($con,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

while($row = mysqli_fetch_array($result)) {
    echo "<div class=\"w3-card-2 w3-round w3-white\">
        <div class=\"w3-container\">
         <h4 class=\"w3-center\">My Profile</h4>
         <p class=\"w3-center\"><img src=\"".$row['prof_image']."\" class=\"w3-circle\" height=\"106\" width=\"106\" alt=\"".$row['prof_image']."\"></p>
         <form action=\"profile.php\" method=\"post\" enctype=\"multipart/form-data\">
          Select image to upload:
          <input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
          <input type=\"submit\" value=\"Upload Image\" name=\"submit\">
         </form>
         <hr>
         <p><i class=\"fa fa-pencil w3-margin-right w3-text-theme\"></i>".$row['prof_name']."</p>
         <p><i class=\"fa fa-home w3-margin-right w3-text-theme\"></i>".$row['prof_city'].",".$row['prof_country']."</p>
         <p><i class=\"fa fa-graduation-cap w3-margin-right w3-text-theme\"></i>".$row['university']."</p>
         <p><i class=\"fa fa-chain w3-margin-right w3-text-theme\"></i>".$row['prof_email']."</p
        </div>
      </div>";}
 //<a href="http://localhost/dbms/professor/upload_chapter.php">UPLOAD</a>
      
$target_dir = "../uploads";
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    
	    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    
	if($check !== false&&move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
		$update_query1 = "update professor set prof_image='$target_file' where prof_id='".$prof_id."' ";
		 $res=mysqli_query($con,$update_query1);
		$_SESSION['prof_id']=$prof_id;
		echo " <script>window.open('profile.php','_self')</script>";
	    } else {
		echo "File is not an image.";
		$uploadOk = 0;
	    }
}

?>
