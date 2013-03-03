<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        <?php echo $template['title'];?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/img/favicon.ico');?>" rel="shortcut icon" type="image/x-icon">
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/responsive.css" rel="stylesheet">
    <!--    <link href="../assets/css/style.css" rel="stylesheet">-->

    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/theme-style.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
    <![endif]-->
    <link href="../assets/css/colorbox.css"
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.selectbox.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url("/assets/js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("/assets/js/jquery.colorbox-min.js") ?>"></script>
<script src="<?php echo base_url("/assets/js/scrolltotopcontrol.js") ?>"></script>
<script src="<?php echo base_url("/assets/js/custom.js") ?>"></script>
<body class="page page-index">
<div id="navigation" class="wrapper">
    <div class="navbar  navbar-static-top">

        <!--Header & Branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row-fluid">
                    <div class="span2">
                        <!--branding/logo-->
                        <a class="brand" href="index.htm" title="Home">
                            <!--                            <h1><span>App</span>Strap<span>.</span></h1>-->
                            <img src="<?php echo get_resize_image('assets/images/logo.png', 90, 65);?>"/>
                        </a>

                    </div>
                    <div class="span4">
                        <script type="text/javascript"><!--
                        google_ad_client = "ca-pub-2768322976891570";
                        /* Top Ads */
                        google_ad_slot = "5299636148";
                        google_ad_width = 728;
                        google_ad_height = 90;
                        //-->
                        </script>
                        <script type="text/javascript"
                                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                    </div>

                    <!--header rightside-->
                    <div class="span6">
                        <!--social media icons-->
                        <div class="social-media pull-right">
                            <!--@todo: replace with company social media details-->
                            <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-linkedin"></i></a> <a href="#"><i
                                class="icon-google-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-inner" style="margin-top:25px;">

                <!--mobile collapse menu button-->
                <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> </a>

                <!--user menu-->
                <ul class="nav user-menu pull-right">
                    <li><a href="signup.htm" class="btn btn-primary signup">Sign Up</a></li>
                    <li class="dropdown"><a href="login.htm" class="btn btn-primary dropdown-toggle login"
                                            id="login-drop" data-toggle="dropdown">Login</a>

                        <div class="dropdown-menu" role="menu" aria-labelledby="login-drop">
                            <form action="login.htm" class="form-inline" id="login-form-drop" role="menuitem">
                                <div class="input-append">
                                    <input type="text" class="input-small email" placeholder="Email">
                                    <input type="password" class="input-small password" placeholder="Password">
                                    <input type="button" class="btn btn-primary login" value="Login">
                                </div>
                            </form>
                            <span class="divider" role="menuitem"></span>
                            <small role="menuitem">Not a member? <a href="#" class="signup">Sign up now!</a></small>
                            <small role="menuitem"><a href="#">Forgotten password?</a></small>
                        </div>
                    </li>
                </ul>

                <!--everything within this div is collapsed on mobile-->
                <div class="nav-collapse collapse">

                    <!--main navigation-->
                    <ul class="nav" id="main-menu">
                        <li class="home-link"><a href="index.htm"><i class="icon-home hidden-phone"></i><span
                                class="visible-phone">Home</span></a></li>
                        <li class="dropdown"><a href="features.htm" class="dropdown-toggle menu-item" id="features-drop"
                                                data-toggle="dropdown">Features +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
                                <li class="mega-menu-wrapper" role="menuitem"><span class="menu-title">Mega Menu with links &amp; text items</span>
                                    <ul class="row-fluid" role="menu">
                                        <li class="span4" role="menuitem"><a href="features.htm"><img
                                                src="img/features/feature-1.png" alt="Feature 1"></a> <a
                                                href="features.htm" tabindex="-1" class="menu-item">Mobile Friendly</a>
                                            <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span>
                                        </li>
                                        <li class="span4" role="menuitem"><a href="features.htm"><img
                                                src="img/features/feature-2.png" alt="Feature 2"></a> <a
                                                href="features.htm" tabindex="-1" class="menu-item">24/7 Support</a>
                                            <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span>
                                        </li>
                                        <li class="span4" role="menuitem"><a href="features.htm"><img
                                                src="img/features/feature-4.png" alt="Feature 4"></a> <a
                                                href="features.htm" tabindex="-1" class="menu-item">99% Uptime</a>
                                            <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="pricing.htm" class="menu-item">Pricing</a></li>
                        <li><a href="customers.htm" class="menu-item">Customers</a></li>
                        <li class="dropdown"><a href="about.htm" class="dropdown-toggle" id="about-drop"
                                                data-toggle="dropdown">About +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                                <li role="menuitem"><a href="about.htm" tabindex="-1" class="menu-item">About Us</a>
                                </li>
                                <li role="menuitem"><a href="team.htm" tabindex="-1" class="menu-item">Our Team</a></li>
                                <li role="menuitem"><a href="contact.htm" tabindex="-1" class="menu-item">Contact</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="blog.htm" class="dropdown-toggle" id="blog-drop"
                                                data-toggle="dropdown">Blog +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="blog-drop">
                                <li role="menuitem"><a href="blog.htm" tabindex="-1" class="menu-item">Right Sidebar</a>
                                </li>
                                <li role="menuitem"><a href="blog-leftbar.htm" tabindex="-1" class="menu-item">Left
                                    Sidebar</a></li>
                                <li role="menuitem"><a href="blog-post.htm" tabindex="-1" class="menu-item">Blog
                                    Post</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="pages.htm" class="dropdown-toggle" id="pages-drop"
                                                data-toggle="dropdown">More +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="pages-drop">
                                <li role="menuitem"><a href="login.htm" tabindex="-1" class="menu-item">Login</a></li>
                                <li role="menuitem"><a href="signup.htm" tabindex="-1" class="menu-item">Sign Up</a>
                                </li>
                                <li role="menuitem"><a href="starter.htm" tabindex="-1" class="menu-item">Starter
                                    Snippets</a></li>
                                <li role="menuitem"><a href="index-static.htm" tabindex="-1" class="menu-item">Homepage
                                    Static Banner</a></li>
                                <li role="menuitem"><a href="fixed-header.htm" tabindex="-1" class="menu-item">Fixed
                                    Header</a></li>
                                <li role="menuitem"><a href="colours.htm" tabindex="-1" class="menu-item">Theme
                                    Colours</a></li>
                                <li role="menuitem"><a href="elements.htm" tabindex="-1" class="menu-item">Theme
                                    Elements</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <script type="text/javascript"><!--
        google_ad_client = "ca-pub-2768322976891570";
        /* 728-15-link */
        google_ad_slot = "3839108145";
        google_ad_width = 728;
        google_ad_height = 15;
        //-->
        </script>
        <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>
    <?php echo $template['body'];?>
</div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span3 col">
                <div class="block contact-block">
                    <!--@todo: replace with company contact details-->
                    <h3>Contact Us</h3>
                    <address>
                        <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>

                        <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p>

                        <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.
                        </p>
                    </address>
                </div>
            </div>
            <div class="span5 col">
                <div class="block">
                    <h3>About Us</h3>

                    <p>Shikshahelp is a Fastest growing education portal in india, providing a unique and new approach
                        on the internet to learn things easier. With each section in shikshahelp there is a dedicated
                        team working behind to make it absolutely sufficient for the section's defined purpose.</p>
                </div>
            </div>
            <div class="span4 col">
                <div class="block newsletter">
                    <h3>Newsletter</h3>

                    <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
                    <!--@todo: replace with mailchimp code-->
                    <form class="form-inline">
                        <div class="input-append">
                            <input class="input-medium" type="text" placeholder="Email">
                            <button class="btn btn-primary" type="button">Go!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i
                    class="icon-chevron-up"></i></a></div>
            <!--@todo: replace with company copyright details-->
            <div class="subfooter">
                <div class="span6">
                    <p>Copyright 2012-2013 © <a href="<?php echo base_url(); ?>">ShikshaHelp</a></p>
                </div>
                <div class="span6">
                    <ul class="inline pull-right">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
