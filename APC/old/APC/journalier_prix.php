<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Jouralier Prix</title>
    
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
  <?php 
  session_start();
  include 'navbar_ver.php' ;
  include 'connection.php' ;
  ?>

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
        <?php include 'header.php'?>
        <br>
     




     <div class="col">
              <div class="card h-100">
                <div class="card-header">
                  <div class="d-flex align-items-center"><img class="me-2" src="../../../../assets/img/icons/signal.png" alt="" height="35" />
                    <h5 class="fs-0 fw-normal text-800 mb-0">Statistique De Prix journalier </h5>
                  </div>
                </div>
                <div class="card-body p-0 h-100 ">

                  <div class="scrollbar-overlay pt-0 px-card ask-analytics h-auto" >

                    <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3"
                    style="display: block;"  id="stat_nat">
                      <div class="d-flex align-items-center mb-3"><span class="fas fa-crown text-warning"></span><a
                       class="stretched-link text-decoration-none"  onclick="test(1)">
                          <h5 class="fs--1 text-600 mb-0 ps-3">Statisitique au niveau Nationale</h5>
                        </a></div>
                      <h5 class="fs--1 text-800">Les Prix Des Produits aujourd'hui au niveau nationale</h5>
                    </div>

                    <form action="nat.php" id="nat" method="post" class="row g-3 needs-validation"
                     novalidate="" style="display:none;">
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
                      


                    
                    <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3"
                     style="display: block;"  id="stat_reg">
                      <div class="d-flex align-items-center mb-3"   ><span class="fas fa-chart-bar text-success" ></span>
                      <a class="stretched-link text-decoration-none"  onclick="test(2)">
                          <h5 class="fs--1 text-600 mb-0 ps-3">Statisitique au niveau Regionale</h5>
                        </a></div>
                      <h5 class="fs--1 text-800">Les Prix Des Produits aujourd'hui au niveau nationale</h5>
                    </div>

                      <?php  
                          $region=$mysqli->query('select * from `region`');?>

                        <form action="reg.php" method="post" id="reg" style="display: none;">
                        <label class="form-label" for="datepicker"> Date</label>
                          <input class="form-control datetimepicker"
                          id="datepicker" type="text" placeholder="d/m/y"   name="d1"/>
                          <div>
                          <label for="organizerSingle">Choisir Une Region :</label>
                            <select class="form-select js-choice" id="organizerSingle" size="1"
                            name="d3"  data-options='{"removeItemButton":true,"placeholder":true}'>
                            </div>
                            <option value=""></option>
                              <?php  while ( $rg = mysqli_fetch_array($region)){
                              echo' <option value="'.$rg['codr'].'">'.$rg['desfr'].'</option>';  }?>
                            </select>

                    

                            <br><br>
                        <button class="btn btn-success btn-lg  w-100" style="float:left;" type="submit ">Valider</button>

                      </form>
                  </div>

                    <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3"
                     style="display:block;" id="stat_dcw">
                      <div class="d-flex align-items-center mb-3" ><span class="fas fa-chart-line text-success"></span><a
                       class="stretched-link text-decoration-none"  onclick="test(3)" >
                          <h5 class="fs--1 text-600 mb-0 ps-3">Statisitique au niveau Locale</h5>
                        </a></div>
                      <h5 class="fs--1 text-800">Les Prix Des Produits aujourd'hui au niveau nationale</h5>
                    </div>

                        <?php $rg=$mysqli->query('select * from structure order by desfr asc'); ?>
                        
                      <form action="dcw.php" method="post" id="dcw" style="display: none;">

                              <label class="form-label" for="datepicker">Date :</label>
                              <input class="form-control datetimepicker" name="d1" type="text"
                              placeholder="d/m/y" data-options='{"disableMobile":true}' />
                          
                              <label for="organizerSingle">Choisir Une Dcw :</label>
                            <select class="form-select js-choice" id="organizerSingle" size="1"
                            name="d3"  data-options='{"removeItemButton":true,"placeholder":true}'>
                            </div>
                            <option value=""></option>
                            <?php while ($rg1=mysqli_fetch_array($rg)) {
                                    echo' <option value="'.$rg1['cod'].'">'.$rg1['desfr'].'</option>';  }?>
                            </select>

                    
                          <br><br>
                        <button class="btn btn-success btn-lg  w-100" style="float:left;" type="submit ">Valider</button>

                      </form>

                    <div style="display: none;" id="vide">
                      <br><br><br>
                    </div>

               

                  </div>
               
                  
                <div class="card-footer bg-light text-end me-1 py-2"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">More Insights
                  </a></div>
              </div>
            </div>
                            

               
      </div>
           
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600"> <span class="d-none d-sm-inline-block"> </span><br class="d-sm-none" />  </p>
              </div>
              <div class="col-12 col-sm-auto text-center">
              </div>
            </div>
          </footer>
        </div>

        
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




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
    <script src="../../assets/js/flatpickr.js"></script>
<script>
function test (a){
  if(a==1){
  var a= document.getElementById('nat');
  if( a.style.display=='block')
  { 
    a.style.display='none'; 
    document.getElementById('stat_reg').style.display='block';
    document.getElementById('stat_dcw').style.display='block';
  }
  else { 
    document.getElementById('stat_reg').style.display='none';
    a.style.display='block';
    document.getElementById('vide').style.display='block';
    document.getElementById('stat_dcw').style.display='none';
  }
  }
  if(a==2){
  var a= document.getElementById('reg');
  if( a.style.display=='block')
  { 
    a.style.display='none'; 
    document.getElementById('stat_nat').style.display='block';
    document.getElementById('stat_dcw').style.display='block';
  }
  else { 
    a.style.display='block';
    document.getElementById('stat_nat').style.display='none';
    document.getElementById('vide').style.display='block';
    document.getElementById('stat_dcw').style.display='none';
  }
} 
 if(a==3){
  var a= document.getElementById('dcw');
  if( a.style.display=='block')
  { 
    a.style.display='none'; 
    document.getElementById('stat_nat').style.display='block';
    document.getElementById('stat_reg').style.display='block';
  }
  else { 
    a.style.display='block';
    document.getElementById('stat_nat').style.display='none';
    document.getElementById('vide').style.display='block';
    document.getElementById('stat_reg').style.display='none';
  }
}
}
</script>
  </body>

</html>