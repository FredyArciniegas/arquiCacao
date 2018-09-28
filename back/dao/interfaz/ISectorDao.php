<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Y pensar que Anarchy est� hecho en c�digo espagueti...  \\


interface ISectorDao {

    /**
     * Guarda un objeto Sector en la base de datos.
     * @param sector objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($sector);
    /**
     * Modifica un objeto Sector en la base de datos.
     * @param sector objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($sector);
    /**
     * Elimina un objeto Sector en la base de datos.
     * @param sector objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($sector);
    /**
     * Busca un objeto Sector en la base de datos.
     * @param sector objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($sector);
    /**
     * Lista todos los objetos Sector en la base de datos.
     * @return Array<Sector> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!