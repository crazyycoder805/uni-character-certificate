<!-- main header -->
<header class="main-header header-style-three">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <ul class="info-list clearfix">
                    <li><i class="icon-1 gradient-color"></i><a
                            href="mailto:info@policeverification.com">info@policeverification.com</a>
                    </li>
                    <li><i class="icon-3 gradient-color"></i>Open Hours: Mon - Fri 8.00 am - 6.00 pm</li>
                </ul>
                <div class="top-right">
                    <?php 
                                if (!isset($_SESSION['git_uni_police_username'])) {
                                ?>
                    <div class="login-box"><a href="login.php"><i class="icon-4 gradient-color"></i> Login</a></div>
                    <?php }else { ?>
                    <div class="login-box"><a href="userpanel/"><i class="icon-4 gradient-color"></i> My Panel</a></div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.php" style="color: black;">Police verification</a>
                    </figure>
                </div>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>

                                <li><a href="about.php">About Us</a></li>

                                <li><a href="contact.php">Special Reuquest</a></li>
                                <?php 
                                if (isset($_SESSION['git_uni_police_username'])) {
                                ?>
                                <li><a href="cc.php">Character Certificate</a></li>
                                <?php } ?>
                                <?php 
                                if (isset($_SESSION['git_uni_police_username'])) {
                                ?>
                                <li><a href="index.php?logout">Logout</a></li>

                                <?php }  else {?>
                                <li class="dropdown"><a href="#">Access</a>
                                    <ul>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="signup.php">Signup</a></li>

                                    </ul>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                    <div class="menu-right-content">
                        <div class="btn-box">
                            <a href="contact.php" class="theme-btn btn-one"><span>Let’s Contact</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.php" style="color: black;">Police verification</a>
                    </figure>
                </div>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                    </nav>
                    <div class="menu-right-content">
                        <div class="btn-box">
                            <a href="index.php" class="theme-btn btn-one"><span>Let’s Contact</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.php" style="color: black;">Police verification</a></div>
        <div class="menu-outer">
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Mirpur, AJK</li>
                <li><a href="tel:+12345678910">+12345678910</a></li>
                <li><a href="mailto:info@policeverification.com">info@policeverification.com</a></li>
            </ul>
        </div>

    </nav>
</div>
<!-- End Mobile Menu -->