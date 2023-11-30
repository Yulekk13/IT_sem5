<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>About developers</title>
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

    <link href="abcoauthors.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- End of navbar -->

    <div class="container-fluid d-flex flex-row min-vh-100">
      <!-- Left side Start -->
      <?php include 'left.php'; ?>
      <!-- Left side End -->

      <article class="content px-5">
        <div class="portfolio">
          <div class="part">
            <h3>Szymon Stolarek</h3>
            <div class="content">
              <div class="image">
                <img src="pictures/clown1.jpg" class="responsive-picture" />
              </div>
              <div class="description1">
                <p class="">Tutaj bedzie opis swietnej osoby jaka jest...</p>
              </div>
            </div>
          </div>
          <br />
          <div class="part">
            <h3>Piotr Malec</h3>
            <div class="description2">
              <p class="">Tutaj bedzie opis swietnej osoby jaka jest...</p>
            </div>
            <div class="image">
              <img src="pictures/clown2.jpg" class="responsive-picture" />
            </div>
          </div>
        </div>
      </article>

      <!-- Right side Start -->
        <?php include 'right.php'; ?>
      <!-- Right side End -->
    </div>
      <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->
    </div>
  </body>
</html>
