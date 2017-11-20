<?php
session_start();
if(isset($_POST["user"])){
	if($_POST["user"] != ""){

	}
}


if(!$_FILES["monFichier"]["error"]){
	if($_FILES["monFichier"]["size"]< 20000000){
		var_dump(pathinfo($_FILES["monFichier"]["tmp_name"]));
		$nom_repertoire = "/home/esu/";
		$nom_stockage = $_FILES["monFichier"]["name"];

		var_dump( move_uploaded_file($_FILES["monFichier"]["tmp_name"],$nom_repertoire. $nom_stockage ));

	}
}

	echo"<br/>";
	echo($_FILES["monFichier"]["name"]);
	echo"<br/>";
	echo($_FILES["monFichier"]["type"]);
	echo"<br/>";
	echo($_FILES["monFichier"]["size"]);
	echo"<br/>";
	echo($_FILES["monFichier"]["tmp_name"]);
	echo"<br/>";
	echo($_FILES["monFichier"]["error"]);
/*	*/