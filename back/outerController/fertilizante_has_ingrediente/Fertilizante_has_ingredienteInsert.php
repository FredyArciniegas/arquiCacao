<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Cansado de escribir bugs? tranquilo, los escribimos por ti  \\
include_once realpath('../../innerController/Fertilizante_has_ingredienteController.php');

$Fertilizante_idFERTILIZANTE = $_POST['FERTILIZANTE_idFERTILIZANTE'];
$fertilizante= new Fertilizante();
$fertilizante->setIdFERTILIZANTE($Fertilizante_idFERTILIZANTE);
$Ingrediente_idFERTILIZANTE = $_POST['INGREDIENTE_idFERTILIZANTE'];
$ingrediente= new Ingrediente();
$ingrediente->setIdFERTILIZANTE($Ingrediente_idFERTILIZANTE);
Fertilizante_has_ingredienteController::insert($fertilizante, $ingrediente);
echo "true";

//That´s all folks!