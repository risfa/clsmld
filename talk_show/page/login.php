<?php
session_start();
if(isset($_POST['btnLogin'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = md5($password);
  $sqlceklogin = mysql_query("SELECT * FROM tb_spbu WHERE username = '$username' AND password = '$password'");
  $jumlah_data = mysql_num_rows($sqlceklogin);

  if($jumlah_data > 0){
    $data_spbu = mysql_fetch_array($sqlceklogin);
    $_SESSION['id_spbu'] = $data_spbu[0];
    $_SESSION['nomor_spbu'] = $data_spbu[1];
    $_SESSION['alamat_spbu'] = $data_spbu[2];
    $_SESSION['username'] = $data_spbu[3];
    $_SESSION['kota'] = $data_spbu[5];
    $_SESSION['pj'] = $_POST['pj'];
    echo "<script>document.location.href='index.php?menu=home'</script>";
  }else{
    echo "<script>alert('Maaf Kombinasi Username dan Password Gak ketemu')</script>";
  }
}
?>

<!-- MAN BETULIN YANG BAWAHNYA -->
<div class="container">

  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4" style="margin-top: 28vh;">
      <center>
      <img src="assets/logo_center.png" style="height: 80px; margin-top: 50px; margin-bottom: 50px;">
       <form  method="post">
         <input class="form-control" type="text" name="pj" required="" value="" placeholder="Nick Name ">
         <br>
         <input class="form-control" type="text" name="username" placeholder="Username">
         <br>
         <input class="form-control" type="password" name="password" value="" placeholder="Password">
         <br><br>
         <center><input class="btn btn-primary" type="submit" name="btnLogin" value="LOGIN" style="width: 100%;"></center>
       </form>
     </center>
   </div>

   <div class="col-md-4"></div>
 </div>
</div>
