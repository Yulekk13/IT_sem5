<?php

	session_start();
	
	if ((!isset($_POST['email'])) || (!isset($_POST['password'])))
	{
		header('Location: login.php');
		exit();
	}

	require_once "connect.php";

	$connection = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno;
	}
	else
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

	
        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
	
		if ($result = @$connection->query(
        sprintf("SELECT * FROM users WHERE email='%s' AND pass='%s'",
		mysqli_real_escape_string($connection,$email),
		mysqli_real_escape_string($connection,$password))))
		{
			$num_users = $result->num_rows;
			if($num_users>0)
			{
				$_SESSION['email'] = true;
				unset($_SESSION['error']);
				$result->free_result();
				// header('Location: login.php');
				
			} 
            else 
            {
				$_SESSION['error'] = '<span style="color:red">Incorrect email address or password!</span>';
				header('Location: login.php');
			}
			
		}
		
		$connection->close();
	}
	
?>