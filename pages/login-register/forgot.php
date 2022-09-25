<?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      
      require "../../php/php mailer/PHPMailer.php";
      require "../../php/php mailer/Exception.php";
      require "../../php/php mailer/SMTP.php";
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>

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
                        <h2 class="form-title">Reset Password</h2>
                        <form action="forgot.php" method="POST" class="register-form" id="register-form">
                            <!-- <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name" style="padding-right:5px;margin-right:5px;"></i></label>
                                <input type="text" name="name" id="name" placeholder="UserName" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
                            </div> -->
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" style="border:none;border-bottom:1px solid black;padding-left:25px;"/>
                                
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
                                <button type="submit" name="reset" id="reset" class="form-submit" style="border:none;">Reset</button>
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
if(isset($_POST['reset']))
{

    include '../../php/connection.php';
    $email=$_POST['email'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $query = mysqli_num_rows($sql);
      $fetch = mysqli_fetch_assoc($sql);

    if(mysqli_num_rows($sql) <= 0)
    {
    
       echo  '<script>
            alert("Sorry, no emails exists ");
        </script>';     
    }
    else
    {
        $otp = rand(100000,999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['mail'] = $email;

  
      
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';

        // h-hotel account
        $mail->Username='studentportalbmiit@gmail.com';
        $mail->Password='opzfeanfnlpwkemj';

        // send by h-hotel email
        $mail->setFrom('studentportalbmiit@gmail.com', 'Password Reset');
        // get email from input
        $mail->addAddress($_POST['email']);
        //$mail->addReplyTo('lamkaizhe16@gmail.com');

        // HTML body
        $mail->isHTML(true);
        $mail->Subject="Your verification code";
        $mail->Body="<p>Dear user, </p> <h3>Your verifcation OTP code is $otp <br></h3>
        <br><br>
        <p>With regrads,</p>
        <b>Student Portal of BMIIT</b>";

        if($mail->send())
        {
            $sql = mysqli_query($conn, "insert into forgot_otp(otp,status,created_at) values('" . $otp . "',0,'" . date("Y:m:d H:i:s") . "')");
            
            echo ' <script>
            window.location.replace("otp.php");
        </script>';
             
            
        }
        else
        {
            echo '<script>
            alert(" Invalid Email ");
        </script>';
        }
    }
}


?>
    