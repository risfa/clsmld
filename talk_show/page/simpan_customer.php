<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<?php 


// 
if(isset($_POST['submitCust'])){
	$file_tmp = $_FILES['fileCust']['tmp_name'];
	$nameCust = $_POST['nameCust'];
	$telpCust = $_POST['telpCust'];
	$bbm = $_POST['bbm'];
	$email = $_POST['emailCust'];

	$jumlahBeli = $_POST['jumlahBeli'];
	$jenis_kendaraan = $_POST['jenis_kendaraan'];
	$penanggung_jawab = $_POST['penanggung_jawab'];

	$sqlsimpancust = mysql_query("INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `no_hp`, `email`) VALUES (NULL, '$nameCust', '$telpCust', '$email');");
	$idcustomer = mysql_insert_id();
	$sqlsimpantrx = mysql_query("INSERT INTO `tb_transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_spbu`, `jenis_bbm`, `nominal_belanja`, `id_customer`, `jenis_kendaraan`, `penanggung_jawab`) 
		VALUES (NULL, CURRENT_TIMESTAMP, '$_SESSION[id_spbu]', 'NONE', 'NONE', '$idcustomer', 'NONE', '$penanggung_jawab');");

	$idFile = mysql_insert_id(); 
	// echo "Nama File:".$idFile;
	// $pindahkan_file = move_uploaded_file($file_tmp, "assets/strukBBM/".$idFile.".jpg");
	$pindahkan_file = TRUE;

	
	if($pindahkan_file){
		echo "<script>alert('Data Tersimpan, Silahkan Berlanjut ke raffle!')</script>";
		echo "<script>document.location.href='index.php?menu=raffle&idcustomer=$idcustomer&jumlahbeli=$jumlahBeli&jeniskendaraan=$jenis_kendaraan&idtrx=$idFile'</script>";
	}else if(!$pindahkan_file){
		echo "<script>alert('Maaf, Foto tidak tersimpan, silahkan masukan manual Foto, dengan menuliskan kode [".$idFile."], Kemudian foto menggunakan kamera HP')</script>";
		echo "<script>document.location.href='index.php?menu=raffle&idcustomer=$idcustomer&jumlahbeli=$jumlahBeli&jeniskendaraan=$jenis_kendaraan&idtrx=$idFile'</script>";
	}else{
		echo "<script>alert('**Data Tidak Tersimpan silahkan hubungi Crisis Center!!**')</script>";
	}
}
?>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('#file-input').on('change', function(){ //on file input change
		        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
		        {
		            $('#thumb-output').html(''); //clear html of output element
		            var data = $(this)[0].files; //this file data
		            
		            $.each(data, function(index, file){ //loop though each file
		                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
		                    var fRead = new FileReader(); //new filereader
		                    fRead.onload = (function(file){ //trigger function on successful read
		                    return function(e) {

		                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
		                        $('#thumb-output').append(img); //append image to output element
		                        
		                        // var value = $('<input name="nama_file" type="text">').attr('value', e.target.result); //create image element 
		                        // $('#temp_image').append(value); //append image to output element
		                    };
		                    })(file);
		                    fRead.readAsDataURL(file); //URL representing the file's data.
		                }
		            });
		            
		        }else{
		            alert("Your browser doesn't support File API!"); //if File API is absent
		        }
		    });
		});
	</script>
	<style type="text/css">
		.thumb{
		    margin: 10px 5px 0 0;
		    width: 100px;
		}
	</style>
<center>
	<div class="row" >
		<div class="col-sm-4 col-md-3"></div>
		<div class="col-sm-4 col-md-6">


			<form enctype="multipart/form-data" class="form-group"  method="post" style="margin-top: 5vh;">
				<div>

					<!-- <div id="temp_image"></div> -->
					<div class="form-group">
						<!-- <span style="color: #10549d;">Nama PJ</span> -->
					<input class="form-control" type="text" name="" placeholder="Nama PJ"  required="" readonly="" value="Penanggung Jawab : <?php echo $_SESSION['pj'] ?>">
					<input type="hidden" name="penanggung_jawab" value="<?php echo $_SESSION['pj'] ?>">
						
					</div>
					<hr>
					<input class="form-control" type="text" name="nameCust" placeholder="Nama Lengkap" required="">
					<br>
					<input  class="form-control" type="number" name="telpCust" placeholder="Nomor Handphone" required="">
					<br>
					<input  class="form-control" type="email" name="emailCust" placeholder="Email Aktif" required="">
					<br>

					<!-- <input  class="form-control" type="file" id="file-input" name="fileCust" required=""> -->
					<!-- <div id="thumb-output" style="margin: 10px 5px 0 0; width: 100px;"></div> -->
					<!-- <br> -->
					<!-- <input  class="form-control" type="number" name="jumlahBeli" placeholder="Nominal Transaksi" method="post" required=""> -->
					<!-- <br> -->
					<!-- <select name="bbm" class="form-control"> -->
						<!-- <option value="Pertalite">Pertalite</option> -->
						<!-- <option value="Pertamax">Pertamax</option>	 -->
					<!-- </select> -->
					<!-- <br>	 -->
					<!-- <input style="margin-top: 10px;" type="radio" name="kendaraan" value="Mobil"> <i style="font-size: 30px;" class="fas fa-car"></i>
					 -->
					 <!-- <input style="margin-top: 20px; margin-bottom: 20px; margin-left: 30px; " value="Motor" type="radio" name="kendaraan"> <i style="font-size: 30px" class="fas fa-motorcycle"></i> -->
<!-- 					<select style="" name="jenis_kendaraan" class="form-control">
						<option value="Motor">Motor</option>
						<option value="Mobil">Mobil</option>	
					</select>
					<br> -->
					<center>
						<input style="width: 100%;" class="btn btn-primary" type="submit" name="submitCust" value="LANJUTKAN RAFFLE" method="post">
					</center>
				</div>
				<br>
			</form>
			<form method="post" action="send.php">
 <!--  <div class="radio-group">
      <div class='radio' data-value="One"></div>1
      <div class='radio' data-value="Two"></div>2
      <div class='radio' data-value="Three"></div>3
      <br/>
      <input type="text" id="radio-value" name="radio-value" />
  </div> -->
  
</form>
		</div>
		<div class=" col-md-3"></div>
	</div>
</center>
<script type="text/javascript">
	$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
</script>

<style>
	.radio-group{
    position: relative;
}

.radio{
    display:inline-block;
    width:15px;
    height: 15px;
    border-radius: 100%;
    background-color:lightblue;
    border: 2px solid lightblue;
    cursor:pointer;
    margin: 2px 0; 
}

.radio.selected{
    border-color: blue;
}
</style>