<?
ini_set( 'display_errors', 1); 
require_once("config.php");


//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM php_tb_usuarios ORDER BY deslogin");
//echo json_encode($usuarios);

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;


//Carrega uma lista de usuarios
//nao preciso instanciar o objeto porque é estatico
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search('jo');
//echo json_encode($search);

//Carrega umusuario com login e senha
$usuario = new Usuario();
$usuario->login('jose', '01234567890');
echo $usuario;


?>