<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
 header('location: index.php');}
 $old_password =mysqli_real_escape_string($con, $_POST['old_password']);
 $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
 $retype= mysqli_real_escape_string($con, $_POST['retype']);
 $e= $_SESSION['email'];
 $setting_query="select email, password from users where email='$e' ";
 $setting_query_result= mysqli_query($con, $setting_query) or die(mysqli_errno($con));
 $row=mysqli_fetch_array($setting_query_result);
 $orig_pass=$row['password'];
 
 if($new_password==$retype){
     if($old_password!=$orig_pass){
         header('location: settings.php?error=Wrong Old Password');
         }
     else {
         $update_query = "UPDATE users SET password='$new_password' WHERE email='$e'";
         $update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
         header('location: settings.php?error=Password Updated'); }
 }
 else{
     header('location: settings.php?error=new password and retype password does not match');}
 ?>

