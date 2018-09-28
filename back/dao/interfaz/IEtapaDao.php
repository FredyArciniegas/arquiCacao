<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando eres Ingeniero en sistemas, pero tu vocación siempre fueron los memes  \\


interface IEtapaDao {

    /**
     * Guarda un objeto Etapa en la base de datos.
     * @param etapa objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($etapa);
    /**
     * Modifica un objeto Etapa en la base de datos.
     * @param etapa objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($etapa);
    /**
     * Elimina un objeto Etapa en la base de datos.
     * @param etapa objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($etapa);
    /**
     * Busca un objeto Etapa en la base de datos.
     * @param etapa objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($etapa);
    /**
     * Lista todos los objetos Etapa en la base de datos.
     * @return Array<Etapa> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!