<?php

	class Search extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'search':
				$search = $_POST["search"];
				$number = $this->Model->count("select SpID, TenSP, sanpham.Photo, MoTa, loaisp.TenLSP, GiaSP, SL, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=2 and nhacc.TenNcc like '%$search%' union select SpID, TenSP, sanpham.Photo, MoTa, loaisp.TenLSP, GiaSP, SL, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=2 and TenSP LIKE '%$search%'" );
				$num_page = 10;
				$page_show = ceil($number/$num_page);
				$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

				$form = ($page-1)*$num_page;
			
				$data=$this->Model->fetch("select SpID, TenSP, sanpham.Photo, MoTa, loaisp.TenLSP, GiaSP, SL, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=2 and nhacc.TenNcc like '%$search%' union select SpID, TenSP, sanpham.Photo, MoTa, loaisp.TenLSP, GiaSP, SL, nhacc.TenNcc from nhacc, sanpham,loaisp where sanpham.MaLSP=loaisp.MaLSP and sanpham.BrandID=nhacc.BrandID and sanpham.MaLSP=2 and TenSP Like '%$search%' order by SpID desc limit $form,$num_page");
			}

			include "views/body/search.php";
		}	
	}
	new Search();

?>