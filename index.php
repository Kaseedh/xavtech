<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the CAPTCHA code from the form and trim any whitespace
    $user_captcha = isset($_POST['captcha']) ? trim($_POST['captcha']) : '';

    // Retrieve the CAPTCHA code from the session and trim any whitespace
    $stored_captcha = isset($_SESSION['CODE']) ? trim($_SESSION['CODE']) : '';
    // Validate the CAPTCHA
    if ($user_captcha === $stored_captcha) {
        // CAPTCHA is correct, proceed with form processing
        $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
        $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
        $mobile = isset($_POST['mobile']) ? htmlspecialchars(trim($_POST['mobile'])) : '';
        $interest = isset($_POST['interest']) ? htmlspecialchars(trim($_POST['interest'])) : '';
        $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

        // Save form data to a database
        $db = new mysqli('localhost', 'root', '', 'xavtech');
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $query = "INSERT INTO enquiry (name, email, mobile, interest, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param('sssss', $name, $email, $mobile, $interest, $message);
        $stmt->execute();

        echo '<div id="success-message" style="display:none;">CAPTCHA validation successful. Form data processed.</div>';

    } else {
        // CAPTCHA is incorrect
        echo 'Invalid CAPTCHA code. Please try again.';
    }

    // Clear the CAPTCHA code from the session
    unset($_SESSION['CODE']);
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
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>



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
<section class="home-hero-a">
    <div class="container-fluid">
        <div class="row mt-0 m-5">
            <div class="col-sm-6 vcenter">
                <div class="hero-content-a">
                    <h1 class="h1 mb30" data-aos="fade-in" data-aos-delay="200">
                        <span class="ree-text rt60">XavTech</span> Believe in Building Strong Brands
                    </h1>
                    <p class="mt-4" data-aos="fade-in" data-aos-delay="500">
                        We are an IT Solutions & Technology Provider Company. Designed
                        with great attention to detail, flexibility, and performance.
                    </p>
                    <a href="ContactUs.php" class="ree-btn ree-btn-grdt1 mt40 mw-80 mt-3" data-aos="fade-in" data-aos-delay="500">
                        Let's Talk <i class="fas fa-arrow-right fa-btn"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 vcenter">
                <div class="sol-image m-mt30">
                    <img src="images/man-computer.gif" alt="web development" class="img-fluid" style="overflow-clip-margin: content-box;overflow: clip;" data-aos="fade-in" data-aos-delay="400" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section-ten">
    <div class="sec-title centered">
        <h2 style="font-size: 36px;">SERVICES</h2>
    </div>
    <section class="r-bg-i sec-pad services">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="sec-heading text-center pera-block">
                    <h2 style="margin-bottom: 50px;"> See what we can <span class="ree-text rt40">do</span> for <span class="ree-text rt40">you</span> </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="ree-card r-bg-c mt60">
                    <div class="ree-card-img shadows"> <img src="images/icons/mobile-app.svg" alt="services"> </div>
                    <div class="ree-card-content mt40">
                        <h3 class="mb15 mt-4"> <a href="service-details.php">SEO Optimization</a> </h3>
                        <p class="mt-3"> Our software house has been recognised by Google for outstanding Android application quality. </p>
                    </div>
                    <div class="ree-card-content-link"> <a href="service-details.php" class="ree-card-link mt40">Read More <i class="fas fa-arrow-right fa-btn"></i> </a> </div>
                </div>
            </div>
            <div class="col-sm-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="ree-card r-bg-c mt60">
                <div class="ree-card-img"> <img src="images/icons/website.svg" alt="services"> </div>
                <div class="ree-card-content mt40">
                  <h3 class="mb15 mt-4"> <a href="service-details.html">Web Development</a> </h3>
                  <p class="mt-3"> At XavTech, We offer pixel perfect responsive website design services which are built around
                    aesthetics and usability. </p>
                </div>
                <div class="ree-card-content-link"> <a href="service-details.html" class="ree-card-link mt40">Read More <i class="fas fa-arrow-right fa-btn"></i> </a> </div>
              </div>
            </div>
            <div class="col-sm-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
              <div class="ree-card r-bg-c mt60">
                <div class="ree-card-img"> <img src="images/icons/buy-online.svg" alt="services"> </div>
                <div class="ree-card-content mt40">
                  <h3 class="mb15 mt-4"> <a href="service-details.html">eCommerce Service</a> </h3>
                  <p class="mt-3"> XavTech product design services cover entire product design lifecycle, From prototyping to
                    fully functional design. </p>
                </div>
                <div class="ree-card-content-link"> <a href="service-details.html" class="ree-card-link mt40">Read More <i class="fas fa-arrow-right fa-btn"></i> </a> </div>
              </div>
            </div>
            <div class="col-sm-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="700">
              <div class="ree-card r-bg-c mt60">
                <div class="ree-card-img"> <img src="images/icons/communicate.svg" alt="services"> </div>
                <div class="ree-card-content mt40">
                  <h3 class="mb15 mt-4"> <a href="service-details.html">Ads Designing</a> </h3>
                  <p class="mt-3"> Increase conversions. Increase leads. Increase sales. Increase revenue. That's digital marketing
                    services from XavTech. </p>
                </div>
                <div class="ree-card-content-link"> <a href="service-details.html" class="ree-card-link mt40">Read More <i class="fas fa-arrow-right fa-btn"></i> </a> </div>
              </div>
            </div>
            <div class="col-sm-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="900">
              <div class="ree-card r-bg-c mt60">
                <div class="ree-card-img"> <img src="images/icons/design-tools.svg" alt="services"> </div>
                <div class="ree-card-content mt40">
                  <h3 class="mb15 mt-4"> <a href="service-details.html">UI/UX Design</a> </h3>
                  <p class="mt-3"> Our highly experienced designers comprehend your vision and business objectives in order to create the
                    designs. </p>
                </div>
                <div class="ree-card-content-link"> <a href="service-details.html" class="ree-card-link mt40">Read More <i class="fas fa-arrow-right fa-btn"></i> </a> </div>
              </div>
            </div>
            <div class="col-sm-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="1100">
              <div class="ree-card r-bg-c mt60">
                <div class="ree-card-img"> <img src="images/icons/servers.svg" alt="services"> </div>
                <div class="ree-card-content mt40">
                  <h3 class="mb15 mt-4"> <a href="service-details.html">Cloud Services</a> </h3>
                  <p class="mt-3"> Our highly experienced designers comprehend your vision and business objectives in order to create the
                    designs. </p>
                </div>
                <div class="ree-card-content-link"> <a href="service-details.html" class="ree-card-link mt40">Read More <i class="fas fa-arrow-right fa-btn"></i> </a> </div>
              </div>
            </div>
            <!-- Other service cards can be added here similarly -->
        </div>
    </section>
