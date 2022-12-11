<?php
	
	class chart extends Controller{
		public function __construct(){
			parent::__construct();
			include "views/chart/chart.php";
		}
	}
	new chart();

?>