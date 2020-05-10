<?php
session_start();
if (insert($_SESSION['id'])) {
header("location:login.php");
}
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"course_info")){
		header("location:show.php");
	}


?>