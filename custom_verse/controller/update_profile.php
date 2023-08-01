<?php
include '../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $name=$_POST['u_name'];
    $email=$_POST['u_email'];
    $password=$_POST['u_password'];
   
    $image="upload/".basename($_FILES['p_image']['name']);
    move_uploaded_file($_FILES['p_image']['tmp_name'],$image);
 

    $stmt=$admin->cud("UPDATE `admin` SET `a_name`='$name',`a_email`='[value-3]',`a_password`='[value-4]',`a_profile`='$image'","updated");
    echo "<script>alert('Profile Updated');window.location='../update_profile.php';</script>";
}
?>

