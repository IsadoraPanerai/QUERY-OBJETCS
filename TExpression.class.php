<?php

/*Classe TExpression
  classe abstrata para gerenciar expressões*/

abstract class TExpression
{
    //operadores logicos 
    const AND_OPERATOR = 'AND';
    const OR_OPERATOR = 'OR';

    //marca metodo dump como obrigatorio
    abstract public function dump();
}
?>