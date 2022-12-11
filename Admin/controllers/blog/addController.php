<?php
	
	class AddBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch ($act) {
				case 'add':
					$title = $_POST["title"];
					$photo = $_POST["photo"];
					$author = $_POST["author"];
					$content = $_POST["content"];
					$link_post = $_POST["link_post"];
					
					$this->Model->execute("insert into blog (title,author,photo,content,link_post) values('$title','$author','$photo', '$content', '$link_post')");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=blog/list'>";
					break;
			}

			include "views/blog/addblog.php";
		}
	}
	new AddBlog();

?>