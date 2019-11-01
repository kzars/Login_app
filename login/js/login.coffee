$(document).ready ->
  $("#submit").click ->
    username = $("#myusername").val()
    password = $("#mypassword").val()
    if (username is "") or (password is "")
      $("#message").html "<div> Please enter a username and a passwordd</div>"
    else
      $.ajax
        type: "POST"
        url: "checklogin.php"
        data: "myusername=" + username + "&mypassword=" + password
        success: (html) ->
          if html is "true"
            window.location = "index.php"
          else
            $("#message").html html

        beforeSend: ->
          $("#message").html "<p class='text-center'><img src='images/ajax-loader.gif'></p>"

    false
