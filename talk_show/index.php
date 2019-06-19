<?php 
session_start();
include("config/connection.php");
include("config/resize-class.php");
?>
<!DOCTYPE html>
<html>
<head>
  <script  src="config/jquery.min.js"></script>
  <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Authentic City</title>
</head>
<body>
  <?php 
    if(!empty($_SESSION['id_spbu'])){
  ?> 
 
  <div style="position: fixed; width: 40%; z-index: 99; text-align: center; bottom: 8%; left: 30%; background-color: none; padding-left: 10px; padding-right: 10px; " class="col-md-12">
     <center>
    <div class="row" style="background-color: #f6f6f6; width: 100%;">
      <?php 
        $menunya = $_GET['menu'];
       ?>

       <?php if($menunya == 'home'){ ?>
            
      <div class="col-xs-3 col-sm-3" style="background: url(assets/menu_selector2.png); background-size: contain; padding: 35px; background-repeat: no-repeat; background-position: center;"><a style=" color: #FFF;" href="index.php?menu=home"><i class="fa fa-home"></i><br>HOME</a></div>
      <?php }else{ ?>
      <div class="col-xs-3 col-sm-3 " style="padding: 35px;"><a style=" color: black;" href="index.php?menu=home"><i class="fa fa-home"></i><br>HOME</a></div>
      <?php } ?>

       <?php if($menunya == 'entry_data'){ ?>
      <div class="col-xs-3 col-sm-3" style="background: url(assets/menu_selector2.png); background-size: contain; padding: 35px; background-repeat: no-repeat; background-position: center;"><a style="  color: #FFF;" href="index.php?menu=entry_data"><i class="fa fa-cart-plus"></i><br>REGISTER</a></div>
      <?php }else{ ?>
       <div class="col-xs-3 col-sm-3" style="padding: 35px;"><a style=" color: black;" href="index.php?menu=entry_data"><i class="fa fa-cart-plus"></i><br>REGISTER</a></div>
      <?php } ?>

       <?php if($menunya == 'user_data'){ ?>
      <div class="col-xs-3 col-sm-3" style="background: url(assets/menu_selector2.png); background-size: contain; padding: 35px; background-repeat: no-repeat; background-position: center;"><a style="  color: #FFF;" href="index.php?menu=user_data"><i class="fa fa-trophy"></i><br>HISTORY</a></div>
       <?php }else{ ?>
       <div class="col-xs-3 col-sm-3" style="padding: 35px;"><a style=" color: black; padding: 5px;" href="index.php?menu=user_data"><i class="fa fa-trophy"></i><br>HISTORY</a></div>
        <?php } ?>
      <div class="col-xs-3 col-sm-3" style="padding: 35px;"><a style=" color: black;" href="index.php?menu=logout"><i class="fa fa-times"></i><br>LOGOUT</a></div>
    </div>
    </center>
  </div>
  
  <?php } ?>

  <div class="container">
    <?php include ("page/navbar.php"); ?> 
    
    <style type="text/css">
    body{
      /*width:100%;
      height:120%;*/
    }
     body, html{
      color: white;
      /*background-image:url("assets/BG2.jpg");*/
      /*background-color: -ms-linear-gradient(-45deg, rgba(71,141,25,1) 0%, rgba(255,255,255,1) 100%);*/

      margin:0;
      padding: 0;
      height: 100%;

    }

    body{
      background-attachment: fixed;
      background-image:url("assets/bgclass.jpg");
      background-size: 100% 100%;
      background-repeat: none;
    }
  </style>
  <div style="margin-top:-30px; margin-bottom: 10vh">
  <?php 

    // echo "SPBU".$_SESSION['id_spbu'];
  $menu = $_GET['menu'];
  if(empty($_SESSION['id_spbu'])){
    include("page/login.php");
  }else{
    switch ($_GET['menu']) {
      case 'home':
      include("page/home.php");
      break;
      case 'entry_data':
      include("page/simpan_customer.php");
      break;
      case 'login':
      include("page/login.php");
      break;
      case 'raffle':
      include("page/raffle.php");
      break;
      case 'user_data':
      include("page/user_data.php");
      break;
      case 'uplodan':
      include("page/uplodan.php");
      break;
      case'regAdmin':
      include("regAdmin.php");
      break;
      case'manageHadiah':
      include("manageHadiah.php");
      break;
      case'raffle2':
      include("page/raffle2.php");
      break;

      case 'logout':
      session_destroy();
      echo "<script>document.location.href='index.php?menu=home'</script>";
      break;
      
      default:
      echo "<script>document.location.href='index.php?menu=home'</script>";
      break;
    }
  }
  ?>
</div>  


</div>

</body>
<img src="assets/Sponsor.png" style="
    width: 100%;
    position: fixed;
    z-index: 9999;
    bottom: 0;
">
</html>