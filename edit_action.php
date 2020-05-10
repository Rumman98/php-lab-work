<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$course_code = $_POST['course_code'];
		$course_title = $_POST['course_title'];
        $credit = $_POST['credit'];
        $total_section = $_POST['total_section'];
        $max_capacity = $_POST['max_capacity'];
		
		$result = $crud->execute("Update course_info SET course_code='$course_code',course_title='$course_title',credit='$credit',total_section='$total_section',max_capacity='$max_capacity' where id=$id");
		
		if($result){
			header("Location:show.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>
