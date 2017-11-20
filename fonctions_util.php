<?php

function test_log(){
	if(!isset($_SESSION["user"])){
		header("Location:http://".$_SERVER["HTTP_HOST"]."/Markethon/erreur.php");
	}
}