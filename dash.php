<?php
session_start();
?>

<?php
        $data_username = "SELECT emailUsers FROM vmis_users_db WHERE emailUsers=?";
        if (isset($_SESSION["usersId"])) {
            echo ' 
            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <link rel="stylesheet" href="dash.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      media="screen"
      href="https://fontlibrary.org/face/glacial-indifference"
      type="text/css"
    />
    <script
      src="https://kit.fontawesome.com/2b9385dd69.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="mainDashboard">
      <!-- <div class="headerMenu">
        <h3>VisitLog Manager</h3>
      </div> -->
      <div class="Menu">
        <nav id="sideMenu">
          <div>
            <a href="dash.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
            <form action="includes/signout.inc.php" method="POST" class="signout">
            <button type="submit" name="signout_submit" class="signout_button">Sign Out</button>
        </form>
          </div>

        </nav>
        <header>
          <div class="header-area">
            <hi class="header-heading"
              >VISITORS MANAGEMENT INFORMATION SYSTEM</hi
            >
          </div>
          <div></div>
        </header>
        <div id="contentArea">
          <div class="heading">
            <h1>Dashboard</h1>
            <p>Welcome to TechCreek VMIS</p>
          </div>
          <hr />
          <div class="dashBoxes">
            <div class="dashContent box1">
              <div class="icons">
                <i class="far fa-address-card fa-6x"></i>
              </div>
              <div>
                <a href="visitor.php" class="links"> <h1>Visitor Entry</h1></a>
                <p>
                  Register visitor details
                </p>
              </div>
            </div>
            <div class="dashContent box2">
              <div class="icons">
                <i class="fas fa-user fa-6x"></i>
              </div>
              <div>
                <a href="#" class="links"> <h1>Visits</h1></a>
                <p>
                  Contains Visitors Log
                </p>
              </div>
            </div>
            <div class="dashContent box3">
              <div class="icons">
                <i class="fas fa-user-lock fa-6x"></i>
              </div>
              <div>
                <a href="#" class="links"><h1>Administration</h1></a>
                <p>
                  Show the Administrations panel
                </p>
                <p>Containing settings and options</p>
              </div>
            </div>
            <div class="dashContent box4">
              <div class="icons">
                <i class="fas fa-thumbs-up fa-6x"></i>
              </div>
              <div>
                <a href="#" class="links"><h1>Clock-in</h1></a>
                <p>
                  Containing clock-in interface
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footerdash"></div>
  </body>
</html>
            ';
        } else {
          header("Location: ../signIn.php");
          exit();
        };
        ?>
   

