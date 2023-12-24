<?php
  include 'navbar.php';
  if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
  }
  require_once 'config/db.php';
  require_once 'config/functions.php';
  require_once 'config/delate.php';

  delate_old();
  $result = display_data();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>MeeTy MeeTings</title>
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

      .table td.no-wrap {
        white-space: nowrap;
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

            
      <div class="content px-5">

        <!-- Form Start -->
        <div class="form-meeting">

          <form class="well form-horizontal" action="createmeeting.php" method="post"  id="meeting_form">
            <fieldset>

              <!-- Form Name -->
              <legend>Create you MeeTying!</legend>

              <!-- Name -->
              <div class="form-group">
                  <label class="col-md-4 control-label">Name your MeeTying:</label>  
                <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa-regular fa-comments"></i></span>
                    <input  name="Name" placeholder="Enter intresting name" class="form-control"  type="text">
                  </div>
                </div>
              </div>

              <!-- Subject Subject -->
              <div class="form-group"> 
              <label class="col-md-4 control-label">Subject:</label>
              <div class="col-md-4 selectContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa-solid fa-graduation-cap"></i></span>
              <select name="Subject" class="form-control selectpicker" >
              <option value="" >Choose subject from the list</option>
              <option value="Dynamics">Dynamics</option>
              <option value="Automatics">Automatics</option>
              <option value="Mathematics">Mathematics</option>
              <option value="Physics">Physics</option>
              <option value="Algebra">Algebra</option>
              <option value="Programming">Programming</option>
              <option value="Robotics">Robotics</option>
              <option value="Operating systems">Operating systems</option>
              </select>
              </div>
              </div>
              </div>

              <!-- Discord Room -->
              <div class="form-group"> 
              <label class="col-md-4 control-label">Choose room on discord:</label>
              <div class="col-md-4 selectContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa-brands fa-discord"></i></span>
              <select name="Room" class="form-control selectpicker" >
              <option value="" >Choose room from the list</option>
              <option value="https://discord.gg/tsJfv43h7r">1</option>
              <option value="https://discord.gg/nznnQWZmy2">2</option>
              <option value="https://discord.gg/3RzpjNxqDV">3</option>
              <option value="https://discord.gg/UjZnkyfYXY">4</option>
              <option value="https://discord.gg/He5jsPmYa7">5</option>
              <option value="https://discord.gg/y3eGsNQ55V">6</option>
              <option value="https://discord.gg/bCeXyntAYm">7</option>
              <option value="https://discord.gg/ZUxZXCGyMv">8</option>
              <option value="https://discord.gg/dtHBnTfhQh">9</option>
              <option value="https://discord.gg/7gh6r2uZHP">10</option>
              </select>
              </div>
              </div>
              </div>

              <!-- Date -->
              <div class="form-group">
              <label class="col-md-4 control-label">Date:</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa-solid fa-calendar-days"></i></span>
              <input type="Date" name="date" placeholder="DD.MM.YYYY" class="form-control" type="text">
              </div>
              </div>
              </div>

              <!-- Time -->
              <div class="form-group">
              <label class="col-md-4 control-label">Time:</label>  
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa-regular fa-clock"></i></span>
              <input type= "Time" name="time" placeholder="00:00" class="form-control" type="text">
              </div>
              </div>
              </div>

              <!-- Description -->
              <div class="form-group">
              <label class="col-md-4 control-label">Extra information</label>
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa-regular fa-comment"></i></i></span>
              <textarea class="form-control" name="Description" placeholder="Choose your room on discord (1-10) and add description"></textarea>
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
          <hr width="100%" size="10" />
        </div>
        <!-- Form End -->

        <!-- Displeying Meetings> -->
        <div class="display-meeting">
          <div class="title text-center mt-2 md-2 bg-primary border border-dark">
            <h3>Future MeeTyings</h3>
          </div>
          
          <div class="table-responsive">
            <table class="table table-border table-secondary text-center align-middle">
              <tr class="bg-dark text-white border border-dark">
                <td> Name </td>
                <td> Subject </td>
                <td> Discord room </td>
                <td> Date </td>
                <td> Time </td>
                <td> Extra information </td>
              </tr>
              <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                  <td><?php echo $row['Name'] ?></td>
                  <td><?php echo $row['Subject'] ?></td>
                  <td><a href=<?php echo $row['Room'] ?>><i class="fa-solid fa-volume-high"></i></a></td>
                  <td class="no-wrap"><?php echo $row['Date'] ?></td>
                  <td><?php echo $row['Time'] ?></td>
                  <td><?php echo $row['Description'] ?></td>
                </tr>
              <?php } ?>

            </table>
          </div>

        </div>
        

      </div>

      <!-- Right side Start -->
      <?php include 'right.php'; ?>
      <!-- Right side End -->
      <div class="clear-both"></div>

      <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->
    </div>
  </body>
</html>