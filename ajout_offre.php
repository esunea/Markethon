<?php
require_once("class/Page.class.php");
require_once("class/OffreEmploi.class.php");
require_once("class/User.class.php");

$user = User::instanceOf();

if($user->isLogged())
{
	$page = Page::instanceOf();
	$offre = new OffreEmploi();
	if(!isset($_POST["ok"])){
		$page->addContent($offre->getForm());
	}
	else{
		$page->addContent($offre->processForm());
		$page->addContent("<a href='ajout_offre.php'>Nouvelle Offre ?</a>");
	}
}
else
{
	header("Location:http://".$_SERVER["HTTP_HOST"]."/markethon_poo/index.php");
}

?>





