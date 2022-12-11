<?php
	session_start();
	include "../config/Config.php";
	include "../config/Model.php";
	include "../config/Controller.php";
	include "../config/RemoveUnicode.php";
	include "../config/Token.php";	

	if(isset($_GET["act"]) && $_GET["act"]=="logout")
		unset($_SESSION["account"]);
	if(isset($_SESSION['account'])) {
		$controller = isset($_GET["controller"])?"controllers/".$_GET["controller"]."Controller.php":"controllers/home.php";
		include "../layout/Home.php";
	}
	else{
		include "controllers/login.php";
	}
?>