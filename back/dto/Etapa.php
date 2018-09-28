<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Dispongo de doce horas de adelanto, puedo de decárselas a ella  \\


class Etapa {

  private $idETAPA;
  private $ETAPAnombre;

    /**
     * Constructor de Etapa
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idETAPA
     * @return idETAPA
     */
  public function getIdETAPA(){
      return $this->idETAPA;
  }

    /**
     * Modifica el valor correspondiente a idETAPA
     * @param idETAPA
     */
  public function setIdETAPA($idETAPA){
      $this->idETAPA = $idETAPA;
  }
    /**
     * Devuelve el valor correspondiente a ETAPAnombre
     * @return ETAPAnombre
     */
  public function getETAPAnombre(){
      return $this->ETAPAnombre;
  }

    /**
     * Modifica el valor correspondiente a ETAPAnombre
     * @param ETAPAnombre
     */
  public function setETAPAnombre($eTAPAnombre){
      $this->ETAPAnombre = $eTAPAnombre;
  }


}
//That´s all folks!