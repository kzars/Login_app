$(document).ready(function(){

  $("#submit").click(function(){

    var name = $("#name").val();
    var surname = $("#surname").val();
    var username = $("#newuser").val();
    var password = $("#password1").val();
    var password2 = $("#password2").val();
    var email = $("#email").val();

    if((name == "") || (surname == "") ||(username == "") || (password == "") || (email == "")) {
      $("#message").html("<div> Please enter a username and a password</div>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "createuser.php",
        data: "&name="+name+"&surname="+surname+"&newuser="+username+"&password1="+password+"&password2="+password2+"&email="+email,
        success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == "true"){

			$("#message").html(html);

					$('#submit').hide();
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>");
        }
      });
    }
    return false;
  });
});
