<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/icons/favicon.ico">
    
    <meta property="og:url" content="[HTTP://URLGOESHERE.COM/]" />
    <meta property="og:site_name" content="[SITE/COMPANY NAME]" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="[WEBSITE PAGE TITLE]" />
    <meta property="og:image" content="[URL TO BRAND LOGO OR BLOG POST MAIN IMAGE]" />
    <meta property="og:description" content="[PAGE DESCRIPTION HERE]" />
    <meta property="fb:admins" content="USER_ID,USER_ID2,USER_ID3" />
    
	<title><?php echo $title; ?></title>
    
    <!-- CSS -->
    <?php echo $this->assets->outputCss(); ?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    </head>
    <body>
    <div id="mobileDrawer" class="snap-drawers">
    <div class="snap-drawer snap-drawer-left">
        <div>
            <div id="mobileGetStarted">
                <a href="#" class="button" id="mobileGetStarted">Get Started</a>
            </div><!--/ #mobileGetStarted -->
            
            <ul>
                <a href="#" class="active"><li>Home</li></a>
                <a href="#" class=""><li>Service Plans</li></a>
                <a href="#" class=""><li>Equipment</li></a>
                <a href="#" class=""><li>Services</li></a>
                <a href="#" class=""><li>Features</li></a>
                <!--<hr>-->
                <a href="#" class=""><li>About</li></a>
                    <ul class="mobileDrop">
                        <a href="#" class=""><li>Company</li></a>
                        <a href="#" class=""><li>Guardian Monitoring</li></a>
                        <a href="#" class=""><li>Testimonials</li></a>
                        <a href="#" class=""><li>Our Story</li></a>
                        <a href="#" class=""><li>Careers</li></a>
                    </ul>
                <a href="#" class=""><li>Media</li></a>
                    <ul class="mobileDrop">
                        <a href="#" class="active"><li>Blog</li></a>
                        <a href="#" class=""><li>Videos</li></a>
                        <a href="#" class=""><li>Downloads</li></a>
                    </ul>
                <a href="#" class=""><li>Support</li></a>
                    <ul class="mobileDrop">
                        <a href="#" class=""><li>How It Works</li></a>
                        <a href="#" class=""><li>Top 10 Questions</li></a>
                        <a href="#" class=""><li>Monitoring Basics</li></a>
                        <a href="#" class=""><li>Refer A Friend</li></a>
                        <a href="#" class=""><li>F.A.Q.s</li></a>
                        <a href="#" class=""><li>User Guides</li></a>
                        <a href="#" class=""><li>Contact Us</li></a>
                    </ul>
            </ul>
            
            <div id="mobileAdc">
                <a href="#" class="button orange" id="">Login To <?php echo $this->tag->image(array('img/alarmDotComLogoWhite_HomeSecurityArizona.png', 'class' => '', 'alt' => '', 'title' => '')); ?></a>
            </div><!--/ #mobileAdc -->
        </div><!--/ .container -->
    </div><!--/ .snap-drawer .snap-drawer-left -->
    
    <div id="mobileSnapCart" class="snap-drawer snap-drawer-right">
        <div>
            
            <div class="controlWrap">
                <a href="#" class="button green">View Cart / Check Out</a>
            </div><!--/ .controlWrap -->
            
            <ul id="mobileSnapRecentItems">
                <li class="subtotal">Cart Subtotal: <span>$159.99</span></li>
                <li class="product" id="">
                    <div class="details">
                        <div class="image"><a href="#"><?php echo $this->tag->image(array('img/product/products/GE-XtiControlPanel_WHT_300.jpg', 'class' => '', 'alt' => '', 'title' => '')); ?></a></div>
                        <div class="info">
                            <p><a href="#">GE Simon XTi Wireless Control Panel</a></p>
                            <p class="qtyPrice">1 X $199.99</p>
                        </div><!--/ .info -->
                    </div><!--/ .details -->
                </li><!--/ .product -->
                
                <li class="product" id="">
                    <div class="details">
                        <div class="image"><a href="#"><?php echo $this->tag->image(array('product/products/GE-PIRMotionDetector_WHT_300.jpg', 'class' => '', 'alt' => '', 'title' => '')); ?></a></div>
                        <div class="info">
                            <p><a href="#">GE Wireless PIR Motion Detector</a></p>
                            <p class="qtyPrice">1 X $69.99</p>
                        </div><!--/ .info -->
                    </div><!--/ .details -->
                </li><!--/ .product -->
                
                <li class="product" id="">
                    <div class="details">
                        <div class="image"><a href="#"><?php echo $this->tag->image(array('product/products/GE-GlassBreak_WHT_300.jpg', 'class' => '', 'alt' => '', 'title' => '')); ?></a></div>
                        <div class="info">
                            <p><a href="#">GE Wireless Glass Break</a></p>
                            <p class="qtyPrice">1 X $89.99</p>
                        </div><!--/ .info -->
                    </div><!--/ .details -->
                </li><!--/ .product -->
                
                <li class="product" id="">
                    <div class="details">
                        <div class="image"><a href="#"><?php echo $this->tag->image(array('product/products/GE-2ButtonKeyfob_WHT_300.jpg', 'class' => '', 'alt' => '', 'title' => '')); ?></a></div>
                        <div class="info">
                            <p><a href="#">GE Wireless Keyfob Remote</a></p>
                            <p class="qtyPrice">3 X $39.99</p>
                        </div><!--/ .info -->
                    </div><!--/ .details -->
                </li><!--/ .product -->
            </ul><!--/ #mobileSnapRecentItems -->
            
            <ul>
                <a href="#" class=""><li>My Account</li></a>
                <a href="#" class=""><li>Log Out</li></a>
            </ul>
            
        </div><!--/ .container -->
    </div><!--/ #mobileSnapCart .snap-drawer .snap-drawer-right -->
