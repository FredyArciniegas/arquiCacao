<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */ 

//    Un generador de c�digo no basta. Ahora debo inventar tambi�n un generador de frases tontas  //
    require_once realpath("../..").'/dao/factory/FactoryDao.php';

/**
   * Para su comodidad, defina aqu� el gestor de conexi�n predilecto para su proyecto
   */
    define("DEFAULT_GESTOR", FactoryDao::$MYSQL_FACTORY);
  /**
   * Para su comodidad, defina aqu� el nombre de base de datos predilecto para su proyecto
   */    
    define("DEFAULT_DBNAME", "cacao");

//That�s all folks!