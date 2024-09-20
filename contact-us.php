<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $interest = $_POST['interest'];
    $message = $_POST['message'];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "xavtech");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the table
    $sql = "INSERT INTO contact (name, email, phone, subject, interest, message)
            VALUES ('$name', '$email', '$phone', '$subject', '$interest', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<div id="success-message" style="display:none;">New record created successfully</div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="BAniuyWG9gObCIvZPEYAC6XVKbX-UChccH5aO-TTddA" />
<title>XavTech - Best Website Development Company in India </title>

<meta name="description"
    content="XavTech : We build you upgrade, XavTech provide website related services in the World" />
  <meta name="keywords" content="XavTech, WEBSITEDEVELOPMENT, SOFTWAREDEVELOPMENT,WEBSITESERVICES" />
<meta name="author" content="XavTech Pvt. Ltd ">




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221119476-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-221119476-1');
</script>
<script>
$(document).ready(function(){
    // Show the message
    $('#success-message').show();
    
    // Hide the message after 3 seconds (3000 milliseconds)
    setTimeout(function(){
        $('#success-message').fadeOut('slow');
    }, 3000);
});
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HQHC37');</script>
<!-- End Google Tag Manager -->

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<script type="text/javascript" src="js/date_time.js"></script>

</head>
<?php include('includes/config.php');?>
<body>
<?php include('includes/header.php');?>
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HQHC37"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper">
<section class="sec-pad r-bg-a" style="background: #fbf1ef">
    <div class="container-fluid">
        <div class="ree">
            <div class="row m-5">
                <div class="col-lg-6 vcenter">
                    <div class="cta-heading"> <span class="sub-heading mb15">Contact Us</span>
                        <h2 class="mt-3"> Have a <span class="ree-text rt40">project</span> in mind? Let's get to chat. </h2> 
                    </div>
                </div>
                <div class="col-lg-6 vcenter text-center">
                    <div class="sol-img-png"> <img src="images/icons/team-support.svg" alt="working with client" class="img-fluid"> </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact-form-sec sec-pad r-bg-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-contact-hom m-mt60">
                    <div class="form-block bg-w">
                        <div class="form-head">
                            <h3>Please fill in the form below.</h3>
                        </div>
                        <div class="form-body">
             <form action=" " method="POST">
        <div class="fieldsets row">
            <div class="col-md-6">
                <input type="text" placeholder="Full Name" name="name" autocomplete="off" required>
            </div>
            <div class="col-md-6">
                <input type="email" placeholder="Email Address" name="email" autocomplete="off" required>
            </div>
        </div>
        <div class="fieldsets row">
            <div class="col-xl-6">
                <input type="number" placeholder="Contact Number" name="phone" autocomplete="off" required>
            </div>
        </div>
        <div class="fieldsets row">
            <div class="col-md-6">
                <input type="text" placeholder="Subject" name="subject" autocomplete="off" required>
            </div>
            <div class="col-md-6">
                <select name="interest">
                    <option>Interested in</option>
                    <option>Web Design</option>
                    <option>Graphic Design</option>
                    <option>UI/UX Design</option>
                    <option>Ads Design</option>
                    <option>Other...</option>
                </select>
            </div>
        </div>
        <div class="fieldsets">
            <textarea placeholder="Message" name="message" autocomplete="off" minlength="10"></textarea>
        </div>
        <div class="fieldsets mt20">
            <button type="submit" name="submit" class="ree-btn ree-btn-grdt1 w-100">
                Send your inquiry <i class="fas fa-arrow-right fa-btn" style="color: white;"></i>
            </button>
        </div>
        <p class="trm">
            <i class="fas fa-lock"></i>&nbsp; We hate spam, and we respect your privacy.
        </p>
        <div class="form-btm-set text-center mt15">
            <h5 class="mt-3">We Deliver</h5>
            <div class="icon-setss mt20">
                <div class="icon-rows">
                    <div class="icon-imgg">
                        <img src="images/icons/money.svg" alt="#">
                    </div>
                    <div class="icon-txt">
                        <p>Best Price</p>
                    </div>
                </div>
                <div class="icon-rows">
                    <div class="icon-imgg">
                        <img src="images/icons/quality.svg" alt="#">
                    </div>
                    <div class="icon-txt">
                        <p>Quality Service</p>
                    </div>
                </div>
                <div class="icon-rows">
                    <div class="icon-imgg">
                        <img src="images/icons/call-agent.svg" alt="#">
                    </div>
                    <div class="icon-txt">
                        <p>Good Support</p>
                    </div>
                </div>
                <div class="icon-rows">
                    <div class="icon-imgg">
                        <img src="images/icons/satisfaction.svg" alt="#">
                    </div>
                    <div class="icon-txt">
                        <p>Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php') ?>
                </div>

<?php include('includes/whatsapp.php');?>
<script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="js/jquery.fancybox.js"></script> 
<script src="js/appear.js"></script> 
<script src="js/owl.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery-ui.js"></script> 
<script src="js/main.js"></script>

</body>
</html>
<?php

    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']) && isset($_POST['email']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $interest=$_POST['interest'];
    $message=$_POST['message'];


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'xavierscontrol@gmail.com';                     //SMTP username
    $mail->Password   = 'tbvnlnxessrwnnim';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('xavierscontrol@gmail.com', '');
    $mail->addAddress($email, '');     //Add a recipient
   

    //Attachments
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmation';
    $mail->Body    = "Hello $name <br> Thank you !! Visiting my page.";
   
    $mail->send();
    echo '<div id="success-message" style="display:none;"> Message has been sent</div>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>