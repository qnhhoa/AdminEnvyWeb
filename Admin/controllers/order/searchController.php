<?php

	class Search extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'search':
				$search = $_POST["search"];
				$number = $this->Model->count("select *,cthd.SL from hoadon, cthd, donhang, sanpham where sanpham.SpID = cthd.SpID and hoadon.MaHD = cthd.MaHD and hoadon.MaHD = donhang.MaHD and Trangthai like '%$search%'" );
				$num_page = 10;
				$page_show = ceil($number/$num_page);
				$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]:1;

				$form = ($page-1)*$num_page;
			
				$data=$this->Model->fetch("select *,cthd.SL from hoadon, cthd, donhang, sanpham where sanpham.SpID = cthd.SpID and hoadon.MaHD = cthd.MaHD and hoadon.MaHD = donhang.MaHD and Username like '%$search%' union select *,cthd.SL from hoadon, cthd, donhang, sanpham where sanpham.SpID = cthd.SpID and hoadon.MaHD = cthd.MaHD and hoadon.MaHD = donhang.MaHD and Trangthai like '%$search%' limit $form,$num_page");
			}

			include "views/order/search.php";
		}	
	}
	new Search();

?>