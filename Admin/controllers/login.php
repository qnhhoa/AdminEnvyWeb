<?php
	class login extends Controller{
		public function __construct(){
			parent::__construct();
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$Email = $_POST["Email"];
				$password = $_POST["password"];
				$check = $this->Model->fetchOne("select * from dangnhap where Email='$Email'");
				if( isset($check["Email"]) ) {
					if(($password) == $check["password"] &&$check["cRole"]==0){
						$_SESSION["account"] = $Email;
						$_SESSION["HoTen"] = $check["HoTen"];
						$_SESSION["cRole"] = $check["cRole"];
						$_SESSION["SDT"] = $check["SDT"];
						$_SESSION["DiaChi"] = $check["DiaChi"];
						$_SESSION["Username"] = $check["Username"];
						header("location: index.php");
					}
				}
			}
			include "views/login.php";
		}
	}
	new login();
?>