</section>

<section class="sponsors-section">
    <div class="auto-container">
        <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" scrollamount="5">
            <a role="button" class="btn-link"><strong style="font-size: 14px;">Interested Persons like Doctor, Professor, Teacher, Principal, CA, and Consultant, if work with us and join us, then contact us.</strong></a>
        </marquee>
    </div>
</section>

<section class="counter-section" style="background-image: url('images/background/6.jpg')">
    <div class="auto-container">
        <div class="fact-counter style-three">
            <div class="row clearfix">
                <!-- Experience in Year -->
                <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <img src="images/stopwatch.png" alt="">
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2ms" data-stop="10">0</span>+
                            <div class="counter-title">Experience in Year</div>
                        </div>
                    </div>
                </div>
                <!--Column-->
 <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
     <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
         <div class="icon-box">
             <img src="images/teamwork.png" alt="">
         </div>
         <div class="count-outer count-box">
             <span class="count-text" data-speed="15" data-stop="35">0</span>+
             <div class="counter-title">Our Team</div>
         </div>
     </div>
 </div>

 <!--Column-->
 <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
     <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
         <div class="icon-box">
             <img src="images/diversity.png" alt="">
         </div>
         <div class="count-outer count-box">
             <span class="count-text" data-speed="150" data-stop="251">0</span>+
             <div class="counter-title">Our Client</div>
         </div>
     </div>
 </div>
            </div>
        </div>
    </div>
</section>

<section class="map-info-section alternate">
    <div class="outer-container">
        <div class="clearfix">
            <div class="left-column">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.123631646615!2d80.91616561504466!3d26.899571183133233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995615ceaaaaab%3A0x73e97b712661b9b5!2sPlot%20No%20-%20397%2C%2038%2C%20Sant%20Kabir%20Nagar%2C%20Keshav%20Nagar%202%2C%20Fazullaganj%2C%20Lucknow%2C%20Uttar%20Pradesh%20226020!5e0!3m2!1sen!2sin!4v1596955367578!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="right-column" style="background-color:#f7f7f7">
                <div class="content">
                    <div class="title-box">
                        <h2>Request for quote</h2>
                    </div>
                    <div class="quote-form">
                        <form method="post" action="Index.php">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name" id="Name" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Email Address</label>
                                    <input type="email" name="email" id="Email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Mobile No</label>
                                    <input type="number" name="mobile" id="Mobno" placeholder="Mobile No" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Services</label>
                                    <select class="custom-select-box" name="interest" id="Interest" required>
                                        <option>Interested in</option>
                                        <option>Web Design</option>
                                        <option>Graphic Design</option>
                                        <option>App Development</option>
                                        <option>E-commerce Development</option>
                                        <option>Ads Design</option>
                                        <option>UI/UX Design</option>
                                        <option>Other...</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea placeholder="Enquiry" name="message" id="Message" class="form-control" style="color:black"></textarea>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-4 mt-1 justify-content-lg-end">
                                        <img src="generate_captcha.php" id="ImgCaptcha" height="120" width="200" class="img-fluid" />
                                    </div>
                                    <div class="col-sm-1 mt-1 px-1">
                                        <img src="images/icons/icons8-refresh-30.png" height="35" width="35" id="ImgRefresh" style="cursor:pointer;background-color:lightgray;border-radius:50px" title="Refresh Code" />
                                    </div>
                                    <div class="col-sm-7 mt-1">
                                        <input type="text" name="captcha" id="Captcha" class="form-control" placeholder="Enter Captcha " />
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <button type="submit" id="btn" name="submit" class="theme-btn btn-style-eleven">Submit request <i class="fa-solid fa-share" style="color: #ffffff;"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php') ?>
                </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script>
 $(document).ready(function () {
    loadCaptcha();
    $("#ImgRefresh").click(function () {
        loadCaptcha();
    });
    function loadCaptcha() {
        // Append a timestamp to prevent caching
        $("#ImgCaptcha").attr("src", "generate_captcha.php?t=" + new Date().getTime());
    }
});

</script>



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
