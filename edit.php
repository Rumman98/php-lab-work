<?php
session_start();
if (insert($_SESSION['id'])) {
header("location:login.php");
}
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	$query = "select * from course_info where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
        $course_code = $res['course_code'];
        $course_title = $res['course_title'];
        $credit = $res['credit'];
        $total_section = $res['total_section'];
        $max_capacity = $res['max_capacity'];
	
	}
?>

<form action="edit_action.php" method="POST">
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
    <input type="text" name="course_code" value="<?php echo $course_code;?>"/>
    <input type="text" name="course_title" value="<?php echo $course_title;?>"/>
	<input type="text" name="credit" value="<?php echo $credit;?>"/>
	<input type="text" name="total_section" value="<?php echo $total_section;?>"/>
	<input type="text" name="max_capacity" value="<?php echo $max_capacity;?>"/>
	<input type="submit" name="update" value="Update"/>
</form>