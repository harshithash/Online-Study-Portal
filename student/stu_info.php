<?php
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
         <h4 class=\"w3-center\">My Profile</h4>
        
         <p class=\"w3-center\"><img src=\"".$row['stu_image']."\" class=\"w3-circle\" height=\"106\" width=\"106\" alt=\"".$row['stu_image']."\"></p>
         <form action=\"stu_info.php\" method=\"post\" enctype=\"multipart/form-data\">
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


 
/*if(isset($_POST['submit'])){

   

    $ass_link=$_FILES['fileToUpload']['name'];  
   $tmp_link=$_FILES['fileToUpload']['tmp_name']; 
  
  if($ass_link=='')
  {
    echo "<script>alert('any of fields is empty');</script>";
    exit();
    
  }
  else
  {
    
     move_uploaded_file($tmp_link,"../uploads/$ass_link");
    
    $update_query1 = "update student set stu_image='$ass_link' where stu_id='".$q."' ";
    // echo "hello";
  }
  
  if(mysqli_query($con,$update_query1))
  { echo "hello";
    echo "<center><h1>image updated successfully</h1></center>";
    echo " <script>window.open('stu_info.php','_self')</script>";
  }
  
  else
  {
    echo "<center><h1>image not updated successfully</h1></center>";
    
  }

}




?>*/






$target_dir = "../uploads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
    $uploadOk = 1;
}
// Check file size

// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 //  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
     $ass_link=$target_file;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
         $update_query1 = "update student set stu_image='$ass_link' where stu_id='".$q."' ";
         $res=mysqli_query($con,$update_query1);
         if($res!='')
         {     
            $_SESSION['stu_id']=$stu_id;
            echo " <script>window.open('profile.php','_self')</script>";
          }
  

    }
   else
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
