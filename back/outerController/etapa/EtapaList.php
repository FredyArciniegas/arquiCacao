<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\
include_once realpath('../../innerController/EtapaController.php');

$list=EtapaController::listAll();
$rta="";
foreach ($list as $obj => $Etapa) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Etapa->getidETAPA()."</td>\n";
	$rta.="<td>".$Etapa->getETAPAnombre()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!