<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\

include_once realpath('../..').'\dao\interfaz\IEtapaDao.php';
include_once realpath('../..').'\dto\Etapa.php';

class EtapaDao implements IEtapaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Etapa en la base de datos.
     * @param etapa objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($etapa){
      $idETAPA=$etapa->getIdETAPA();
$eTAPAnombre=$etapa->getETAPAnombre();

      try {
          $sql= "INSERT INTO `etapa`( `idETAPA`, `ETAPAnombre`)"
          ."VALUES ('$idETAPA','$eTAPAnombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Etapa en la base de datos.
     * @param etapa objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($etapa){
      $idETAPA=$etapa->getIdETAPA();

      try {
          $sql= "SELECT `idETAPA`, `ETAPAnombre`"
          ."FROM `etapa`"
          ."WHERE `idETAPA`='$idETAPA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $etapa->setIdETAPA($data[$i]['idETAPA']);
          $etapa->setETAPAnombre($data[$i]['ETAPAnombre']);

          }
      return $etapa;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Etapa en la base de datos.
     * @param etapa objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($etapa){
      $idETAPA=$etapa->getIdETAPA();
$eTAPAnombre=$etapa->getETAPAnombre();

      try {
          $sql= "UPDATE `etapa` SET`idETAPA`='$idETAPA' ,`ETAPAnombre`='$eTAPAnombre' WHERE `idETAPA`='$idETAPA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Etapa en la base de datos.
     * @param etapa objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($etapa){
      $idETAPA=$etapa->getIdETAPA();

      try {
          $sql ="DELETE FROM `etapa` WHERE `idETAPA`='$idETAPA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Etapa en la base de datos.
     * @return ArrayList<Etapa> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idETAPA`, `ETAPAnombre`"
          ."FROM `etapa`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $etapa= new Etapa();
          $etapa->setIdETAPA($data[$i]['idETAPA']);
          $etapa->setETAPAnombre($data[$i]['ETAPAnombre']);

          array_push($lista,$etapa);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!