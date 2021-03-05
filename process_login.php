<?php session_start(); ?>
<?php require("database/conn.php");?>
<?php require("database/db_connect.php");?>
<?php require("database/db.php");?>
<?php

if(isset($_POST['submit']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$emailsearch = "select * from registration where email='$email' and password='$password'";
	$query = mysqli_query($con,$emailsearch);
	$emailcount = mysqli_num_rows($query);
	if($emailcount)
	{
		$emailpass = mysqli_fetch_assoc($query);
        $dbpass = $emailpass['password'];

        $_SESSION['name'] = $emailpass['name'];
		header("location:index.php");
	}
	else
	{
		if ($_POST['email'] == "admin@gmail.com" && $_POST['password'] == "admin") 
		{
            $username = $_POST['email'];
            $password = $_POST['password'];
            $_SESSION['login_user'] = $username;
			header("location: blogadmin/index.php");
		
		}
		else
		{
				?>
				<script>
				alert("invalid username and password...");
				location.replace("login.php?invalid=invalid username and password...");
				</script>
				<?php
			
    	 } 
		
	}	
	?>
	<script>
	alert("invalid username and passwdsdord...");
	location.replace("login.php?invalid=invalid username and password...");
	</script>
	<?php
}
else
{
	?>
	<script>
	 	location.replace("login.php");
 	</script>
	 <?php
}
// if(isset($_POST['submit']))
// {
	
//     $email = $_POST['email'];
//     $password = $_POST['password'];

// 	// $pass = password_hash($password, PASSWORD_BCRYPT);
// 	$emailsearch = "select * from registration where email='$email'";
// 	$query = mysqli_query($con,$emailsearch);
// 	$emailcount = mysqli_num_rows($query);
// 	if($emailcount)
// 	{
// 		$emailpass = mysqli_fetch_assoc($query);
//         $dbpass = $emailpass['password'];

//         $_SESSION['name'] = $emailpass['name'];


// 		$pass_decode = password_verify($password, $dbpass);
//         if($pass_decode)
//         {
//             ?>
// 		    <script>
// 		        alert("Login Successfull...");
// 		    </script>
// 			<script>
// 	setTimeout(function(){
// 	   window.location.href = 'login.php';
// 	}, 500);
//  	</script>
// 		    <?php	
//         }
//         else
//         {
//             ?>
// 		    <script>
// 		        alert("invalid password...");
// 		    </script>
// 		    <?php	
//         }
//     }
//     else
//     {

// 		if ($_POST['email'] == "admin@gmail.com" && $_POST['password'] == "admin") 
// 		{
//             $username = $_POST['email'];
//             $password = $_POST['password'];
//             $_SESSION['login_user'] = $username;
//             header("location: blogadmin/index.php");
//         } 
// 		else
// 		{
//             // $_SESSION['message'] = $message;
//             // header("location: registrationPage.php");
// 			?>
// 		    <script>
// 		        alert("invalid username or password...");
// 		    </script>
// 		    <?php	
			
//         }
//         ?>
// 		    <script>
// 		        alert("invalid Email...");
// 		    </script>
// 		    <?php	
//     }
    
// }

// ?>