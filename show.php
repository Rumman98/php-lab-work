<?php 
//*session_start();
//if (insert($_SESSION['id'])) {
//header("location:login.php");
//}

include_once 'crud.php';

$crud = new crud();

$query = "select * from course_info";

$result  = $crud->getData($query);

?>
<button id="add-new-data"></button>

<a href="input.php">ADD New Data</a>
<table border = "1">

<tr>
<td> id </td>
<td> course_code </td>
<td> course_title </td>
<td> credit </td>
<td> total_section </td>
<td> max_capacity </td>

</tr>

<?php 
if($result){

foreach($result as $key=> $res){
    echo "<tr>";
	echo "<td>".$res['id']."</td>";
    echo "<td>".$res['course_code']."</td>";
    echo "<td>".$res['course_title']."</td>";
    echo "<td>".$res['credit']."</td>";
    echo "<td>".$res['total_section']."</td>";
    echo "<td>".$res['max_capacity']."</td>";
    echo "<td> <a href='edit.php?id=$res[id]'>Edit</a> | 
               <a href='delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
			 
}
}
else{
	echo"<tr><td>There is no value</td></tr>";
}


?>
</table>