<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojos de perro azul  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Etapa.php';
require_once realpath("../..").'\dao\interfaz\IEtapaDao.php';

class EtapaController {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Etapa a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idETAPA
   * @param eTAPAnombre
   */
  public static function insert( $idETAPA,  $eTAPAnombre){
      $etapa = new Etapa();
      $etapa->setIdETAPA($idETAPA); 
      $etapa->setETAPAnombre($eTAPAnombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $etapaDao =$FactoryDao->getetapaDao(self::getDataBaseDefault());
     $rtn = $etapaDao->insert($etapa);
     $etapaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Etapa de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idETAPA
   * @return El objeto en base de datos o Null
   */
  public static function select($idETAPA){
      $etapa = new Etapa();
      $etapa->setIdETAPA($idETAPA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $etapaDao =$FactoryDao->getetapaDao(self::getDataBaseDefault());
     $result = $etapaDao->select($etapa);
     $etapaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Etapa  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idETAPA
   * @param eTAPAnombre
   */
  public static function update($idETAPA, $eTAPAnombre){
      $etapa = self::select($idETAPA);
      $etapa->setETAPAnombre($eTAPAnombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $etapaDao =$FactoryDao->getetapaDao(self::getDataBaseDefault());
     $etapaDao->update($etapa);
     $etapaDao->close();
  }

  /**
   * Elimina un objeto Etapa de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idETAPA
   */
  public static function delete($idETAPA){
      $etapa = new Etapa();
      $etapa->setIdETAPA($idETAPA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $etapaDao =$FactoryDao->getetapaDao(self::getDataBaseDefault());
     $etapaDao->delete($etapa);
     $etapaDao->close();
  }

  /**
   * Lista todos los objetos Etapa de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Etapa en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $etapaDao =$FactoryDao->getetapaDao(self::getDataBaseDefault());
     $result = $etapaDao->listAll();
     $etapaDao->close();
     return $result;
  }


}
//That´s all folks!