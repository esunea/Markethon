<?php
require_once("class/Page.class.php");
require_once("class/PagePublic.class.php");
require_once("class/User.class.php");

$user = User::instanceOf();

if($user->isLogged())
	{
		$page = Page::instanceOf();
	}
	else
	{
		$page = PagePublic::instanceOf();
	}

$page->addContent("<h1>ceci est une page qui marche</h1>");






