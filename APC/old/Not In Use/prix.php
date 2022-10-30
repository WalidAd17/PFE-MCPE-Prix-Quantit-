<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Saisir Prix </title>
    
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
   
         include 'header.php' ;
 ?>
   
           
        <div class="content">
        <div class="card mb-3">
          <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-5.png);">
          </div>
          <!--/.bg-holder-->
        <div class="card-body position-relative">
          <div class="row">
              <div class="col-lg-8">
                  <h3>Bienvenue Sur La formulaire De Saisir De Prix d'aujourd'hui  </h3>
                  
              
                  <div id="chartContainer"></div>
                  <p class="mb-0">Veuillez la remplir afin de realiser votre tache </p>
              </div>
          </div>
        </div>
      </div>

       
        <?php 
            include "connection.php";

        
        ?>
      <form   method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

        <div id="tableExample2" >
             <div class="table-responsive scrollbar">
          <table class="table table-bordered table-striped fs--1 mb-0">
            <thead class="bg-200 number-900">
              <tr>
                <th class="sort" data-sort="name">Produits</th>
                <th class="sort" data-sort="Unite">Unite</th>
                <th class="sort" data-sort="age">Prix de gros</th>
                <th class="sort" data-sort="name">Prix de détail</th>
                <th class="sort" data-sort="email">Prix Min de détail</th>
                <th class="sort" data-sort="age">Prix Max de détail</th>
              </tr>
            </thead>
           
            
                    <?php  $i=0;  
                  $req2=$mysqli->query('select * from produit where type="1"'); 
                    $h="select *
                    from produit inner join prixjour on codpro=prixjour.codp 
                    where  prixjour.strect='".$_SESSION['cods']."' and prixjour.date=(select max(prixjour.date)as maxd 
                    from prixjour where strect='".$_SESSION['cods']." ')
                    order by produit.type asc,produit.codpro asc";
                    $h1=$mysqli->query($h);
                  while ($req3=mysqli_fetch_array($req2)){
                    $i++;
                    $h2=mysqli_fetch_array($h1);
                  ?>
                
           
            <tbody class="list">
              <tr>
                <td class="name" > <?php echo $req3['nomfr'];?></td>
                <td class="unite"><?php echo $req3['unite'];?></td>
                <td class="age" >
                    <input class="form-control" type="number"  
                    name="<?php echo 'd'. $i;?>" max = <?php echo $req3['limiteg']?> value="<?php echo $h2['grox'];?>"/>
              </td> 
          
                <td class="age" >
                <input class="form-control" type="number" max = <?php echo $req3['limited']?>  name="<?php echo 'g'. $i;?>" value="<?php echo $h2['detail'];?>"/>
                </td>   
                <td class="age" >
                <input class="form-control" type="number"   name="<?php echo 'k'. $i;?>" value="<?php echo $h2['mind'];?>"/>
                </td>
                <td class="age">
                <input class="form-control" type="number"   name="<?php echo 'l'. $i;?>" value="<?php echo $h2['maxd'];?>"/>       
              </td>
              </tr>
      <?php } ?>


      <thead class="bg-200 number-900">
              <tr>
                <th class="sort"  colspan="10" position="center"> <h4>Legumes Frais</h4> </th>     
              </tr>
            </thead>
              <?php   
                $req2=$mysqli->query('select * from produit where type="2"');
                while ($req3=mysqli_fetch_array($req2)){
                $i++;
                $h2=mysqli_fetch_array($h1);
              ?>
              <tr>
                <td class="name"> <?php echo $req3['nomfr'];?></td>
                <td class="unite"><?php echo $req3['unite'];?></td>
                <td class="age" >
                    <input class="form-control" type="number"  name="<?php echo 'd'. $i;?>"
                    name="<?php echo 'd'. $i;?>" max = <?php echo $req3['limiteg']?> value="<?php echo $h2['grox'];?>"/>
              </td> 
          
                <td class="age" >
                <input class="form-control" type="number" max = <?php echo $req3['limited']?>  name="<?php echo 'g'. $i;?>" value="<?php echo $h2['detail'];?>"/>
                </td>   
                <td class="age" >
                <input class="form-control" type="number"   name="<?php echo 'k'. $i;?>" value="<?php echo $h2['mind'];?>"/>
                </td>
                <td class="age">
                <input class="form-control" type="number"   name="<?php echo 'l'. $i;?>" value="<?php echo $h2['maxd'];?>"/>       
              </td>
              </tr>

              <?php } ?>

              <tr>
                <th class="sort"  colspan="10" position="center"> <h4>Fruits frais</h4> </th>     
              </tr>
              
              <?php   
                $req2=$mysqli->query('select * from produit where type="3"');
                while ($req3=mysqli_fetch_array($req2)){
                $i++;
                $h2=mysqli_fetch_array($h1);
              ?>
              <tr>
                <td class="name"> <?php echo $req3['nomfr'];?></td>
                <td class="unite"><?php echo $req3['unite'];?></td>
                <td class="age" >
                    <input class="form-control" type="number" 
                    name="<?php echo 'd'. $i;?>" max = <?php echo $req3['limiteg']?> value="<?php echo $h2['grox'];?>"/>
              </td> 
          
                <td class="age" >
                <input class="form-control" type="number"  max = <?php echo $req3['limited']?>  name="<?php echo 'g'. $i;?>"
                value="<?php echo $h2['detail'];?>"/>
                </td>   
                <td class="age" >
                <input class="form-control" type="number"   name="<?php echo 'k'. $i;?>" value="<?php echo $h2['mind'];?>"/>
                </td>
                <td class="age">
                <input class="form-control" type="number"   name="<?php echo 'l'. $i;?>" value="<?php echo $h2['maxd'];?>"/>       
              </td>
              </tr>

              <?php } ?>

              <tr>
                <th class="sort"  colspan="10" position="center"> <h4>Viandes et Oeufs</h4> </th>     
              </tr>
              
              <?php   
                $req2=$mysqli->query('select * from produit where type="4"');
                while ($req3=mysqli_fetch_array($req2)){
                $i++;
                $h2=mysqli_fetch_array($h1);
              ?>
              <tr>
                <td class="name"> <?php echo $req3['nomfr'];?></td>
                <td class="unite"><?php echo $req3['unite'];?></td>
                <td class="age" >
                    <input class="form-control" type="number"  
                    name="<?php echo 'd'. $i;?>" max = <?php echo $req3['limiteg']?> value="<?php echo $h2['grox'];?>"/>
              </td> 
          
                <td class="age" >
                <input class="form-control" type="number"  max = <?php echo $req3['limited']?>  name="<?php echo 'g'. $i;?>" value="<?php echo $h2['detail'];?>"/>
                </td>   
                <td class="age" >
                <input class="form-control" type="number"   name="<?php echo 'k'. $i;?>" value="<?php echo $h2['mind'];?>"/>
                </td>
                <td class="age">
                <input class="form-control" type="number"   name="<?php echo 'l'. $i;?>" value="<?php echo $h2['maxd'];?>"/>       
              </td>
              </tr>

              <?php } ?>
              <?php
              $_SESSION['pr']= $i;
              ?>
            </tbody>
          </table>
  </div>

