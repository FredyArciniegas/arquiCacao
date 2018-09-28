<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si mi madre entendiera mi código, estaría orgullosa  \\


class Fertilizante_has_ingrediente {

  private $FERTILIZANTE_idFERTILIZANTE;
  private $INGREDIENTE_idFERTILIZANTE;

    /**
     * Constructor de Fertilizante_has_ingrediente
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a FERTILIZANTE_idFERTILIZANTE
     * @return FERTILIZANTE_idFERTILIZANTE
     */
  public function getFERTILIZANTE_idFERTILIZANTE(){
      return $this->FERTILIZANTE_idFERTILIZANTE;
  }

    /**
     * Modifica el valor correspondiente a FERTILIZANTE_idFERTILIZANTE
     * @param FERTILIZANTE_idFERTILIZANTE
     */
  public function setFERTILIZANTE_idFERTILIZANTE($fERTILIZANTE_idFERTILIZANTE){
      $this->FERTILIZANTE_idFERTILIZANTE = $fERTILIZANTE_idFERTILIZANTE;
  }
    /**
     * Devuelve el valor correspondiente a INGREDIENTE_idFERTILIZANTE
     * @return INGREDIENTE_idFERTILIZANTE
     */
  public function getINGREDIENTE_idFERTILIZANTE(){
      return $this->INGREDIENTE_idFERTILIZANTE;
  }

    /**
     * Modifica el valor correspondiente a INGREDIENTE_idFERTILIZANTE
     * @param INGREDIENTE_idFERTILIZANTE
     */
  public function setINGREDIENTE_idFERTILIZANTE($iNGREDIENTE_idFERTILIZANTE){
      $this->INGREDIENTE_idFERTILIZANTE = $iNGREDIENTE_idFERTILIZANTE;
  }


}
//That´s all folks!