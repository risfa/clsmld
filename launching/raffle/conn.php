<?php 
// error_reporting(0);
// $sql = new mysqli("5dapps.com", "dapps_cip", "cippertamina", "dapps_amplified_cip_2017");
$sql = new mysqli("localhost", "dapps_user", "l1m4d1g1t", "dapps_joker_swillhouse");
if (!$sql) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit;
}
?>
