<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey �c�mo se llama tu caf� internet?  \\
include_once realpath('../../innerController/FincaController.php');

$list=FincaController::listAll();
$rta="";
foreach ($list as $obj => $Finca) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Finca->getidFinca()."</td>\n";
	$rta.="<td>".$Finca->getnombre()."</td>\n";
	$rta.="<td>".$Finca->getdueño()."</td>\n";
	$rta.="<td>".$Finca->getADMINISTRADOR_id_ADMINISTRADOR()->getid_ADMINISTRADOR()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That�s all folks!