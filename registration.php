<?php
  session_start();
  if (isset($_POST['email']))
	{
		$all_OK=true;
		
		$name = $_POST['name'];
		
		if ((strlen($name)<3) || (strlen($name)>20))
		{
			$all_OK=false;
			$_SESSION['e_name']="Name must be between 3 and 20 characters long!";
		}
		
		if (ctype_alnum($name)==false)
		{
			$all_OK=false;
			$_SESSION['e_name']="Name can only consist of letters and numbers (no Polish characters)!";
		}
		
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$all_OK=false;
			$_SESSION['e_email']="Please enter a valid email address!";
		}
		
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		
		if ((strlen($password1)<8) || (strlen($password1)>20))
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
			$_SESSION['e_terms']="Accept the terms";
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

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet" />
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Bootstrap -->
    <!-- Pierw bootstrap potem styl zeby nie nadpisac stulu -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="registration.css" type="text/css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-dark">
      <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
          <a href="index.html" class="navbar-brand">
            <h1 class="text-primary mb-0 display-5">Mee<span class="text-white">Ty</span></h1>
          </a>
          <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-white"></span>
          </button>
          <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="index.html" class="nav-item nav-link">Home</a>
              <div class="nav-item dropdown">
                <a href="joinmeeting.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Meetings</a>
                <div class="dropdown-menu m-0 bg-primary">
                  <a href="createmeeting.html" class="dropdown-item">Create meeting</a>
                  <a href="joinmeeting.html" class="dropdown-item">Join meeting</a>
                </div>
              </div>
              <a href="blog.html" class="nav-item nav-link">Advices</a>
              <div class="nav-item dropdown">
                <a href="materials.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learning Materials</a>
                <div class="dropdown-menu m-0 bg-primary">
                  <a href="#" class="dropdown-item">Learning Methods</a>
                  <a href="#" class="dropdown-item">C++</a>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="abMeeTy.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About us</a>
                <div class="dropdown-menu m-0 bg-primary">
                  <a href="abMeeTy.html" class="dropdown-item">About MeeTy</a>
                  <a href="abcoauthirs.html" class="dropdown-item">About Cocreators</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- End of navbar -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <!--  Registration module  -->
    <form method = "post" class="registration">
      <!--  Name input  -->
      <div class="form-outline mb-4">
        <input type="text" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Your Name</label>
      </div>
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Password</label>
      </div>

      <!-- Repeat password input -->
      <div class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Repeat password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Accept the terms </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="login.php">Already have account?</a>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
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
  </body>
</html>
