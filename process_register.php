<?php
session_start();
?>
<?php require("database/conn.php");?>
<?php require("database/db_connect.php");?>
<?php require("database/db.php");?>
<?php

if(isset($_POST['submit'])){
	$ma = $_POST['ma'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // $email = mysqli_real_escape_string($con, ['email']);
    // $comment = mysqli_real_escape_string($con, ['comment']);
	$pass = password_hash($password, PASSWORD_BCRYPT);
	$emailquery = "select * from registration where email='$email'";
	$query = mysqli_query($con,$emailquery);
	$emailcount = mysqli_num_rows($query);
	if($emailcount>0)
	{
		?>
		<script>
		 alert("Email Alredy Registered...");
		 </script>
		<?php	
	}
	else
{

    $insertquery = "insert into registration(mrms, name, email, mobile, password) values('$ma','$name','$email','$mobile','$password')";
    $iquery = mysqli_query($con, $insertquery);
	if($iquery)
	{
		//header("location:index.php");
		?>
		<script>
		 alert("Registered Successfully...");
		 </script>
		<?php	
				
	}
    else
	{
		?>
		<script>
		alert("registration invalid...");
		</script>
		<?php	
	}
}
	?>
	<script>
	setTimeout(function(){
	   window.location.href = 'login.php';
	}, 500);
 	</script>
	 <?php
}

?>