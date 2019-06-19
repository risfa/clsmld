<script  src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<?php 
//Kalo ID Trx Gak Ada Getnya gak ada
if(!$_GET['idtrx']){
	echo "<script>document.location.href='index.php'</script>";
}else{
	//Kalo dia udah pernah raffle tapi glitch terjadi, maka akan kita masukan ke halaman lain

	$cekapakah_sudah_ada_hadiah = mysql_fetch_array(mysql_query("SELECT * FROM tb_transaksi WHERE id_transaksi = '$_GET[idtrx]'"));
	if($cekapakah_sudah_ada_hadiah['hadiahnya']!=""){
		echo "<script>document.location.href='index.php?menu=raffle2&idtrx=$_GET[idtrx]'</script>";
	}
}



	//1 Mobil, 2 Motor, 3 Umum	
$idtrx = $_GET['idtrx'];
$jumlahbeli = $_GET['jumlahbeli'];
$jeniskendaraan = $_GET['jeniskendaraan'];
$id_spbu = $_SESSION['id_spbu'];

if($jeniskendaraan == "Motor"){
	if($jumlahbeli >= 25000){
		$status_spesial = 1;
	}else{
		$status_spesial = 0;
	}
}else{
	if($jumlahbeli >= 175000){
		$status_spesial = 1;
	}else{
		$status_spesial = 0;
	}
}

$jenis_kendaraan = $jeniskendaraan;


if(isset($_POST['simpantrnsaksinya'])){
	echo "<script>document.location.href='index.php?menu=home'</script>";
}



?>

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="margin-top: 100px;">

			<center>

				<div style="display: block; height: 200px; font-size: 15pt; text-transform: uppercase; color: blue;" id="raffleBox" class="styleBox">
					<div class="boxnya " >LOADING DATA..</div>
				</div>

				<div style="display: none; height: 200px; font-size: 15pt; text-transform: uppercase;  color: blue;" id="resultBox">
					<div id="hadiah"></div> 
				</div>

				<div style="margin-top: -15vh">
					<input class="btn btn-lg btn-danger buttonStop" type="submit" name="" onclick="stop()" style="height: 100px; width: 100px; border-radius: 180%;" value="STOP!">
					
					<a href="index.php?menu=entry_data">
						<input class="btn btn-lg btn-info buttonGetThePrize" type="button" style="display: none;"  value="GET THE PRIZE!">
					</a>
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
	// var hadiahnya = "<?php echo $varible_rand ?>";



	function stop(){
		$('.buttonStop').hide();
		$('#raffleBox').hide();
		$('#PrizeBox').hide();
		document.getElementById("raffleBox").style.visibility = "hidden";


		var id_transaksi = <?php echo $idtrx ; ?>;

		var status_spesial = "<?php echo $status_spesial ?>";
		var id_spbu = "<?php echo $id_spbu ?>";
		var jenis_kendaraan = "<?php echo $jenis_kendaraan ?>";

		$.ajax({
			url:"page/api.php",
			method:"POST",
			data:{
				id_transaksi:id_transaksi,
				status_spesial:status_spesial,
				id_spbu:id_spbu,
				jenis_kendaraan:jenis_kendaraan
			},
			success:function(data)
			{
				var data = JSON.parse(data);
				document.getElementById('hadiah').innerHTML = data.hadiah;


			},error: function (error) {
				alert('Koneksi Anda Terputus, Silahkan ulangi');
				location.reload();
			}
		}); 



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