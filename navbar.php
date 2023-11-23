<?php
  session_start();
?>
<div class="container-fluid bg-dark">
  <div class="container">
    <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
      <a href="index.php" class="navbar-brand">
        <h1 class="text-primary mb-0 display-5">Mee<span class="text-white">Ty</span></h1>
      </a>
      <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars text-white"></span>
      </button>
      <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="meetings.php" class="nav-item nav-link">MeeTyings</a>
          <a href="blog.html" class="nav-item nav-link">Advices</a>
          <div class="nav-item dropdown">
            <a href="materials.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Learning Materials</a>
            <div class="dropdown-menu m-0 bg-primary">
              <a href="#" class="dropdown-item" disabled>Learning Methods</a>
              <a href="#" class="dropdown-item" disabled>C++</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="abMeeTy.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About us</a>
            <div class="dropdown-menu m-0 bg-primary">
              <a href="abMeeTy.php" class="dropdown-item">About MeeTy</a>
              <a href="abcoauthors.php" class="dropdown-item">About Cocreators</a>
            </div>
          </div>
        </div>
      </div>
      <div class="menu">
        <?php
          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
              echo '<button type="button" class="btn btn-primary btn-sm bg-primary w-40">
                        <a href="logout.php" class="link">Log out</a>
                    </button>';
          } 
          else {
              echo '<button type="button" class="btn btn-primary btn-sm bg-primary w-40">
                        <a href="login.php" class="link">Log in</a>
                    </button>

                    <button type="button" class="btn btn-primary btn-sm bg-primary w-40">
                        <a href="registration.php" class="link">Sign Up</a>
                    </button>';
          }
        ?>
      </div>
    </nav>
  </div>
</div>

<!-- Navbar Style -->
<style>
  .navbar .navbar-nav {
    padding: 15px 0;
  }

  .navbar .navbar-nav .nav-link {
    padding: 15px;
    color: var(--bs-white);
    font-weight: 500;
    font-size: 16px;
    outline: none;
    transition: 0.5s;
  }

  .navbar .navbar-nav .nav-link:hover,
  .navbar .navbar-nav .nav-link.active {
    color: var(--bs-primary);
    transition: 0.5s;
  }

  .navbar .dropdown-toggle::after {
    border: none;
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    font-weight: 800;
    vertical-align: middle;
    margin-left: 8px;
  }

  @media (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
      display: block;
      visibility: hidden;
      top: 100%;
      transform: rotateX(-75deg);
      transform-origin: 0% 0%;
      transition: 0.5s;
      opacity: 0;
    }
  }

  .dropdown .dropdown-menu a:hover,
  .dropdown .dropdown-menu a.active {
    background: var(--bs-dark);
    color: var(--bs-primary);
  }

  .navbar .nav-item:hover .dropdown-menu {
    transform: rotateX(0deg);
    visibility: visible;
    transition: 0.5s;
    opacity: 1;
  }

  .navbar-toggler {
    background: var(--bs-secondary);
    color: var(--bs-light) !important;
    padding: 5px 12px;
    border: 2px solid var(--bs-primary) !important;
  }
</style>
<!-- End  -->
