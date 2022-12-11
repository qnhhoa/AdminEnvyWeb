<?php

	class ListSkin extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'delete':
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->Model->execute("delete from sanpham where SpID='$id'");
					break;
			}

			// dem tong so ban ghi
			$number = $this->Model->count("select SpID, TenSP, sanpham.Photo, MoTa, loaisp.TenLSP, GiaSP, SL, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=1 order by SpID desc");
			// so ban ghi hien thi tren 1 trang
			$num_page = 10;
			// so trang can hien thi
			$page_show = ceil($number/$num_page);
			// lay trang hien tai tren thanh url
			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

			$form = ($page-1)*$num_page;


			$data = $this->Model->fetch("select SpID, TenSP, sanpham.Photo, MoTa, loaisp.TenLSP, GiaSP, SL, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=1 order by SpID desc limit $form,$num_page");
			include "views/skin/list.php";
		}
	}
	new ListSkin();

?>