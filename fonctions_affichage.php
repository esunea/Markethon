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


function print_head($title = "Markethon"){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel='stylesheet' href='style/style.css'>
		<title><?= $title?></title>
	</head>
	<body>

		<?php
	}
	function print_header($connected = false){
		?>
		<header>
			<a href="index.php"><img class="logo" src="images/logo.png" alt="logo markethon(moche)"></a>
			<?php if(!isset($_SESSION["user"])){ ?>
			<form action="connexion.php" method="post">
				<input type="text" name="user" placeholder="identifiant"><br/>
				<input type="password" name="pwd" placeholder="***********"><br/>
				<input type="submit">
			</form>
			<?php
		}else {
			echo "<div>user logged ! you are ".$_SESSION["user"]."<br/>";
			echo "<a href='deconnexion.php'>Deconnexion</a></div>";
		}
		?>
	</header>
	<?php
}
function print_footer(){
	?>
	<footer>
		<ul>
			<li><a href="planSite.html">Plan du site</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="mentionsLegales.html">Mentions Légales</a></li>
		</ul>
	</footer>
</body>
</html>
<?php
}
function print_nav(){
	?>
	<nav>
		<ul>
			<?php
			if(isset($_SESSION["user"])){
				?>
				<li><a href="ajout_offre.php">ajouter une offre</a></li>
				<li><a href="show_offers.php">afficher offres</a></li>
				<li><a href="inscription_entreprise.php">Inscription entreprise</a></li>
				<?php
			}
			?>
		</ul>
	</nav>
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

