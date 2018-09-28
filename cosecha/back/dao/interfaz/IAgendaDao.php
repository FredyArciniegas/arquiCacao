<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugu� mi coraz�n al azar y me lo gan� la Violencia.  \\


interface IAgendaDao {

    /**
     * Guarda un objeto Agenda en la base de datos.
     * @param agenda objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($agenda);
    /**
     * Modifica un objeto Agenda en la base de datos.
     * @param agenda objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($agenda);
    /**
     * Elimina un objeto Agenda en la base de datos.
     * @param agenda objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($agenda);
    /**
     * Busca un objeto Agenda en la base de datos.
     * @param agenda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($agenda);
    /**
     * Lista todos los objetos Agenda en la base de datos.
     * @return Array<Agenda> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!