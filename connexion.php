<?php 
if( $_POST["user"] == "paul" && $_POST["pwd"]== "paul"){
	session_start();
	$_SESSION["user"] = $_POST["user"];

}
header("Location:http://".$_SERVER["HTTP_HOST"]."/Markethon/index.php");