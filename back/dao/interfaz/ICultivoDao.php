<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era m�s f�cil crear un framework que aprender a usar uno existente  \\


interface ICultivoDao {

    /**
     * Guarda un objeto Cultivo en la base de datos.
     * @param cultivo objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($cultivo);
    /**
     * Modifica un objeto Cultivo en la base de datos.
     * @param cultivo objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($cultivo);
    /**
     * Elimina un objeto Cultivo en la base de datos.
     * @param cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($cultivo);
    /**
     * Busca un objeto Cultivo en la base de datos.
     * @param cultivo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($cultivo);
    /**
     * Lista todos los objetos Cultivo en la base de datos.
     * @return Array<Cultivo> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!