</div>

<div class="col-12">
    <button class="btn btn-primary" name="submited" type="submit">Submit form</button>
  </div>
      </form>


      <!-- save data  -->


      <?php 
      if(isset($_POST['submited'])){
          $i=0;
          $det=array();
          $gro=array();
          $mind=array();
          $maxd=array();

          $req= 'SELECT * FROM `produit`ORDER BY `produit`.type,`codpro` ASC';
          $req1=$mysqli->query($req);

          $g= $_SESSION['pr'];

          while ( $g>0 ) {
          $i++;
          $g--; 
          $f1=$_POST['g'.$i];
          $c1=$_POST['d'.$i];
          $d1=$_POST['k'.$i];
          $e1=$_POST['l'.$i];
          array_push ($det,$c1);
          array_push ($gro,$f1);
          array_push ($mind,$d1);
          array_push ($maxd,$e1);
          }$g=1; 
       

          $k=2;
          $req2=mysqli_fetch_array($req1);
          $req="INSERT INTO prixjour VALUES
           (null,1,".$gro[$g-1]." , ".$mind[$g-1]." , ".$maxd[$g-1]." , ".$det[$g-1].",
           
           '".date('y-m-d')."','". date("h:i:s")."',".$_SESSION['cods'].")";
          while ($req2=mysqli_fetch_array($req1)) {
          $req= $req.",(null,".$req2['codpro'].",".$gro[$g]." , ".$mind[$g]." , ".$maxd[$g]." , ".$det[$g].", '".date('y-m-d')."','". date("h:i:s")."',". $_SESSION['cods'].")" ;
          $i--;
          $g++;
          $k++;
          }

              if  ( $mysqli->query( $req) ===TRUE){
                
              echo 'Vos Données a été bien transmises';
              echo  '<p><a href="dcw/index.php">terminer</a></p>';
                
                } else{  
                echo'Les Donnees sont duplique , insertion erroné ';
                
                  echo '<p><a href="index.php">terminer</a></p>';
                }


      }
                ?>



      <!-- save data  -->


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





