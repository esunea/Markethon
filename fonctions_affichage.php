<?php 
function upload_file_form(){
	?>
	<form action="traitement_file.php" method="post" enctype="multipart/form-data">
		<input type="text" name="user">
		<input type="file" name="monFichier" value="test"><br/>
		<input type="submit" value="envoyer le fichier">
	</form>
	<?php
}

function form_entreprise(){
	?>
	<form action="" method="post">
		<label for="nom">Nom de l'entreprise</label>
		<input type="text" id="nom" name="nom"><br/>

		<label for="adresse">Adresse de l'entreprise</label>
		<input type="text" id="adresse" name="adresse"><br/>

		<label for="nom_contact">Nom du contact</label>
		<input type="text" id="nom_contact" name="nom_contact"><br/>

		<label for="mail">Mail du contact</label>
		<input type="mail" id="mail" name="mail"><br/>

		<label for="phone">Téléphone du contact</label>
		<input type="text" id="phone" name="phone"><br/>

		<input type="submit" value="Envoyer !">
	</form>
	<?php
}
function form_offre(){
//datePosted
// employmentType => table satellite
//DatePosted
// hiring_organisation(session ID)
// incentive_compensation
// industry
// job benefits => compensation non-financière
	?>
	<form action="" method="post">
		<label for="baseSalary">Salaire</label>
		<input type="text" id="baseSalary" name="baseSalary"><br/>

		<label for="educationalRequirements">Diplomes</label>
		<input type="text" id="educationalRequirements" name="educationalRequirements"><br/>

		<label for="employmentType">Type de contrat</label>
		<input type="text" id="employmentType" name="employmentType"><br/>

		<label for="jobLocation">Lieu de travail</label>
		<input type="text" id="jobLocation" name="jobLocation"><br/>

		<label for="skills">Compétaces</label>
		<input type="text" id="skills" name="skills"><br/>
		
		<label for="workHours">Heures de travail</label>
		<input type="text" id="workHours" name="workHours"><br/>

		<label for="validThrough">Date D'Expiration</label>
		<input type="text" id="validThrough" name="validThrough"><br/>
		
		<label for="title">Titre</label>
		<input type="text" id="title" name="title"><br/>


		

		<input type="submit" value="Envoyer !">

	</form>
	<?php
}
function show_offers($tab){
	foreach ($tab as $key => $value) {
		echo $key." : ".$value."<br/>";
	}
}

function print_error(){
	echo "<h1> Franchement t'as déconné</h1><br/><p><strong>log error</strong></p>";
}
@
function affiche_form($name_tab, $showName_tab){
	$chaine = "";
	foreach ($name_tab as $key => $value) {
		$chaine .= affiche_input($value, $showName_tab[$key]);
	}
	return $chaine;
}

function affiche_input(String $name,String $showName){
	return "<label for='$name'>$showName</label>
		<input type='text' id='$name' name='$name'><br/>\n";
}

