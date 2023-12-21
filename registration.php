<?php
  include 'navbar.php';
  if (isset($_POST['email'])) {
      $all_OK = true;
  
      $name = $_POST['name'];
  
      if (strlen($name) < 3 || strlen($name) > 20) {
          $all_OK = false;
          $_SESSION['e_name'] = "Name must be between 3 and 20 characters long!";
      }
  
      if (ctype_alnum($name) == false) {
          $all_OK = false;
          $_SESSION['e_name'] = "Name can only consist of letters and numbers (no Polish characters)!";
      }
  
      $email = $_POST['email'];
      $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
  
      if ((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)) {
          $all_OK = false;
          $_SESSION['e_email'] = "Please enter a valid email address!";
      }
  
    
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		
		if ((strlen($password1)<4) || (strlen($password1)>20))
		{
			$all_OK=false;
			$_SESSION['e_password']="The password must be between 8 and 20 characters long!";
		}
		
		if ($password1!=$password2)
		{
			$all_OK=false;
			$_SESSION['e_password']="The passwords provided aren't identical!";
		}	

		$password_hash = password_hash($password1, PASSWORD_DEFAULT);

		if (!isset($_POST['terms']))
		{
			$all_OK=false;
			$_SESSION['e_terms']="You must accept the terms";
		}				

    // remember the data entered in the form
    $_SESSION['fr_name'] = $name;
    $_SESSION['fr_email'] = $email;
    $_SESSION['fr_password1'] = $password1;
    $_SESSION['fr_password2'] = $password2;
    if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;

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
				$result = $connection->query("SELECT id FROM users WHERE email='$email'");
				
				if (!$result) throw new Exception($connection->error);
				
				$num_emails = $result->num_rows;
				if($num_emails>0)
				{
					$all_OK=false;
					$_SESSION['e_email']="Such an email already existed!";
				}		

				$result = $connection->query("SELECT id FROM users WHERE user='$name'");
				
				if (!$result) throw new Exception($connection->error);
				
				$num_names = $result->num_rows;
				if($num_names>0)
				{
					$all_OK=false;
					$_SESSION['e_name']="There is already a user with this nickname! Choose another.";
				}
				
				if ($all_OK==true)
				{
					if ($connection->query("INSERT INTO users VALUES (NULL, '$name', '$email', '$password_hash')"))
					{
						$_SESSION['successreg']=true;
						// header('Location: witamy.php');  ----> przekierowanie powrót do pprzedniej strony
					}
					else
					{
						throw new Exception($connection->error);
					}
					
				}
				
				$connection->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Server error! We apologize for the inconvenience and ask you to register at another time!</span>';
			echo '<br />Dev info: '.$e;
		}
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Sign up MeeTy</title>
    <meta name="description" content="Are you eager for knowledge? Just join our crew!" />
    <meta name="author" content="Szymon Stolarek, Piotr Malec" />
    <meta name="keywords" content="nauka, spotkania, studia" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <?php include 'links.html'; ?>

    <style>
      .error 
      {
        color: red;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .registration {
        margin: auto;
        width: 30%;
        padding: 10px;
        height: auto;
      }
    </style>
  </head>

  <body>
    <!-- Navbar Start -->
    <!-- End of navbar -->
    <div class="container-fluid d-flex flex-row min-vh-100">
      <!-- Left side Start -->
      <?php include 'left.php'; ?>
      <!-- Left side End -->

      <div class="content">
        <h1 class="text-center"> Create Your MeeTy account <br> and join Our Crew!</h1>

        <!--  Registration module  -->
        <form method = "post" class="registration">
          <!--  Name input  -->

          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Your Name</label>
            <input type="text" id="form2Example1" class="form-control" value="<?php
              if (isset($_SESSION['fr_name']))
              {
                echo $_SESSION['fr_name'];
                unset($_SESSION['fr_name']);
              }
            ?>" name="name" />

            <?php
              if (isset($_SESSION['e_name']))
              {
                echo '<div class="error">'.$_SESSION['e_name'].'</div>';
                unset($_SESSION['e_name']);
              }
            ?>
          </div>

          <!-- Email input -->

          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
            <input type="text" id="form2Example1" class="form-control" value="<?php
              if (isset($_SESSION['fr_email']))
              {
                echo $_SESSION['fr_email'];
                unset($_SESSION['fr_email']);
              }
            ?>" name="email" />
            
            <?php
            if (isset($_SESSION['e_email']))
              {
                echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
              }
            ?>
          </div>

          <!-- Password input -->
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Password</label>
            <input type="password" id="form2Example2" class="form-control" value="<?php
              if (isset($_SESSION['fr_password1']))
              {
                echo $_SESSION['fr_password1'];
                unset($_SESSION['fr_password1']);
              }
            ?>" name="password1" />
            <?php
              if (isset($_SESSION['e_password']))
              {
                echo '<div class="error">'.$_SESSION['e_password'].'</div>';
                unset($_SESSION['e_password']);
              }
            ?>
          </div>

          <!-- Repeat password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Repeat password</label>
            <input type="password" id="form2Example2" class="form-control" value="<?php
              if (isset($_SESSION['fr_password2']))
              {
                echo $_SESSION['fr_password2'];
                unset($_SESSION['fr_password2']);
              }
            ?>" name="password2"/>
          </div>

          <!-- 2 column grid layout for inline styling -->

          <?php
          if (isset($_SESSION['e_terms'])) {
            echo '<div class="error text-center">'.$_SESSION['e_terms'].'</div>';
            unset($_SESSION['e_terms']);
          }
          ?>

          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31"  name="terms" checked/>
                <label class="form-check-label" for="form2Example31"> Accept the terms </label>
              </div>
            </div>

            <div class="col">
              <!-- Simple link -->
              <a href="login.php">Already have account?</a>
            </div>
          </div>

          <!-- Submit button -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
          </div>
          
          <!-- Register buttons -->
          <div class="text-center">
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </form>
      </div>
      <!-- Right side Start -->
      <?php include 'right.php'; ?>
      <!-- Right side End -->
      </div>
      <!-- Footer Start -->
      <?php include 'footer.php'; ?>
      <!-- Footer End -->
    
  </body>
</html>
