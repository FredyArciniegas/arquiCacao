<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\
include_once realpath('../../innerController/Cacaotero_has_sueloController.php');

$Cacaotero_idCACAOTERO = $_POST['CACAOTERO_idCACAOTERO'];
$cacaotero= new Cacaotero();
$cacaotero->setIdCACAOTERO($Cacaotero_idCACAOTERO);
$Suelo_idSUELO = $_POST['SUELO_idSUELO'];
$suelo= new Suelo();
$suelo->setIdSUELO($Suelo_idSUELO);
Cacaotero_has_sueloController::insert($cacaotero, $suelo);
echo "true";

//That´s all folks!