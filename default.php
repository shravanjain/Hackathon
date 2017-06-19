<?php
  session_start();
?>
<!DOCTYPE html>

<html lang="en">
  <?php
    require("Head.html");
  ?>
  

  <body style="padding: 0px; margin: 0px;background: #ECEFF1;width:100%">
    <?php
      include("background_pic.html");
      include("navBar.php");
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
      {
        if($_SESSION['UserType']=="Student")
          include("Student.php");
        else if($_SESSION['UserType']=="HOD")
          include("HOD.php");
        else
          include("Clerk.php");
      }
      else
      {
        header("Location: login.php");
      }
    ?>
  </body>
</html>