</div><!--/ #mobileDrawer .snap-drawers -->


<!--/ ******** Page Wrapper for Mobile Snap.js Menus ******** -->
<div id="pageWrap" class="snap-content" data-snap-ignore="true">
    
<div id="pageTopDesktop" class="hidden-xs hidden-sm">
    <div class="container">
        
        <div id="alarmComLogin">
            <a href="#" class="button orange">Login To <?php echo $this->tag->image(array('img/alarmDotComLogoWhite_HomeSecurityArizona.png', 'class' => '', 'alt' => '', 'title' => '')); ?></a>
        </div><!--/ #alarmComLogin -->
        
        <div id="desktopTopMenu">  
            <div id="topMenuLeft">
                <h2>Home Security & Home Automation Simplified! <a href="tel:#">1(800)459-2938</a></h2>
            </div><!--/ #topMenuLeft -->
            
            <div id="topMenuRight">
                <ul>
                    <li id="" class="cartDrop"><a href="#">(6 Items) <i class="fa fa-shopping-cart"></i> $349.46</a>
                        <ul>
                            <li class="latest" id="">Latest Added Product(s):</li>
                            <li class="product" id="">
                                <div class="details">
                                    <a href="#" id="" class="removeItem" data-toggle="tooltip" data-placement="right" title="Remove from cart"><i class="fa fa-times"></i></a>
                                    <div class="image"><?php echo $this->tag->image(array('img/2GIG-GoControlPanel_CLR_300.PNG', 'class' => '', 'alt' => '', 'title' => '')); ?></div>
                                    <div class="info">
                                        <p><a href="#">2GIG Go! Control Panel</a></p>
                                        <p class="qtyPrice">1 X $199.99</p>
                                    </div><!--/ .info -->
                                </div><!--/ .details -->
                            </li>
                            <li class="product" id="">
                                <div class="details">
                                    <a href="#" id="" class="removeItem" data-toggle="tooltip" data-placement="right" title="Remove from cart"><i class="fa fa-times"></i></a>
                                    <div class="image"><?php echo $this->tag->image(array('product/products/2GIG-PIRMotionDetector_CLR_300.png', 'class' => '', 'alt' => '', 'title' => '')); ?></div>                                    
                                        <div class="info">
                                            <p><a href="#">2GIG Wireless PIR Motion Detector</a></p>
                                            <p class="qtyPrice">1 X $69.99</p>
                                    </div><!--/ .info -->
                                </div><!--/ .details -->
                            </li>
                            <li class="product" id="">
                                <div class="details">
                                    <a href="#" id="" class="removeItem" data-toggle="tooltip" data-placement="right" title="Remove from cart"><i class="fa fa-times"></i></a>
                                    <div class="image"><?php echo $this->tag->image(array('product/products/2GIG-Keyfob_CLR_300.png', 'class' => '', 'alt' => '', 'title' => '')); ?></div>
                                    <div class="info">
                                        <p><a href="#">2GIG Wireless Keyfob Remote</a></p>
                                        <p class="qtyPrice">2 X $39.99</p>
                                    </div><!--/ .info -->
                                </div><!--/ .details -->
                            </li>
                            <li class="" id="subtotal">Subtotal:<span>$349.46</span></li>
                            <li class="" id=""><a href="#" class="button grey block">View Shopping Cart</a></li>
                            <li class="" id=""><a href="#" class="button green block">Proceed to Checkout</a></li>
                        </ul>
                    </li>
                    <li id="" class=""><a href="#">My Account</a></li>
                    <li id="" class=""><a href="#">Log Out</a></li>
                </ul> 
            </div><!--/ #topMenuRight -->
        </div><!--/ #desktopTopMenu -->
    </div><!--/ .container -->
