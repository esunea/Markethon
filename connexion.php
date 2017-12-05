<?php
//require_once("class/Page.class.php");
//require_once("class/PagePrivee.class.php");
require_once("class/User.class.php");




if(isset($_POST["login"]) && isset($_POST["pass"])){

	$user = User::instanceOf();
	if( $user->authentification($_POST["login"],$_POST["pass"])) {

		
	} 
}
header("Location:http://".$_SERVER["HTTP_HOST"]."/markethon_poo/index.php");


