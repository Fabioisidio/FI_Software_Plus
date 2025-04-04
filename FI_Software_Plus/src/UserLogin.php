<?php

$_POST['email'] = "fabio@isidio.com.br";
$_POST['senha'] = "123";

$email = $_POST['email'];
$senha = $_POST['senha'];

class UserLogin{
	
	protected $email;
	protected $senha;
	
	function __construct($email, $senha){
		$this->email = $email;
		$this->senha = $senha;
	}
	
	public function verificaEmail(){
		if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
			echo "voce logou";
		} else {
			echo "Email invalido";
		}
	}
//	public function verificaSenha(){
//		
//		if(($this->senha)){
//			
//		}
//	}
}

$Login = new UserLogin($email, $senha);

echo $Login->verificaEmail();
