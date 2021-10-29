<?php 
session_start();

	include("connextion.php");
	include("utils.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singup</title>
</head>
<body>
<div id="box">
		
		<form method="post">
			<div >Signup</div>

			<input id="text" type="text" name="username"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup">
            <input id="bt2" type="reset" value="Clear"><br><br>

			<a href="login.php">signup </a><br><br>
		</form>
	</div>
</body>
</html>