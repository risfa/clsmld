<script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<?php 
//Kalo ID Trx Gak Ada Getnya gak ada
if(!$_GET['idtrx']){
	echo "<script>document.location.href='index.php'</script>";
}else{
	//Kalo dia udah pernah raffle tapi glitch terjadi, maka akan kita masukan ke halaman lain

	$varible_rand = mysql_fetch_array(mysql_query("SELECT * FROM tb_transaksi WHERE id_transaksi = '$_GET[idtrx]'"));

}

$varible_rand2 = $varible_rand['hadiahnya'];
	



if(isset($_POST['simpantrnsaksinya'])){
	// mysql_query("UPDATE tb_hadiah SET jumlah_hadiah = '$jumlah_hadiah_baru' WHERE id_hadiah = '$kode_hadiah' AND id_spbu = '$id_spbu'");
	// $dapet_hadiah = mysql_query("UPDATE `tb_transaksi` SET `hadiahnya` = '$varible_rand' WHERE `tb_transaksi`.`id_transaksi` = '$idtrx';");
	echo "<script>document.location.href='index.php'</script>";
}

// $dapet_hadiah  = mysql_query("INSERT INTO `tb_pemenang` (`id_pemenang`, `id_spbu`, `nama_hadiah`, `id_transaksi`, `time`) VALUES (NULL, '$id_spbu', '$varible_rand','$idtrx', CURRENT_TIMESTAMP);");


?>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="margin-top: 100px;">

			<center>

				<div style="display: block; height: 200px; font-size: 15pt; text-transform: uppercase; color: blue;" id="raffleBox" class="styleBox">
					<div class="boxnya " >LOADING DATA..</div>
				</div>

				<div style="display: none; height: 200px; font-size: 15pt; text-transform: uppercase; color: blue;" id="resultBox">
					<div><?php echo $varible_rand2; ?></div>
				</div>

				<div style="margin-top: -15vh">
					<input class="btn btn-lg btn-danger buttonStop" type="submit" name="" onclick="stop()" style="height: 100px; width: 100px; border-radius: 180%;" value="STOP!">
					
					<!-- <a href="index.php""> -->
						<form method="post">
							<input   class="btn btn-lg btn-info buttonGetThePrize" type="submit" style="display: none;" name="simpantrnsaksinya" value="GET THE PRIZE!">
						</form>
					<!-- </a> -->
				</div>

			</center>

		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<script type="text/javascript">
	var words = [
	'HADIAH HIBURAN',
	'HADIAH VOUCHER',
	'HADIAH DISKON',
	'HADIAH GYM',
	'HADIAH F&B'
	];

	var getRandomWord = function () {
		return words[Math.floor(Math.random() * words.length)];
	};
	var hadiahnya = "<?php echo $varible_rand2 ?>";



	function stop(){
		$('.buttonStop').hide();
		$('#raffleBox').hide();
		$('#PrizeBox').hide();
		document.getElementById("raffleBox").style.visibility = "hidden";
		$('#resultBox').show();
		$('.buttonGetThePrize').show();
	}



	$(function() { // after page load
		$('.result').hide();
		setInterval(function(){
			$('.boxnya').hide(1, function(){
				$(this).html(getRandomWord()).show();
			});
		// 5 seconds
	}, 1);

	});
</script>