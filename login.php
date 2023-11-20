<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Log into MeeTy</title>
    <meta name="description" content="Log into your best learning platform - MeeTy" />
    <meta name="author" content="Szymon Stolarek, Piotr Malec" />
    <meta name="keywords" content="nauka, spotkania, studia" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <?php include 'links.html'; ?>
    <style>
      .login {
        margin: auto;
        width: 30%;
        padding: 10px;
        height: auto;
      }

      .loginbutton {
        width: auto;
        margin: 0;
      }
      </style>

  </head>

  <body>
    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- End of navbar -->
    <br />
    <br />
    <br />
    <br />
    <br />

    <!--  Login module  -->
    <form class="login" action="login_process.php" method="post">
      <?php
        if(isset($_SESSION['error'])) 
        {
          echo $_SESSION['error'];
        }
      ?>
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" name="email" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" name="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Password</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember me </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="#!">Forgot password?</a>
        </div>
      </div>

      <!-- Submit button -->
      <div class="loginbutton">
        <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>
      </div>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Not a member? <a href="registration.php">Register</a></p>
        <!--------------------------------------- CHANGE LATER --------------------------------------->
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
