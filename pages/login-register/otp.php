
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP</title>

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
                        <h2 class="form-title">Verify OTP</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <!-- <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name" style="padding-right:5px;margin-right:5px;"></i></label>
                                <input type="text" name="name" id="name" placeholder="UserName" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
                            </div> -->
                            <div class="alert alert-primary mt-3" role="alert">
                    Check your email inbox for OTP!
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="number" name="otp" id="otp" placeholder="OTP" style="border:none;border-bottom:1px solid black;padding-left:25px;" maxlength="6"/>
                                
                            </div>
                            <!-- <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <button type="submit" name="verify" id="verify" class="form-submit" style="border:none;">Verify</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <!-- <a href="login.php" class="signup-image-link">I am already member</a> -->
                    </div>
                </div>
            </div>
        </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
session_start();
if(isset($_POST['verify']))
{
    include '../../php/connection.php';
    $otp=$_POST['otp'];
    $sql = mysqli_query($conn, "select * from forgot_otp where otp=$otp and status!=1");
    $count=mysqli_num_rows($sql);
    if(!empty($count))
    {
        $result=mysqli_query($conn,"update forgot_otp set status=1 where otp=$otp");
        echo ' <script>
            window.location.replace("pwd.php");
        </script>';
    }
    else
    {
        echo '<script>alert("invalid otp!");</script>';
    }
}
?>