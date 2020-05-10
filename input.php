<form action = "input.php" method = "POST">

<p>Enter course_code</p>
<input type = "text" name = "course_code" />

<p>Enter course_title</p>
<input type = "text" name = "course_title" />

<p>Enter credit</p>
<input type = "text" name = "credit" />

<p>Enter total number of section</p>
<input type = "text" name = "total_section" />

<p>Enter maximum capacity of section</p>
<input type = "text" name = "max_capacity" />

<input type = "submit" value = "submit" name = "submit" />
<input type = "reset" value = "reset" name = "reset" /><br/>

<a href="show.php">Show Data on a Table</a><br/>

</form>

<?php 
session_start();
if (!isset($_SESSION['id'])) {
header("location:login.php");
}
   include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $course_code = $_POST['course_code'];
       $course_title = $_POST['course_title'];
       $credit = $_POST['credit'];
       $total_section = $_POST['total_section'];
       $max_capacity = $_POST['max_capacity'];

       $res = $crud->execute("insert into course_info(course_code,course_title,credit,total_section,max_capacity) values('$course_code', '$course_title' , '$credit' , '$total_section' , '$max_capacity')");

       if($res){
           echo("Data successfuly Added");
           echo("<br/>");
       }
       else{
           echo("Not added");
           echo("<br/>");
       }

   }

?>