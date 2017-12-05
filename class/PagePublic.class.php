<?php
require_once("Page.class.php");
class PagePublic extends Page{

	public static function instanceOf(){
		if(self::$instanceOf == NULL){
			return new PagePublic("test");
		}
		return self::$instanceOf;
	}

	public function addHeader(){
		$this->addContent("<header>");
		$this->addContent($this->user->getName());
		$this->addLogModule();
		$this->addContent("</header>");
	}
	public function addNav(){
		$this->addContent(
			"<nav> \n" .
			"</nav>\n" );
	}






}