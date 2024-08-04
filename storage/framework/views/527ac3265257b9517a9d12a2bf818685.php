<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/globals.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/styleguide.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.svg')); ?>" type="image/x-icon">
</head>

<body>
    <div class="homepage">
        <header class="homepage-inner">
            <div class="logo-group-parent">
                <div class="logo-group" id="logoGroupContainer">
                    <div class="jammedical-wrapper">
                        <div class="jammedical">
                            <img class="vector-icon" alt="" src="<?php echo e(asset('images/Vector-8.svg')); ?>" />
                        </div>
                    </div>
                    <a class="arogya-24x7">Arogya 24x7</a>
                </div>
                <div class="nav-links-comp-parent">
                    <div class="nav-links-comp">
                        <a href="<?php echo e(route('home')); ?>" class="home">Home</a>
                    </div>
                    <div class="nav-links-comp1" id="navLinksCompContainer1">
                        <a href="<?php echo e(route('hp')); ?>" class="home1">Health Packages</a>
                    </div>
                    <div class="nav-links-comp2" id="navLinksCompContainer2">
                        <a href="<?php echo e(route('tl')); ?>" class="home2">Tests</a>
                    </div>
                    <div class="nav-links-comp3" id="navLinksCompContainer3">
                        <a href="<?php echo e(route('au')); ?>" class="home3">About Us</a>
                    </div>
                    <div class="nav-links-comp4">
                        <a href="#" class="home4">Support Us</a>
                    </div>
                </div>
                <div class="frame-parent">
                    <button class="book-appointment-wrapper">
                        <a href="<?php echo e(route('af')); ?>" class="book-appointment">Book Appointment</a>
                    </button>
                    <div class="frame-group">
                        <div class="frame-container">
                            <div class="ionlocation-outline-parent">
                                <img class="ionlocation-outline-icon" alt="" src="<?php echo e(asset('images/ion_location-outline.svg')); ?>" />

                                <div class="mumbai-wrapper">
                                    <a class="mumbai">Mumbai</a>
                                </div>
                            </div>
                            <div class="location-divider-wrapper">
                                <img class="location-divider-icon" alt="" src="<?php echo e(asset('images/Frame 90596.svg')); ?>" />
                            </div>
                        </div>
                        <div class="frame-div">
                            <img class="frame-child" alt="" src="<?php echo e(asset('images/Frame 1324-1.png')); ?>" />

                            <div class="hi-james-parent">
                                <a class="hi-james">Hi James</a>
                                <img class="user-dropdown-icon" id="user-dropdown-icon" alt="" src="<?php echo e(asset('images/Vector-7.svg')); ?>" />
                            </div>

                            <div class="dropdown-menu" id="dropdown-menu">
                                <ul>
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="./patient_dashboard_1.html">Dashboard</a></li>
                                    <li><a href="#">Settings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="homepage-child"></div>
        <section class="frame-section">
            <div class="frame-item"></div>
            <div class="frame-wrapper">
                <div class="iconamoonarrow-up-2-parent">
                    <div class="iconamoonarrow-up-2"></div>
                    <div class="frame-parent1">
                        <div class="hero-heading-content-parent">
                            <div class="hero-heading-content">
                                <h1 class="we-take-care-container">
                                    <p class="we-take-care">We Take Care</p>
                                    <p class="of-your-health">Of Your Health</p>
                                </h1>
                                <h3 class="schedule-your-test-container">
                                    <p class="schedule-your-test">
                                        Schedule Your Test Today and Take Control of Your Health
                                    </p>
                                    <p class="with-accurate-convenient">
                                        with Accurate Convenient Reliable servicess
                                    </p>
                                </h3>
                            </div>
                            <div class="frame-parent2">
                                <div class="hero-search-content-wrapper">
                                    <div class="hero-search-content">
                                        <img class="iconoirsearch" alt="" src="<?php echo e(asset('images/Vector-4.svg')); ?>" />

                                        <input class="search-health" placeholder="Search , Health Packages , Test and more" type="text" />
                                    </div>
                                </div>
                                <div class="hero-search-icon-right">
                                    <div class="iconoirsearch1">
                                        <img class="vector-icon1" alt="" src="<?php echo e(asset('images/Vector-6.svg')); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="indicators-parent">
                            <div class="indicators">
                                <img class="indicator-dots-icon" alt="" src="<?php echo e(asset('images/Ellipse 15.png')); ?>" />

                                <img class="indicator-dots-icon1" alt="" src="<?php echo e(asset('images/Ellipse 16.png')); ?>" />

                                <img class="indicator-dots-icon2" alt="" src="<?php echo e(asset('images/Ellipse 17.png')); ?>" />

                                <img class="indicator-dots-icon3" alt="" src="<?php echo e(asset('images/Ellipse 18.png')); ?>" />

                                <img class="indicator-dots-icon4" alt="" src="<?php echo e(asset('images/Ellipse 19.png')); ?>" />

                                <img class="indicator-dots-icon5" alt="" src="<?php echo e(asset('images/Ellipse 20.png')); ?>" />

                                <img class="indicator-dots-icon6" alt="" src="<?php echo e(asset('images/Ellipse 21.png')); ?>" />
                            </div>
                            <div class="happy-customers-wrapper">
                                <div class="happy-customers">500 + Happy Customers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vector-parent">
                <img class="frame-inner" alt="" src="<?php echo e(asset('images/Vector 11.png')); ?>" />

                <div class="image-count-indicators">
                    <div class="active-indicator-left-parent">
                        <div class="active-indicator-left"></div>
                        <div class="active-indicator-right"></div>
                    </div>
                    <div class="image-indicator-dots-wrapper">
                        <div class="image-indicator-dots"></div>
                    </div>
                    <div class="image-count-indicators-inner">
                        <div class="ellipse-div"></div>
                    </div>
                    <div class="image-count-indicators-child">
                        <div class="frame-child1"></div>
                    </div>
                    <div class="image-count-indicators-inner1">
                        <div class="frame-child2"></div>
                    </div>
                    <div class="image-count-indicators-inner2">
                        <div class="frame-child3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="health-package-divider-parent">
            <div class="health-checkup-packages-parent">
                <h1 class="health-checkup-packages">Health Checkup Packages</h1>
                <div class="new-basic-healt0packages-parent">
                    <div class="new-basic-healt0packages">
                        <div class="book-appointment-btn-wrapper">
                            <div class="book-appointment-btn">
                                <div class="book-appointment1">50 % Off</div>
                            </div>
                        </div>
                        <div class="new-basic-healt0packages-inner">
                            <div class="frame-parent3">
                                <div class="frame-parent4">
                                    <div class="frame-wrapper1">
                                        <div class="frame-parent5">
                                            <div class="frame-parent6">
                                                <div class="basic-health-package-parent">
                                                    <h2 class="basic-health-package">
                                                        Basic Health Package
                                                    </h2>
                                                    <div class="applicable-for-individuals">
                                                        Applicable for Individuals aged 18-100 years
                                                    </div>
                                                </div>
                                                <div class="frame-parent7">
                                                    <div class="frame-parent8">
                                                        <div class="package-icons-wrapper">
                                                            <div class="package-icons"></div>
                                                        </div>
                                                        <div class="report-time-icons">
                                                            <img class="primeclock-icon" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                        </div>
                                                        <div class="fast-reporting">Fast Reporting</div>
                                                    </div>
                                                    <div class="frame-parent9">
                                                        <div class="ellipse-wrapper">
                                                            <div class="frame-child4"></div>
                                                        </div>
                                                        <div class="sample-collection-icons">
                                                            <img class="mdirun-fast-icon" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                        </div>
                                                        <div class="free-sample-collection">
                                                            Free Sample Collection
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="test-name-frame">
                                                <div class="test-name-parent">
                                                    <div class="test-name">
                                                        <div class="glucose-fasting">Glucose Fasting</div>
                                                    </div>
                                                    <div class="test-name1">
                                                        <div class="lipid-profile">Lipid Profile</div>
                                                    </div>
                                                    <div class="test-name2">
                                                        <div class="liver-profile">Liver Profile</div>
                                                    </div>
                                                </div>
                                                <div class="frame-parent10">
                                                    <div class="calcium-wrapper">
                                                        <div class="calcium">Calcium</div>
                                                    </div>
                                                    <div class="test-name3">
                                                        <div class="see-more">See More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-details"></div>
                                </div>
                                <div class="package-pricing">
                                    <div class="package-price">
                                        <div class="price-button">
                                            <div class="price">
                                                <div class="rs-500">Rs 500</div>
                                                <div class="amount">
                                                    <div class="rupees">
                                                        <div class="rs-1000">Rs 1000</div>
                                                        <img class="rupees-child" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="book-appointment-btn1" id="bookAppointmentBtn1">
                                            <div class="book-appointment2">Book Appointment</div>
                                            <div class="fearrow-up-wrapper">
                                                <img class="fearrow-up-icon" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-basic-healt0packages1">
                        <div class="book-appointment-btn-container">
                            <div class="book-appointment-btn2">
                                <div class="book-appointment3">50 % Off</div>
                            </div>
                        </div>
                        <div class="new-basic-healt0packages-child">
                            <div class="frame-parent11">
                                <div class="frame-parent12">
                                    <div class="frame-wrapper2">
                                        <div class="frame-parent13">
                                            <div class="frame-parent14">
                                                <div class="basic-health-package-group">
                                                    <h2 class="basic-health-package1">
                                                        Basic Health Package
                                                    </h2>
                                                    <div class="applicable-for-individuals1">
                                                        Applicable for Individuals aged 18-100 years
                                                    </div>
                                                </div>
                                                <div class="frame-parent15">
                                                    <div class="frame-parent16">
                                                        <div class="ellipse-container">
                                                            <div class="frame-child5"></div>
                                                        </div>
                                                        <div class="primeclock-wrapper">
                                                            <img class="primeclock-icon1" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                        </div>
                                                        <div class="fast-reporting1">Fast Reporting</div>
                                                    </div>
                                                    <div class="frame-parent17">
                                                        <div class="ellipse-frame">
                                                            <div class="frame-child6"></div>
                                                        </div>
                                                        <div class="mdirun-fast-wrapper">
                                                            <img class="mdirun-fast-icon1" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                        </div>
                                                        <div class="free-sample-collection1">
                                                            Free Sample Collection
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="test-name-frame1">
                                                <div class="test-name-group">
                                                    <div class="test-name4">
                                                        <div class="glucose-fasting1">
                                                            Glucose Fasting
                                                        </div>
                                                    </div>
                                                    <div class="test-name5">
                                                        <div class="lipid-profile1">Lipid Profile</div>
                                                    </div>
                                                    <div class="test-name6">
                                                        <div class="liver-profile1">Liver Profile</div>
                                                    </div>
                                                </div>
                                                <div class="frame-parent18">
                                                    <div class="calcium-container">
                                                        <div class="calcium1">Calcium</div>
                                                    </div>
                                                    <div class="test-name7">
                                                        <div class="see-more1">See More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-child7"></div>
                                </div>
                                <div class="frame-wrapper3">
                                    <div class="frame-parent19">
                                        <div class="price-frame-wrapper">
                                            <div class="price-frame">
                                                <div class="rs-5001">Rs 500</div>
                                                <div class="price-frame-inner">
                                                    <div class="rs-1000-parent">
                                                        <div class="rs-10001">Rs 1000</div>
                                                        <img class="line-icon" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="book-appointment-btn3" id="bookAppointmentBtn2">
                                            <div class="book-appointment4">Book Appointment</div>
                                            <div class="fearrow-up-container">
                                                <img class="fearrow-up-icon1" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-basic-healt0packages2">
                        <div class="book-appointment-btn-frame">
                            <div class="book-appointment-btn4">
                                <div class="book-appointment5">50 % Off</div>
                            </div>
                        </div>
                        <div class="new-basic-healt0packages-inner1">
                            <div class="frame-parent20">
                                <div class="frame-wrapper4">
                                    <div class="frame-parent21">
                                        <div class="frame-parent22">
                                            <div class="basic-health-package-container">
                                                <h2 class="basic-health-package2">
                                                    Basic Health Package
                                                </h2>
                                                <div class="applicable-for-individuals2">
                                                    Applicable for Individuals aged 18-100 years
                                                </div>
                                            </div>
                                            <div class="frame-parent23">
                                                <div class="frame-parent24">
                                                    <div class="ellipse-wrapper1">
                                                        <div class="frame-child8"></div>
                                                    </div>
                                                    <div class="primeclock-container">
                                                        <img class="primeclock-icon2" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                    </div>
                                                    <div class="fast-reporting2">Fast Reporting</div>
                                                </div>
                                                <div class="frame-parent25">
                                                    <div class="ellipse-wrapper2">
                                                        <div class="frame-child9"></div>
                                                    </div>
                                                    <div class="mdirun-fast-container">
                                                        <img class="mdirun-fast-icon2" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                    </div>
                                                    <div class="free-sample-collection2">
                                                        Free Sample Collection
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="test-name-frame2">
                                            <div class="fasting-tests">
                                                <div class="test-name8">
                                                    <div class="glucose-fasting2">Glucose Fasting</div>
                                                </div>
                                                <div class="test-name9">
                                                    <div class="lipid-profile2">Lipid Profile</div>
                                                </div>
                                                <div class="test-name10">
                                                    <div class="liver-profile2">Liver Profile</div>
                                                </div>
                                            </div>
                                            <div class="calcium-tests">
                                                <div class="calcium-frame">
                                                    <div class="calcium2">Calcium</div>
                                                </div>
                                                <div class="test-name11">
                                                    <div class="see-more2">See More</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-parent26">
                                    <div class="frame-child10"></div>
                                    <div class="package-details1">
                                        <div class="price-button1">
                                            <div class="price-wrapper">
                                                <div class="price1">
                                                    <div class="rs-5002">Rs 500</div>
                                                    <div class="amount1">
                                                        <div class="rupees1">
                                                            <div class="rs-10002">Rs 1000</div>
                                                            <img class="rupees-item" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn5" id="bookAppointmentBtn3">
                                                <div class="book-appointment6">Book Appointment</div>
                                                <div class="fearrow-up-frame">
                                                    <img class="fearrow-up-icon2" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next-btn">
                        <div class="eparrow-up-bold-wrapper">
                            <img class="eparrow-up-bold-icon" alt="" src="<?php echo e(asset('images/Frame 177.svg')); ?>" />
                        </div>
                        <img class="next-btn-child" alt="" src="<?php echo e(asset('images/Frame 174.svg')); ?>" />
                    </div>
                </div>
            </div>
        </section>
        <section class="checkups">
            <h1 class="popular-health-checkups">Popular Health Checkups</h1>
            <div class="checkup-list">
                <div class="test-packages-ui">
                    <img class="checkup-card-icon" alt="" src="<?php echo e(asset('images/Downloader 2.png')); ?>" />

                    <div class="checkup-content">
                        <div class="checkup-details">
                            <div class="checkup-title">
                                <h3 class="cbcesr-tests">CBC+ESR Tests</h3>
                                <div class="includes-3-tests">Includes 3 Tests</div>
                            </div>
                            <div class="checkup-price">
                                <div class="rs-500-wrapper">
                                    <div class="rs-5003">Rs 500</div>
                                </div>
                                <button class="book-appointment-btn6" id="bookAppointmentBtn4">
                                    <div class="book-appointment7">Book Appointment</div>
                                    <div class="fearrow-up-wrapper1">
                                        <img class="fearrow-up-icon3" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-packages-ui1">
                    <img class="test-packages-ui-child" alt="" src="<?php echo e(asset('images/Downloader 4.png')); ?>" />

                    <div class="test-packages-ui-inner">
                        <div class="frame-parent27">
                            <div class="cbcesr-tests-parent">
                                <h3 class="cbcesr-tests1">CBC+ESR Tests</h3>
                                <div class="includes-3-tests1">Includes 3 Tests</div>
                            </div>
                            <div class="frame-parent28">
                                <div class="rs-500-container">
                                    <div class="rs-5004">Rs 500</div>
                                </div>
                                <button class="book-appointment-btn7" id="bookAppointmentBtn5">
                                    <div class="book-appointment8">Book Appointment</div>
                                    <div class="fearrow-up-wrapper2">
                                        <img class="fearrow-up-icon4" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-packages-ui2">
                    <img class="test-packages-ui-item" alt="" src="<?php echo e(asset('images/Downloader 5.png')); ?>" />

                    <div class="test-packages-ui-inner1">
                        <div class="frame-parent29">
                            <div class="cbcesr-tests-group">
                                <h3 class="cbcesr-tests2">CBC+ESR Tests</h3>
                                <div class="includes-3-tests2">Includes 3 Tests</div>
                            </div>
                            <div class="frame-parent30">
                                <div class="rs-500-frame">
                                    <div class="rs-5005">Rs 500</div>
                                </div>
                                <button class="book-appointment-btn8" id="bookAppointmentBtn6">
                                    <div class="book-appointment9">Book Appointment</div>
                                    <div class="fearrow-up-wrapper3">
                                        <img class="fearrow-up-icon5" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="test-packages-ui3">
                    <img class="frame-icon" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                    <div class="test-packages-ui-inner2">
                        <div class="frame-parent31">
                            <div class="cbcesr-tests-container">
                                <h3 class="cbcesr-tests3">CBC+ESR Tests</h3>
                                <div class="includes-3-tests3">Includes 3 Tests</div>
                            </div>
                            <div class="frame-parent32">
                                <div class="rs-500-wrapper1">
                                    <div class="rs-5006">Rs 500</div>
                                </div>
                                <button class="book-appointment-btn9" id="bookAppointmentBtn7">
                                    <div class="book-appointment10">Book Appointment</div>
                                    <div class="fearrow-up-wrapper4">
                                        <img class="fearrow-up-icon6" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next-btn1">
                <div class="eparrow-up-bold-container">
                    <img class="eparrow-up-bold-icon1" alt="" src="<?php echo e(asset('images/Frame 177.svg')); ?>" />
                </div>
                <img class="next-btn-item" alt="" src="<?php echo e(asset('images/Frame 174.svg')); ?>" />
            </div>
        </section>
        <section class="why">
            <div class="content">
                <div class="why-content">
                    <h1 class="why-choose-arogya">Why Choose Arogya 24x7</h1>
                    <div class="reasons">
                        <div class="reasons-list">
                            <div class="image-cricle-parent">
                                <img class="image-cricle-icon"   alt=""
                                    src="<?php echo e(asset('images/image-cricle.png')); ?>" />

                                <div class="lorem-ipsum-dolor-init-parent">
                                    <h2 class="lorem-ipsum-dolor">Free Sample Collection</h2>
                                    <div class="lorem-ipsum-dolor-container">
                                        <p class="lorem-ipsum-dolor1">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </p>
                                        <p class="adipiscing-elit-sed">
                                            adipiscing elit, sed do eiusmod tempora
                                        </p>
                                        <p class="incididunt-ut-labore">
                                            incididunt ut labore et dolore magnaisa
                                        </p>
                                        <p class="magna-aliqua-ut">
                                            magna aliqua. Ut enim ad minim veniaa
                                        </p>
                                        <p class="blank-line">&nbsp;</p>
                                        <p class="p"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="image-cricle-group">
                                <img class="image-cricle-icon1" alt="" src="<?php echo e(asset('images/image-cricle-1.png')); ?>" />

                                <div class="lorem-ipsum-dolor-init-group">
                                    <h2 class="lorem-ipsum-dolor2">True Prices</h2>
                                    <div class="lorem-ipsum-dolor-container1">
                                        <p class="lorem-ipsum-dolor3">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </p>
                                        <p class="adipiscing-elit-sed1">
                                            adipiscing elit, sed do eiusmod tempora
                                        </p>
                                        <p class="incididunt-ut-labore1">
                                            incididunt ut labore et dolore magnaisa
                                        </p>
                                        <p class="magna-aliqua-ut1">
                                            magna aliqua. Ut enim ad minim veniaa
                                        </p>
                                        <p class="blank-line1">&nbsp;</p>
                                        <p class="p1"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="image-cricle-container">
                                <img class="image-cricle-icon2" alt="" src="<?php echo e(asset('images/image-cricle-2.png')); ?>" />

                                <div class="lorem-ipsum-dolor-init-container">
                                    <h2 class="lorem-ipsum-dolor4">Free Doctor Consulting</h2>
                                    <div class="lorem-ipsum-dolor-container2">
                                        <p class="lorem-ipsum-dolor5">
                                            Lorem ipsum dolor sit amet, consectetur
                                        </p>
                                        <p class="adipiscing-elit-sed2">
                                            adipiscing elit, sed do eiusmod tempora
                                        </p>
                                        <p class="incididunt-ut-labore2">
                                            incididunt ut labore et dolore magnaisa
                                        </p>
                                        <p class="magna-aliqua-ut2">
                                            magna aliqua. Ut enim ad minim veniaa
                                        </p>
                                        <p class="blank-line2">&nbsp;</p>
                                        <p class="p2"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="reviews">
            <h1 class="our-customer-reviews">Our Customer Reviews</h1>
        </div>
        <section class="review-list">
            <div class="review-card">
                <div class="review-content">
                    <img class="avatar-icon"   alt="" src="<?php echo e(asset('images/Frame 1324.png')); ?>" />

                    <div class="review-details">
                        <div class="reviewer">
                            <h3 class="ellyse-gardner">Ellyse Gardner</h3>
                            <div class="manager">Manager</div>
                        </div>
                    </div>
                    <div class="review-content-inner">
                        <div class="parent">
                            <h1 class="h1">“</h1>
                            <div class="line-wrapper">
                                <div class="line-div"></div>
                            </div>
                        </div>
                    </div>
                    <div class="arogya-health-laboratory-has-t-wrapper">
                        <div class="arogya-health-laboratory">
                            Arogya Health Laboratory has truly been elevated my healthcare
                            experience. So I wouldn’t trust anyone else with my health
                            diagnostics.
                        </div>
                    </div>
                </div>
                <div class="review-content1">
                    <img class="review-content-child" alt="" src="<?php echo e(asset('images/Frame 1324-1.png')); ?>" />

                    <div class="review-content-inner1">
                        <div class="frame-parent33">
                            <div class="will-jacks-parent">
                                <h3 class="will-jacks">Will Jacks</h3>
                                <div class="sales-manager">Sales Manager</div>
                            </div>
                            <div class="group">
                                <h1 class="h11">“</h1>
                                <div class="line-container">
                                    <div class="frame-child11"></div>
                                </div>
                            </div>
                            <div class="arogya-health-laboratory-has-t-container">
                                <div class="arogya-health-laboratory1">
                                    Arogya Health Laboratory has truly been elevated my
                                    healthcare experience. So I wouldn’t trust anyone else with
                                    my health diagnostics.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-content2">
                    <img class="review-content-item" alt="" src="<?php echo e(asset('images/Frame 1324-2.png')); ?>" />

                    <div class="review-content-inner2">
                        <div class="frame-parent34">
                            <div class="nathan-ellis-parent">
                                <h3 class="nathan-ellis">Nathan Ellis</h3>
                                <div class="software-engineer">Software Engineer</div>
                            </div>
                            <div class="container">
                                <h1 class="h12">“</h1>
                                <div class="line-frame">
                                    <div class="frame-child12"></div>
                                </div>
                            </div>
                            <div class="arogya-health-laboratory-has-t-frame">
                                <div class="arogya-health-laboratory2">
                                    Arogya Health Laboratory has truly been elevated my
                                    healthcare experience. So I wouldn’t trust anyone else with
                                    my health diagnostics.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="next-btn2">
                    <div class="eparrow-up-bold-frame">
                        <img class="eparrow-up-bold-icon2" alt="" src="<?php echo e(asset('images/Frame 177.svg')); ?>" />
                    </div>
                    <img class="next-btn-inner" alt="" src="<?php echo e(asset('images/Frame 174.svg')); ?>" />
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer-content">
                <div class="brand-info">
                    <div class="logo-group1">
                        <div class="brand-name">
                            <div class="jammedical1">
                                <img class="brand-icon" alt="" src="<?php echo e(asset('images/Vector-8.svg')); ?>" />
                            </div>
                        </div>
                        <div class="arogya-24x71">Arogya 24x7</div>
                    </div>
                    <div class="aarogya24x7-is-initiative">
                        Aarogya24x7 is initiative of Society for Animal Health Agriculture
                        Science and Humanity registered Non-profit under Indian societies
                        registration Act 1860. Also registered under NITI Aayog, Darpan
                        with Unique ID : UP/2009/0002312. Donate & Benefit #SaveTax. Support
                        our programs and get tax deduction u/s 80G of Income Tax Act 1961.
                    </div>
                </div>
                <div class="tests-parent">
                    <h3 class="tests">Tests</h3>
                    <div class="tests-list">
                        <div class="cbc-tests">
                            <div class="cbc-tests1">C.B.C Tests</div>
                        </div>
                        <div class="diabetes">
                            <div class="diabetes-tests">Diabetes Tests</div>
                        </div>
                        <div class="lipid-profile3">Lipid Profile</div>
                        <div class="liver-profile3">Liver Profile</div>
                        <div class="thyroid-tests">Thyroid Tests</div>
                        <div class="urinalysis">Urinalysis</div>
                        <div class="hemoglobin-a1c">Hemoglobin A1C</div>
                        <div class="cultures">Cultures</div>
                    </div>
                </div>
                <div class="health-packages-parent">
                    <h3 class="health-packages">Health Packages</h3>
                    <div class="packages-list">
                        <div class="basic">
                            <div class="basic-health-packages">Basic Health Packages</div>
                        </div>
                        <div class="annual">
                            <div class="advanced-health-packages">
                                Advanced Health Packages
                            </div>
                        </div>
                        <div class="annual1">
                            <div class="advance-health-package">Annual Health Package</div>
                        </div>
                    </div>
                </div>
                <div class="contact-us-parent">
                    <h3 class="contact-us">Contact Us</h3>
                    <div class="head-office-1st-floor-container">
                        <p class="head-office-1st-floor">
                            Head Office 1st Floor RC Main Market Dadri Road Above Canera
                            Bank Bhangel, Salarpur Khadar Sector 102, Noida,
                            District-Greater Noida, U.P. - 201304<br />Phone: +91-9205103409
                        </p>
                        <p class="email-arogyagmailcom">Email: arogya@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="empty-container"></div>
                <div class="separator-container">
                    <div class="separtor-line"></div>
                </div>
                <div class="social-copyright">
                    <div class="social-icons">
                        <a href="#">
                            <img class="mditwitter-icon" alt="" src="<?php echo e(asset('images/mdi_twitter.svg')); ?>" />
                        </a>
                        <a href="#">
                            <img class="icbaseline-facebook-icon" alt="" src="<?php echo e(asset('images/ic_baseline-facebook.svg')); ?>" />
                        </a>
                        <a href="#">
                            <img class="uillinkedin-icon" alt="" src="<?php echo e(asset('images/uil_linkedin.svg')); ?>" />
                        </a>
                        <a href="#">
                            <img class="fayoutube-icon" alt="" src="<?php echo e(asset('images/fa_youtube.svg')); ?>" />
                        </a>
                    </div>
                    <div class="copyright-info">
                        <div class="copyright-aarogya24x7">
                            Copyright © AAROGYA24X7 2024 | Privacy Policy | Terms & Conditions
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="<?php echo e(asset('js/menu.js')); ?>"></script>
    <script>
        window.afUrl = "<?php echo e(route('af')); ?>";
    </script>
    <script src="<?php echo e(asset('js/home_nav.js')); ?>"></script>

</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/home.blade.php ENDPATH**/ ?>