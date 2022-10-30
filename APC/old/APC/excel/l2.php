<?php
$c1=$_GET['s1'];
$c3=$_GET['s2'];
  $p= "select * from region where id=".$c3;
   include "../connection.php";
 //echo $p;
 $rg=$mysqli->query($p);
if($rr= mysqli_fetch_array($rg) ){
  echo'<div align="center"><h3>  &nbsp;&nbsp;Prix journalier des Produits de large consommation du: '.$c1.' au niveau de la region '.$rr['desfr'].'</h3></div>';
 }   // la ligne suivante est facultative, elle sert � donner un nom au fichier Excel

   // � elle seule, la ligne suivante suffit � envoyer le r�sultat du script dans une feuille Excel
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=prix".$c1.".xls");
    // � elle seule, la ligne suivante suffit � envoyer le r�sultat du script dans une feuille Excel

//  echo'<div align="center"><h3>  &nbsp;&nbsp;Prix journalier des Produits de large consommation du: '.$c1.' au niveau '.$s.'</h3></div>';
    // la ligne suivante est facultative, elle sert � donner un nom au fichier Excel
	//header("Content-Disposition: attachment; filename=nom_fichier.xls");

  //include "connection.php";
   // notez la pr�sence du caract�re arobase (@) , en cas d'erreur, 
  // il emp�che PHP d'�crire un message d'erreur sur le navigateur
 // $req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1 ,date,(produit.nomfr)as nom ,codp ,produit.unite  from prixjour,produit where date='."'".$c1."'".''.$r.' and produit.codpro=codp and detail>0   group by codp order by produit.type asc,produit.codpro asc');
//$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,2)) as detail1  ,cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite , structure.reg from prixjour,produit, structure where structure.cod=strect and  structure.reg =  '."'".$c3."' ".' and date='."'".$c1."'".' and produit.codpro=codp and detail>0 and grox>0  group by codp order by produit.type asc,produit.codpro asc');

$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1,cast(avg(grox)AS DECIMAL(10,0))as grox1,cast(avg(mind)AS DECIMAL(10,0))as min, cast(avg(maxd)AS DECIMAL(10,0)) as max ,cast(avg(grox)AS DECIMAL(10,0))as grox1 ,date,(produit.nomfr)as nom ,produit.unite , structure.reg from prixjour,produit, structure where structure.cod=strect and  structure.reg =  '."'".$c3."' ".' and date='."'".$c1."'".' and produit.codpro=codp and detail>0 and grox>0  group by codp order by produit.type asc,produit.codpro asc');
// $g1= $mysqli->query( 'select cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp  and grox>0 and codp='.$r1['codp'].'  group by codp');
//$m1= $mysqli->query( 'select cast(avg(mind)AS DECIMAL(10,2)) as min ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp and mind>0 and grox>0 and codp='.$r1['codp'].' group by codp');
//$ma= $mysqli->query( 'select cast(avg(maxd)AS DECIMAL(10,2)) as max,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp and maxd>0 and grox>0 and codp='.$r1['codp'].' group by codp');

							
							  
   // construction du tableau HTML
  print '<table border=1>
            <!-- impression des titres de colonnes -->
            
 <TR><TD>Produits</TD><TD>Produits</TD><TD>	Prix de Gros</TD><TD>Prix de Detail</TD><TD>Prix Min de D�tail</TD><TD>Prix Max de D�tail</TD></TR>';    // lecture du contenu de la requ�te avec 2 boucles imbriqu�es; par ligne et par colonne
   while ($r1=mysqli_fetch_array($req)) {
							//$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,2)) as detail1  ,cast(avg(mind)AS DECIMAL(10,2)) as min,cast(avg(maxd)AS DECIMAL(10,2)) as max,cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".' and produit.codpro=codp and detail>0   group by codp');
//$g1= $mysqli->query( 'select cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$c3.' and produit.codpro=codp  and grox>0 and codp='.$r1['codp'].'  group by codp');
//$m1= $mysqli->query( 'select cast(avg(mind)AS DECIMAL(10,2)) as min ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$c3.' and produit.codpro=codp and mind>0 and grox>0 and codp='.$r1['codp'].' group by codp');
//$ma= $mysqli->query( 'select cast(avg(maxd)AS DECIMAL(10,2)) as max,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$c3.' and produit.codpro=codp and maxd>0 and grox>0 and codp='.$r1['codp'].' group by codp');

							
							?>
							
								<tr >
							<td ><?php  echo $r1['nom'];  ?></td>
									<td ><?php  echo $r1['unite'];  ?></td>
									<td ><?php  echo $r1['grox1']; ?></td>
									<td ><?php  echo $r1['detail1'];  ?></td>
								<td ><?php echo $r1['min']; ?></td>
								<td ><?php echo $r1['max']; ?></td>
								</tr>
							<?php } 
    print '</TABLE>';

?>

