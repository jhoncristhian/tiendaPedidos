<?php 

class Session{
	
private $session = NULL;

	public function __construct($session_name){
		session_start();

		if (!isset($_SESSION[$session_name])) {
			$_SESSION[$session_name]=NULL;
			//echo "sesion $session_name creada";
		}
		//echo "sesion $session_name creada";
		$this->session=$session_name;
		
	}

	public function setValue($value){
		$_SESSION[$this->session]=$value;
	}

	public function getValue(){
		return $_SESSION[$this->session];
	}
}
 ?>