</div><!--/ #pageTopDesktop -->
    

<div id="desktopMenu" class="hidden-xs hidden-sm"> 
    <div class="container">
        <div id="desktopBranding">
                <a href="#"><?php echo $this->tag->image(array('img/guardianProtectionSourceLogo-HomeSecurityArizona.png', 'class' => '', 'alt' => '', 'title' => '')); ?></a>
        </div><!--/ #desktopBranding -->

        <div id="desktopNavigation">
            <ul>
                <li class="active" id=""><a href="#" class="">Home</a></li>
                <li class="service" id=""><a href="#" class="">Service Plans</a></li>
                <li class="drop" id=""><a href="#" class="">Equipment</a>
                    <ul>
                        <a href="#" class=""><li class="" id="">Control Panels</li></a>
                        <a href="#" class=""><li class="" id="">Sensors & Detectors</li></a>
                        <a href="#" class=""><li class="" id="">Remotes & Life Safety</li></a>
                        <a href="#" class=""><li class="" id="">Fire & Environmental</li></a>
                        <a href="#" class=""><li class="" id="">Energy Management</li></a>
                        <a href="#" class=""><li class="" id="">Home Automation</li></a>
                        <a href="#" class=""><li class="" id="">Cameras</li></a>
                    </ul>
                </li>
                <li class="drop" id=""><a href="#" class="">Services</a>
                    <ul>
                        <a href="#" class=""><li class="" id="">Professional Install</li></a>
                        <a href="#" class=""><li class="" id="">Troubleshooting</li></a>
                        <a href="#" class=""><li class="" id="">Service & Repairs</li></a>
                        <a href="#" class=""><li class="" id="">Consultation</li></a>
                    </ul>
                </li>
                <li class="drop" id=""><a href="#" class="">Features</a>
                    <ul>
                        <a href="#" class=""><li class="" id="">Home Automation</li></a>
                        <a href="#" class=""><li class="" id="">Energy Management</li></a>
                        <a href="#" class=""><li class="" id="">Remote Access Control</li></a>
                        <a href="#" class=""><li class="" id="">Video Cameras</li></a>
                        <a href="#" class=""><li class="" id="">Personal Emergency Remote</li></a>
                    </ul>
                </li>
                <li class="drop" id=""><a href="#" class="">About</a>
                    <ul>
                        <a href="#" class=""><li class="" id="">Company</li></a>
                        <a href="#" class=""><li class="" id="">Guardian Monitoring</li></a>
                        <a href="#" class=""><li class="" id="">Testimonials</li></a>
                        <a href="#" class=""><li class="" id="">Our Story</li></a>
                        <a href="#" class=""><li class="" id="">Careers</li></a>
                    </ul>
                </li>
                <li class="drop" id=""><a href="#" class="">Media</a>
                    <ul>
                        <a href="#" class=""><li class="" id="">Blog</li></a>
                        <a href="#" class=""><li class="" id="">Videos</li></a>
                        <a href="#" class=""><li class="" id="">Downloads</li></a>
                    </ul>
                </li>
                <li class="drop" id=""><a href="#" class="">Support</a>
                    <ul>
                        <a href="#" class=""><li class="" id="">How It Works</li></a>
                        <a href="#" class=""><li class="" id="">Top 10 Questions</li></a>
                        <a href="#" class=""><li class="" id="">Monitoring Basics</li></a>
                        <a href="#" class=""><li class="" id="">Refer A Friend</li></a>
                        <a href="#" class=""><li class="" id="">F.A.Q.s</li></a>
                        <a href="#" class=""><li class="" id="">User Guides</li></a>
                        <a href="#" class=""><li class="" id="">Contact Us</li></a>
                    </ul>
                </li>
            </ul>
        </div><!--/ #desktopNavigation -->
    </div><!--/ .container -->
