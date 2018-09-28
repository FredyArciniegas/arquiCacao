<?php
/*
              -------Creado por-------
             /(x.x )/ Anarchy /( x.x)/
              ------------------------
 */

//    Un generador de c�digo no basta. Ahora debo inventar tambi�n un generador de frases tontas  //

include_once realpath('../..').'/dao/Conexion/Conexion.php';
include_once realpath('../..').'/dao/interfaz/IFactoryDao.php';

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de AdministradorDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AdministradorDao
     */
     public function getAdministradorDao($dbName){
        return new AdministradorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de AgendaDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AgendaDao
     */
     public function getAgendaDao($dbName){
        return new AgendaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CacaoteroDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CacaoteroDao
     */
     public function getCacaoteroDao($dbName){
        return new CacaoteroDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Cacaotero_has_cultivoDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Cacaotero_has_cultivoDao
     */
     public function getCacaotero_has_cultivoDao($dbName){
        return new Cacaotero_has_cultivoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CosechaDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CosechaDao
     */
     public function getCosechaDao($dbName){
        return new CosechaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Cosecha_has_cacaoteroDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Cosecha_has_cacaoteroDao
     */
     public function getCosecha_has_cacaoteroDao($dbName){
        return new Cosecha_has_cacaoteroDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CultivoDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CultivoDao
     */
     public function getCultivoDao($dbName){
        return new CultivoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de FertilizacionDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FertilizacionDao
     */
     public function getFertilizacionDao($dbName){
        return new FertilizacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de FertilizanteDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FertilizanteDao
     */
     public function getFertilizanteDao($dbName){
        return new FertilizanteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de FincaDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de FincaDao
     */
     public function getFincaDao($dbName){
        return new FincaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de IngredienteDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de IngredienteDao
     */
     public function getIngredienteDao($dbName){
        return new IngredienteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de IngredientefertilizanteDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de IngredientefertilizanteDao
     */
     public function getIngredientefertilizanteDao($dbName){
        return new IngredientefertilizanteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de SectorDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SectorDao
     */
     public function getSectorDao($dbName){
        return new SectorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de SueloDao con una conexi�n que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SueloDao
     */
     public function getSueloDao($dbName){
        return new SueloDao($this->conn->obtener($dbName));
    }

}
//That�s all folks!