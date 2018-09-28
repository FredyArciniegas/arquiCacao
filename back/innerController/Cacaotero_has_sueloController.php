<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Cacaotero_has_suelo.php';
require_once realpath("../..").'\dao\interfaz\ICacaotero_has_sueloDao.php';
require_once realpath("../..").'\dto\Cacaotero.php';
require_once realpath("../..").'\dto\Suelo.php';

class Cacaotero_has_sueloController {

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
   * Crea un objeto Cacaotero_has_suelo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param sUELO_idSUELO
   */
  public static function insert( $cACAOTERO_idCACAOTERO,  $sUELO_idSUELO){
      $cacaotero_has_suelo = new Cacaotero_has_suelo();
      $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 
      $cacaotero_has_suelo->setSUELO_idSUELO($sUELO_idSUELO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $rtn = $cacaotero_has_sueloDao->insert($cacaotero_has_suelo);
     $cacaotero_has_sueloDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cacaotero_has_suelo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param sUELO_idSUELO
   * @return El objeto en base de datos o Null
   */
  public static function select($cACAOTERO_idCACAOTERO, $sUELO_idSUELO){
      $cacaotero_has_suelo = new Cacaotero_has_suelo();
      $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 
      $cacaotero_has_suelo->setSUELO_idSUELO($sUELO_idSUELO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $result = $cacaotero_has_sueloDao->select($cacaotero_has_suelo);
     $cacaotero_has_sueloDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cacaotero_has_suelo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param sUELO_idSUELO
   */
  public static function update($cACAOTERO_idCACAOTERO, $sUELO_idSUELO){
      $cacaotero_has_suelo = self::select($cACAOTERO_idCACAOTERO, $sUELO_idSUELO);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $cacaotero_has_sueloDao->update($cacaotero_has_suelo);
     $cacaotero_has_sueloDao->close();
  }

  /**
   * Elimina un objeto Cacaotero_has_suelo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @param sUELO_idSUELO
   */
  public static function delete($cACAOTERO_idCACAOTERO, $sUELO_idSUELO){
      $cacaotero_has_suelo = new Cacaotero_has_suelo();
      $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 
      $cacaotero_has_suelo->setSUELO_idSUELO($sUELO_idSUELO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $cacaotero_has_sueloDao->delete($cacaotero_has_suelo);
     $cacaotero_has_sueloDao->close();
  }

  /**
   * Lista todos los objetos Cacaotero_has_suelo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cacaotero_has_suelo en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $result = $cacaotero_has_sueloDao->listAll();
     $cacaotero_has_sueloDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Cacaotero_has_suelo de la base de datos a partir de CACAOTERO_idCACAOTERO.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cACAOTERO_idCACAOTERO
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO){
      $cacaotero_has_suelo = new Cacaotero_has_suelo();
      $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cACAOTERO_idCACAOTERO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $result = $cacaotero_has_sueloDao->listByCACAOTERO_idCACAOTERO($cacaotero_has_suelo);
     $cacaotero_has_sueloDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Cacaotero_has_suelo de la base de datos a partir de SUELO_idSUELO.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param sUELO_idSUELO
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listBySUELO_idSUELO($sUELO_idSUELO){
      $cacaotero_has_suelo = new Cacaotero_has_suelo();
      $cacaotero_has_suelo->setSUELO_idSUELO($sUELO_idSUELO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cacaotero_has_sueloDao =$FactoryDao->getcacaotero_has_sueloDao(self::getDataBaseDefault());
     $result = $cacaotero_has_sueloDao->listBySUELO_idSUELO($cacaotero_has_suelo);
     $cacaotero_has_sueloDao->close();
     return $result;
  }


}
//That´s all folks!