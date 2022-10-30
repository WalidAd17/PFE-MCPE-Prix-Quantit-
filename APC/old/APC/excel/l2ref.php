<?php
$c1=$_GET['s1'];
$t=$_GET['s2'];
   // � elle seule, la ligne suivante suffit � envoyer le r�sultat du script dans une feuille Excel
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=prix".$c1.".xls");
    // � elle seule, la ligne suivante suffit � envoyer le r�sultat du script dans une feuille Excel
 $p= "select * from region where id=".$t;
   include "../connection.php";
 //echo $p;
 $rg=$mysqli->query($p);
if($rr= mysqli_fetch_array($rg) ){
  echo'<div align="center"><h3>  &nbsp;&nbsp;Etat de suivi des prix de reference des produits pour la journée de  '.$c1.' au niveau de la region '.$rr['desfr'].'</h3></div>';
 }   // la ligne suivante est facultative, elle sert � donner un nom au fichier Excel
	//header("Content-Disposition: attachment; filename=nom_fichier.xls");



  
   // notez la pr�sence du caract�re arobase (@) , en cas d'erreur, 
  // il emp�che PHP d'�crire un message d'erreur sur le navigateur
 // $req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1 ,date,(produit.nomfr)as nom ,codp ,produit.unite  from prixjour,produit where date='."'".$c1."'".''.$r.' and produit.codpro=codp and detail>0   group by codp order by produit.type asc,produit.codpro asc');

$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,0)) as detail1  ,cast(avg(grox)AS DECIMAL(10,0))as grox1 ,date,(produit.nomfr)as nom ,produit.unite , structure.reg , prref.maxg,prref.ming,prref.min,prref.max  from prixjour,produit,prref, structure where structure.cod=strect and  structure.reg =  '."'".$t."' ".' and date='."'".$c1."'".' and produit.codpro=codp and detail>0 and grox>0 and codp=prref.produit  group by codp order by produit.type asc,produit.codpro asc');
   
   // construction du tableau HTML
  print '<table border=1>
            <!-- impression des titres de colonnes -->

 <TR><TD>Produits</TD><TD>Prix de ref gro</TD><TD>	Prix de gros</TD><TD>Ecart</TD><TD>Prix de ref D�tail</TD><TD>Prix de detail</TD><TD>Ecart</TD></TR>';    // lecture du contenu de la requ�te avec 2 boucles imbriqu�es; par ligne et par colonne
   while ($r1=mysqli_fetch_array($req)) {
							//$req= $mysqli->query( 'select cast(avg(detail)AS DECIMAL(10,2)) as detail1  ,cast(avg(mind)AS DECIMAL(10,2)) as min,cast(avg(maxd)AS DECIMAL(10,2)) as max,cast(avg(grox)AS DECIMAL(10,2))as grox1 ,date,(produit.nomfr)as nom ,produit.unite  from prixjour,produit where date='."'".$c1."'".' and produit.codpro=codp and detail>0   group by codp');
						
							?>
							
								<tr >
							<td ><?php  echo $r1['nom'];  ?></td>
									<td><?php if ($r1['ming']== $r1['maxg']){echo $r1['ming'];} else{echo $r1['ming']." - ".$r1['maxg'];}  ?></td>
									<td ><?php  echo $r1['grox1']; ?></td>
									<td ><?php echo $r1['grox1']- $r1['maxg']?> </td>
								<td ><?php if ($r1['min']== $r1['max']){echo $r1['min'];} else{echo $r1['min']." - ".$r1['max'];}  ?></td>
								<td ><?php  echo $r1['detail1'];  ?></td>
								<td ><?php echo $r1['detail1']- $r1['max']?></td>
							</tr>
							<?php } 
    print '</TABLE>';
//     mysql_close();

// // on informe l'utilisateur de la r�ussite 
//    if (@mysql_numrows($requete) >0) 
//         {   
//             print "<script> alert('La table est bien mise � jour !')</script>";
//         } 
?>