</div><!--/ #desktopMenu -->


<div id="pageTopMobile" class="hidden-md hidden-lg">
    <div id="mobileTopMenu">
        <h2>Home Security & Home Automation Simplified! <a href="tel:#">1(800)459-2938</a></h2>
    </div><!--/ #mobileTopMenu -->
</div><!--/ #pageTopMobile -->


<div id="mobileMenu" class="hidden-md hidden-lg">
    <div class="container">
        <div id="mobileNavigation">
            <div class="mobileLeft">
                <a href="#" id="open-left" class=""><i class="fa fa-bars"></i></a>
            </div><!--/ .mobileLeft -->
            
            <div class="mobileBranding">
                <a href="#"><?php echo $this->tag->image(array('img/guardianProtectionSourceLogoMobile-HomeSecurityArizona.png', 'class' => '', 'alt' => '', 'title' => '')); ?></a>
            </div><!--/ .mobileBranding -->
            
            <div class="mobileRight">
                <a href="#" id="open-right" class=""><i class="fa fa-shopping-cart"></i></a>
            </div><!--/ .mobileRight -->
        </div><!--/ #mobileNavigation -->
    </div><!--/ .container -->
</div><!--/ #mobileMenu -->


<div id="pageContent">
    <div class="container">
        
        <section id="homePage">
            <div id="homeSlider" class="row">
                <div id="slideMobileAccess" class="slide col-md-12">
                    <h2>Complete Control From Anywhere, Anytime.</h2>
                    <?php echo $this->tag->image(array('img/slider-mobileAccess.png', 'class' => '', 'alt' => '', 'title' => '')); ?>
                    <h4>Wirelessly & remotely control your home automation system from anywhere at anytime. Use our Custom Home Security online Tool to build and package a security system just for your home.</h4>
                    <a href="#" class="button orange">Tell Me More &nbsp;<i class="fa fa-angle-right"></i></a>
                </div><!--/ #slideMobileAccess .slide .col-md-12 -->
                
                <div id="slideMobileAccess" class="slide col-md-12">
                    <h2>Complete Control From Anywhere, Anytime.</h2>
                    <?php echo $this->tag->image(array('img/slider-mobileAccess.png', 'class' => '', 'alt' => '', 'title' => '')); ?>
                    <h4>Wirelessly & remotely control your home automation system from anywhere at anytime. Use our Custom Home Security online Tool to build and package a security system just for your home.</h4>
                    <a href="#" class="button blue">Customize Your System &nbsp;<i class="fa fa-angle-right"></i></a>
                </div><!--/ #slideMobileAccess .slide .col-md-12 -->
                
                <div id="slideMobileAccess" class="slide col-md-12">
                    <h2>Complete Control From Anywhere, Anytime.</h2>
                    <?php echo $this->tag->image(array('img/slider-mobileAccess.png', 'class' => '', 'alt' => '', 'title' => '')); ?>
                    <h4>Wirelessly & remotely control your home automation system from anywhere at anytime. Use our Custom Home Security online Tool to build and package a security system just for your home.</h4>
                    <a href="#" class="button green">Build Your Custom System &nbsp;<i class="fa fa-angle-right"></i></a>
                </div><!--/ #slideMobileAccess .slide .col-md-12 -->
            </div><!--/ #homeSlider .row -->
            
            <div id="featureShowcase" class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading blue">
                            &nbsp;
                        </div><!--/ .panel-heading .blue -->
                        
                        <div class="panel-body">
                            <?php echo $this->tag->image(array('img/homeAutomation.png', 'class' => '', 'alt' => '', 'title' => '')); ?>
                            <h3>Home Automation</h3>
                            <p><a href="#">Click here to learn more...</a></p>
                        </div><!--/ .panel-body -->
                    </div><!--/ .panel .panel-default -->
                </div><!--/ .col-sm-4 -->
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading green">
                            &nbsp;
                        </div><!--/ .panel-heading .green -->
                        
                        <div class="panel-body">
                            <?php echo $this->tag->image(array('img/energyManagement.png', 'class' => '', 'alt' => '', 'title' => '')); ?>
                            <h3>Energy Management</h3>
                            <p><a href="#">Click here to learn more...</a></p>
                        </div><!--/ .panel-body -->
                    </div><!--/ .panel .panel-default -->
                </div><!--/ .col-sm-4 -->
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading orange">
                            &nbsp;
                        </div><!--/ .panel-heading .orange -->
                        
                        <div class="panel-body">
                            <?php echo $this->tag->image(array('img/remoteAccess.png', 'class' => '', 'alt' => '', 'title' => '')); ?>
                            <h3>Remote Access</h3>
                            <p><a href="#">Click here to learn more...</a></p>
                        </div><!--/ .panel-body -->
                    </div><!--/ .panel .panel-default -->
                </div><!--/ .col-sm-4 -->
            </div><!--/ #featureShowcase .row -->
            
        </section><!--/ #homePage -->
        
        </div><!--/ .container -->
