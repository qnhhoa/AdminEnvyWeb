<?php

	class EditOrder extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$MaHD = $_POST["MaHD"];
					$Username = $_POST["Username"];
					$Fullname = $_POST["Fullname"];
					$NgayNH = $_POST["NgayNH"];
					$Trangthai = $_POST["Trangthai"];					
					$Address = $_POST["Address"];
					$PhoneNumber = $_POST["PhoneNumber"];
					$TongTien = $_POST["TongTien"];
					$Method = $_POST["Method"];
					
					$this->Model->execute("update hoadon set Username='$Username', Address='$Address', PhoneNumber='$PhoneNumber', TongTien='$TongTien', Method='$Method', Fullname ='$Fullname' Where MaHD=$MaHD;");
					$this->Model->execute("Update donhang set NgayNH='$NgayNH', Trangthai = '$Trangthai' where MaHD=$MaHD;");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=order/list&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from hoadon, cthd, donhang, sanpham where sanpham.SpID = cthd.SpID and hoadon.MaHD = cthd.MaHD and hoadon.MaHD = donhang.MaHD and hoadon.MaHD=$id");
					break;
			}
			include "views/order/update.php";
		}	
	}
	new EditOrder();

?>