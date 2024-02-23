
<header class="main-header <?php if ($ishomeHeader) { ?>header-style-two <?php } ?>">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="outer-container">
            <div class="clearfix">
                <div class="pull-left logo-box">
                    <div class="logo"><a href=""><img src="images/logo-2.png" alt="Maanita - Joinery & Interiors"; title="Maanita - Joinery & Interiors";></a></div>
                </div>
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler For Mobile-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-4"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li class="dropdown"><a href="services.php">Services</a>
                                    <ul>
                                        <li><a href="services.php">Services Type 01</a></li>
                                        <li><a href="services.php">Services Type 02</a></li>
                                        <li><a href="services.php">Interior Design</a></li>
                                        <li><a href="services.php">Architecture</a></li>
                                        <li><a href="services.php">Floor Plans</a></li>
                                        <li><a href="services.php">Lighting Decor</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Projects</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                    <?php if ($ishomeHeader == false) { ?>
                        <div class="social-outer-box">
                            <ul class="social-links">
                                
                                @include('admin.inc_social_list')
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index1.php" class="img-responsive"><img src="images/logo-small.png" alt="Maanita - Joinery & Interiors" title="Maanita - Joinery & Interiors"></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.php"><img src="images/nav-logo.png" alt="" title=""></a></div>
            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->