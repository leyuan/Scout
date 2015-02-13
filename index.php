<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Scout Student Card</title>
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
        <!-- Get Card -->
        <div class="pop-ups" id="get-card-popup">
            <div class="pop-up-controls">
                <span class="get-card-close-btn"> X </span>
            </div>

            <div class="pop-up-content">
                <h1>Buy card Popup Content</h1>
            </div>
        </div>
        <!-- Ehub Popup -->
        <div class="pop-ups" id="ehub-popup">
            <div class="pop-up-controls">
                <span class="get-card-close-btn"> X </span>
            </div>

            <div class="pop-up-content">
                <h1>Ehub Popup Content</h1>
            </div>
        </div>
        <!-- Buster Pizza -->
        <div class="pop-ups" id="buster-pizza-popup">
            <div class="pop-up-controls">
                <span class="get-card-close-btn"> X </span>
            </div>

            <div class="pop-up-content">
                <div class="popup-logo text-center">
                    <img src="assets/img/logos/logo-4-hover.png" class="popup-logo-img" />
                </div>
                <div class="popup-title text-center">
                    <h3> Buster's Pizza Donair & Pasta </h3>
                </div>
                <div class="popup-socialmedia text-center">
                    <span> <img src="assets/img/logos/fb.png" class="popup-social-img" /> </span>
                    <span> <img src="assets/img/logos/tw.png" class="popup-social-img" /> </span>
                    <span> <img src="assets/img/logos/web.png" class="popup-social-img" /> </span>
                </div>
                <div class="popup-description">
                    <p>
                        Buster's Pizza brings you a unique and fresh food experience that takes you to the edge of the Mediterranean
                    </p>
                </div>
                <div class="popup-location">
                    <h5> Locations: </h5>
                    <div class="popup-location-list">
                        <ul>
                            <li>
                                LONDONDERRY MALL (EXPRESS) 780-406-7667 <br />
                                137 Ave and 66 St
                            </li>
                            <li>
                                NORTH WEST EDMONTON 780-457-0025 <br />
                                12716 - 137 Avenue
                            </li>
                            <li>
                                WEST EDMONTON 780-457-1332 <br />
                                17288 - Stony Plain Road
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="popup-footer text-center">
                    <h4> Order by Phone 310-0011 </h4>
                </div>
            </div>
        </div>

        <header>
            <nav class="navigation navigation-header">
                <div class="container">
                    <div class="navigation-brand">
                        <div class="brand-logo">
    						<a href="index.html" class="logo"></a>
                        </div>
                        <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navigation-navbar">
                        <ul class="navigation-bar navigation-bar-left">
                            <li class="active"><a href="#hero">Home</a></li>
                            <li><a href="#whyus">Why US</a></li>
                            <li><a href="#mobile">Mobile</a></li>
                            <li><a href="#feedback">Feedback</a></li>
                            <li><a href="#businesses">Businesses</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="hero" class="static-header light clearfix">
            <div class="text-heading text-center">
                <h1 class="animated hiding" data-animation="bounceInDown" data-delay="0">Get the Scout Student Card <span class="highlight">Today</span>!</h1>
                <p class="animated hiding sub-headline" data-animation="fadeInDown" data-delay="500">Discounts at all your favourite businesses</p>
                <div class="sub-headline home-btn-div">
                    <a class="btn home-btn" id="buy-card-btn"> Buy Card </a>
                    <a href="#businesses" class="btn home-btn" id="home-btn-businesses"> Business List </a>
                    <a href="#businesses" class="btn home-btn" id="home-btn-businesses"> Feedback </a>
                </div>
            </div>
        </div>

        <div id="clients">
            <div class="container">
                <ul class="list-inline logos">
                    <li class="logo-img-container"><img class="animated hiding logo-img support-1" id="ehub-logo-img" data-animation="fadeInUp" data-delay="0" src="assets/img/logos/logo-1.png" data-alt-src="assets/img/logos/logo-1-hover.png" alt="ehub" /></li>
                    <li class="logo-img-container"><img class="animated hiding logo-img support-2" data-animation="fadeInUp" data-delay="200" src="assets/img/logos/logo-2.png" data-alt-src="assets/img/logos/logo-2-hover.png" alt="LBWTravel" /></li>
                    <li class="logo-img-container"><img class="animated hiding logo-img support-3" data-animation="fadeInUp" data-delay="400" src="assets/img/logos/logo-3.png" data-alt-src="assets/img/logos/logo-3-hover.png" alt="Hot-107" /></li>
                    <li class="logo-img-container"><img class="animated hiding logo-img support-4" id="buster-pizza-img" data-animation="fadeInUp" data-delay="600" src="assets/img/logos/logo-4.png" data-alt-src="assets/img/logos/logo-4-hover.png" alt="Buster's Pizza" /></li>
                    <li class="logo-img-container"><img class="animated hiding logo-img support-5" data-animation="fadeInUp" data-delay="800" src="assets/img/logos/logo-5.png" data-alt-src="assets/img/logos/logo-5-hover.png" alt="Yelp" /></li>
                    <li class="logo-img-container"><img class="animated hiding logo-img support-6" data-animation="fadeInUp" data-delay="1000" src="assets/img/logos/logo-6.png" data-alt-src="assets/img/logos/logo-6-hover.png" alt="Startup-Edmonton" /></li>
                </ul>
            </div>
        </div>

        <a id="showHere"></a>

    	<section id="whyus" class="section dark">
            <div class="container">

                <div class="tab-content alt">
    				<div class="tab-pane active" id="first-tab-alt">
    					<div class="section-content row">
                            <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
                                <img src="assets/img/features/people.jpg" class="img-responsive" alt="process 3" />
                            </div>
                            <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
                                <br/>
                                <article class="center">
                                    <h3>FOR <span class="highlight">STUDENTS</span>. BY <span class="highlight">STUDENTS</span>.</h3>
                                    <!--
                                        <div class="sub-title">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br/> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                                    -->
                                    <p>Scout was started by students from right here in Edmonton as a way to promote wellness of students in the city. Show your Edmonton spirit by purchasing the Scout Student Discount Card today!</p>
                                    <br/>
                                </article>
                            </div>
    					</div>
                    </div>
    			</div>
            </div>
        </section>

        <hr class="no-margin" />

        <section id="process" class="section dark">
            <div class="container">
                <div class="section-content row">
                    <div class="col-sm-6 pull-right animated hiding" data-animation="fadeInRight">
                        <img src="assets/img/features/card.jpg" class="img-responsive" alt="process 2" />
                    </div>
                    <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
    					<br/><br/>
                        <article>
                            <h3>Get the  <span class="highlight">Card</span></h3>
                            <p>Buy the card online or from one of our participating retailers around the city. For updates and info, follow us on Facebook or Twitter!</p>
                        </article>
                    </div>

                    <hr class="clearfix" />

                    <div class="col-sm-6 animated hiding" data-animation="fadeInLeft">
                        <img src="assets/img/features/store.jpg" class="img-responsive" alt="process 3" />
                    </div>
                    <div class="col-sm-6 animated hiding" data-animation="fadeInRight">
    					<br/><br/>
                        <article>
                            <h3>SAVE AT YOUR <span class="highlight">FAVOURITE</span> STORES</h3>
                            <p>With the Scout Student Card, save money at Edmonton’s best businesses. With everything from coffee to clothing, salons to sushi, and cookies to clubs, there are savings for everyone.</p>
                        </article>
                    </div>

                </div>
            </div>
        </section>

        <section id="mobile" class="section inverted">
            <div class="container">
                <div class="section-content">
                    <div id="featuredTab">
                        <ul class="list-unstyled animated hiding" data-animation="fadeInRight">
                          <li class="active">
                              <a href="#home" data-toggle="tab">
                                  <div class="tab-info">
                                      <div class="tab-title">Link to your phone</div>
                                      <div class="tab-desc">Don't worry about forgetting your card again!</div>
                                  </div>
                                  <!--<div class="tab-icon"><span class="icon icon-multimedia-20"></span></div>-->
                              </a>
                          </li>
                        </ul>

                        <div class="tab-content animated hiding" data-animation="fadeInLeft">
                          <div class="tab-pane in active" id="home"><img src="assets/img/features/iphone.png" class="img-responsive animated hiding" data-animation="fadeInLeft" alt="macbook" style="width:850px;"/></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="feedback" class="section light">
            <div class="container">
                <div class="section-header animated hiding" data-animation="fadeInDown">
                    <h2>WHAT <span class="highlight">STUDENTS</span> SAY</h2>
                </div>
                <div class="section-content">

    				<!-- BEGIN SLIDER CONTENT -->
    				<div class="col-sm-10 col-sm-offset-1">
    					<div class="flexslider testimonials-slider center animated hiding" data-animation="fadeInTop">
    						<ul class="slides">
    							<li>
    								<div class="testimonial resp-center clearfix">
    									<blockquote>
    										I usually shop at big chains because it is cheaper and I know where they are. I would check out other businesses if I could get a discount though.
    									</blockquote>
    								</div>
    							</li>
    							<li>
    								<div class="testimonial resp-center clearfix">
    									<blockquote>
    										I think it is great how Scout is working with many of the businesses I go to regularly. They are working hard to enhance student life here on campus. Well done!
    									</blockquote>
    								</div>
    							</li>
    							<li>
    								<div class="testimonial resp-center clearfix">
    									<blockquote>
                                            The Scout student card is a great idea. As a student, I don’t have the time to shop around for deals. Scout makes it easy.
    									</blockquote>
    								</div>
    							</li>
    						</ul>
    					</div>
    				</div>
    				<!-- END SLIDER -->
                </div>
            </div>
        </section>

    	<section id="feedback-controls" class="section light">
    		<div class="container">
    			<div class="col-md-10 col-md-offset-1">
    			<!-- BEGIN CONTROLS -->
    						<div class="flex-manual">
    							<div class="col-xs-12 col-sm-4 wrap">
    								<div class="switch flex-active">
    									<img alt="client" src="assets/img/people/hammad.jpg" class="sm-pic img-circle pull-left" width="69" height="70">
    									<p>
    										<span class="highlight">Hammad Jutt</span><br/>Engineering Executive, eClub
    									</p>
    								</div>
    							</div>

    							<div class="col-xs-12 col-sm-4 wrap">
    								<div class="switch pull-left">
    									<img alt="client" src="assets/img/people/tina.jpg" class="sm-pic img-circle pull-left" width="69" height="70">
    									<p>
    										<span class="highlight">TINA WARNER</span><br/>Student, Faculty of Science
    									</p>
    								</div>
    							</div>

    							<div class="col-xs-12 col-sm-4 wrap">
    								<div class="switch">
    									<img alt="client" src="assets/img/people/allen.jpg" class="sm-pic img-circle pull-left" width="68" height="69">
    									<p>
    										<span class="highlight">ALLEN GRIFFIN</span><br/>Student, Faculty of Arts
    									</p>
    								</div>
    							</div>
    						</div>
    			<!-- END CONTROLS -->
    			</div>
    		</div>
    	</section>

    	<section id="businesses" class="section dark" style="background-color: #f0f0f0; padding-top:30px !important; padding-bottom: 60px !important;">
            <div class="container animated hiding" data-animation="fadeInDown">
                <span class="business-title"><h3> Our Partners </h3></span>
                <div class="business-list-logos">

                    <a class="filter business-logo business-logo-all logo-cat-selected" data-filter="all"> All </a>
                    <a class="filter business-logo " data-filter=".Eateries"> Eateries </a>
                    <a class="filter business-logo" data-filter=".Cafes"> Cafes </a>
                    <a class="filter business-logo" data-filter=".Bars_Clubs_Lounges"> Bars, Clubs <span class="amp">&amp;</span> Lounges </a>
                    <a class="filter business-logo" data-filter=".Lifestyle"> Lifestyle </a>
                    <br />
                    <a class="filter business-logo" data-filter=".Health_Fitness"> Health <span class="amp">&amp;</span> Fitness </a>
                    <a class="filter business-logo" data-filter=".Fashion"> Fashion </a>
                    <a class="filter business-logo" data-filter=".Beauty_Spas"> Beauty <span class="amp">&amp;</span> Spas </a>
                    <a class="filter business-logo" data-filter=".Entertainment"> Entertainment </a>



                    <div id="Container">
                        <?php
                        /**
                         * Iterate through the specified folder, and show images with filter
                         */
                        $businesses_logo_dir = "assets/img/logos/businesses/";
                        $dir = getcwd()."/assets/img/logos/businesses/";
                        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

                        while($it->valid()) {

                            if (!$it->isDot()) {

                                $subject = $it->getSubPathName();
                                // Mac OS automatically creates .DS_store file to store metadata
                                // The following regex is used to ignore those files
                                $pattern = '/\\.DS/';
                                preg_match( $pattern, $subject, $match );
                                if( !$match ) {
                                ?>
                                    <div class="mix <?php echo $it->getSubPath(); ?> col-md-3 ">
                                        <img src=" <?php echo $businesses_logo_dir.$it->getSubPathName(); ?> " alt=" <?php echo $it->getSubPathName(); ?>" class="business-logo-img"/>
                                    </div>
                                    
                                <?php
                                }
                            }

                            $it->next();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

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
                        <h2 >_Online</h2>
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
                    </div>
                    <div id="get-card-offline">
                        <h2>_Offline</h2>
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
                        <p><strong>Shop Local. Get Rewarded.</strong></p>
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
            <div class="copyright">1812451 Alberta Ltd. All Rights Reserved.</div>
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
        $(document).ready(function(){

            var total_cents = 500;
            var total_dollars = 5;
            var quantity = 1;

            $(".business-logo").click( function(){

                $(".business-list-logos > .logo-cat-selected").removeClass('logo-cat-selected');

                $(this).addClass('logo-cat-selected');

            } );

            $("#home-btn-businesses").click(function() {
                $('html, body').animate({
                    scrollTop: $("#businesses").offset().top
                }, 2500);
            });

            jQuery(function(){
                $(function() {
                    $('#Container').mixItUp();
                });
            });
            /* Buy Card button clicked */
            $("#buy-card-btn").click(function(){
                $("#overlay").show();

                $("#get-card-popup").show();
            });

            $(".get-card-close-btn").click(function(){
                $("#overlay").hide();

                $(".pop-ups").hide();
            });

            /* Ehub logo clicked */
            $("#ehub-logo-img").click(function(){
                $("#overlay").show();

                $("#ehub-popup").show();
            })

            /* Buster Pizza clicked */
            $("#buster-pizza-img").click(function(){
                $("#overlay").show();
                $("#buster-pizza-popup").show();
            })

            var sourceSwap = function() {
                var $this = $(this);
                var newSource = $this.data('alt-src');
                $this.data('alt-src', $this.attr('src'));
                $this.attr('src', newSource);
            }

            $(function() {
                $('img[data-alt-src]').each(function(){
                    new Image().src = $(this).data('alt-src');
                }).hover(sourceSwap, sourceSwap);
            });

            $("#quantity-select").change(function(){
                quantity = $("#quantity-select").val();
                total_dollars = quantity * 5;
                total_cents = total_dollars * 100;
                $("#card-quantity").html(quantity);
                $("#card-total").html(total_dollars);

            });

            $('#get-card-checkout-btn').click(function(){
                var token = function(res){
                    var $input = $('<input type=hidden name=stripeToken />').val(res.id);
                    $("#customer-email").val(res.email);
                    $("#total-dollars").val(total_dollars);
                    // var $email = $('<input type=hidden name=customer_email />').val(res.email);
                    // var $amount = $('<input type=hidden name=total_dollars />').val(total_dollars);
                    $('#get-card-form').append($input).submit();
                };

                StripeCheckout.open({
                    key:         'pk_test_WrsERm79wYCRYqd8sPGc4Wei',
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