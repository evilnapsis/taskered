<?php

if(isset($_GET["opt"]) && $_GET["opt"]!=""){
	if($_GET["opt"]=="add"){
		$item = $_POST["item_id"]!=""?$_POST["item_id"]:"NULL";
		$file = "";
		$f = new Upload($_FILES["file"]);
		if($f->uploaded){
			$f->Process("storage/users/1/");
			if($f->processed){
				$file = $f->file_dst_name;
			}
		}



		Data::exec("insert into item (file,kind, item_id, title, description, start_at, finish_at, created_at) value (\"$file\", $_POST[kind],$item,\"$_POST[title]\",\"$_POST[description]\",\"$_POST[start_at]\",\"$_POST[finish_at]\",NOW())");
		if($_POST["ref"]!=""){
		Core::redir("./?view=".$_POST["ref"]);			
		}else{
		Core::redir("./");			
		}
	}
	else if($_GET["opt"]=="update"){
		$item = $_POST["item_id"]!=""?$_POST["item_id"]:"NULL";
		Data::exec("update item set item_id=$item, title=\"$_POST[title]\", description=\"$_POST[description]\", start_at=\"$_POST[start_at]\", finish_at=\"$_POST[finish_at]\" where id=$_POST[id] ");
		if($_POST["ref"]!=""){
		Core::redir("./?view=".$_POST["ref"]);			
		}else{
		Core::redir("./");			
		}
	}
	else if($_GET["opt"]=="setstatus"){
		Data::exec("update item set status=$_POST[status] where id=$_POST[id]");
	}

	else if($_GET["opt"]=="totrash"){
		Data::exec("update item set status=0 where id=$_GET[id]");
		if($_GET["ref"]!=""){
		Core::redir("./?view=".$_GET["ref"]);			
		}else{
		Core::redir("./");			
		}
	}
}


?>