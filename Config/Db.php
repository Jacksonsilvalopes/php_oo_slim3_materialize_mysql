<?php
namespace Config;

class Db
{
  public static function conexao()
  {
   // $conexao = new \PDO("mysql:host=localhost;dbname=phpoo;charset=utf8","root","");
    $conexao = new \PDO("mysql:host=localhost;dbname=id16690543_phpoo;charset=utf8","id16690543_jackswebcompras","Vbjev10#123456");
    return $conexao;
  }
}
