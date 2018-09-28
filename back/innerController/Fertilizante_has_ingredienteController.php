<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El coronel necesitó setenta y cinco años -los setenta y cinco años de su vida, minuto a minuto- para llegar a ese instante. Se sintió puro, explícito, invencible, en el momento de responder:  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Fertilizante_has_ingrediente.php';
require_once realpath("../..").'\dao\interfaz\IFertilizante_has_ingredienteDao.php';
require_once realpath("../..").'\dto\Fertilizante.php';
require_once realpath("../..").'\dto\Ingrediente.php';

class Fertilizante_has_ingredienteController {

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
   * Crea un objeto Fertilizante_has_ingrediente a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param fERTILIZANTE_idFERTILIZANTE
   * @param iNGREDIENTE_idFERTILIZANTE
   */
  public static function insert( $fERTILIZANTE_idFERTILIZANTE,  $iNGREDIENTE_idFERTILIZANTE){
      $fertilizante_has_ingrediente = new Fertilizante_has_ingrediente();
      $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fERTILIZANTE_idFERTILIZANTE); 
      $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($iNGREDIENTE_idFERTILIZANTE); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $rtn = $fertilizante_has_ingredienteDao->insert($fertilizante_has_ingrediente);
     $fertilizante_has_ingredienteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Fertilizante_has_ingrediente de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param fERTILIZANTE_idFERTILIZANTE
   * @param iNGREDIENTE_idFERTILIZANTE
   * @return El objeto en base de datos o Null
   */
  public static function select($fERTILIZANTE_idFERTILIZANTE, $iNGREDIENTE_idFERTILIZANTE){
      $fertilizante_has_ingrediente = new Fertilizante_has_ingrediente();
      $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fERTILIZANTE_idFERTILIZANTE); 
      $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($iNGREDIENTE_idFERTILIZANTE); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $result = $fertilizante_has_ingredienteDao->select($fertilizante_has_ingrediente);
     $fertilizante_has_ingredienteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Fertilizante_has_ingrediente  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param fERTILIZANTE_idFERTILIZANTE
   * @param iNGREDIENTE_idFERTILIZANTE
   */
  public static function update($fERTILIZANTE_idFERTILIZANTE, $iNGREDIENTE_idFERTILIZANTE){
      $fertilizante_has_ingrediente = self::select($fERTILIZANTE_idFERTILIZANTE, $iNGREDIENTE_idFERTILIZANTE);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $fertilizante_has_ingredienteDao->update($fertilizante_has_ingrediente);
     $fertilizante_has_ingredienteDao->close();
  }

  /**
   * Elimina un objeto Fertilizante_has_ingrediente de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param fERTILIZANTE_idFERTILIZANTE
   * @param iNGREDIENTE_idFERTILIZANTE
   */
  public static function delete($fERTILIZANTE_idFERTILIZANTE, $iNGREDIENTE_idFERTILIZANTE){
      $fertilizante_has_ingrediente = new Fertilizante_has_ingrediente();
      $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fERTILIZANTE_idFERTILIZANTE); 
      $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($iNGREDIENTE_idFERTILIZANTE); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $fertilizante_has_ingredienteDao->delete($fertilizante_has_ingrediente);
     $fertilizante_has_ingredienteDao->close();
  }

  /**
   * Lista todos los objetos Fertilizante_has_ingrediente de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Fertilizante_has_ingrediente en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $result = $fertilizante_has_ingredienteDao->listAll();
     $fertilizante_has_ingredienteDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Fertilizante_has_ingrediente de la base de datos a partir de FERTILIZANTE_idFERTILIZANTE.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param fERTILIZANTE_idFERTILIZANTE
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByFERTILIZANTE_idFERTILIZANTE($fERTILIZANTE_idFERTILIZANTE){
      $fertilizante_has_ingrediente = new Fertilizante_has_ingrediente();
      $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fERTILIZANTE_idFERTILIZANTE); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $result = $fertilizante_has_ingredienteDao->listByFERTILIZANTE_idFERTILIZANTE($fertilizante_has_ingrediente);
     $fertilizante_has_ingredienteDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Fertilizante_has_ingrediente de la base de datos a partir de INGREDIENTE_idFERTILIZANTE.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param iNGREDIENTE_idFERTILIZANTE
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByINGREDIENTE_idFERTILIZANTE($iNGREDIENTE_idFERTILIZANTE){
      $fertilizante_has_ingrediente = new Fertilizante_has_ingrediente();
      $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($iNGREDIENTE_idFERTILIZANTE); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $fertilizante_has_ingredienteDao =$FactoryDao->getfertilizante_has_ingredienteDao(self::getDataBaseDefault());
     $result = $fertilizante_has_ingredienteDao->listByINGREDIENTE_idFERTILIZANTE($fertilizante_has_ingrediente);
     $fertilizante_has_ingredienteDao->close();
     return $result;
  }


}
//That´s all folks!