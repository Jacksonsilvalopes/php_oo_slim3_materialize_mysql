<?php

namespace Helpers;

class Util
{
  public static function trataValor($valor)
  {
    return "R$ ".number_format($valor,2,',','.');
  }


}
