<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\


interface ICacaotero_has_sueloDao {

    /**
     * Guarda un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cacaotero_has_suelo);
    /**
     * Modifica un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cacaotero_has_suelo);
    /**
     * Elimina un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cacaotero_has_suelo);
    /**
     * Busca un objeto Cacaotero_has_suelo en la base de datos.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cacaotero_has_suelo);
    /**
     * Lista todos los objetos Cacaotero_has_suelo en la base de datos.
     * @return Array<Cacaotero_has_suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Cacaotero_has_suelo en la base de datos que coincidan con la llave primaria.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Cacaotero_has_suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCACAOTERO_idCACAOTERO($cacaotero_has_suelo);
    /**
     * Lista todos los objetos Cacaotero_has_suelo en la base de datos que coincidan con la llave primaria.
     * @param cacaotero_has_suelo objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Cacaotero_has_suelo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listBySUELO_idSUELO($cacaotero_has_suelo);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!