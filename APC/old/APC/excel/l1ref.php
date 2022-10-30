<?php

$c1=$_GET['s1'];
$t=$_GET['s2'];
 if ($t==0) { $r='';$s='National';}
  if ($t==1) { $r="  and strect  not in ('45','30','47','1','11','8','33','37','39','03')";$s='Nord';}
    if ($t==2) { $r="  and strect  in ('45','30','47','1','11','8','33','37','39','03') ";$s='Sud';}
   // � elle seule, la ligne suivante suffit � envoyer le r�sultat du script dans une feuille Excel
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=prix".$c1.".xls");
    // � elle seule, la ligne suivante suffit � envoyer le r�sultat du script dans une feuille Excel

  echo'<div align="center"><h3>  &nbsp;&nbsp;Etat du suivi des Prix de reference des produits pour la journée du: '.$c1.' au niveau '.$s.'</h3></div>';
    // la ligne suivante est facultative, elle sert � donner un nom au fichier Excel
	//header("Content-Disposition: attachment; filename=nom_fichier.xls");

  include "../connection.php";
   // notez la pr�sence du caract�re arobase (@) , en cas d'erreur, 
  // il emp�che PHP d'�crire un message d'erreur sur le navigateur
 // $req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1 ,date,(produit.nomfr)as nom ,codp ,produit.unite  from prixjour,produit where date='."'".$c1."'".''.$r.' and produit.codpro=codp and detail>0   group by codp order by produit.type asc,produit.codpro asc');

$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1 ,date,(produit.nomfr)as nom ,codp	,produit.unite, prref.maxg,prref.ming,prref.min,prref.max  from prixjour,produit,prref where date='."'".$c1."'".''.$r.' and produit.codpro=codp and detail>0  and codp=prref.produit group by codp order by produit.type asc,produit.codpro asc');

   
   // construction du tableau HTML
  print '<table border=1>
            <!-- impression des titres de colonnes -->

 <TR><TD>Produits</TD><TD>Prix de ref gros</TD><TD>	Prix de gros</TD><TD>Ecart</TD><TD>Prix de ref d�tail</TD><TD>Prix de detail</TD><TD>Ecart</TD></TR>';    // lecture du contenu de la requ�te avec 2 boucles imbriqu�es; par ligne et par colonne
   while ($r1=mysqli_fetch_array($req)) {
							//$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,2)) as detail1  ,cast(avg(mind)AS DECIMAL(10,2)) as min,cast(avg(maxd)AS DECIMAL(10,2)) as max,cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".' and produit.codpro=codp and detail>0   group by codp');
$g1= $mysqli->query( 'select cast(avg(grox)AS DECIMAL(10,0))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp  and grox>0 and codp='.$r1['codp'].'  group by codp');
$m1= $mysqli->query( 'select cast(avg(mind)AS DECIMAL(10,0)) as min ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp and mind>0 and grox>0 and codp='.$r1['codp'].' group by codp');
$ma= $mysqli->query( 'select cast(avg(maxd)AS DECIMAL(10,0)) as max,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".$r.' and produit.codpro=codp and maxd>0 and grox>0 and codp='.$r1['codp'].' group by codp');

							
							?>
							
								<tr >
							<td ><?php  echo $r1['nom'];  ?></td>
									<td><?php if ($r1['ming']== $r1['maxg']){echo $r1['ming'];} else{echo $r1['ming']." - ".$r1['maxg'];}  ?></td>
									<td ><?php if ($r2=mysqli_fetch_array($g1)){ echo $r2['grox1'];} else echo '/'; ?></td>
									<td ><?php echo $r2['grox1']- $r1['maxg']?> </td>
								<td ><?php if ($r1['min']== $r1['max']){echo $r1['min'];} else{echo $r1['min']." - ".$r1['max'];}  ?></td>
								<td ><?php  echo $r1['detail1'];  ?></td>
								<td ><?php echo $r1['detail1']- $r1['max']?></td>
							</tr>
							<?php } 
    print '</TABLE>';
    // mysql_close();

// on informe l'utilisateur de la r�ussite 
  //  if (@mysql_numrows($requete) >0) 
  //       {   
  //           print "<script> alert('La table est bien mise � jour !')</script>";
  //       } 
?>

