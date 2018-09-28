<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    �Vaya! �Al fin har�s algo mejor que una calculadora!  \\


interface ICacaotero_has_cultivoDao {

    /**
     * Guarda un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cacaotero_has_cultivo);
    /**
     * Modifica un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cacaotero_has_cultivo);
    /**
     * Elimina un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cacaotero_has_cultivo);
    /**
     * Busca un objeto Cacaotero_has_cultivo en la base de datos.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cacaotero_has_cultivo);
    /**
     * Lista todos los objetos Cacaotero_has_cultivo en la base de datos.
     * @return Array<Cacaotero_has_cultivo> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Cacaotero_has_cultivo en la base de datos que coincidan con la llave primaria.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Cacaotero_has_cultivo> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCACAOTERO_idCACAOTERO($cacaotero_has_cultivo);
    /**
     * Lista todos los objetos Cacaotero_has_cultivo en la base de datos que coincidan con la llave primaria.
     * @param cacaotero_has_cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Cacaotero_has_cultivo> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCULTIVO_idCULTIVO($cacaotero_has_cultivo);
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!