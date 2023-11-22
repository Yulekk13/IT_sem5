<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>About MeeTy</title>
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

    <style>
      .article-class {
        padding: 4%;
        background-color: #444949;
      }
      .article-paragraph {
        text-indent: 2em;
      }
      </style>
  </head>

  <body>
    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- End of navbar -->

    <div class="container-fluid">
      <aside class="left-side">lewy</aside>

      <article class="content">
        <div class="container">

          <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>
      
      <!-- Form Name -->
      <legend>Create you MeeTying!</legend>
      
      <!-- Name -->
      <div class="form-group">
        <label class="col-md-4 control-label">Name your MeeTying:</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="name" placeholder="Enter intresting name" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Subject Name -->
      <div class="form-group"> 
        <label class="col-md-4 control-label">Subject:</label>
          <div class="col-md-4 selectContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="state" class="form-control selectpicker" >
            <option value="disabled" >Choose subject from the list</option>
            <option>Dynamics</option>
            <option>Automatics</option>
            <option >Mathematics</option>
            <option >Physics</option>
            <option >Algebra</option>
            <option >Programming</option>
            <option >Robotics</option>
            <option >Operating systems</option>
          </select>
        </div>
      </div>
      </div>
      
      <!-- Date -->
      <div class="form-group">
        <label class="col-md-4 control-label">Date:</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input type="date" name="date" placeholder="DD.MM.YYYY" class="form-control" type="text">
          </div>
        </div>
      </div>
      
      <!-- Time -->
      <div class="form-group">
        <label class="col-md-4 control-label">Time:</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
        <input type= "time" name="time" placeholder="00:00" class="form-control" type="text">
          </div>
        </div>
      </div>
      
      <!-- Description -->
      <div class="form-group">
        <label class="col-md-4 control-label">Describe your class</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="comment" placeholder="MeeTying Description"></textarea>
        </div>
        </div>
      </div>
      
      <!-- Agreement -->
       <div class="form-group">
                              <label class="col-md-4 control-label">Agree with company policy:</label>
                              <div class="col-md-4">
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="hosting" value="yes" /> Yes
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="hosting" value="no" /> No
                                      </label>
                                  </div>
                              </div>
                          </div>
      
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-warning" >Create MeeTying <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>
      
      </fieldset>
      </form>
      </div>
          </div><!-- /.container -->
      </article>

      <aside class="right-side">prawy</aside>
      <div class="clear-both"></div>

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
      </footer>
    </div>
  </body>
</html>