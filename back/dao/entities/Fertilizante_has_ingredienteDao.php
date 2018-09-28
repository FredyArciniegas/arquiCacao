<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\

include_once realpath('../..').'\dao\interfaz\IFertilizante_has_ingredienteDao.php';
include_once realpath('../..').'\dto\Fertilizante_has_ingrediente.php';
include_once realpath('../..').'\dto\Fertilizante.php';
include_once realpath('../..').'\dto\Ingrediente.php';

class Fertilizante_has_ingredienteDao implements IFertilizante_has_ingredienteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($fertilizante_has_ingrediente){
      $fERTILIZANTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getFERTILIZANTE_idFERTILIZANTE()->getIdFERTILIZANTE();
$iNGREDIENTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getINGREDIENTE_idFERTILIZANTE()->getIdFERTILIZANTE();

      try {
          $sql= "INSERT INTO `fertilizante_has_ingrediente`( `FERTILIZANTE_idFERTILIZANTE`, `INGREDIENTE_idFERTILIZANTE`)"
          ."VALUES ('$fERTILIZANTE_idFERTILIZANTE','$iNGREDIENTE_idFERTILIZANTE')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($fertilizante_has_ingrediente){
      $fERTILIZANTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getFERTILIZANTE_idFERTILIZANTE()->getIdFERTILIZANTE();
$iNGREDIENTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getINGREDIENTE_idFERTILIZANTE()->getIdFERTILIZANTE();

      try {
          $sql= "SELECT `FERTILIZANTE_idFERTILIZANTE`, `INGREDIENTE_idFERTILIZANTE`"
          ."FROM `fertilizante_has_ingrediente`"
          ."WHERE `FERTILIZANTE_idFERTILIZANTE`='$fERTILIZANTE_idFERTILIZANTE' AND`INGREDIENTE_idFERTILIZANTE`='$iNGREDIENTE_idFERTILIZANTE'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFERTILIZANTE($data[$i]['FERTILIZANTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fertilizante);
           $ingrediente = new Ingrediente();
           $ingrediente->setIdFERTILIZANTE($data[$i]['INGREDIENTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($ingrediente);

          }
      return $fertilizante_has_ingrediente;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($fertilizante_has_ingrediente){
      $fERTILIZANTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getFERTILIZANTE_idFERTILIZANTE()->getIdFERTILIZANTE();
$iNGREDIENTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getINGREDIENTE_idFERTILIZANTE()->getIdFERTILIZANTE();

      try {
          $sql= "UPDATE `fertilizante_has_ingrediente` SET`FERTILIZANTE_idFERTILIZANTE`='$fERTILIZANTE_idFERTILIZANTE' ,`INGREDIENTE_idFERTILIZANTE`='$iNGREDIENTE_idFERTILIZANTE' WHERE `FERTILIZANTE_idFERTILIZANTE`='$fERTILIZANTE_idFERTILIZANTE' ,`INGREDIENTE_idFERTILIZANTE`='$iNGREDIENTE_idFERTILIZANTE'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($fertilizante_has_ingrediente){
      $fERTILIZANTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getFERTILIZANTE_idFERTILIZANTE()->getIdFERTILIZANTE();
$iNGREDIENTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getINGREDIENTE_idFERTILIZANTE()->getIdFERTILIZANTE();

      try {
          $sql ="DELETE FROM `fertilizante_has_ingrediente` WHERE `FERTILIZANTE_idFERTILIZANTE`='$fERTILIZANTE_idFERTILIZANTE' AND`INGREDIENTE_idFERTILIZANTE`='$iNGREDIENTE_idFERTILIZANTE'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Fertilizante_has_ingrediente en la base de datos.
     * @return ArrayList<Fertilizante_has_ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `FERTILIZANTE_idFERTILIZANTE`, `INGREDIENTE_idFERTILIZANTE`"
          ."FROM `fertilizante_has_ingrediente`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $fertilizante_has_ingrediente= new Fertilizante_has_ingrediente();
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFERTILIZANTE($data[$i]['FERTILIZANTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fertilizante);
           $ingrediente = new Ingrediente();
           $ingrediente->setIdFERTILIZANTE($data[$i]['INGREDIENTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($ingrediente);

          array_push($lista,$fertilizante_has_ingrediente);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Fertilizante_has_ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByFERTILIZANTE_idFERTILIZANTE($fertilizante_has_ingrediente){
      $lista = array();
      $fERTILIZANTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getFERTILIZANTE_idFERTILIZANTE()->getIdFERTILIZANTE();

      try {
          $sql ="SELECT `FERTILIZANTE_idFERTILIZANTE`, `INGREDIENTE_idFERTILIZANTE`"
          ."FROM `fertilizante_has_ingrediente`"
          ."WHERE `FERTILIZANTE_idFERTILIZANTE`='$fERTILIZANTE_idFERTILIZANTE'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFERTILIZANTE($data[$i]['FERTILIZANTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fertilizante);
           $ingrediente = new Ingrediente();
           $ingrediente->setIdFERTILIZANTE($data[$i]['INGREDIENTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($ingrediente);

          array_push($lista,$fertilizante_has_ingrediente);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Fertilizante_has_ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByINGREDIENTE_idFERTILIZANTE($fertilizante_has_ingrediente){
      $lista = array();
      $iNGREDIENTE_idFERTILIZANTE=$fertilizante_has_ingrediente->getINGREDIENTE_idFERTILIZANTE()->getIdFERTILIZANTE();

      try {
          $sql ="SELECT `FERTILIZANTE_idFERTILIZANTE`, `INGREDIENTE_idFERTILIZANTE`"
          ."FROM `fertilizante_has_ingrediente`"
          ."WHERE `INGREDIENTE_idFERTILIZANTE`='$iNGREDIENTE_idFERTILIZANTE'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $fertilizante = new Fertilizante();
           $fertilizante->setIdFERTILIZANTE($data[$i]['FERTILIZANTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setFERTILIZANTE_idFERTILIZANTE($fertilizante);
           $ingrediente = new Ingrediente();
           $ingrediente->setIdFERTILIZANTE($data[$i]['INGREDIENTE_idFERTILIZANTE']);
           $fertilizante_has_ingrediente->setINGREDIENTE_idFERTILIZANTE($ingrediente);

          array_push($lista,$fertilizante_has_ingrediente);
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