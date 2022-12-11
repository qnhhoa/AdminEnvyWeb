<?php	
	class AddHair extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$TenSP = $_POST["TenSP"];
					$Photo = $_POST["Photo"];
					$MoTa = $_POST["MoTa"];
					$GiaSP= $_POST["GiaSP"];
					$MaLSP = $_POST["MaLSP"];
					$BrandID = $_POST["BrandID"];
					$SL = $_POST["SL"];
					
					$this->Model->execute("insert into sanpham (TenSP, Photo,Mota, MaLSP, GiaSP,SL, BrandID) values ('$TenSP', '$Photo', '$MoTa', $MaLSP,$GiaSP,$SL,$BrandID)");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=hair/list'>";
					break;
					default:
					$data = $this->Model->fetch("select BrandID, TenNcc from nhacc;");
					$data1 = $this->Model->fetch("select MaLSP, TenLSP from loaisp;");
					break;
			}

			include "views/hair/addhair.php";
		}
	}
	new AddHair();

?>