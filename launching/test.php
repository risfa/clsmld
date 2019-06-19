<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<h2>Select an option (You will get it's value displayed in the text input field!)</h2>
<form method="post" action="send.php">
  <div class="radio-group">
      <div class='radio' data-value="MALE"></div>1
      <div class='radio' data-value="Two"></div>2
      <div class='radio' data-value="Three"></div>3
      <br/>
      <input type="text" id="radio-value" name="radio-value" />
  </div>
  
</form>
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
<script>
	$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    var val = $(this).attr('data-value');
    //alert(val);
    $(this).parent().find('input').val(val);
});
</script> -->
<?php
$conn = mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); die();
  }

// function Rands(){
//   $randomString = '';
//   for ($i = 0; $i < 8; $i++) {
//         $randomString .= $num[rand(0, 8 - 1)];
//     }
// }
for ($i = 0; $i < 50 ; $i++) {
      $characters = array('Budi','Kevin','Naruto','Udin','Keysha','Syarif','Sri');

$phone_start = ['0812','0859','0878'];
$num = '0123456789';

$rokok = ['Djarum','Mild','Malboro','Gudang Garam'];
    $phone = array_rand($phone_start); 
    
    $randomName = array_rand($characters);
   
    
    
    $randomEmail = $characters[$randomName] . "@gmail.com";
    
    $randomPhone = $phone_start[$phone] . "-" . 89763450; 
    echo $i . " " . $randomEmail . " " . $randomPhone . " " .  $characters[$randomName] . "</br>";
    
    $randomRokok = array_rand($rokok);
    
    $gender = "Netral";

       mysqli_query($conn,"INSERT INTO tb_user VALUES(null,'$characters[$randomName]','$gender','$randomEmail','$randomPhone','Ya','$rokok[$randomRokok]','Y')");
    }
    echo '<script> alert("Clear"); </script>';

 ?>