<?php
	
	class AddUser extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$Username = $_POST["Username"];
					$HoTen = $_POST["HoTen"];
					$password = $_POST["password"];
					$DiaChi = $_POST["DiaChi"];
					$SDT = $_POST["SDT"];
					$cRole = $_POST["cRole"];
					$Email = $_POST["Email"];
					
					$this->Model->execute("insert into dangnhap (Username, password,HoTen, DiaChi, SDT, cRole, Email, created) values('$Username','$password','$HoTen', '$DiaChi','$SDT','$cRole','$Email','')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=user/list'>";
					break;
			}

			include "views/user/adduser.php";
		}
	}
	new AddUser();

?>