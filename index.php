<?
ini_set( 'display_errors', 1); 
require_once("config.php");

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM php_tb_usuarios ORDER BY deslogin");
//echo json_encode($usuarios);

$root = new Usuario();
$root->loadbyId(3);
echo $root;




?>