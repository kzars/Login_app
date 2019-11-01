<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login app</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" media="screen">

    <script>
      function showRSS(str) {
        if (str.length==0) {
          document.getElementById("rssOutput").innerHTML="";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("rssOutput").innerHTML=this.responseText;
          }
        }
        xmlhttp.open("GET","getrss.php?q="+str,true);
        xmlhttp.send();
      }
      showRSS("TVNET");
    </script>

  </head>
  <body>

    <div id="main" class="wrapper">
      <section id="sec" class="clearfix">
        <div class="wrapper">

              <section id="content" class="wide-content">
                <div class="row">
                    <div class="grid_12">
                      <div class="grid_12" style="text-align: right;">
                        <div >You have been <strong>successfully logged in</strong>.</div>
                        <h3><a href="login/logout.php">Logout</a></h3>
                      </div>
                      <div class="grid_12" style="text-align: left;">
                        <div id="rssOutput"></div>
                      </div>
                    </div>

                </div>
              </section>

        </div>
      </section>
    </div>

  </body>
</html>
