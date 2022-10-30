<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>prix stat form national</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="vendors/prism/prism-okaidia.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">

    <link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link href="vendors/prism/prism-okaidia.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
   
    <link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
    <script src="assets/js/flatpickr.js"></script>



           
                        
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>
 
 <?php 
         session_start(); 
         if(!isset($_SESSION['see'])){
          header("Location: nat.php");
          
         }
         
        include "connection.php";
        include 'header.php';
    
        $res1=$mysqli->query("SELECT codpro , nomfr FROM produit WHERE type=1");
        
        $res2 = $mysqli->query("SELECT codpro , nomfr FROM produit WHERE type=2");
    
        $res3 = $mysqli->query("SELECT codpro , nomfr FROM produit WHERE type=3");
    
        $res4 = $mysqli->query("SELECT codpro , nomfr FROM produit WHERE type=4");

?>

  <body>
 

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        

      <?php //include 'header.php' ; ?>


          <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-4.png);">
            </div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Formulaire des alertes  </h3>
                  <p class="mb-0">Ministere De commerce de la Promotion des Exportations</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card ">
            <div class="card-body ">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0"></h5>
                  <button class="btn btn-lg btn-falcon-default rounded-pill me-1 mb-1" onclick="window.location.href='index.php'" type="button"> 
                  <span class="fas fa-home me-1" data-fa-transform="shrink-3"></span> HOME </button>
                </div>
                <div class="col-auto">
               
                <button class="btn btn-lg btn-falcon-default rounded-pill me-1 mb-1" onclick="window.location.href='../../alerte.php'" type="button"> 
                  <span class="fas fa-bell text-danger me-1" data-fa-transform="shrink-3"></span>Statistique sur les  prix d'aujourd'hui</button>
                </div>
              </div>
            </div>
          </div>

          <br>


          <form method="POST" action="alerte.php" id="form1">
                        
            <label for="organizerSingle">Choisir une catégorie :</label>
                         
            <select class="form-select js-choice"  size="1" data-options='{"removeItemButton":true,"placeholder":true}'
            id="categ" name="categ" onclick='test()'>
              <option value="1">Produits D'epicerie</option>
              <option value="2">Legumes Frais</option>
              <option value="3">Fruits Frais</option>
              <option value="4">Viandes Et Oeufs</option>
            </select >
             

            <label for="organizerSingle"> Choisir un produit</label>;
            <select class="form-select js-choice" name="type1" size="1" id="type1" style="display: block" required>
                    <?php while ($row1=mysqli_fetch_array($res1)) { ?>
                      <option value="<?php echo $row1['codpro'] ?>">
                        <?php
                          echo $row1['nomfr'];
                        ?>
                      </option>
                    <?php } ?>
            </select> 


            <select class="form-select js-choice" name="type2" size="1" id="type2" style="display: none" required  >
             
                    <?php while ($row2=mysqli_fetch_array($res2)) { ?>
                      <option value="<?php echo $row2['codpro'] ?>">
                        <?php
                          echo $row2['nomfr'];
                        ?>
                      </option>
                    <?php } ?>
            </select>

            <select class="form-select js-choice" name="type3" size="1" id="type3" style="display: none" required  >
                    <?php while ($row3=mysqli_fetch_array($res3)) { ?>
                      <option value="<?php echo $row3['codpro'] ?>">
                        <?php
                          echo $row3['nomfr'];
                        ?>
                      </option>
                    <?php } ?>
            </select>

            <select class="form-select js-choice" name="type4" size="1" id="type4" style="display: none" required  >
                    <?php while ($row4=mysqli_fetch_array($res4)) { ?>
                      <option value="<?php echo $row4['codpro'] ?>">
                        <?php
                          echo $row4['nomfr'];
                        ?>
                      </option>
                    <?php } ?>
            </select>
   
            <br>

            <label class="form-label" for="basic-url">Saisir le corps de votre alerte ici</label>
            <div class="input-group"><span class="input-group-text">Contenu d'alerte</span>
              <textarea class="form-control" aria-label="With textarea" name="msg_alert" rows="2" cols="5" maxlength="200" required> 
                
              </textarea>.
            </div>

                  
            <button name="sub" class="btn btn-outline-primary btn-lg my-4 w-100  align-center"
             style="float: left;" type="submit"  >
              <span class="far fa-bell align-left fa-lg " ></span> &nbsp;&nbsp;Valider alerte
            </button>
    
          </form>


          <?php

            if (isset($_POST['sub'])) {
              //Récupération des données
              if($_POST["categ"] == 1){
               $produit = $_POST["type1"];
              }else if($_POST["categ"] == 2){
               $produit = $_POST["type2"];
              }else if($_POST["categ"] == 3){
                $produit = $_POST["type3"];
              }else if($_POST["categ"] == 4){
                $produit = $_POST["type4"];
              }

              $msg = ucfirst(strtolower($_POST['msg_alert']));;

              $day = date('Y-m-d');
              $hour = date('H:i:s');


              $sqll = "SELECT * FROM alerte WHERE date = '$day'";
              $reqq =$mysqli->query($sqll);

              $sql = "SELECT * FROM alerte WHERE codp = '$produit' AND date = '$day'";
              $req = $mysqli->query($sql);

              $nb_per_day = mysqli_num_rows($reqq);
              $nb = mysqli_num_rows($req);
              

              if ($nb_per_day >= 10) {
                echo "Echec d'envoi , Vous avez alerté plus 10 fois aujourd'hui";
              }else{
                if($nb > 0){
                  echo "Echec d'envoi , ce produit a été déja alerté aujourd'hui";
                }else{
                  $sql1 = "INSERT INTO alerte(codp,remarque,date, heur) VALUES ('$produit','$msg','$day','$hour')";
                  if ($mysqli->query($sql1)) {
          ?>
                    <div class="toast notice" role="alert" data-options='{"autoShow":true,"autoShowDelay":0,"showOnce":true,"cookieExpireTime":7200000}' data-autohide="false" aria-live="assertive" aria-atomic="true">
                      <div class="toast-body">
                          Alerte émise ! 
                      </div>
                    </div>
          <?php
                  }else{
                    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
                  }
                }
              }  
            }    
          ?>

      

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="vendors/chart/chart.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>

  

                             

<script>
                    function test() {
                      if (document.getElementById('categ').value == '1') {
                          document.getElementById('type1').style.display = 'block';
                          document.getElementById('type1').name = 'd4';
                          document.getElementById('type2').style.display = 'none';
                          document.getElementById('type3').style.display = 'none';
                          document.getElementById('type4').style.display = 'none';

                      }
                      if (document.getElementById('categ').value == '2') {
                          document.getElementById('type2').style.display = 'block';
                          document.getElementById('type2').name = 'd4';
                          document.getElementById('type1').style.display = 'none';
                          document.getElementById('type3').style.display = 'none';
                          document.getElementById('type4').style.display = 'none';

                      } 
                      if (document.getElementById('categ').value == '3') {
                          document.getElementById('type3').style.display = 'block';
                          document.getElementById('type3').name = 'd4';
                          document.getElementById('type2').style.display = 'none';
                          document.getElementById('type1').style.display = 'none';
                          document.getElementById('type4').style.display = 'none';
                      }
                      if (document.getElementById('categ').value == '4') {
                          document.getElementById('type4').style.display = 'block';
                          document.getElementById('type4').name = 'd4';
                          document.getElementById('type2').style.display = 'none';
                          document.getElementById('type3').style.display = 'none';
                          document.getElementById('type1').style.display = 'none';
                      }
                    }    
                  </script>
</html>