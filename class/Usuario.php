<?
 class Usuario{
	 
	 private $idusuario;
	 private $deslogin;
	 private $dessenha;
	 private $dtcadastro;
	 
	 public function getIdusuario(){
		 return $this->idusuario;
	 }
	 public function setIdusuario($value){
		 $this->idusuario = $value;
	 }
	 public function getDeslogin(){
		 return $this->deslogin;
	 }
	 public function setDeslogin($value){
		 $this->deslogin = $value;
	 }
	 public function getDessenha(){
		 return $this->dessenha;
	 }
	 public function setDessenha($value){
		 $this->dessenha = $value;
	 }
	 public function getDtcadastro(){
		 return $this->dtcadastro;
	 }
	 public function setDtcadastro($value){
		 $this->dtcadastro = $value;
	 }
	 
	 public function loadById($id){
		 $sql = new Sql();
		 $results = $sql->select("SELECT * FROM php_tb_usuarios WHERE id = :ID", array(
			":ID"=>$id
		 ));
		 
		 if(count($results)>0){
			 
			 //echo 'results:'.var_dump($results).'<br>';
			 $row = $results[0];
			 
			 $this->setIdusuario($row['id']);
			 $this->setDeslogin($row['deslogin']);
			 $this->setDessenha($row['dessenha']);
			 $this->setDtcadastro(new DateTime($row['dtcadastro']));
			 
		 }
		 
	 }
	 public function __toString(){
		 
		 return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		 
		 ));
		 
	 }
	 
	 
	 
	 
	 
 }

?>