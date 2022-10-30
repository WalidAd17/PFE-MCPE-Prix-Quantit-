<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Main APC</title>
    
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
   
    <?php session_start() ?>
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
      
           <?php 
           
           include 'connection.php';
       
           include 'header.php' ;


           ?>

<?php 
         

  

         ?>
    
   <div class="content">
          <br>
      <div class="card mb-3">
          <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-5.png);">
          </div>
          <!--/.bg-holder-->
        <div class="card-body position-relative">
          <div class="row">
              <div class="col-lg-8">
                  <h3>Bienvenue sur l'acceuil d'association de protection de consommateur(APC)    </h3>
                  
              
                  <div id="chartContainer"></div>
                  <p class="mb-0">Ministere De commerce et de la promotion de l'exportation</p>
              </div>
          </div>
        </div>
      </div>
 

        <div class="d-flex mb-4 mt-3"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-percentage"></i></span>
            <div class="col">
              <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Jour : <?php echo date('Y-m-d')?></span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
              <p class="mb-0"></p>
            </div>
          </div>
          
    

       <div class="card">
            <div class="card-header bg-light">
              <h5 class="mb-0">Choisir l'operation souhaité</h5>
            </div>
            <div class="card-body fs--1 p-0">
              <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="nat.php">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📅️</span></div>
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><strong>Consulte statistique des prix d'aujourd_hui</strong> </p>
                  <span class="notification-time"></span>

                </div>
              </a>

        

              <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="alerte.php">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📌</span></div>
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><strong>Emetre une nouvelle Alerte</strong> </p>
                  <span class="notification-time"></span>

                </div>
              </a>

              <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🏷️</span></div>
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><strong>Consulte statistique de dernier semaine</strong> </p>
                  <span class="notification-time"></span>

                </div>
              </a>

              <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                <div class="notification-avatar">
                  <div class="avatar avatar-xl me-3">
                    <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">📋️</span></div>
                  </div>
                </div>
                <div class="notification-body">
                  <p class="mb-1"><strong>Consulte liste des Alertes emet</strong> </p>
                  <span class="notification-time"></span>

                </div>
              </a>


            </div>
          </div>
      
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



<?php //include 'settings.php'?>
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

  </body>

  <script>
    

    $(document).ready(function(){
    $(".menu-button").click(function(){
    $(".menu-bar").toggleClass( "open" );
    })
    })


  </script>

  <?php //include 'index_chart.php'?>
</html>