<!doctype html>
<?php session_start(); ?>
<html lang="en">

<head>

    <?php
$username = $_SESSION['logged_in']['username'];
$spg_id = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tb_login WHERE username = '$username'"));

    if(isset($_POST['registrasi'])){
        // print_r($_POST);echo " " . "<br>";die();

        // echo "<script>alert('ASdasdasd')</script>";
        $name = $_POST['names'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $Cigerate = $_POST['cigerate'];
        $lainnya = $_POST['rokok_lainnya'];
        $cigerFinal = '';
        $category = $_POST['category'];
        echo "INSERT INTO tb_users(id,NamaLengkap,gender,email,phone,merokok,nama_rokok,category,spg_id) VALUES(NULL,'$name','$gender','$email','$phone','$Smoker','$cigerFinal','$category','$spg_id[id]')";

    }

    if(!isset($_SESSION['logged_in'])){
        echo '<script> alert("Login First")  window.location.href = "index.php" </script>';
    } else {
        ?>
        <script type="text/javascript">
            // alert('Welcome' + " " + '<?php echo $_SESSION['
                logged_in ']['
                username ']; ?>')
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

        <script>
            function setCat(cat) {
                document.getElementById("cat").value = cat;
            }
        </script>


        <script>
            function setValue(gender) {
                document.getElementById("genderIsi").value = gender;
            }
        </script>
    </head>

    <body style="background-image: url('aset/Background_mobile.png'); background-repeat: no-repeat;">
        <div style="position: fixed; color: white; right: 55px; top: 5px;">
            <?php echo $_SESSION['logged_in']['username']; ?>
        </div>
        <br>
        <center><img src="aset/Logo.png" style="width: 40%;"></center>

        <hr>

        <br>
        <div class="container-fluid">
            <!-- Form Start here -->
            <form method="POST" >
                <div class="row radio-group" style="margin: 0 auto;">

                    <div class="col-2"></div>
                    <div class="col-8">
                        <center>
                            <div class="radio mybutton col-4" onclick="setCat('Tamu')" style="width:100px; height: 70px;">
                                <label>Tamu</label>
                            </div>
                            <div class="radio mybutton col-4" onclick="setCat('Media')" style="width:100px; margin-left: 20px; margin-right: 20px; height: 70px;">
                                <label>Media</label>
                            </div>
                            <div class="radio mybutton col-4" onclick="setCat('Lainnya')" style="width:100px; height: 70px;">
                                <label>Lainnya</label>
                            </div>
                        </center>
                    </div>
                    <div class="col-2"></div>
                </div>

                <input type="hidden" id="cat" name="category">
                <br>
                <!-- name -->
                <div class="form-group row">
                    <div class="col-3"></div>

                    <div class="col-8 row" >

                        <div class="col-1" style="background: #12669a; text-align: center;padding-top: 6px;">
                            <i style="color: white" class="fas fa-user"></i></div>
                            <div class="col-9" style="padding: 0">
                                <input style="border-radius:0;" type="text" class="form-control" placeholder="Full Name" value="Adam" name="names">
                            </div>

                        </div>

                    </div>

                    <!-- phone -->
                    <div class="form-group row">
                        <div class="col-3"></div>

                        <div class="col-8 row" >

                            <div class="col-1" style="background: #12669a; text-align: center;padding-top: 6px;">
                                <i style="color: white" class="fas fa-phone"></i></div>
                                <div class="col-9" style="padding: 0">
                                    <input style="border-radius:0;" type="text" value="0812312" class="form-control" placeholder="Phone Number" name="phone">
                                </div>

                            </div>

                        </div>

                        <!-- mail -->
                        <div class="form-group row">
                            <div class="col-3"></div>

                            <div class="col-8 row" >

                                <div class="col-1" style="background: #12669a; text-align: center;padding-top: 6px;">
                                    <i style="color: white" class="fas fa-envelope"></i></div>
                                    <div class="col-9" style="padding: 0">
                                        <input style="border-radius:0;" type="email" value="mail@mail.com" class="form-control" placeholder="Email" name="email">
                                    </div>

                                </div>

                            </div>

                            <!-- gender -->
                            <div class="row radio-group">

                                <div class="col-4"></div>
                                <div class="col-4">
                                    <center>
                                        <div class="mybutton radio " onclick="setValue('Male')" style="width:100px;  margin-right: 20px; height: 70px;  float: left;"><i style="font-size: 2rem" class="fas fa-mars"></i></div>

                                        <div class="mybutton radio " onclick="setValue('Female')" style="width:100px;  height: 70px;  float: left;"><i style="font-size: 2rem" class="fas fa-venus"></i></div>
                                        <div style="clear:both;"></div>
                                    </center>
                                </div>
                                <div class="col-4"></div>

                            </div>


                            <input type="text" id="genderIsi" value="" name="gender">

                            <!-- smoke -->
                            <br>
                            <div class="row radio-group">

                                <div class="col-4"></div>
                                <div class="col-4">
                                    <center>
                                        <div class="mybutton radio" onclick="show_modal()" id="show" style="width:100px; line-height: 50px; margin-right: 20px; height: 70px;  float: left;"><i style="font-size: 1.6rem" data-value="smoker" class="fas fa-smoking"></i></div>

                                        <div class="mybutton radio " onclick="hide_modal()" style="width:100px; line-height: 50px; height: 70px;  float: left;"><i style="font-size: 2rem" class="fas fa-smoking-ban"></i></div>

                                        <div style="clear:both;"></div>
                                    </center>
                                </div>
                                <div class="col-4"></div>

                            </div>

                            <div class="row radio-group" style="display: none;">
                                <div class="col-3"></div>
                                <div class="col-1 radio" onclick="show_modal()" id="show" style="background:#12669a;padding-top: 1%;padding-left: 15px;padding-bottom: 1%;"><i style="font-size: 1.6rem" data-value="smoker" class="fas fa-smoking"></i></div>
                                <div class="col-4"></div>
                                <div class="col-1 radio" onclick="hide_modal()" style="background: lightpink;padding-top: 1%;padding-left: 15px;padding-bottom: 1%;"><i style="font-size: 1.6rem" data-value="non-smoker" class="fas fa-smoking-ban"></i></div>

                            </div>

                            <div id="modal">
                                <div class="row radio-group">

                                    <div class="col-2"></div>
                                    <div class="col-2 radio" onclick="setCiger('ClassMild')" style="background:#12669a;padding-top: 1%;padding-bottom: 1%; text-align: center;">
                                        <label>Class Mild</label>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-2 radio" onclick="setCiger('A_mild')" style="background:#12669a;padding-top: 1%;padding-bottom: 1%; text-align: center;">
                                        <label>A Mild</label>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-2 radio" onclick="setCiger('dunhill_mild')" style="background:#12669a;padding-top: 1%;padding-bottom: 1%; text-align: center;">
                                        <label>Dunhill Mild</label>
                                    </div>
                                    <div class="col-2"></div>

                                    <div class="col-2"></div>
                                    <div class="col-2 radio" onclick="setCiger('dunhill_filter')" style="background:#12669a;padding-top: 1%;padding-bottom: 1%;text-align: center;">
                                        <label>Dunhill Filter</label>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-2 radio" onclick="setCiger('gg_surya')" style="background:#12669a;padding-top: 1%;padding-bottom: 1%;text-align: center;">
                                        <label>GG Surya</label>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-2 radio" onclick="setCiger('marboro')" style="background:#12669a;padding-top: 1%;padding-bottom: 1%;text-align: center;">
                                        <label>Marlboro Red/Gold</label>
                                    </div>
                                    <div class="col-2"></div>

                                    <div class="col-2"></div>
                                    <div class="col-2"></div>
                                    <div class="col-1"></div>
                                    <div class="col-2 radio" style="background:#12669a;padding-top: 1%;padding-bottom: 1%;">
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

                                <input type="text" id="cigerate" name="cigerate">

                            </div>

                        </div>
                    </div>

                    <center>
                        <input type="submit" name="registrasi" class="btn btn-success" value="Register">
                    </center>
                </div>

                <div class="container-fluid" style="position: fixed; bottom: 0;">
                    <div class="row">
                        <a href="regist_form.php " class="col-4 " style="text-align: center;padding: 1%; background: grey "><i style="font-size: 2rem " class="fas fa-plus "></i></a>
                        <a href="list.php " class="col-4 " style="text-align: center;padding: 1%; background: lightgray "><i style="font-size: 2rem " class="fas fa-list-ul "></i></a>
                        <a href=" " class="col-4 " style="text-align: center;padding: 1%;background: lightgray "> <i  style="font-size: 2rem; " class="fas fa-sign-out-alt "></i></a>  
                    </div>
                </div>
            </form>

            <style>

            .mybutton{
              line-height: 55px;
              border: none;
              font-family: Arial, Helvetica, sans-serif;
              font-size: 14px;
              color: #000000;
              padding: 10px 20px;
              background: #ece6e6;
              border-radius: 10px;
              border: 1px solid #ffffff;
              box-shadow:
              0px 1px 7px rgba(15,13,15,0.9),
              inset 0px 0px 1px rgba(255,255,255,0.5);

          }
          .radio-group{
              position: relative;
          }

          .radio{
              display:inline-block;
              border: 2px solid white;
              cursor:pointer;
              margin: 2px 0; 
          }

          .radio.selected{
              background:

              #12669a;
              color: white;
              font-weight: bolder;
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
    $("#modal ").show();
    $("#modal ").stylesheet('display','block');

}
function hide_modal(){
    $("#modal ").hide();
}

$(document).ready(function(){
//     $("#hide ").click(function(){
  $("#modal ").hide();
//     });
//     $("#show ").click(function(){
//     });
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy " crossorigin="anonymous "></script>
</body>
</html>