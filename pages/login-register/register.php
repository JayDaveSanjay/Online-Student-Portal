
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../index/assets/img/logo/logo-2.svg"
    />
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#0d6efd;">

        <!-- Sign up form -->
        <section class="signup">
        
            <div class="container">
            <div class="lg display-flex display-flex-center logo-image">
             <img src="../index/assets/img/logo/logo-2.svg" alt="" class="logo" style="height:150px;width:150px;">
            <h2 >Student Portal For BMIIT</h2>
            </div>
                <div class="signup-content">
                    
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name" style="padding-right:5px;margin-right:5px;"></i></label>
                                <input type="text" name="name" id="name" placeholder="UserName" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
                            </div>
                            <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <button type="submit" name="signup" id="signup" class="form-submit" style="border:none;"><a href="login.php" style="text-decoration:none;color:white;">Sign Up</a></button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>