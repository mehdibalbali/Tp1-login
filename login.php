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

			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div id="box">
		
		<form method="post">
			<div>Login</div>

			<input id="text" type="text" name="username"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login">
            <input id="bt2" type="reset" value="Clear"><br><br>
			<a href="singup.php">create account </a><br><br>
		</form>
	</div>
</body>
</html>