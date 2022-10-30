<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Journalier national</title>
    
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
    <?php  session_start();?>
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
      
      <?php include 'header.php' ; ?>
<?php $_SESSION['see']=1?>
 
          <?php
              include "connection.php";
              $t="national";
              if ($t==0) { $r='';$s="national";}
                if ($t==1) { $r="  and strect  not in ('45','30','47','1','11','8','33','37','39','03','32')";$s='Nord';}
                  if ($t==2) { $r="  and strect  in ('45','30','47','1','11','8','33','37','39','03','32') ";$s='Sud';}
              
                
                  $c1=date('Y-m-d');
      
      

      
      ?>
    <?php
    


      $req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1 ,date,(produit.nomfr)as nom ,codp ,produit.unite 
      from prixjour,produit where date='."'".$c1."'".''.$r.' and produit.codpro=codp and detail>0   group by codp order by produit.type asc,produit.codpro asc');
      $req11= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1 ,date,(produit.nomfr)as nom ,codp	,produit.unite 
      from prixjour,produit where date='."'".$c1."'".''.$r.' and produit.codpro=codp and detail>0   group by codp order by produit.type asc,produit.codpro asc');
      $r1=mysqli_fetch_array($req)         
        
        

        
       
      


      ?>
      <div class="card mb-3">
          <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);">
          </div>
          <!--/.bg-holder-->
            <div class="card-body position-relative">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Statistique nationale générale  des prix   </h3>
                  
              
<div id="chartContainer"></div>
                  <p class="mb-0">Ministere De commerce de la Promotion des Exportations</p><a 
                  class="btn btn-link btn-sm ps-0 mt-2" style="text-decoration: none;" href="excel/l1.php?s1=<?php echo $c1;?>
&s2=<?php echo $t;?>"
                  target="_blank">Exporter vers Excel <span class="fas fa-chevron-right ms-1 fs--2"></span></a>
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

          <div class="card mb-3">
            <div class="card-body">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0"></h5>
                  <button class="btn btn-lg btn-falcon-default rounded-pill me-1 mb-1" onclick="window.location.href='index.php'" type="button"> 
                  <span class="fas fa-home me-1" data-fa-transform="shrink-3"></span> HOME </button>
                </div>
                <div class="col-auto">
               
                <button class="btn btn-lg btn-falcon-default rounded-pill me-1 mb-1" onclick="window.location.href='alerte.php'" type="button"> 
                  <span class="fas fa-bell text-danger me-1" data-fa-transform="shrink-3"></span>ALerter    </button>
                </div>
              </div>
            </div>
          </div>




      
      <div class="table-responsive scrollbar mt-4 fs--1">
                <table class="table table-striped border-bottom">
                  <thead class="light">
                    <tr class="bg-primary text-white dark__bg-1000">
                      <th class="border-0">Produits</th>
                      <th class="border-0 text-left">Unité</th>
                      <th class="border-0 text-left">Prix de gros</th>
                      <th class="border-0 text-left">Prix de détail</th>
                      <th class="border-0 text-left">Prix Min de détail</th>
                      <th class="border-0 text-left">Prix Max de détail</th>
                     
                    </tr>
                  </thead>
                  <tbody>

        <?php while ($r1=mysqli_fetch_array($req)) {
							//$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,2)) as detail1  ,cast(avg(mind)AS DECIMAL(10,2)) as min,cast(avg(maxd)AS DECIMAL(10,2)) as max,cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".' and produit.codpro=codp and detail>0   group by codp');
$g1= $mysqli->query( 'select cast(avg(grox)AS DECIMAL(10,0))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp  and grox>0 and codp='.$r1['codp'].'  group by codp');
$m1= $mysqli->query( 'select cast(avg(mind)AS DECIMAL(10,0)) as min ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp and mind>0 and grox>0 and codp='.$r1['codp'].' group by codp');
$ma= $mysqli->query( 'select cast(avg(maxd)AS DECIMAL(10,0)) as max,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp and maxd>0 and grox>0 and codp='.$r1['codp'].' group by codp');
							
							?>
          
          
        <tr>
       
         <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php  echo $r1['nom'];  ?></td>
          <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php  echo $r1['unite'];  ?></td>
          <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php if ($r2=mysqli_fetch_array($g1)){ echo $r2['grox1'];} else echo '/'; ?></td>

          <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php if ($r1){ echo $r1['detail1'];} else echo '/'; ?></td>

          <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php if ($r3=mysqli_fetch_array($m1)){ echo $r3['min']; } else echo '/';?></td>
          <td class="align-middle"> <h6 class="mb-0 text-nowrap"><?php if ($r4=mysqli_fetch_array($ma)){ echo $r4['max']; }else echo '/';?></td>
        </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>

  
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