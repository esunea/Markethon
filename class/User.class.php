<?php
require_once("class/Bdd.class.php");
class User{
	private $bdd;


	private static $instanceOf = NULL;
	public static function instanceOf(){
		if(self::$instanceOf == NULL){
			return new User();
		}
		return self::$instanceOf;
	}
	
	private function __construct(){
		session_start();
		self::$instanceOf = $this;
		$this->bdd = Bdd::instanceOf();
	}
	public function __destruct(){
	}

	public function isLogged(){
		return isset($_SESSION["login"]);
	}

	public function getName(){
		if($this->isLogged()){
			return $_SESSION["login"];
		}else{
			return "anonymous";
		}
	}


	public function authentification ($login,$pass) {
		// vérifie le login et charge le contenu de la ligne user dans session
		echo ("poney de l'authentification@user avant la condition test login<br/>");
		if($this->bdd->testLogin($login,$pass)){
			
			$userInfos = $this->bdd->getUserInfos($login); 
			foreach ($userInfos as $key => $value) {
				$_SESSION[$key] = $value;
			}
			return true;
		}
		return false;
	}



}