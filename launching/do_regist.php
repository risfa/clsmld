<?php
session_start();
require('connection.php');

$name = $_POST['nama'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$Cigerate = $_POST['cigerate'];
$lainnya = $_POST['rokok_lainnya'];
$cigerFinal = '';
$category = $_POST['category'];

// if(empty($lainnya)){
// 	$cigerFinal = $Cigerate;
// }else{
// 	$cigerFinal = $lainnya;
// }

if(!empty($Cigerate)){
	$Smoker = "Yes";
}else{
	$Smoker = "No";
}
$spg_id = $_SESSION['logged_in']['id'];





mysqli_query($conn,"INSERT INTO tb_users(id,NamaLengkap,gender,email,phone,merokok,nama_rokok,category,spg_id) VALUES(NULL,'$name','$gender','$email','$phone','$Smoker','$Cigerate','$category','$spg_id')");

?>
<script type="text/javascript">
	alert('success')
	window.location.href = 'regist_2.php';
</script>
<?php 
?>