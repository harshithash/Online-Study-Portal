<?php

include("../connect.php");
if(isset($_POST['submit'])){
      $stu_name=$_POST['stu_name'];
     $stu_dob=$_POST['stu_dob'];
     $stu_city=$_POST['stu_city'];
   $stu_country=$_POST['stu_country'];
   $stu_id=$_POST['stu_id'];
    $stu_email=$_POST['stu_email'];
    $stu_pass=$_POST['password'];
    $rpassword=$_POST['rpassword'];
    $img ='1.png';
  if(  $stu_name=='' or $stu_dob=='' or $stu_pass=='' )
  {
    echo "<script>alert('any of fields is empty');</script>";
    exit();
    
  }
  else
  {
    if($stu_pass!=$rpassword)
    {
      echo "password didn't match.";
      echo "<script>window.open('signup.php','_self')</script>";
      exit();
    }
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';


   if(!preg_match($regex, $stu_email))
   {

     echo  "The email you have entered is invalid, please try again"; 
     exit();
   }
     
     $insert_query1 = "INSERT into professor values('$stu_name','$stu_email','$stu_pass','$stu_id','$stu_dob','$stu_city','$stu_country','$img')";
      $result = mysqli_query($con,$insert_query1) ;
      if (!$result) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
          }
        else
            echo "<script> window.open('http://localhost/dbms/4.php','_self')  </script>";

  }
  
 
}


?>
