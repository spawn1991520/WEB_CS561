<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>PasswordChange</title>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="/js/jquery.min.js"></script>
    <link href="/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="/js/menu_jquery.js"></script>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <!-- <script>
            $(function(){
                $("#includedContent").load("menu.php");
                $("#includedLogin").load("index.php");
            });
    </script> -->
 <!--    <script>
			jQuery(document).ready(function($){

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
				$('.scroll-pane').jScrollPane();
			});
		</script>


</head> -->
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
	<div class="pwdchange">
		 <div class="pwdchange_form">
		 <!-- Form -->
			<form id="pwdchange_form" action="pwdchanged.php" method="post">
                  <h2><span>  Please type your user name</span></h2>
                <div>
                    <label>
                        <input name = "username" id = "username"  placeholder="username:" type="text" tabindex="0"  required>
                    </label>
                </div>  
                <h2><span>  Please type your old password:</span></h2>
				<div>
					<label>
						<input name = "password" id = "password" minLength="6" maxLength="15" placeholder="Old password:" type="password" tabindex="0" onchange="checkPasswords()" required>
					</label>
				</div>				
                <h2> <span>Please type your new password:</span></h2>
                    <div>
                        <label>
                            <input name="newpassword" id="password1" minLength="6" maxLength="15" placeholder="New password:" type="password" tabindex="1" onchange="checkPasswords()" required>
                        </label>
                    </div>	
					<label>
						<input name = "re_newpassword" id = "password2" minLength="6" maxLength ="15" placeholder="Confirm password:" type="password" tabindex="2" onchange="checkPasswords()" required>
					</label>
                <div></div>
				<div>
					<input type="submit" value="Submit" id="register-submit">
				</div>
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
    	// $('#login').click(function(){
     //            var username=$('#username').val();
     //            var password=$('#password').val()
     //            //console.log('name: '+username+'  password: '+password);
     //            //$('#loginButton>span').text(username);

     //            $.post('Login1.php',{
     //                   username:username,
     //                   Password:password
     //            },
     //             function(data,status){
     //                    // alert("Data: " + data + "Status: " + status);
     //                    if (data == "\nFound Users.Log in success.\n")
     //                    {
     //                        $('#loginButton>span').text(username);
     //                        $('#logout>span').text("Logout");
     //                        alert("Data: " + data + "\nStatus: " + status);
     //                    }
     //                    else
     //                    {
     //                         alert("Data: " + data + "\nStatus: " + status);
     //                    }    
     //                // if(data=="Found Users.Log in success."){
     //                //     $('#loginButton>span').text(username);
     //                // }
     //                // else if(data="Found Users.Password incorrect."){
     //                // }
     //                // else{
     //                // }
     //            })

     //        })

		</script>	
			<!-- /Form -->
	</div>

	<!-- end registration -->
</div>
</div>
</div>
</body>
</html>