<?php
require_once("class/User.class.php");
class Page {

	protected $chaine = "";
	protected $user = NULL;
	protected static $instanceOf = NULL;
	


	public static function instanceOf(){
		if(self::$instanceOf == NULL){
			return new Page("test");
		}
		return self::$instanceOf;
	}
	
	
	protected function __construct(String $title = "M'enfin"){
		self::$instanceOf = $this;
		$this->user = User::instanceOf();


		$this->chaine = $this->chaine. "<!DOCTYPE html> \n" .
		"<html lang='en'> \n" .
		"	<head> \n" .
		"		<meta charset='UTF-8'> \n" .
		"		<title>$title</title> \n" .
		"	</head> \n" .
		"	<body>\n" ;
		$this->addHeader();
		$this->addNav();
	}
	public function __destruct(){
		$this->addFooter();
		echo ($this->chaine."</body>\n</html>");
	}

	public function addContent($content = "hello world")
	{
		$this->chaine .= $content;
	}
	public function secureAddContent($content = ""){
		$this->addContent(htmlentities($content));
	}
	public function addHeader(){
		$this->addContent("<header>");
		$this->addContent($this->user->getName()."<br/>");
		$this->addDecoLink();
		$this->addContent("</header>");
	}
	public function addNav(){
		$this->addContent(
			"<nav> \n" .
			"	<ul> \n" .
			"	<li><a href='ajout_offre.php'>ajouter une offre</a></li> \n" .
			"	<li><a href='show_offers.php'>afficher offres</a></li> \n" .
			"	</ul> \n" .
			"</nav>\n" );
	}
	public function addLogModule(){
		$this->addContent(
			"<form action='connexion.php' method='post'> \n" .
			"	<input type='text' name='login' placeholder='identifiant'><br/> \n" .
			"	<input type='password' name='pass' placeholder='***********''><br/> \n" .
			"	<input type='submit'> \n" .
			"</form>\n");
	}
	public function addDecoLink(){
		$this->addContent("<a href='deconnexion.php'>Deconnexion</a>");
	}
	public function addFooter(){
		$this->addContent(
			"<footer> \n" .
			"	<ul> \n" .
			"	<li><a href='planSite.html'>Plan du site</a></li> \n" .
			"	<li><a href='contact.html'>Contact</a></li> \n" .
			"	<li><a href='mentionsLegales.html'>Mentions Légales</a></li> \n" .
			"	</ul> \n" .
			"</footer>\n" );
	}

	
}?>
