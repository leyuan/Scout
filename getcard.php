<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Scout Student Card - Get the Card</title>
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

    <!-- Yelp Popup -->
    <div class="pop-ups" id="yelp-popup">
        <div class="pop-up-controls">
            <span class="pop-up-close-btn"> X </span>
        </div>

        <div class="pop-up-content">
            <div class="pop-up-logo">
                <img src="assets/img/logos/yelp2.png" class="" alt="Hot 107" />
            </div>
            <div class="pop-up-socialmedia text-center">
                <span> <a href="https://twitter.com/yelpedmonton"><img src="assets/img/logos/tw.png" class="popup-social-img" /></a> </span>
                <span> <a href="http://www.yelp.ca/edmonton"><img src="assets/img/logos/web.png" class="popup-social-img" /></a> </span>
            </div>
            <div class="pop-up-description">
                <p>
                    Yelp is the best way to find great local businesses. People use Yelp to search for everything from the city's tastiest burger to the most renowned cardiologist
                </p>
            </div>
        </div>
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

    <div id="hero" class="static-header light clearfix">
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

    <section id="get-card" class="">
        <div class="container">
            <div class="hidden">
                <form action="php/charge.php" method="POST" id="get-card-form">
                    <input type="hidden" name="customer_email" id="customer-email" />
                    <input type="hidden" name="total_dollars" id="total-dollars" />
                </form>
            </div>

            <div class="section-header animated hiding" data-animation="fadeInDown" style="margin-bottom: 40px;">
                <h2>GET THE <span class="highlight">CARD</span></h2>
            </div>

            <div id="get-card-form">
                <div id="get-card-online">
                    <h2 >Online</h2>
                    <h3>
                        I  want  :  <select id="quantity-select">
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                            <option> 5 </option>
                            <option> 10 </option>
                        </select>  card(s)  today.
                        <span id="get-card-online-submit"><u><a id="get-card-checkout-btn"> Submit </a></u></span>
                    </h3>
                    <div id="get-card-response" class="text-center" style="color: rgb(0, 129, 255);">

                    </div>
                </div>
                <div id="get-card-offline">
                    <h2>Offline</h2>

                    <div class="offline-text-container">
                        <h4><u>Universitites / Colleges</u></h4>
                        <h5>MacEwan University </h5>
                        <p>
                            SAM Center and SAMU Offices
                        </p>

                        <h4><u>Businesses</u></h4>
                        <h5>University of Alberta Area</h5>
                        <p>
                            Beez: Hub Mall <br />
                            The Green House Salad: 8623 112 St NW, Edmonton, AB <br />
                            T6G 2H1. Behind Good Earth
                        </p>

                        <h5>Downtown</h5>
                        <p>
                            Dragon FX: Kingsway Mall <br />
                            The Green House Salad: 10119 101 St NW, Edmonton, AB <br />
                            T5J 1V9
                        </p>

                        <h5>West Side</h5>
                        <p>
                            Dragon FX: West Edmonton Mall
                        </p>

                        <h5>South Side</h5>
                        <p>
                            Dragon FX: Millwoods Town Center <br />
                            Table Top Cafe: 5716 75 St NW, Edmonton, AB <br />
                            T6E 5X6
                        </p>
                    </div>
                </div>
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
            var total_cents = 500;
            var total_dollars = 5;
            var quantity = 1;

            $("#quantity-select").change(function(){
                quantity = $("#quantity-select").val();
                total_dollars = quantity * 5;
                total_cents = total_dollars * 100;
                $("#card-quantity").html(quantity);
                $("#card-total").html(total_dollars);

            });

            $('#get-card-checkout-btn').click(function(){
                var token = function(res){
                    console.log(res);
                    var $input = $('<input type=hidden name=stripeToken />').val(res.id);
                    $("#customer-email").val(res.email);
                    $("#total-dollars").val(total_dollars);
                    console.log(res.email);
                    console.log(res.card.address_city);
                    $.ajax
                    (
                        {
                            type:"POST",
                            cache: false,
                            url: "php/charge.php",
                            data: {stripeToken: res.id, total_dollars: total_dollars, name: res.card.name, email: res.email, address: res.card.address_line1, zip: res.card.address_zip },
                            beforeSend:
                                function(XMLHttpRequest, textStatus)
                                {
                                    response = "<p>Processing...</p>";
                                    $("#get-card-response").html(response);
                                },
                            error:
                                function(XMLHttpRequest, textStatus, errorThrown)
                                {
                                    // response = "<p>Something is going wrong, please notify us.</p>";
                                    response = errorThrown;
                                    $("#get-card-response").html(response);
                                },
                            success:
                                function(response)
                                {
                                    $("#get-card-response").html(response);
                                }
                        }
                    );/* $.ajax */
                };

                StripeCheckout.open({
                    key:         'pk_live_WKvcF0LgKCPDmWHBFCzrOOo4',
                    address:     true,
                    amount:      total_cents,
                    currency:    'cad',
                    name:        'Scount Student Card',
                    description: quantity + " card(s), thank you.",
                    panelLabel:  'Checkout',
                    token:       token
                });

                return false;
            });
        });
    </script>

</body>
</html>