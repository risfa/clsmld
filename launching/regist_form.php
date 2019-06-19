<!doctype html>
<html lang="en">
<head>
  <?php
  session_start();
  if(!isset($_SESSION['logged_in'])){
    echo '<script> alert("Login First")  window.location.href = "index.php" </script>';
  } else {
    ?>
    <script type="text/javascript">
      alert('Welcome' + " " + '<?php echo $_SESSION['logged_in']['username']; ?>')
    </script>
    <?php
  }
   ?>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <title>CLASS MILD</title>
</head>
<body style="background-image: url('aset/Background_mobile.png'); background-repeat: no-repeat;">
 <div style="position: fixed; color: white; right: 55px; top: 5px;" ><?php echo $_SESSION['logged_in']['username']; ?></div>
 <br>
 <center><img src="aset/Logo.png" style="width: 40%;"></center>

 <hr>

 <br>
 <div class="container-fluid">
  <!-- Form Start here -->
  <form method="POST" action="do_regist.php">
    <div class="row radio-group">

  <div class="col-2"></div>   
  <div class="col-2 radio" onclick="setCat('Tamu')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%; text-align: center;"><label>Tamu</label></div> 
  <div class="col-1"></div>
  <div class="col-2 radio" onclick="setCat('Media')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%; text-align: center;"><label>Media</label></div>
  <div class="col-1"></div>
  <div class="col-2 radio" onclick="setCat('Lainnya')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%; text-align: center;"><label>Lainnya</label></div>
  <div class="col-2"></div>
</div>
<script>
 function setCat(cat) {
  document.getElementById("cat").value = cat;
}

</script>

<input type="hidden" id="cat" name="category">
<br>
    <!-- name -->
    <div class="form-group row">
      <div class="col-2"></div>
      <div class="col-9 row" style="border: 1px black solid; padding: 0;">
       <div class="col-1" style="background: lightblue; text-align: center;padding-top: 6px;"><i class="fas fa-user"></i></div>
       <div class="col-11" style="padding: 0"><input style="border-radius:0;" type="text" class="form-control" placeholder="Nama" name="name"></div>
     </div>
   </div>
   <!-- tel -->
   <div class="form-group row">
    <div class="col-2"></div>
    <div class="col-9 row" style="border: 1px black solid; padding: 0;">
     <div class="col-1" style="background: lightblue; text-align: center;padding-top: 6px;"><i class="fas fa-phone"></i></div>
     <div class="col-11" style="padding: 0"><input style="border-radius:0;" type="number" class="form-control" placeholder="Phone Number" name="phone"></div>
   </div>
 </div>
 <!-- email -->
 <div class="form-group row" id="gender">
  <div class="col-2"></div>
  <div class="col-9 row" style="border: 1px black solid; padding: 0;">
   <div class="col-1" style="background: lightblue; text-align: center;padding-top: 6px;"><i class="fas fa-envelope"></i></div>
   <div class="col-11" style="padding: 0"><input style="border-radius:0;" type="email" class="form-control" placeholder="Email" name="email"></div>
 </div>
</div>
<!-- gender -->
<div class="row radio-group">
  <div class="col-3"></div>
  <div class="col-1 radio" onclick="setValue('Male')" style="background: lightblue;padding-top: 1%;padding-left: 20px;padding-bottom: 1%;"><i style="font-size: 1.75rem" class="fas fa-mars"></i></div>
  <div class="col-4"></div>
  <div class="col-1 radio" onclick="setValue('Female')" style="background: lightpink;padding-top: 1%;padding-left: 20px;padding-bottom: 1%;"><i style="font-size: 1.75rem" class="fas fa-venus"></i></div>
</div>



<script >
 function setValue(gender) {
  document.getElementById("genderIsi").value = gender;
}

</script>

<input type="hidden" id="genderIsi" name="gender">


<!-- smoke -->
<div class="row radio-group">
  <div class="col-3"></div>
  <div class="col-1 radio" onclick="show_modal()" id="show" style="background: lightblue;padding-top: 1%;padding-left: 15px;padding-bottom: 1%;"><i style="font-size: 1.6rem" data-value="smoker" class="fas fa-smoking"></i></div>
  <div class="col-4"></div>
  <div class="col-1 radio" onclick="hide_modal()" style="background: lightpink;padding-top: 1%;padding-left: 15px;padding-bottom: 1%;"><i style="font-size: 2rem" data-value="non-smoker" class="fas fa-smoking-ban"></i></div>

</div>

<div id="modal">
 <div class="row radio-group">

  <div class="col-2"></div>   
  <div class="col-2 radio" onclick="setCiger('ClassMild')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%; text-align: center;"><label>Class Mild</label></div> 
  <div class="col-1"></div>
  <div class="col-2 radio" onclick="setCiger('A_mild')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%; text-align: center;"><label>A Mild</label></div>
  <div class="col-1"></div>
  <div class="col-2 radio" onclick="setCiger('dunhill_mild')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%; text-align: center;"><label>Dunhill Mild</label></div>
  <div class="col-2"></div>

  <div class="col-2"></div>    
  <div class="col-2 radio" onclick="setCiger('dunhill_filter')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%;text-align: center;"><label>Dunhill Filter</label></div> 
  <div class="col-1"></div>
  <div class="col-2 radio" onclick="setCiger('gg_surya')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%;text-align: center;"><label>GG Surya</label></div>
  <div class="col-1"></div>
  <div class="col-2 radio" onclick="setCiger('marboro')" style="background: lightblue;padding-top: 1%;padding-bottom: 1%;text-align: center;"><label>Marlboro Red/Gold</label></div>
  <div class="col-2"></div>

  <div class="col-2"></div>    
  <div class="col-2" ></div> 
  <div class="col-1"></div>
  <div class="col-2 radio" style="background: lightblue;padding-top: 1%;padding-bottom: 1%;">
    <input class="form-control" placeholder="lainnya" type="text" name="rokok_lainnya">
  </div>
  <div class="col-1"></div>
  <div class="col-2"></div>
  <div class="col-2"></div>
</div>
<script>
 function setCiger(cigerate) {
  document.getElementById("cigerate").value = cigerate;
}


</script>

<input type="hidden" id="cigerate" name="cigerate">


</div>



</div>
</div>





<br><br><br>
<center>
  <button type="submit" class="btn btn-success">Register</button>
</center>
</form>
</div>

<div class="container-fluid" style="position: fixed; bottom: 0;">
  <div class="row" ">
    <a href="regist_form.php" class="col-4" style="text-align: center;padding: 1%; background: grey"><i style="font-size: 2rem" class="fas fa-plus"></i></a>
    <a href="list.php" class="col-4" style="text-align: center;padding: 1%; background: lightgray"><i style="font-size: 2rem" class="fas fa-list-ul"></i></a>
    <a href="" class="col-4" style="text-align: center;padding: 1%;background: lightgray"> <i  style="font-size: 2rem;" class="fas fa-sign-out-alt"></i></a>  
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
	$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
  });
</script>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>