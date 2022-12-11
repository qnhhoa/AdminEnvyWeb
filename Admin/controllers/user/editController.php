<?php

	class EditUser extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$Username = $_POST["Username"];
					$HoTen = $_POST["HoTen"];
					$password = $_POST["password"];
					$DiaChi = $_POST["DiaChi"];
					$SDT = $_POST["SDT"];
					$cRole = $_POST["cRole"];
					$Email = $_POST["Email"];
					
					
					$this->Model->execute("update dangnhap set Username='$Username', HoTen='$HoTen', password='$password',DiaChi='$DiaChi',SDT='$SDT',cRole='$cRole',Email='$Email' where Username='$id' ");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=user/list&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from dangnhap where Username='$id'");
					break;
			}

			include "views/user/update.php";
		}	
	}
	new EditUser();

?>