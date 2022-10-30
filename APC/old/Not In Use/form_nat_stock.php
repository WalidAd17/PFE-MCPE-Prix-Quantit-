<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Journalier National De Stock</title>
    
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../assets/js/config.js"></script>
    <script src="../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link href="../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
    <link href="../../vendors/choices/choices.min.css" rel="stylesheet" />

    <link href="../../vendors/prism/prism-okaidia.css" rel="stylesheet">

    
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
  <?php include 'navbar_ver.php' ; ?>

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
      

   
      <?php include '../../header.php' ; ?>


       
        <div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);">
            </div>
            <!--/.bg-holder-->

            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Statistiques Journalier De Prix </h3>
                  <p class="mb-0">Au niveau National</p><a class="btn btn-link btn-sm ps-0 mt-2" href="//chartjs.org/docs/latest/" target="_blank">Chart Js documentations<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                </div>
              </div>
            </div>
          </div>

      <form action="nat.php" method="post" class="row g-3 needs-validation" novalidate="">
      <div class="col">
      <label class="form-label" for="validationCustom03">Date :</label>
      <input class="form-control datetimepicker" id="validationCustom03"
       max='<?php echo date('d/m/y');?>' required="" name="d1" type="text"
        placeholder="<?php echo date('d/m/y');?>" data-options='{"disableMobile":true}' required=""/>
        <div class="invalid-feedback">selectionner niveau valide</div>
        </div>


        <div class="col">
    <label class="form-label" for="validationCustom04">Au Niveau de :</label>
    <select class="form-select" id="validationCustom04" required="" name="type">
      <option selected="" disabled="" value="">choisir un niveau</option>
          <option value="0">National</option>
          <option value="1">Nord</option>
          <option value="2">Sud</option></option>
    </select>
    <div class="invalid-feedback">selectionner niveau valide</div>
  </div>

        <br><br>
        <button class="btn btn-success btn-lg  w-100" style="float:left;" type="submit ">Valider</button>
    </form>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../vendors/popper/popper.min.js"></script>
    <script src="../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../vendors/is/is.min.js"></script>
    <script src="../../vendors/echarts/echarts.min.js"></script>
    <script src="../../vendors/fontawesome/all.min.js"></script>
    <script src="../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../../assets/js/theme.js"></script>
    <script src="../../vendors/choices/choices.min.js"></script>
    <script src="../../assets/js/flatpickr.js"></script>
    <script src="../../vendors/prism/prism.js"></script>
    <script src="../../assets/js/flatpickr.js"></script>
    <script src="../../vendors/choices/choices.min.js"></script>

   
  </body>

</html>