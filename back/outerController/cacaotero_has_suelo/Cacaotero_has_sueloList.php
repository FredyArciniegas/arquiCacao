<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\
include_once realpath('../../innerController/Cacaotero_has_sueloController.php');

$list=Cacaotero_has_sueloController::listAll();
$rta="";
foreach ($list as $obj => $Cacaotero_has_suelo) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Cacaotero_has_suelo->getCACAOTERO_idCACAOTERO()->getidCACAOTERO()."</td>\n";
	$rta.="<td>".$Cacaotero_has_suelo->getSUELO_idSUELO()->getidSUELO()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!