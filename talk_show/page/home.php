<center>
 <div class="col-md-3"></div>

 <div class="col-md-6">
  <table border="2" class="table" style="border-color: #10549d;">
    <!-- <h4 style="color: #10549d;">HOME</h4> -->
    <tr style="color: white; font-weight: bold; color: #10549d; background: white; text-align: center;">
      <td>No</td>
      <td>Jenis</td>
      <td>Sisa </td>
      <td>Status </td>

    </tr>
    <?php 


    $no = 1;
    $sqltampil = mysql_query("SELECT * FROM tb_hadiah WHERE id_spbu = '$_SESSION[id_spbu]' ORDER BY status_hadiah ASC");
    while($data = mysql_fetch_array($sqltampil)){

     ?>
     <tr style="color: #10549d; ">
       <td style="text-align: center;"><?php echo $no; ?></td>
       <td><?php echo $data['nama_hadiah']; ?></td>
       <td style="text-align: center;"><?php echo $data['jumlah_hadiah']; ?></td>
       <td  style="text-align: center;"><?php 
       if($data['status_hadiah']=='AKTIF'){
        echo "<label class='label label-info'>".$data['status_hadiah']."</label>"; 
      }else{
        echo "<label class='label label-danger'>".$data['status_hadiah']."</label>"; 
      }

      ?></td>
    </tr>
    <?php $no++; } ?>
  </table>
</div>
<div class="col-md-3"></div>
</center>
<div style="clear: both;"></div>