<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La vie est composé de combien de fois nous rions avant de mourir  \\
include_once realpath('../../innerController/Fertilizante_has_ingredienteController.php');

$list=Fertilizante_has_ingredienteController::listAll();
$rta="";
foreach ($list as $obj => $Fertilizante_has_ingrediente) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Fertilizante_has_ingrediente->getFERTILIZANTE_idFERTILIZANTE()->getidFERTILIZANTE()."</td>\n";
	$rta.="<td>".$Fertilizante_has_ingrediente->getINGREDIENTE_idFERTILIZANTE()->getidFERTILIZANTE()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!