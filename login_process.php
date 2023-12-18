<?php
	session_start();

	if ((!isset($_POST['email'])) || (!isset($_POST['password'])))
	{
		header('Location: login.php');
		exit();
	}

	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
		
	try 
	{
		$connection = new mysqli($host, $db_user, $db_password, $db_name);
		
		if ($connection->connect_errno!=0)
		{
			throw new Exception(mysqli_connect_errno());
		}
		else
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			$email = htmlentities($email, ENT_QUOTES, "UTF-8");
		
			if ($result = $connection->query(
			sprintf("SELECT * FROM users WHERE email='%s'",
			mysqli_real_escape_string($connection,$email))))
			{
				$num_user = $result->num_rows;
				if($num_user>0)
				{
					$row = $result->fetch_assoc();
					
					if (password_verify($password, $row['pass']))
					{
						$_SESSION['loggedin'] = true;
						unset($_SESSION['error']);
						$result->free_result();
						header('Location: meetings.php');
					}
					else 
					{
						$_SESSION['error'] = '<span style="color:red">Incorrect email address or password!</span>';
						header('Location: login.php');
					}
					
				} else {
					$_SESSION['error'] = '<span style="color:red">Incorrect email address or password!</span>';
					header('Location: login.php');
					
				}
				
			}
			else
			{
				throw new Exception($connection->error);
			}
			
			$connection->close();
		}
	}
	catch(Exception $e)
	{
		echo '<span style="color:red;">Server error! We apologize for the inconvenience and ask you to register at another time!</span>';
		echo '<br />Dev info: '.$e;
	}
?>