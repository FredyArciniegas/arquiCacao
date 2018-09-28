<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\


interface IFertilizante_has_ingredienteDao {

    /**
     * Guarda un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($fertilizante_has_ingrediente);
    /**
     * Modifica un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($fertilizante_has_ingrediente);
    /**
     * Elimina un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($fertilizante_has_ingrediente);
    /**
     * Busca un objeto Fertilizante_has_ingrediente en la base de datos.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($fertilizante_has_ingrediente);
    /**
     * Lista todos los objetos Fertilizante_has_ingrediente en la base de datos.
     * @return Array<Fertilizante_has_ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Fertilizante_has_ingrediente en la base de datos que coincidan con la llave primaria.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Fertilizante_has_ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByFERTILIZANTE_idFERTILIZANTE($fertilizante_has_ingrediente);
    /**
     * Lista todos los objetos Fertilizante_has_ingrediente en la base de datos que coincidan con la llave primaria.
     * @param fertilizante_has_ingrediente objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Fertilizante_has_ingrediente> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByINGREDIENTE_idFERTILIZANTE($fertilizante_has_ingrediente);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!