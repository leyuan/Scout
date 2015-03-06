<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Scout Student Card - Contact</title>
    <meta name="description" content="Scout Student Card">
    <meta name="keywords" content="Scout Student Card">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.jpg">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/scout-customize.css" media="all" />

    <!--[if lt IE 9]>
    <script src="assets/js/html5.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="landing-page">

    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>

    <div id="overlay">
    </div>

    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
                        <a href="/" class="logo"></a>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
    <!--            <div class="navigation-navbar">-->
    <!--                <ul class="navigation-bar navigation-bar-left">-->
    <!--                    <li class="active"><a href="#hero">Home</a></li>-->
    <!--                    <li><a href="#whyus">Why US</a></li>-->
    <!--                    <li><a href="#mobile">Mobile</a></li>-->
    <!--                    <li><a href="#feedback">Feedback</a></li>-->
    <!--                    <li><a href="#businesses">Businesses</a></li>-->
    <!--                    <li><a href="#get-card">Get Card</a>-->
    <!--                    <li><a href="#contact">Contact</a></li>-->
    <!--                </ul>-->
    <!--            </div>-->
            </div>
        </nav>
    </header>

    <div id="hero" class="static-header light clearfix contact-header">
        <div class="text-heading text-center">
            <h1 class="animated hiding" data-animation="bounceInDown" data-delay="0">Get the Scout Student Card <span class="highlight">Today</span>!</h1>
            <p class="animated hiding sub-headline" data-animation="fadeInDown" data-delay="500">Discounts at all your favourite businesses</p>
            <div class="sub-headline home-btn-div">
                <a class="btn home-btn" id="buy-card-btn" href="/getcard.php"> Buy Card </a>
                <a class="btn home-btn" id="business-list-btn" href="/businesses.php"> Business List </a>
                <a class="btn home-btn" id="feedback-btn" href="/contact.php"> Feedback </a>
            </div>
        </div>
    </div>

    <hr class="no-margin" />

    <section id="your-feedback" class="">
        <div class="section-header animated hiding text-left col-md-10 col-md-offset-1 your-feedback-container" data-animation="fadeInDown">
            <h2 class="text-center">Your <span class="highlight">feedback</span></h2>
            <div class="col-md-10 col-md-offset-1">
                <form action="" id="fb-form">
                    <div class="row">
                        <div class="form-group col-xs-12 col-sm-4">
                            <input type="text" name="fb_name" class="fb-text form-control" placeholder="Your name" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-4">
                            <input type="email" name="fb_contact" class="fb-text form-control" placeholder="Email" />
                        </div>
                        <div class="form-group col-xs-12 col-sm-4">
                            <input type="text" name="fb_phone" class="fb-text form-control" placeholder="Phone Number" />
                        </div>
                    </div>
                    <h5><u>Did something go wrong?</u></h5>
                    <p>Let us know so we can work to fix it</p>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <textarea name="fb_textarea_one" rows="4" class="fb-textarea form-control" placeholder="Describe problem"></textarea>
                        </div>
                    </div>
                    <hr />
                    <h5><u>Did something go right?</u></h5>
                    <p>Is there a business you would like to see next year?</p>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <textarea name="fb_textarea_two" rows="4" class="fb-textarea form-control" placeholder="Your feedback is important to us!"></textarea>
                        </div>
                    </div>
                    <button id="fb-submit-btn" class="btn btn-lg btn-primary"> Submit </button>
                    <div id="fb-response">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <footer id="contact" class="footer light">
        <div class="container">
            <div class="footer-content row">
                <div class="col-sm-4">
                    <div class="logo-wrapper">
                        <img src="assets/img/white_logo_hor.png" alt="logo" class="scout-logo"/>
                    </div>
                    <p>
                        Scout is a marketing platform designed to help businesses acquire new customers and engage their existing customers.
                    </p>
                </div>
                <div class="col-sm-5 social-wrap">
                    <div class="footer-title">Social Networks</div>
                    <ul class="list-inline socials">
                        <li><a href="https://www.facebook.com/scoutcard"><span class="icon icon-socialmedia-08"></span></a></li>
                        <li><a href="https://www.twitter.com/scoutcard"><span class="icon icon-socialmedia-07"></span></a></li>
                        <li><a href="https://www.instagram.com/scoutcard"><span class="icon icon-socialmedia-26"></span></a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="footer-title">Our Contacts</div>
                    <ul class="list-unstyled">
                        <li>
                            <span class="icon icon-chat-messages-14"></span>
                            <a href="mailto:contact@scoutcard.ca">hr.scoutcard@gmail.com</a>
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-34"></span>
                            9013-112 Street NW Edmonton , AB Canada T6G 2C5
                        </li>
                        <li>
                            <span class="icon icon-seo-icons-17"></span>
                            <div><span class="highlight">Kyle</span> - 780.835.1379</div>
                            <div><span class="highlight">Sabby</span> - 780.915.5220</div>
                            <div><span class="highlight">Ashley</span> - 780.246.4563</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">1812451 Alberta Ltd. All Rights Reserved. <a href="terms-of-use.html" id="tof-link"> Terms of Use </a></div>
    </footer>

    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>


    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js?ver=1"></script>
    <![endif]-->
    <!--[if (gte IE 9) | (!IE)]><!-->
    <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js?ver=1"></script>
    <!--<![endif]-->
    <script src="https://checkout.stripe.com/v2/checkout.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/headhesive.min.js"></script>
    <script type="text/javascript" src="assets/mailchimp/js/mailing-list.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var fb_form = $("#fb-form");
            $(fb_form).validate({
                rules: {
                    // simple rule, converted to {required:true}
                    fb_name: "required",
                    // compound rule
                    fb_contact: {
                        required: true,
                        email: true
                    },
                    fb_phone: "required"
                }
            });

            $("#fb-submit-btn").click(function(event){
                if (fb_form.valid()) {
                    event.preventDefault();
                    var data = $("#fb-form").serialize();

                    $.ajax({
                        type: "POST",
                        cache: false,
                        url: "php/feedback.php",
                        data: data,
                        beforeSend: function(XMLHttpRequest, textStatus) {
                            message = "<p>Sending ...</p>";

                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            $("#fb-response").html("<p> Something is going wrong, please email us your feedback </p>");
                        },
                        success: function(response) {
                            $("#fb-response").html(response);
                        }
                    });
                }
                else {
                    event.preventDefault();
                }
            });
        });
    </script>

</body>
</html>