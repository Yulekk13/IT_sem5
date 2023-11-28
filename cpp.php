<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>MeeTy</title>
    <meta
      name="description"
      content="Chcesz się przygotować do egzaminu,
    kartkówki czy sprawdzianu? Zrób to z nami, na naszej stronie znajdziesz
    wszystko czego Ci potrzeba do nauki. Nasze innowacyjne podejście do nauki w
    grupie sprawi, że nie tylko poradzisz sobie świetnie na testach, ale i
    poznasz ekstra ludzi"
    />
    <meta name="author" content="Szymon Stolarek, Piotr Malec" />
    <meta name="keywords" content="nauka, spotkania, studia" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <?php include 'links.html'; ?>
  </head>

  <body>
    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- End of navbar -->

    <div class="container-fluid">
      <!-- Left side Start -->
      <aside class="left-side"></aside>
      <!-- Left side End -->

      <!-- Main content Start -->
      <article class="content">
        <br />
        <h4>
            <center>
                <b>Welcome to the C++ Basics Hub! 🚀💻</b>
            </center>
        </h4>
        <hr width="100%" size="1" />
        <h4><b>About This Guide 🌟</b></h4>
        Welcome to our comprehensive guide on the fundamentals of C++. Whether you're a beginner
        venturing into the world of programming or looking to refresh your C++ knowledge, you're
        in the right place.
        <hr width="100%" size="1" />
        <h4><b>What is C++? 🌟</b></h4>
        C++ is a versatile and powerful programming language known for its performance and flexibility.
        It is widely used in various applications, including system/software development,
        game development, and embedded systems.
        <hr width="100%" size="1" />
        <h4><b>What Will You Learn? 🌟</b></h4>
        In this guide, we'll cover the essential building blocks of C++, providing you with a solid
        foundation to write efficient and structured code. From variables and data types to control
        structures and functions, you'll gain a clear understanding of C++ basics.
      </article>
      <!-- Main content End -->

      <!-- Right side Start -->
      <aside class="right-side">
        <div class="date">
          DATE: <br />
          <span id="day"></span>
          <span>.</span>
          <span id="month"></span>
          <span>.</span>
          <span id="year"></span>
        </div>
        <div class="clock">
          TIME: <br />
          <span id="hours">00</span>
          <span>:</span>
          <span id="minutes">00</span>
          <span>:</span>
          <span id="seconds">00</span>
        </div>
      </aside>
    </div>
    <!-- Right side End -->

    <!-- Footer Start -->
    <footer class="footer bg-dark">
      <br />
      <a
        class="footer-icons"
        href="https://discord.gg/EXfgpQDSum"
        target="_blank"
      >
        <i class="fa-brands fa-discord"></i>
      </a>
      <br />
      <i class="fa-regular fa-copyright"></i> 2023 The MeeTy Team. All rights
      reserved.
      <br />
      <br />
      <br />
    </footer>
    <!-- Footer End -->
  </body>
</html>
