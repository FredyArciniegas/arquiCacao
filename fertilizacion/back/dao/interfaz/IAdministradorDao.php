<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para �y se la crey�?  \\


interface IAdministradorDao {

    /**
     * Guarda un objeto Administrador en la base de datos.
     * @param administrador objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($administrador);
    /**
     * Modifica un objeto Administrador en la base de datos.
     * @param administrador objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($administrador);
    /**
     * Elimina un objeto Administrador en la base de datos.
     * @param administrador objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($administrador);
    /**
     * Busca un objeto Administrador en la base de datos.
     * @param administrador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($administrador);
    /**
     * Lista todos los objetos Administrador en la base de datos.
     * @return Array<Administrador> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Busca un objeto Administrador en la base de datos.
     * @param administrador objeto con los atributos de inicio de sesi�n
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function login($administrador);
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!