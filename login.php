<?php
session_start();
include_once"crud.php";
?>
<form action="login.php" method="post">
	EMAIL: <input type="email" name="email"/><br/>
	Password:<input type="password" name="password"/><br/>
	<input type="submit" name="login" value="login"/>
	
	</form>

	<?php
	$Crud=new crud();
	if (isset($_POST['login'])) {
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$loggedIn=$Crud->getData("select * from user_table where email='$email' and password='$password'");

		if ($loggedIn) {
			$_SESSION['id']=$loggedIn['id'];
			header('location:input.php');
		}
	}
	?>
