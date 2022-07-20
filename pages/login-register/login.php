<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../index/assets/img/logo/logo-2.svg"
    />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body style="background-color:#0d6efd;">
     <!-- Sing in  Form -->
     <section class="sign-in" >
        
        <div class="container">
        <div class="lg display-flex display-flex-center logo-image">
             <img src="../index/assets/img/logo/logo-2.svg" alt="" class="logo" style="height:150px;width:150px;">
            <h2 >Student Portal For BMIIT</h2>
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="register.php" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Log in</h2>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="Your Name" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div> -->
                        <form action="index/index.php">
                        <div class="form-group form-button">
                            <button type="submit" name="signin" id="signin" class="form-submit" style="border:none;"><a href="../index/index.php" style="text-decoration:none;color:white;">Log in</a></button>
                        </div>
                        </form>
                    </form>
                    <div class="social-login">
                        <span class="social-label">Join us on</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
</script>
</body>
</html>