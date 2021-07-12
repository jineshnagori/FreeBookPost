<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="e-books, free books, books, programming, hacking, html, css, javascript, reactjs, Engineering, technical, tech, python, R, C, C++">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Electronic library. Download books free. Finding books</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Electronic library. Download books free. Finding books">
        <meta name="description" content="Electronic library. Download books free. Finding books | FreeBookPost. Download books for free. Find books">
        <meta name="robots" content="index,all">
        <meta name="author" content="FreeBookPost">
        <meta name="distribution" content="global">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="pragma" content="no-cache">
        <meta name="google-site-verification" content="SBV9j8cqG01u_bs2Vf6ijF6JYc-uN-NzdFFXzcuaLdY" />

        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <link rel="stylesheet" type="text/css" href="css/login-style.css" />
        <link rel="stylesheet" type="text/css" href="css/login-animate.css" />
        <link REL="SHORTCUT ICON" HREF="img/favicon.png">
        <link rel="canonical" href="http://freebookpost.ml">
    </head>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f243e841a544e2a7275b8d0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <body>

        <div class="container">
            <!-- Codrops top bar -->
            <header>
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="blogin.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname"> Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Your Username" pattern="^[a-z\d._]{3,}$" title="Must contain at least 3 or more alphabatic or numeric characters,Capital letters not acceptable.">
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="signup.php" method="POST" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="namesignup" class="name"> Name</label>
                                    <input id="namesignup" name="name" required="required" type="text" placeholder="Your Full Name" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname">Username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Your Username" pattern="^[a-z\d._]{3,}$" title="Must contain at least 3 or more alphabatic or numeric characters,Capital letters not acceptable.">
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"> Email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="Your Valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="Must contain @ and at least 2 or more characters like .co, .in, .com, etc."> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd"> Password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>