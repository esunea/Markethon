<?php

class OffreEmploi {

	public function getForm()
	{
		return 
		"<form action='ajout_offre.php' method='post'> \n" .
		"	<label for='entreprise'>Entreprise</label> \n" .
		"	<input type='text' id='entreprise' name='entreprise'><br/> \n" .
		" \n" .
		"	<label for='title'>Titre</label> \n" .
		"	<input type='text' id='title' name='title'><br/> \n" .
		" \n" .
		"	<input type='submit' value='Envoyer !' name='ok'> \n" .
		" \n" .
		"</form>\n" ;
	}
	public function getSearchForm()
	{
		return 
		"<form action='show_offers.php' method='post'> \n" .
		"	<label for='title'>Titre</label> \n" .
		"	<input type='text' id='title' name='title'><br/> \n" .
		" \n" .
		"	<input type='submit' value='Envoyer !' name='ok'> \n" .
		" \n" .
		"</form>\n" ;
	}

	public function processForm() 
	{
		if(	isset($_POST["entreprise"]) && isset($_POST["title"])	){
			// TODO faire les vérif ici
			Bdd::instanceOf()->addOffreEmploi($_POST["title"],$_POST["entreprise"]);
		}
		return $this->getOffre($_POST["title"],$_POST["entreprise"]);
	}

	public function getOffre($titre, $entreprise){
		return "<p>titre : $titre <br/>entreprise : $entreprise</p>";
	}
	public function searchOffer($title){
		$tab = Bdd::instanceOf()->getOfferByTitle($title);
		$chaine = "";
		foreach ($tab as $key => $value) {
			$chaine.= $this->getOffre($value["titre"],$value["entreprise"]);

		}
		return $chaine;
	}


// "baseSalary" "educationalRequirements" "employmentType" "jobLocation" "skills" "workHours" "validThrough" "title"



}