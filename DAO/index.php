<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega usuario com login e senha

//$usuario = New Usuario();
//$usuario-> login("Joao", "13579");
//echo $usuario;

/*$aluno = new Usuario("aluno", "@lun0" );
$aluno->insert();
echo $aluno;
*/

$usuario = New Usuario();

$usuario->loadById(8);

$usuario->update("aluno", "!@#$%");

echo $usuario;

 ?>