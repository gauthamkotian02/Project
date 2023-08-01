<?php
include '../config.php';
$admin= new admin();

if(isset($_POST['submit'])){
    $name=$_POST['u_name'];
    $password=$_POST['u_password'];

    $stmt=$admin->ret("SELECT*FROM `customer` WHERE `u_name` ='$name' and `u_password`='$password'");
    $num=$stmt->rowCount();
    if($num>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['u_id']=$row['u_id'];
        $_SESSION['u_name']=$row['u_name'];
        $_SESSION['u_phone']=$row['u_phone'];
        $_SESSION['u_address']=$row['u_address'];
        //$_SESSION['u_email']=$row['u_email'];
        
        
           echo "<script>alert('login Successfull ');window.location='../index.php';</script>";
     }else{
         echo "<script>alert('You Have Entered Wrong Password');window.location='../login.php';</script>";
    }
}
?>