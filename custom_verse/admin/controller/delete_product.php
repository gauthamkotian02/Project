<?php 
include '../../config.php';

$admin=new Admin();

$id=$_GET['p_id'];
$stmt=$admin->cud("DELETE FROM `voucher` WHERE `vr_id`='$id'","deleted");

echo "<script>alert('Deleted succesfully.....');window.location='../view_products.php';</script>";

?>
