<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don�t call me gringo you f%&ing beanner  \\


interface ICosecha_has_cacaoteroDao {

    /**
     * Guarda un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cosecha_has_cacaotero);
    /**
     * Modifica un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cosecha_has_cacaotero);
    /**
     * Elimina un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cosecha_has_cacaotero);
    /**
     * Busca un objeto Cosecha_has_cacaotero en la base de datos.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cosecha_has_cacaotero);
    /**
     * Lista todos los objetos Cosecha_has_cacaotero en la base de datos.
     * @return Array<Cosecha_has_cacaotero> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Cosecha_has_cacaotero en la base de datos que coincidan con la llave primaria.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Cosecha_has_cacaotero> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCOSECHA_idCOSECHA($cosecha_has_cacaotero);
    /**
     * Lista todos los objetos Cosecha_has_cacaotero en la base de datos que coincidan con la llave primaria.
     * @param cosecha_has_cacaotero objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Cosecha_has_cacaotero> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCACAOTERO_idCACAOTERO($cosecha_has_cacaotero);
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!