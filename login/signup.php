<?php
  session_start();

  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
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
                      <img style="display: block; margin-left: auto; margin-right: auto;" src="images/signup_p.png">
                      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
                        <div class="grid_12" >
                          <h2>Sign up</h2>
                        </div>
                        <div class="grid_12" >
                          <input name="name" id="name" type="text" class="form-control" placeholder="Name" autofocus>
                        </div>
                        <div class="grid_12" >
                          <input name="surname" id="surname" type="text" class="form-control" placeholder="Surname" autofocus>
                        </div>
                        <div class="grid_12" >
                          <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
                        </div>
                        <div class="grid_12" >
                        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="grid_12" >
                          <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="grid_12" >
                          <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">
                        </div>
                        <div class="grid_12" >
                          <button name="Submit" id="submit" type="submit">Sign up</button>
                        </div>

                        <div class="grid_12">
                          <h3><a href="../login/main_login.php">Sign in</a></h3>
                        </div>
                        </form>
                        <div class="grid_12" id="message"></div>
                    </div>
                </div>
              </section>

        </div>
      </section>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>

    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
    name: {
  required: true
},
surname: {
  required: true
},
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
