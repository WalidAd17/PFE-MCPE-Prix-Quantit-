<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title> Prix De Jour </title>
    
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
   
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

    <style>
        input{ font-size:1.3em; padding:.5em; }
    </style>
  </head>

  <body>
  <?php
        session_start();
  include 'nav.php' ;  ?>

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
      
      <?php
   include 'connection.php';
         include 'header.php' ;
 ?>
   
       
    
        <?php 
                    $today=date('Y-m-d');
                    $req2=$mysqli->query('select * from produit where type="1"'); 
                      $h="select *
                      from produit inner join prixjour on codpro=prixjour.codp 
                      where  prixjour.strect=".$_SESSION['cods']." and prixjour.date='$today' 
                      order by produit.type asc,produit.codpro asc";
                      // echo $h;
                      $h1=$mysqli->query($h);
                      if( mysqli_num_rows($h1) <= 0){
                          ?>
                             <!-- ============================================-->
                  <!-- <section> begin ============================-->
                  <section class="light">

                <div class="bg-holder overlay" style="background-image:url(assets/img/generic/bg-2.jpg);background-position: center top;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                  <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                      <p class="fs-3 fs-sm-4 text-white">Vous avez Pas encore Saisir Les Prix Pour aujourd'hui veillez d'abord les sasir s'il vous plait</p>
                      <button class="btn btn-outline-light border-2 rounded-pill btn-lg mt-4 fs-0 py-2"
                       type="button" href='prix_add.php' onClick="Javascript:window.location.href='prix_add.php'" >Sasir Maintenant</button>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->
                          <?php
                      }else{

           ?>
               <div class="content">
        <div class="card mb-3">
          <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-5.png);">
          </div>
          <!--/.bg-holder-->
        <div class="card-body position-relative">
          <div class="row">
              <div class="col-lg-8">
                  <h4>Bienvenue , vous trouverez dans cette page les données que vous avez deja saisir aujourd'hui  </h4>
                  
              
                  <div id="chartContainer"></div>
                  <p class="mb-0">Vous pouvez toujours les modifier on cliquant sur le button modifier </p>
              </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
            <div class="card-body">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Date : <?php echo date('Y-m-d') ;?></h5>
                </div>
                <div class="col-auto">
               
                <button class="btn btn-lg btn-falcon-default rounded-pill me-1 mb-1" onclick="window.location.href='prix_update.php'" type="button"> 
                  <span class="fas fa-edit me-1" data-fa-transform="shrink-3"></span>Modifier    </button>
                </div>
              </div>
            </div>
          </div>
            
        <?php 
            include "connection.php";

        
        ?>
     

     <div class="table-responsive scrollbar mt-4 fs--1">
              
              <table class="table table-striped border-bottom">
                  <thead class="light h-100" >
                    <tr class="bg-primary text-white dark__bg-1000">
                      <th class="border-0">Produits</th>
                      <th class="border-0 text-left text-nowrap">Unité</th>
                      <th class="border-0 text-left text-nowrap ">Prix de gros</th>
                      <th class="border-0 text-left text-nowrap">Prix de détail</th>
                      <th class="border-0 text-left text-nowrap">Prix Min de détail</th>
                      <th class="border-0 text-left text-nowrap">Prix Max de détail</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <th class="border-0 text-left text-nowrap">  </th>
           
                 
                  <thead class="light w-100" >
                    <tr class="bg-primary text-white dark__bg-1000 w-auto">
                    <th class="border-0 text-center text-nowrap w-100"></th>
                    <th class="border-0 text-left text-nowrap"> </th>
                      <h3><th class="border-0 text-center text-nowrap">Produits d'epicerie </th></h3>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>

            
                    </tr>
                  </thead>
                    <?php  $i=0;  
           

          

                  while ($req3=mysqli_fetch_array($req2)){
                    $i++;
                    $h2=mysqli_fetch_array($h1);
                  ?>
           

            <tbody class="list">
              <tr>
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php echo $req3['nomfr'];?></td>
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php echo $req3['unite'];?></td>
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php echo $h2['grox'];?></td>
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php echo $h2['detail'];?></td>
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php echo $h2['mind'];?></td>
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php echo $h2['maxd'];?></td>

              </tr>

      <?php } ?>

      <thead class="light w-100" >
          

                      <tr class="bg-primary text-white dark__bg-1000 w-auto">
                    <th class="border-0 text-center text-nowrap w-100"></th>
                    <th class="border-0 text-left text-nowrap"> </th>
                      <h3><th class="border-0 text-center text-nowrap">Legumes Frais </th></h3>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>

                    </tr>
                  </thead>

      

              <?php   
                $req2=$mysqli->query('select * from produit where type="2"');
                while ($req3=mysqli_fetch_array($req2)){
                $i++;
                $h2=mysqli_fetch_array($h1);
              ?>
              <tr>


                <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $req3['nomfr'];?></td>
                <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $req3['unite'];?></td>
                <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['grox'];?></td>
                <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['detail'];?></td>
                <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['mind'];?></td>
                <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['maxd'];?></td>
           

              </tr>

              <?php } ?>

      
              <thead class="light w-100" >
                    <tr class="bg-primary text-white dark__bg-1000 w-auto">
                    <th class="border-0 text-center text-nowrap w-100"></th>
                    <th class="border-0 text-left text-nowrap"> </th>
                      <h3><th class="border-0 text-center text-nowrap">Fruits frais </th></h3>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>

                    </tr>
                  </thead>
              <?php   
                $req2=$mysqli->query('select * from produit where type="3"');
                while ($req3=mysqli_fetch_array($req2)){
                $i++;
                $h2=mysqli_fetch_array($h1);
              ?>
              <tr>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $req3['nomfr'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $req3['unite'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['grox'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['detail'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['mind'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['maxd'];?></td>

              </tr>

              <?php } ?>

              <thead class="light w-100" >
                    <tr class="bg-primary text-white dark__bg-1000 w-auto">
                    <th class="border-0 text-center text-nowrap w-100"></th>
                    <th class="border-0 text-left text-nowrap"> </th>
                      <h3><th class="border-0 text-center text-nowrap">Viandes et Oeufs </th></h3>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>
                      <th class="border-0 text-left text-nowrap"> </th>

                    </tr>
                  </thead>
              <?php   
                $req2=$mysqli->query('select * from produit where type="4"');
                while ($req3=mysqli_fetch_array($req2)){
                $i++;
                $h2=mysqli_fetch_array($h1);
              ?>
              <tr>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $req3['nomfr'];?> </td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $req3['unite'];?> </td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['grox'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['detail'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['mind'];?></td>
              <td class="align-middle"><h6 class="mb-0 text-nowrap"> <?php echo $h2['maxd'];?></td>

              
            
              </tr>

              <?php } ?>
              </tbody>
            </table>
          </div>

      <?php } ?>

</div>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>





