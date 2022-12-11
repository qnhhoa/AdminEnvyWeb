<?php

	class EditHair extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$SpID = $_POST["SpID"];
					$TenSP = $_POST["TenSP"];
					$Photo = $_POST["Photo"];
					$MoTa = $_POST["MoTa"];
					$GiaSP= $_POST["GiaSP"];
					$MaLSP = $_POST["MaLSP"];
					$BrandID = $_POST["BrandID"];
					$SL = $_POST["SL"];
										
					$this->Model->execute("update sanpham set TenSP='$TenSP',Photo='$Photo',MoTa='$MoTa',GiaSP=$GiaSP,SL=$SL WHERE SpID=$SpID ");
					$this->Model->execute("update sanpham set MaLSP=$MaLSP WHERE SpID=$SpID");
					$this->Model->execute("update sanpham set BrandID=$BrandID WHERE SpID=$SpID");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=hair/list&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select SpID, TenSP, sanpham.Photo, MoTa,sanpham.MaLSP, loaisp.TenLSP, GiaSP, SL,sanpham.BrandID, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=3 AND SpID='$id'");
					$data = $this->Model->fetch("select BrandID, TenNcc from nhacc;");
					$data1 = $this->Model->fetch("select MaLSP, TenLSP from loaisp;");
					break;
			}

			include "views/hair/update.php";
		}	
	}
	new EditHair();

?>