<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("Ed");
//echo json_encode($search);

//Carrega um usuário usando login e senha 
$usuario = new Usuario();
$usuario->Login("Edson", "123456789");
echo $usuario;














/*  $sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */
?>