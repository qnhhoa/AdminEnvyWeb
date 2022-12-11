<?php

	class EditBlog extends Controller{
		public function __construct(){
			parent::__construct();

			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch ($act) {
				case 'edit':
					$title = $_POST["title"];
					$photo = $_POST["photo"];
					$author = $_POST["author"];
					$content = $_POST["content"];
					$link_post = $_POST["link_post"];				
					
					$this->Model->execute("update blog set title='$title',author='$author',photo='$photo',content='$content',link_post='$link_post' WHERE ID=$id");

					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=blog/list&id=$id'>";
					break;
				
				default:
					$value = $this->Model->fetchOne("select * from blog where ID=$id");
					break;
			}

			include "views/blog/update.php";
		}	
	}
	new EditBlog();

?>