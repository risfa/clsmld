<!doctype html>
<html lang="en">
  <head>
    <?php
  session_start();
  if(!isset($_SESSION['logged_in'])){
    echo '<script> alert("Login First");  window.location.href = "index.php"; </script>';
  } 
   ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <title>CLASS MILD</title>
  </head>
  <body  style="background-image: url('aset/Background_mobile.png'); background-repeat: repeat-y;">
    <br>
    <div style="position: fixed; color: white; right: 55px; top: 5px;" ><?php echo $_SESSION['logged_in']['username']; ?></div>
    <center><img src="aset/Logo.png" style="width: 40%;"></center>

    <hr>

    <br><br>
    <div class="container-fluid">
      <table class="table">
  <thead>
    <tr>
      <th style="text-align: center; color: white;" scope="col">#</th>
      <th style="text-align: center; color: white;" scope="col">Nama</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    require('connection.php');
    $spg_id = $_SESSION['logged_in']['id'];
    
    $query = mysqli_query($conn,"SELECT * FROM tb_users where spg_id = '$spg_id' order by id desc");
    $num = 1;
    
    while($list = mysqli_fetch_array($query,MYSQLI_BOTH)) {

     ?>
    <tr>

      <td  style="text-align: center; color: white;"scope="row"><?php echo $num; ?></td>
      <td  style="text-align: center; color: white;"><?php echo $list['NamaLengkap']; ?></td>
     
    </tr>
  <?php $num+=1; } ?>
    
  </tbody>
</table>

    </div>

<div class="container-fluid" style="position: fixed; bottom: 0;">
  <div class="row" ">
    <a href="regist_2.php" class="col-4" style="text-align: center;padding: 1%; background: lightgray"><i style="font-size: 2rem" class="fas fa-plus"></i></a>
    <a href="list.php" class="col-4" style="text-align: center;padding: 1%; background: grey"><i style="font-size: 2rem" class="fas fa-list-ul"></i></a>
    <a href="logout.php" class="col-4" style="text-align: center;padding: 1%;background: lightgray"> <i  style="font-size: 2rem;" class="fas fa-sign-out-alt"></i></a>  
  </div>
</div>


    <style>
  .radio-group{
    position: relative;
}

.radio{
    display:inline-block;
    background-color:lightblue;
    border: 2px solid black;
    cursor:pointer;
    margin: 2px 0; 
}

.radio.selected{
    border-color: red;
}
</style>

  <script>

    function show_modal(){
        $("#modal").show();

    }
function hide_modal(){
  $("#modal").hide();
}

$(document).ready(function(){
//     $("#hide").click(function(){
        $("#modal").hide();
//     });
//     $("#show").click(function(){
//     });
});
</script>
    <script>
     $('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
   
</script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>