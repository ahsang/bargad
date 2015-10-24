<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <title>Make Frontend Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo includes_dir;?>common-files/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php echo includes_dir;?>common-files/css/style.min.css"/>
    <link rel="stylesheet" href="<?php echo includes_dir;?>common-files/css/custom.css"/>
    <link rel="stylesheet" id="scheme-source" href="<?php echo includes_dir;?>common-files/css/schemes/dark.css" />
    <!-- [if lt IE 9]>
      <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->

    <link rel="stylesheet" type="text/css" href="<?php echo includes_dir;?>common-files/plugins/accordian/src/css/accordion-slider.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo includes_dir;?>common-files/plugins/accordian/examples/css/examples.css" media="screen"/>

    <script src="<?php echo includes_dir;?>common-files/plugins/jquery/jquery-1.11.1.min.js"></script>
    
    <script type="text/javascript" src="<?php echo includes_dir;?>common-files/plugins/accordian/dist/js/jquery.accordionSlider.min.js"></script>

    <script type="text/javascript">
      jQuery(document).ready(function($) {
        // instantiate the accordion
        $('#example1').accordionSlider({
          width: "100%",
          height: "80%",
          responsiveMode: 'auto',
          visiblePanels: 4,
          closePanelsOnMouseOut: true,
          autoplay: false,
          // breakpoints: {
          //     960: {visiblePanels: 4},
          //     800: {visiblePanels: 4, orientation: 'vertical', aspectRatio: 0.1},
          //     650: {visiblePanels: 4},
          //     500: {visiblePanels: 4, orientation: 'vertical', aspectRatio: 0.1}
          // }
        });
        var accordion = $('#example1').data('accordionSlider');
        $("#slider").height(accordion.$panelsContainer[0].clientHeight);
        console.log(accordion.$panelsContainer[0].clientHeight);

        // change the responsive mode
        
      });
    </script>
  </head>
  <body>
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->

    <!--  Begin Topbar simple -->
    <div class="topnav fixed-topnav transparent">
      <form action="#" class="form-search" id="top-search" method="get" role="form">
        <div class="full-width">
          <div class="search-inner clearfix">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search" name="s" class="search-input" autocomplete="off">
            <input type="submit" value="Search">
            <div class="search-close">
              <a href="#"><i class="line-icon-close"></i></a>
            </div>
          </div>
        </div>
      </form>
      <div class="section">
        <div id="topbar-hold" class="nav-hold full-width">
          <nav class="navbar" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <!-- Site Name -->
              <a class="site-name navbar-brand" href="<?echo includes_dir;?>common-files/homepage/index-slider-parallax.html"></a>
            </div>
            <!-- Main Navigation menu Starts -->
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown full-width">
                  <a href="#" class="dropdown-toggle top-menu" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Home</a>
                  <ul class="dropdown-menu grid-4 ">
                    <li>
                      <ul>
                        <li><span class="menu-title">Multi Pages</span></li>
                        <li><a href="../homepage/index-bg-slider-fullheight.html">Background Slider</a></li>
                        <li><a href="../homepage/index-corporate.html">Corporate</a></li>
                        <li><a href="../homepage/index-image-parallax.html">Parallax Image</a></li>
                        <li><a href="../homepage/index-image-parallax-fullheight.html">Parallax FullHeight</a></li>
                        <li><a href="../homepage/index-text-rotator.html">Text rotator</a></li>
                        <li><a href="../homepage/index-animated-fullheight.html">Background Animated</a></li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>&nbsp;</li>
                        <li><a href="../homepage/onepage-slider.html">Slider</a></li>
                        <li><a href="../homepage/index-slider-fullheight.html">Slider Full Height</a></li>
                        <li><a href="../homepage/index-slider-parallax.html">Slider Revolution Parallax</a></li>
                        <li><a href="../homepage/index-slider-fullheight-with-space.html">Page Bordered</a></li>
                        <li><a href="../homepage/index-video-fullheight-play-btn.html">Video With Play Button</a></li>
                        <li><a href="../homepage/index-video-fullheight.html">Video Autoplay</a></li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li><span class="menu-title">One Page</span></li>
                        <li><a href="../onepage/onepage-bg-slider-fullheight.html">Background Slider</a></li>
                        <li><a href="../onepage/onepage-corporate.html">Corporate</a></li>
                        <li><a href="../onepage/onepage-image-parallax.html">Parallax Image</a></li>
                        <li><a href="../onepage/onepage-image-parallax-fullheight.html">Parallax FullHeight</a></li>
                        <li><a href="../onepage/onepage-text-rotator.html">Text rotator</a></li>
                        <li><a href="../onepage/onepage-animated-fullheight.html">Background Animated</a></li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>&nbsp;</li>
                        <li><a href="../onepage/onepage-slider.html">Slider</a></li>
                        <li><a href="../onepage/onepage-slider-fullheight.html">Slider Full Height</a></li>
                        <li><a href="../onepage/onepage-slider-parallax.html">Slider Revolution Parallax</a></li>
                        <li><a href="../onepage/onepage-slider-fullheight-with-space.html">Page Bordered</a></li>
                        <li><a href="../onepage/onepage-video-fullheight-play-btn.html">Video With Play Button</a></li>
                        <li><a href="../onepage/onepage-video-fullheight.html">Video Autoplay</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown full-width">
                  <a href="#" class="dropdown-toggle top-menu" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="full-li">
                      <p>Make Theme comes with 70+ amazing demos pages ready to use.</p>
                      <a href="<?php echo includes_dir;?>start.html" class="btn-navbar btn btn-rounded hover-effect">See All Pages</a>
                    </li>
                    <li class="column">
                      <a href="#" class="menu-title">Services</a>
                      <ul>
                        <li><a href="../services/services-2-columns.html">Services 2 Columns</a></li>
                        <li><a href="../services/services-3-columns.html">Services 3 Columns</a></li>
                        <li><a href="../services/services-tabs.html">Services Tabs</a></li>
                        <li><a href="../services/services-3-columns-dark.html">Services Dark</a></li>
                      </ul>
                    </li>
                    <li class="column">
                      <a href="#" class="menu-title">Team</a>
                      <ul>
                        <li><a href="../team/team-rounded.html">Team Rounded</a></li>
                        <li><a href="../team/team-square.html">Team Square</a></li>
                        <li><a href="../team/team-dark.html">Team Dark</a></li>
                        <li><a href="../team/team-single.html">Team Single</a></li>
                      </ul>
                    </li>
                    <li class="column">
                      <a href="#" class="menu-title">Pricing</a>
                      <ul>
                        <li><a href="../pricing-table/pricing-3-columns.html">Pricing 3 Columns</a></li>
                        <li><a href="../pricing-table/pricing-4-columns.html">Pricing 4 Columns</a></li>
                        <li><a href="../pricing-table/pricing-no-space.html">Pricing Collapsed</a></li>
                        <li><a href="../pricing-table/pricing-with-icon.html">Pricing with Icons</a></li>
                      </ul>
                    </li>
                    <li class="column">
                      <a href="#" class="menu-title">Contact</a>
                      <ul>
                        <li><a href="../contact/contact-full-map.html">Contact Full Map</a></li>
                        <li><a href="../contact/contact-3-columns.html">Contact 3 Columns</a></li>
                        <li><a href="../contact/contact-map-bottom.html">Contact Map Bottom</a></li>
                        <li><a href="../contact/contact-map-side.html">Contact Side Map</a></li>
                      </ul>
                    </li>
                    <li class="column">
                      <a href="#" class="menu-title">User</a>
                      <ul>
                        <li><a href="../user/user-login.html">Login</a></li>
                        <li><a href="../user/user-register.html">Register</a></li>
                        <li><a href="../user/user-password-recover.html">Password Recover</a></li>
                        <li><a href="../user/user-account.html">My Account</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="menu-title">Various</a>
                      <ul>
                        <li><a href="../various/page-coming-soon.html">Under Construction</a></li>
                        <li><a href="../various/page-404.html">Error 404</a></li>
                        <li><a href="../various/page-faq.html">FAQ</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown full-width">
                  <a href="#" class="dropdown-toggle top-menu" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Portfolio</a>
                  <ul class="dropdown-menu grid-4">
                    <li class="full-li">
                      <p>You can change header style easily by changing element or using builder.</p>
                      <a href="<?php echo includes_dir;?>builder/index.html" class="btn-navbar btn btn-rounded hover-effect">Customize with Builder</a>
                    </li>
                    <li>
                      <a href="#" class="menu-title">Text and Space</a>
                      <ul>
                        <li><a href="../portfolio/portfolio-boxed-text-2-columns.html">Boxed 2 Columns</a></li>
                        <li><a href="../portfolio/portfolio-boxed-text-3-columns.html">Boxed 3 Columns</a></li>
                        <li><a href="../portfolio/portfolio-boxed-text-4-columns.html">Boxed 4 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-text-3-columns.html">Wide 3 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-text-4-columns.html">Wide 4 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-text-5-columns.html">Wide 5 Columns</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="menu-title">Gallery with Space</a>
                      <ul>
                        <li><a href="../portfolio/portfolio-boxed-2-columns-with-space.html">Boxed 2 Columns</a></li>
                        <li><a href="../portfolio/portfolio-boxed-3-columns-with-space.html">Boxed 3 Columns</a></li>
                        <li><a href="../portfolio/portfolio-boxed-4-columns-with-space.html">Boxed 4 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-3-columns-with-space.html">Wide 3 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-4-columns-with-space.html">Wide 4 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-5-columns-with-space.html">Wide 5 Columns</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="menu-title">Gallery No Space</a>
                      <ul>
                        <li><a href="../portfolio/portfolio-boxed-2-columns-no-space.html">Boxed 2 Columns</a></li>
                        <li><a href="../portfolio/portfolio-boxed-3-columns-no-space.html">Boxed 3 Columns</a></li>
                        <li><a href="../portfolio/portfolio-boxed-4-columns-no-space.html">Boxed 4 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-3-columns-no-space.html">Wide 3 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-4-columns-no-space.html">Wide 4 Columns</a></li>
                        <li><a href="../portfolio/portfolio-wide-5-columns-no-space.html">Wide 5 Columns</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="menu-title">Single Project</a>
                      <ul>
                        <li><a href="../portfolio/portfolio-single-full-height.html">Full Height</a></li>
                        <li><a href="../portfolio/portfolio-single-full-width.html">Full Width Slider</a></li>
                        <li><a href="../portfolio/portfolio-single-small.html">Small Slider</a></li>
                        <li><a href="../portfolio/portfolio-single-boxed.html">Boxed Slider</a></li>
                        <li><a href="../portfolio/portfolio-single-fixed-text.html">Fixed Text</a></li>
                        <li><a href="../portfolio/portfolio-single-gallery.html">Gallery</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle top-menu" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-delay="0" data-hover="dropdown" data-close-others="false">Classic</a>
                      <ul class="dropdown-menu">
                        <li><a href="../blog/blog-classic-left.html">Sidebar Left</a></li>
                        <li><a href="../blog/blog-classic-right.html">Sidebar Right</a></li>
                        <li><a href="../blog/blog-classic-fullwidth.html">Fullwidth</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-delay="0" data-hover="dropdown" data-close-others="false">Masonry</a>
                      <ul class="dropdown-menu">
                        <li><a href="../blog/blog-masonry-2-columns.html">2 Columns</a></li>
                        <li><a href="../blog/blog-masonry-3-columns.html">3 Columns</a></li>
                        <li><a href="../blog/blog-masonry-4-columns.html">4 Columns</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-delay="0" data-hover="dropdown" data-close-others="false">Grid</a>
                      <ul class="dropdown-menu">
                        <li><a href="../blog/blog-grid-2-columns.html">2 Columns</a></li>
                        <li><a href="../blog/blog-grid-3-columns.html">3 Columns</a></li>
                        <li><a href="../blog/blog-grid-4-columns.html">4 Columns</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-delay="0" data-hover="dropdown" data-close-others="false">Single</a>
                      <ul class="dropdown-menu">
                        <li><a href="../blog/blog-single-fullwidth.html">Full Width</a></li>
                        <li><a href="../blog/blog-single-sidebar-left.html">Sidebar Left</a></li>
                        <li><a href="../blog/blog-single-sidebar-right.html">Sidebar Right</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle top-menu" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Ecommerce</a>
                  <ul class="dropdown-menu">
                    <li><a href="../ecommerce/ecommerce-products-list.html">Products List</a></li>
                    <li><a href="../ecommerce/ecommerce-product-details.html">Product Page</a></li>
                    <li><a href="../ecommerce/ecommerce-shopping-cart.html">Shopping Cart</a></li>
                    <li><a href="../ecommerce/ecommerce-faq.html">FAQ</a></li>
                    <li><a href="../ecommerce/ecommerce-terms.html">Terms &amp; Conditions</a></li>
                    <li><a href="../ecommerce/ecommerce-wishlist.html">Wishlist</a></li>
                  </ul>
                </li>
                <li class="dropdown full-width">
                  <a href="#" class="dropdown-toggle top-menu" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Elements</a>
                  <ul class="dropdown-menu grid-4 ">
                    <li>
                      <ul>
                        <li><span class="menu-title">Common Elements</span></li>
                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                        <li><a href="animations.html">Animations</a></li>
                        <li><a href="accordion-tabs.html">Tabs &amp; Accordion</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="grid.html">Grid System</a></li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>&nbsp;</li>
                        <li><a href="progress-bar.html">Progress Bars</a></li>
                        <li><a href="forms.html">Forms</a></li>
                        <li><a href="tables.html">Tables</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="helper-classes.html">Helper Classes</a></li>
                        <li>&nbsp;</li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li><span class="menu-title">Navigation &amp; Footer</span></li>
                        <li><a href="navigations-overview.html">Navigations Overview</a></li>
                        <li><a href="navigation-address-search-colored.html">Adress &amp; Search</a></li>
                        <li><a href="navigation-phone-social.html">Phone &amp; Social</a></li>
                        <li><a href="navigation-white.html">Simple White</a></li>
                        <li><a href="navigation-logo-center-transparent.html">Logo Center</a></li>
                        <li><a href="navigation-dark-not-fixed.html">Dark Not Fixed</a></li>
                        <li><a href="navigation-transparent-fullwidth.html">Fullwidth Option</a></li>
                      </ul>
                    </li>
                    <li>
                      <ul>
                        <li>&nbsp;</li>
                        <li><a href="footers-overview.html">Footers Overview</a></li>
                        <li><a href="footer-dark-3-columns.html">3 Columns Dark</a></li>
                        <li><a href="footer-light-3-columns.html">3 Columns Light</a></li>
                        <li><a href="footer-dark-newsletter.html">Subscribe newsletter</a></li>
                        <li><a href="footer-dark-contact-form.html">With contact form</a></li>
                        <li><a href="footer-dark-social.html">Social &amp; Logo Only</a></li>
                        <li><a href="footer-dark-copyright.html">Copyright Only</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="li-search"><a href="#" class="toggle-search"><i class="line-icon-magnifier"></i></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle top-menu lang" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">EN</a>
                  <ul class="dropdown-menu">
                    <li><a data-lang="es" class="lang" href="#">ES</a></li>
                    <li><a data-lang="fr" class="lang" href="#">FR</a></li>
                    <li><a data-lang="it" class="lang" href="#">IT</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- Main Navigation menu ends-->
          </nav>
        </div>
      </div>
    </div>
    <!--  End Topbar simple -->
    
    <!-- Begin Top Image -->
    <header class="center header-sm bg-dark parallax" data-img="bg/smoke2.png">
      <div class="container">
          <!-- <h4 class="header-title center"><br></h4> -->
      </div>
        
      
    </header>
    <!-- End Top Image -->

        
        <!-- <div class="col-md-12" > -->
    <div class="full-width bg-dark" id="slider">
      <div id="example1" class="" style="padding-bottom:10px;z-index:100">
          <div class="as-panels" >

            <!-- Panel 1 -->
            <div class="as-panel" >
              <a href="http://bqworks.com">
                <img class="as-background"  data-src="<?echo includes_dir;?>common-files/images/home/peace.png" />
              </a>

              <div class="as-layer as-opened  "
                 data-horizontal="center" data-vertical="70%" data-width="80%">
                 <img src="<?echo includes_dir;?>common-files/images/home/text_peace.png" style="width:100%;"/>
              </div>
              <div class="as-layer as-closed  "
                 data-horizontal="bottomLeft" data-vertical="80%" data-horizontal="5%" style="width:100%;">
                 <h3 class="">Peace and Youth <br>Co operation</h3>
              </div>


              <p class="as-layer as-opened as-black as-padding" 
                data-position="bottomLeft"
                data-show-transition="up" data-hide-transition="down">
                Lorem ipsum dolor sit amet <span class="hide-small-screen">, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> <span class="hide-medium-screen">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>

                <!-- Panel 2 -->
                <div class="as-panel">
              <a href="http://bqworks.com">
                <img class="as-background"  data-src="<?echo includes_dir;?>common-files/images/home/women.png" />
              </a>

              <div class="as-layer as-closed  "
                 data-horizontal="bottomLeft" data-vertical="80%" data-horizontal="5%" style="width:100%;">
                 <h3 class="">Women <br>Empowerment</h3>
              </div>

              <p class="as-layer as-opened as-black as-padding" 
                data-position="bottomLeft"
                data-show-transition="up" data-hide-transition="down">
                Lorem ipsum dolor sit amet <span class="hide-small-screen">, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> <span class="hide-medium-screen">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>

                <!-- Panel 3 -->
                <div class="as-panel">
              <a href="http://bqworks.com">
                <img class="as-background"  data-src="<?echo includes_dir;?>common-files/images/home/youth.png" />
              </a>

              <div class="as-layer as-closed  "
                 data-horizontal="bottomLeft" data-vertical="80%" data-horizontal="5%" style="width:100%;">
                 <h3 class="">Youth Participation <br>and Engagement</h3>
              </div>


              <p class="as-layer as-opened as-black as-padding" 
                data-position="bottomLeft"
                data-show-transition="up" data-hide-transition="down">
                Lorem ipsum dolor sit amet <span class="hide-small-screen">, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> <span class="hide-medium-screen">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>

                <!-- Panel 4 -->
                <div class="as-panel">
              <a href="http://bqworks.com">
                <img class="as-background"  data-src="<?echo includes_dir;?>common-files/images/home/policy.png" />
              </a>

              <div class="as-layer as-closed  "
                 data-horizontal="bottomLeft" data-vertical="80%" data-horizontal="5%" style="width:100%;">
                 <h3 class="">Youth Policy <br>and Advocacy</h3>
              </div>


              <p class="as-layer as-opened as-black as-padding" 
                data-position="bottomLeft"
                data-show-transition="up" data-hide-transition="down">
                Lorem ipsum dolor sit amet <span class="hide-small-screen">, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span> <span class="hide-medium-screen">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
              </p>
            </div>

                <!-- Panel 5 -->
                
          </div>
      </div>
    </div>
      <!-- </div> -->
      <div class="section section-copyright bg-dark" >
        <div class="full-width">
          <div class="row">
            <div class="col-md-6">
              <p>Ahsan Gondal &copy; 2015</p>
            </div>
            <div class="col-md-6">
              <p class="copyright-simple-menu">
                <span>Home</span>
                <span>Services</span>
                <span>Pricing</span>
                <span>Team</span>
                <span>Support</span>
              </p>
            </div>
          </div>
        </div>
    </div>
      <!-- <div class="row"> -->
      
          
        <!-- </div> -->

    

    <!-- Begin Footer 3 columns Dark -->
    
    <!-- End Footer 3 columns Dark -->

    <!-- Begin Copyright Dark -->
    
    <!-- End Copyright Dark -->
    
    <script src="<?php echo includes_dir;?>common-files/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?php echo includes_dir;?>common-files/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo includes_dir;?>common-files/plugins/modernizr/modernizr.js"></script>
    <script src="<?php echo includes_dir;?>common-files/plugins/retina/retina.min.js"></script>
    <script src="<?php echo includes_dir;?>common-files/plugins/appear/jquery.appear.min.js"></script>
    <script src="<?php echo includes_dir;?>common-files/plugins/smoothscroll/smoothscroll.min.js"></script>
    <script src="<?php echo includes_dir;?>common-files/plugins/smart-menu/jquery.smartmenus.min.js"></script>
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="<?php echo includes_dir;?>common-files/plugins/parallax/scripts/jquery.parallax-1.1.3.js"></script>
    <!-- END PAGE SCRIPTS -->
    <script src="<?php echo includes_dir;?>common-files/js/application.js"></script>


    <script>
        jQuery(document).ready(function($) {
            $('.parallax').css("background-position", "50% 700px");
            // Loop through elements children to find & set the biggest height
            

            // Set the container height
            // alert($("#slider").height());

        });
    </script>

  </body>
</html>
