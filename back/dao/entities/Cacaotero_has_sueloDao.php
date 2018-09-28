<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Le he dedicado más tiempo a las frases que al software interno  \\

include_once realpath('../..').'\dao\interfaz\ICacaotero_has_sueloDao.php';
include_once realpath('../..').'\dto\Cacaotero_has_suelo.php';
include_once realpath('../..').'\dto\Cacaotero.php';
include_once realpath('../..').'\dto\Suelo.php';

class Cacaotero_has_sueloDao implements ICacaotero_has_sueloDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cacaotero_has_suelo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_suelo->getCACAOTERO_idCACAOTERO()->getIdCACAOTERO();
$sUELO_idSUELO=$cacaotero_has_suelo->getSUELO_idSUELO()->getIdSUELO();

      try {
          $sql= "INSERT INTO `cacaotero_has_suelo`( `CACAOTERO_idCACAOTERO`, `SUELO_idSUELO`)"
          ."VALUES ('$cACAOTERO_idCACAOTERO','$sUELO_idSUELO')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cacaotero_has_suelo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_suelo->getCACAOTERO_idCACAOTERO()->getIdCACAOTERO();
$sUELO_idSUELO=$cacaotero_has_suelo->getSUELO_idSUELO()->getIdSUELO();

      try {
          $sql= "SELECT `CACAOTERO_idCACAOTERO`, `SUELO_idSUELO`"
          ."FROM `cacaotero_has_suelo`"
          ."WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' AND`SUELO_idSUELO`='$sUELO_idSUELO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCACAOTERO($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cacaotero);
           $suelo = new Suelo();
           $suelo->setIdSUELO($data[$i]['SUELO_idSUELO']);
           $cacaotero_has_suelo->setSUELO_idSUELO($suelo);

          }
      return $cacaotero_has_suelo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cacaotero_has_suelo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_suelo->getCACAOTERO_idCACAOTERO()->getIdCACAOTERO();
$sUELO_idSUELO=$cacaotero_has_suelo->getSUELO_idSUELO()->getIdSUELO();

      try {
          $sql= "UPDATE `cacaotero_has_suelo` SET`CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' ,`SUELO_idSUELO`='$sUELO_idSUELO' WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' ,`SUELO_idSUELO`='$sUELO_idSUELO'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cacaotero_has_suelo){
      $cACAOTERO_idCACAOTERO=$cacaotero_has_suelo->getCACAOTERO_idCACAOTERO()->getIdCACAOTERO();
$sUELO_idSUELO=$cacaotero_has_suelo->getSUELO_idSUELO()->getIdSUELO();

      try {
          $sql ="DELETE FROM `cacaotero_has_suelo` WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO' AND`SUELO_idSUELO`='$sUELO_idSUELO'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Cacaotero_has_suelo en la base de datos.
     * @return ArrayList<Cacaotero_has_suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `CACAOTERO_idCACAOTERO`, `SUELO_idSUELO`"
          ."FROM `cacaotero_has_suelo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $cacaotero_has_suelo= new Cacaotero_has_suelo();
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCACAOTERO($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cacaotero);
           $suelo = new Suelo();
           $suelo->setIdSUELO($data[$i]['SUELO_idSUELO']);
           $cacaotero_has_suelo->setSUELO_idSUELO($suelo);

          array_push($lista,$cacaotero_has_suelo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Cacaotero_has_suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCACAOTERO_idCACAOTERO($cacaotero_has_suelo){
      $lista = array();
      $cACAOTERO_idCACAOTERO=$cacaotero_has_suelo->getCACAOTERO_idCACAOTERO()->getIdCACAOTERO();

      try {
          $sql ="SELECT `CACAOTERO_idCACAOTERO`, `SUELO_idSUELO`"
          ."FROM `cacaotero_has_suelo`"
          ."WHERE `CACAOTERO_idCACAOTERO`='$cACAOTERO_idCACAOTERO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCACAOTERO($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cacaotero);
           $suelo = new Suelo();
           $suelo->setIdSUELO($data[$i]['SUELO_idSUELO']);
           $cacaotero_has_suelo->setSUELO_idSUELO($suelo);

          array_push($lista,$cacaotero_has_suelo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Cacaotero_has_suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listBySUELO_idSUELO($cacaotero_has_suelo){
      $lista = array();
      $sUELO_idSUELO=$cacaotero_has_suelo->getSUELO_idSUELO()->getIdSUELO();

      try {
          $sql ="SELECT `CACAOTERO_idCACAOTERO`, `SUELO_idSUELO`"
          ."FROM `cacaotero_has_suelo`"
          ."WHERE `SUELO_idSUELO`='$sUELO_idSUELO'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $cacaotero = new Cacaotero();
           $cacaotero->setIdCACAOTERO($data[$i]['CACAOTERO_idCACAOTERO']);
           $cacaotero_has_suelo->setCACAOTERO_idCACAOTERO($cacaotero);
           $suelo = new Suelo();
           $suelo->setIdSUELO($data[$i]['SUELO_idSUELO']);
           $cacaotero_has_suelo->setSUELO_idSUELO($suelo);

          array_push($lista,$cacaotero_has_suelo);
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