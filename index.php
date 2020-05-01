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
//$usuario = new Usuario();
//$usuario->login('jose', '01234567890');
//echo $usuario;


//insert aluno sem passar parametros construct
//$aluno = new Usuario();
//$aluno->setDeslogin('aluno');
//$aluno->setDessenha('@lun0');

//$aluno->insert();

//echo $aluno;


//insert aluno passando parametros construct
//$aluno = new Usuario('aluno2','@lun02');
//$aluno->insert();
//echo $aluno;

//realizar update
//$usuario = new Usuario();
//$usuario->loadbyId(8);
//$usuario->update('professor','hj5%jh');
//echo $usuario;

//realizar update
$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->delete();
echo $usuario;


?>