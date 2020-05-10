<form action = "registrar.php" method = "POST">

<p>Enter your name</p>
<input type = "text" name = "name" />
<p>Enter EMAIL</p>
<input type = "email" name = "email" />

<p>Enter Password</p>
<input type = "password" name = "password" />
<input type = "submit" value = "submit" name = "submit" />
</form>

<?php 

   include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
   	   $name=$_POST['name'];
       $email = $_POST['email'];
       $password = md5($_POST['password']);


       $res = $crud->execute("insert into user_table(name,email,password) values('$name','$email', '$password')");

       if($res){
           echo("Successfully registrared");
           echo("<br/>");
       }
       else{
           echo("something is wrong");
           echo("<br/>");
       }

   }

?>