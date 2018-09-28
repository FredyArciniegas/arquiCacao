<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llam� Molotov ( u.u) *Nostalgia  \\


interface IIngredienteDao {

    /**
     * Guarda un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ingrediente);
    /**
     * Modifica un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ingrediente);
    /**
     * Elimina un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ingrediente);
    /**
     * Busca un objeto Ingrediente en la base de datos.
     * @param ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ingrediente);
    /**
     * Lista todos los objetos Ingrediente en la base de datos.
     * @return Array<Ingrediente> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!