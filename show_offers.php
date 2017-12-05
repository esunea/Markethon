<?php
require_once("class/Page.class.php");
require_once("class/OffreEmploi.class.php");
require_once("class/User.class.php");

$user = User::instanceOf();
$index_pages = 0;
if(isset($_GET["page"]))
{

	$index_pages = $_GET["page"];
}

if($user->isLogged())
{
	$page = Page::instanceOf();
	$offre = new OffreEmploi();
	if(!isset($_POST["ok"])){
		$page->addContent($offre->getSearchForm());
		$page->addContent($offre->getLastOffers());
	}
	else
	{
		if(!empty($_POST["title"]))
		{
			$result = $offre->searchOffer($_POST["title"],$_GET["page"]);// rajouter arguments pour le limit 0,ma const

			$tab_size = sizezof($result);// on doit requêter la taille du tableau a part vu qu'on limit dans la première requete TODO
			if($result)
			{
				$page->secureAddContent($result);
			}
			else
			{
				$page->addContent("<p> rien à afficher avec cette recherche</p>");
			}
		}
		else
		{
			$page->addContent("<p>erreur<br/>");
			

		}
	$page->addContent("<a href='show_offers.php'>Nouvelle recherche ?</a>");
	}
	// on affiche ici les liens vers les pages en fonction de _get(pages)
}
else
{
	header("Location:http://".$_SERVER["HTTP_HOST"]."/markethon_poo/index.php");
}

?>