<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarqu�a...  \\
include_once realpath('../../innerController/AdministradorController.php');

$ADMINISTRADOR_USER = $_POST['ADMINISTRADOR_USER'];
$ADMINISTRADOR_PASS = $_POST['ADMINISTRADOR_PASS'];
$administrador = AdministradorController::login($ADMINISTRADOR_USER, $ADMINISTRADOR_PASS);
if($administrador!=null){
$id_ADMINISTRADOR=$administrador->getId_ADMINISTRADOR();
setcookie("id_ADMINISTRADOR","$id_ADMINISTRADOR");
session_start();
$_SESSION['ADMIN_ID']=$id_ADMINISTRADOR;
$_SESSION['ADMIN_USER']=$administrador->getADMINISTRADOR_USER();
echo '<script language="javascript">window.location="../../../front/login2.html"</script>';
}else{
echo '<script language="javascript">window.location="../../../login.html"</script>';
}

//That�s all folks!