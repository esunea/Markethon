<?php
require ("./config.php");

class Bdd {


	private static $instanceOf = NULL;
	public static function instanceOf(){
		if(self::$instanceOf == NULL){
			return new Bdd();
		}
		return self::$instanceOf;
	}
	
	private $bdd = NULL;
	private function __construct($db = "esu")
	{
		self::$instanceOf = $this;
		try {
			$this->bdd = new PDO(ADDR_BDD.$db,LOGIN,PASS);

		}catch(PDOException $err)
		{
			var_dump($err);
		}
	}
	public function testLogin(String $login,String $pass){
		$requete = "SELECT pass FROM user WHERE login =?";
		$preparedQuery = $this->bdd->prepare($requete);
		$preparedQuery->bindValue(1,$login,PDO::PARAM_STR);
		$preparedQuery->execute();
		$resultat = $preparedQuery->fetch();
		$preparedQuery->closeCursor();
		if($resultat["pass"]==$pass){
			echo("poney du testlogin@Bdd qui retourne true<br/>");
			return true;
		}
		return false;
	}
	public function getUserInfos(String $login){
		$requete = "SELECT * FROM user WHERE login =?";
		$preparedQuery = $this->bdd->prepare($requete);
		$preparedQuery->bindValue(1,$login,PDO::PARAM_STR);
		$preparedQuery->execute();
		$resultat = $preparedQuery->fetch(PDO::FETCH_ASSOC);
		$preparedQuery->closeCursor();
		return $resultat;


	}
	// les infos sont déja vérifiées (devrais-je le faire ici?)
	public function addOffreEmploi($titre, $entreprise){
		$requete = "INSERT INTO offre (titre,entreprise) VALUES (:titre, :entreprise)";
		$prepQuery = $this->bdd->prepare($requete);
		$prepQuery->bindValue(':titre', $titre,PDO::PARAM_STR);
		$prepQuery->bindValue(':entreprise', $entreprise,PDO::PARAM_STR);
		$prepQuery->execute();
		$prepQuery->closeCursor();
	}

	public function getOfferByTitle(String $title){
		$requete = "SELECT * FROM offre WHERE titre =?";
		$preparedQuery = $this->bdd->prepare($requete);
		$preparedQuery->bindValue(1,$title,PDO::PARAM_STR);
		$preparedQuery->execute();
		$resultat = $preparedQuery->fetchAll(PDO::FETCH_ASSOC);
		$preparedQuery->closeCursor();
		return $resultat;


	}

	


	
}