
<!DOCTYPE HTML>
<html>
<head>
    <title>Registration</title>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="/js/jquery.min.js"></script>
    <link href="/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/js/megamenu.js"></script>
   
    <script src="/js/menu_jquery.js"></script>
    <script src="/jquery-3.2.1.min.js"></script>
    <script>
            $(function(){
                $("#includedMenu").load("menu.php");
                $("#includedLog").load("/log.html");
            });
    </script>
    <script>
			jQuery(document).ready(function($){
					$(".megamenu").megamenu();
					$('.scroll-pane').jScrollPane();
				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});



		</script>

<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				
			});
		</script>


</head>
<body>
<!-- header -->
    <div class="header">
        <div class="top_bg">
            <div id="includedLog"></div>
        </div>
    </div>
    <div class="head-bann">
        <div id="includedMenu"></div>
    </div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
		
<!-- header -->
<!-- content -->
<div class="container">
<div class="main" >
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create a corvallis-used account </span></h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="registrationDB.php" method="post">
				<div>
					<label>
						<input name = "username" placeholder="username:" type="text" tabindex="0" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input name = "email" placeholder="email address:" type="email" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input name = "firstname" placeholder="first name:" type="text" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input name = "lastname" placeholder="last name:" type="text" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input name = "password" id = "password1" minLength="6" maxLength="15" placeholder="New password:" type="password" tabindex="4" onchange="checkPasswords()" required>
					</label>
				</div>						
				<div>
					<label>
						<input name = "re_password" id = "password2" minLength="6" maxLength ="15" placeholder="Confirm password:" type="password" tabindex="4" onchange="checkPasswords()" required>
					</label>
				</div>	
				<div>
					<input type="submit" value="create an account" id="register-submit">
				</div>
				<!--<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to Oregon-used.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div>
                    -->
			</form>
		<script> 
		function checkPasswords() {
        var pass1 = document.getElementById("password1");
        var pass2 = document.getElementById("password2");
 
        if (pass1.value != pass2.value)
            pass1.setCustomValidity("The two passwords should be same");
        else
            pass1.setCustomValidity("");
    }
         $('#login').click(function(){
                var username=$('#username').val();
                var password=$('#password').val()
                //console.log('name: '+username+'  password: '+password);
                //$('#loginButton>span').text(username);

                $.post('Login1.php',{
                       username:username,
                       Password:password
                },
                 function(data,status){
                        // alert("Data: " + data + "Status: " + status);
                        if (data == "\nFound Users.Log in success.\n")
                        {
                            $('#loginButton>span').text(username);
                            $('#logout>span').text("Logout");
                            alert("Data: " + data + "\nStatus: " + status);
                        }
                        else
                        {
                             alert("Data: " + data + "\nStatus: " + status);
                        }    
                    // if(data=="Found Users.Log in success."){
                    //     $('#loginButton>span').text(username);
                    // }
                    // else if(data="Found Users.Password incorrect."){
                    // }
                    // else{
                    // }
                })

            })
		</script>	
			<!-- /Form -->
		</div>
	</div>

	<!-- end registration -->
</div>
</div>
</div>
</body>
</html>