<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet" media="screen">
  </head>

  <body>

    <div id="main" class="wrapper">
      <section id="sec" class="clearfix">
        <div class="wrapper">

              <section id="content" class="wide-content">
                <div class="row">
                    <div class="grid_12">
                      <img style="display: block; margin-left: auto; margin-right: auto;" src="images/login_p.png">
                      <form class="form-signin" name="form1" method="post" action="checklogin.php">
                        <div class="grid_12" >
                          <h2>Sign in</h2>
                        </div>
                        <div class="grid_12">
                          <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
                        </div>
                        <div class="grid_12">
                          <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="grid_12">
                          <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </div>
                        <div class="grid_12">
                        <h3><a href="../login/signup.php">Signup</a></h3>
                        </div>
                      </form>
                      <div class="grid_12" id="message"></div>
                    </div>

                </div>
              </section>

        </div>
      </section>
    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/login.js"></script>

  </body>
</html>
