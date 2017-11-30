
<!DOCTYPE HTML>
<html>
<head>
<title>Osu-used</title>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="header">
        <div class="top_bg">
            <div class="container">
                <div class="header_top">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="top_right">
                        <ul>
                            <li><a href="registration.php">Create Account</a></li>|
                            <li><a href="#">Contact</a></li>|
                            <li class="login">
                                <div id="loginContainer">
                                    <a href="index.html" id="logout"><span></span></a>
                                    <a href="#" id="loginButton"><span>Login</span></a>
                                    <div id="loginBox">
                                        <form id='loginForm' action="login-1.php" method="post">
                                            <fieldset id="body">
                                                <fieldset>
                                                    <label for="username">Username</label>
                                                    <input type="text" name="username" id="username">
                                                </fieldset>
                                                <fieldset>
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                                </fieldset>
                                                <input type="submit" id="login" value="login in">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"><i>Remember me</i></label>
                                            </fieldset>
                                            <span><a href="#">Forgot your password?</a></span>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="includedMenu"></div>
    <div class="banner">
    <div class="container">
    <div class="col-md-6"></div>
    <div class="col-md-6 banner-info">
        <h1>OSU-Used</h1>
            <p>This is the website for fiding and selling used stuffs.</p>
            <a class="show-more" href="#">SHOW ME MORE</a>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
    <div class="featured">
    <div class="container">
    <div class="col-md-9">
    <div class="biseller-info">
        <h3 class="new-models">Latest Upload</h3>
            <ul id="flexiselDemo3">
                <li><div class="biseller-column">
                    <p><a href="details.html">
                    <img src="/images/1.gif" class="img-responsive" alt=""></a>
                    </p>
                    <a href="/details.html"><i class="new"></i></a>
                    <div class="biseller-name">
                        <h4>Book</h4>
                        <p>$40.00</p>
                    </div>
                    </div>
                </li>
                <li><div class="biseller-column">
                    <p><a href="/details.html">
                    <img src="/images/2.gif" class="img-responsive" alt=""></a>
                    </p>
                    <a href="details.html"><i class="new"></i></a>                  
                    <div class="biseller-name">                     
                        <h4>PS4 game</h4>                       
                        <p>$10/each</p>                 
                    </div>                                                          
                    </div>              
                </li>                           
                <li><div class="biseller-column">                   
                    <p><a href="/details.html">
                    <img src="/images/3.gif" class="img-responsive" alt=""></a>
                    </p>
                    <a href="/details.html"><i class="new"></i></a>                  
                    <div class="biseller-name">                     
                        <h4>PS4</h4>                        
                        <p>$200.00</p>                  
                    </div>                                          
                    </div>
                </li>   
            </ul>                   
   </div>               
                    
       
        <div class="clearfix"></div>
    </div>
        <div class="col-md-3 span_1_of_right">
        <div class="sellers">                       
            <h3 class="m_2">Most favorite</h3>                              
            <div class="best">
            <div class="icon">
                <img src="/images/sh.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="data">
                <h4><a href="#">Mac book</a></h4>
                <p>$400.00</p>
                <h5>$350.00</h5>
            </div>
                <div class="clearfix"></div>
            </div>                      
         </div>
                                                
        </div>             
        </div>              
                <div class="clearfix"></div>        
        </div>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script>
        $(function () {
            $("#includedMenu").load("menu.php");
            $("#includedLog").load("/login.html");
        });
        $("span.menu").click(function () {
            $(".head-nav ul").slideToggle(300, function () {
                // Animation complete.
            });
        });

    </script>
    <script src="/js/jquery.min.js"></script>
    <script defer src="/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="/js/megamenu.js"></script>
    <script src="/js/menu_jquery.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

    <script>
    jQuery(document).ready(function($){
         $("#flexiselDemo3").flexisel({
                    visibleItems: 3, animationSpeed: 1000, autoPlay: true,
                    autoPlaySpeed: 3000, pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: { changePoint: 480, visibleItems: 1 },
                        landscape: { changePoint: 640, visibleItems: 2 },
                        tablet: { changePoint: 768, visibleItems: 3 }
                    }
                });
        //SyntaxHighlighter.all();
        $('.flexslider').flexslider({ animation: "slide",
                start: function (slider) { $('body').removeClass('loading');
                    }
                });
            $('#login').click(function(){
                var username=$('#username').val();
                var password=$('#password').val()
                console.log('name: '+username+'  password: '+password);
                $('#loginButton>span').text(username);

                $.post('Login1.php',{
                       username:username,
                       Password:password
               },
                 function(data,status){
                         alert("Data: " + data + "Status: " + status);
                        if (data == "\nFound Users.Log in success.\n")
                        {
                            $('#loginButton>span').text(username);
                            alert("Data: " + data + "\nStatus: " + status);
                        }
                        else
                        {
                             alert("Data: " + data + "\nStatus: " + status);
                        }
                     if(data=="Found Users.Log in success."){
                         $('#loginButton>span').text(username);
                     }
                     else if(data="Found Users.Password incorrect."){
                     }
                     else{
                     }
                })

            })
        });
    </script>
    </body>

</html>