</div><!--/ #pageContent -->


    <div id="pageBottom">
    
    <footer>
        <div class="container">
            <section id="footerTagline">
                <h2>The Easiset Way to Buy Home Security & Automation Online.</h2>
            </section><!--/ #footerTagline -->

            <section id="footerLinks">
                <div class="row">
                    <div class="col-sm-4">
                        <ul>
                            <h4>Quick Links</h4>
                            <li><a href="#">Service Plans</a></li>
                            <li><a href="#">Equipment</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div><!--/ .col-md-4 -->
                    
                    <div class="col-sm-4">
                        <ul>
                            <h4>Support</h4>
                            <li><a href="#">How It Works</a></li>
                            <li><a href="#">Top 10 Questions</a></li>
                            <li><a href="#">Monitoring Basics</a></li>
                            <li><a href="#">Refer A Friend</a></li>
                            <li><a href="#">User Guides</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div><!--/ .col-md-4 -->
                    
                    <div class="col-sm-4">
                        <ul>
                            <h4>Site Info</h4>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Payment Information</a></li>
                            <li><a href="#">DocuSign Contract</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div><!--/ .col-md-4 -->
                </div><!--/ .row -->
            </section><!--/ #footerLinks -->

            <section id="footerLogos">
                <ul id="creditCardLogos">
                    <li><?php echo $this->tag->image(array('img/ccVisa.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                    <li><?php echo $this->tag->image(array('img/ccMastercard.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                    <li><?php echo $this->tag->image(array('img/ccDiscover.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                    <li><?php echo $this->tag->image(array('img/ccAmex.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                </ul><!--/ #creditCardLogos -->
                
                <ul id="trustLogos">
                    <li><?php echo $this->tag->image(array('img/docusign.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                    <li><?php echo $this->tag->image(array('img/verisign.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                    <li><?php echo $this->tag->image(array('img/bbb.png', 'class' => '', 'alt' => '', 'title' => '')); ?></li>
                </ul><!--/ #trustLogos -->
            </section><!--/ #footerLogos -->
            
            <section id="footerRights">
                <p>Guardian Protection Source, LLC &copy; 2014. All Rights Reserved.</p>
            </section><!--/ #footerRights -->
        </div><!--/ .container -->
    </footer>
    
</div><!--/ #pageBottom -->

</div><!--/ #pageWrap .snap-content -->
 <!--/ ******** Page Wrapper for Mobile Snap.js Menus ******** -->
    
    
    
<!-- ********** MODALS ********* -->
    
<!-- Modal -->
<div class="modal fade" id="testModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div><!--/ .modal-header -->
            
            <div class="modal-body">
                <h1>Body</h1>
            </div><!--/ .modal-body -->
            
            <div class="modal-footer">
                <button type="button" class="button pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="button blue">Save changes</button>
            </div><!--/ .modal-footer -->
        </div><!--/ .modal-content -->
    </div><!--/ .modal-dialog -->
</div><!--/ .modal -->
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php echo $this->assets->outputJs(); ?>


    </body>
</html>
