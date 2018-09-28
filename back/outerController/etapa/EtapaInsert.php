<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../innerController/EtapaController.php');

$idETAPA = $_POST['idETAPA'];
$ETAPAnombre = $_POST['ETAPAnombre'];
EtapaController::insert($idETAPA, $ETAPAnombre);
echo "true";

//That´s all folks!