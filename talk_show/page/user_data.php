<!-- <center>
	<h3 style="color: white;">Pemenang</h3>
</center> -->
<br><br>
<?php 
	$sql = mysql_query("SELECT * FROM tb_transaksi WHERE id_spbu = '$_SESSION[id_spbu]' ORDER BY id_transaksi DESC");
	while($data = mysql_fetch_array($sql)){
	$data_customer = mysql_fetch_array(mysql_query("SELECT * FROM tb_customer WHERE id_customer = '$data[id_customer]'"));
?>
<center>
	<div style="background: white; width: 55%; height: auto; color: black; padding: 5px;">
		<div class="row" style="text-align: left;">
		<div class="col-md-5">
			<font style="text-transform: uppercase;">CUST : <?php echo $data_customer['nama_customer']." | ".$data_customer['no_hp'] ?></font><br>
			<font style="text-transform: uppercase;"><b><?php 
						if($data['hadiahnya']!=''){
							echo $data['hadiahnya'];
						}else{
							echo "<a href='index.php?menu=raffle&idcustomer=$data_customer[0]&jumlahbeli=$data[4]&jeniskendaraan=$data[6]&idtrx=$data[0]' class='alert'>RAFFLE ULANG</a>";
						}
					echo "</b> <br> #".$data['tanggal_transaksi'] ?></font>
			<font style="text-transform: uppercase;"><br><b>PJ : <?php echo $data['penanggung_jawab']."</b> | #TRX".$data[0] ?></font>
		</div>
		<!-- <div class="col-xs-4 col-sm-4">
			<a target="blank" href="http://joker.5dapps.com/pertamina/luckyfriday/assets/strukBBM/<?php echo $data[0] ?>.jpg"><img src="assets/strukBBM/<?php echo $data[0] ?>.jpg" style="width:100%;"></a>
		</div> -->
	</div>
	</div>
	</center>
	<br>
<?php } ?>
<div style="height: 150px; color: red; text-align: center;">-END OF PAGE-</div>

<style type="text/css">
	.alert{
		color: red;
		margin-left: -16px;
		  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
	}
	@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
</style>

