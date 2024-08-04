<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Tests List</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/tl_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/tl_styleguide.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Be Vietnam:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.png')); ?>" type="image/x-icon">
</head>

<body>
    <div class="tests-list-page">
        <header class="tests-list-page-inner">
            <div class="logo-group-parent">
                <div class="logo-group" id="logoGroupContainer">
                    <div class="jammedical-wrapper">
                        <div class="jammedical">
                            <img class="logo-icon"  alt="" src="<?php echo e(asset('images/Vector-8.svg')); ?>" />
                        </div>
                    </div>
                    <a class="arogya-24x7">Arogya 24x7</a>
                </div>
                <div class="navigation">
                    <div class="nav-links-comp" id="navLinksCompContainer">
                        <a href="<?php echo e(route('home')); ?>" class="home">Home</a>
                    </div>
                    <div class="nav-links-comp1" id="navLinksCompContainer1">
                        <a href="<?php echo e(route('hp')); ?>" class="home1">Health Packages</a>
                    </div>
                    <div class="nav-links-comp2">
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
                            <div class="vector-wrapper">
                                <img class="vector-icon" alt="" src="<?php echo e(asset('images/Frame 90596.svg')); ?>" />
                            </div>
                        </div>
                        <div class="frame-div">
                            <img class="frame-child"  alt="" src="<?php echo e(asset('images/Frame 1324-1.png')); ?>" />

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
        <section class="main-content">
            <div class="offers-parent">
                <div class="offers">
                    <div class="offer-slider-section">
                        <img class="downloader-3-icon" alt="" src="<?php echo e(asset('images/Downloader 3.png')); ?>" />

                        <div class="images-slider-section-content-wrapper">
                            <div class="images-slider-section-content">
                                <div class="heading">
                                    <h1 class="explore-our-comprehensive-container">
                                        <p class="explore-our-comprehensive">
                                            Explore Our Comprehensive Test
                                        </p>
                                        <p class="lists-packages">Lists Packages</p>
                                    </h1>
                                    <h2 class="book-your-health">
                                        Book Your Health Checkup Now
                                    </h2>
                                </div>
                                <button class="images-slider-section-content-inner" id="bookAppointmentBtn">
                                    <div class="book-now-wrapper">
                                        <div class="book-now">Book Now</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-parent1">
                    <div class="frame-parent2">
                        <div class="book-your-test-now-parent">
                            <h1 class="book-your-test">Book Your Test Now</h1>
                            <div class="frame-child3"></div>
                        </div>
                        <div class="filter-search-group">
                            <div class="packages-search-bar">
                                <img class="iconamoonsearch-light" alt="" src="<?php echo e(asset('images/iconamoon_search-light.svg')); ?>" />
                                <div class="search">Search</div>
                            </div>
                            <div class="filters">
                                <a class="filters1">Filters</a>
                                <img class="solarfilter-linear-icon" alt="" src="<?php echo e(asset('images/solar_filter-linear.svg')); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="rectangle-div"></div>
                </div>
                <div class="test-list">
                    <div class="test-cards">
                        <div class="book-test-card">
                            <img class="image-icon"  alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="card-details">
                                <div class="test-names">
                                    <h3 class="complete-blood-count">Complete Blood Count</h3>
                                </div>
                                <div class="price-details">
                                    <div class="prices">
                                        <div class="rs-500">Rs 500</div>
                                        <div class="discounted-prices">
                                            <div class="old-prices">
                                                <div class="rs-1000">Rs 1000</div>
                                                <img class="price-dividers-icon" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-buttons" id="bookAppointmentBtn1">
                                        <button class="book-appointment-btn">
                                            <div class="book-appointment1">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card1">
                            <img class="image-icon1" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent3">
                                <div class="complete-blood-count-wrapper">
                                    <h3 class="complete-blood-count1">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-parent">
                                    <div class="price-frame">
                                        <div class="rs-5001">Rs 500</div>
                                        <div class="price-frame-inner">
                                            <div class="rs-1000-parent">
                                                <div class="rs-10001">Rs 1000</div>
                                                <img class="line-icon" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-wrapper"  id="bookAppointmentBtn2">
                                        <button class="book-appointment-btn1">
                                            <div class="book-appointment2">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card2">
                            <img class="image-icon2" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent4">
                                <div class="complete-blood-count-container">
                                    <h3 class="complete-blood-count2">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-group">
                                    <div class="price-frame1">
                                        <div class="rs-5002">Rs 500</div>
                                        <div class="price-frame-child">
                                            <div class="rs-1000-group">
                                                <div class="rs-10002">Rs 1000</div>
                                                <img class="frame-child4" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-container" id="bookAppointmentBtn3">
                                        <button class="book-appointment-btn2">
                                            <div class="book-appointment3">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card3">
                            <img class="image-icon3" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent5">
                                <div class="complete-blood-count-frame">
                                    <h3 class="complete-blood-count3">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-container">
                                    <div class="price-frame2">
                                        <div class="rs-5003">Rs 500</div>
                                        <div class="price-frame-inner1">
                                            <div class="rs-1000-container">
                                                <div class="rs-10003">Rs 1000</div>
                                                <img class="frame-child5" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-frame"  id="bookAppointmentBtn4">
                                        <button class="book-appointment-btn3">
                                            <div class="book-appointment4">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card4">
                            <img class="image-icon4" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent6">
                                <div class="complete-blood-count-wrapper1">
                                    <h3 class="complete-blood-count4">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-parent1">
                                    <div class="price-frame3">
                                        <div class="rs-5004">Rs 500</div>
                                        <div class="price-frame-inner2">
                                            <div class="rs-1000-parent1">
                                                <div class="rs-10004">Rs 1000</div>
                                                <img class="frame-child6" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-button"  id="bookAppointmentBtn5">
                                        <button class="book-appointment-btn4">
                                            <div class="book-appointment5">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card5">
                            <img class="image-icon5" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent7">
                                <div class="complete-blood-count-wrapper2">
                                    <h3 class="complete-blood-count5">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-parent2">
                                    <div class="price-frame4">
                                        <div class="rs-5005">Rs 500</div>
                                        <div class="price-frame-inner3">
                                            <div class="rs-1000-parent2">
                                                <div class="rs-10005">Rs 1000</div>
                                                <img class="frame-child7" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-wrapper1"  id="bookAppointmentBtn6">
                                        <button class="book-appointment-btn5">
                                            <div class="book-appointment6">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card6">
                            <img class="image-icon6" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent8">
                                <div class="complete-blood-count-wrapper3">
                                    <h3 class="complete-blood-count6">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-parent3">
                                    <div class="price-frame5">
                                        <div class="rs-5006">Rs 500</div>
                                        <div class="price-frame-inner4">
                                            <div class="rs-1000-parent3">
                                                <div class="rs-10006">Rs 1000</div>
                                                <img class="frame-child8" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-wrapper2" id="bookAppointmentBtn7">
                                        <button class="book-appointment-btn6">
                                            <div class="book-appointment7">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card7">
                            <img class="image-icon7" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent9">
                                <div class="complete-blood-count-wrapper4">
                                    <h3 class="complete-blood-count7">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-parent4">
                                    <div class="price-frame6">
                                        <div class="rs-5007">Rs 500</div>
                                        <div class="price-frame-inner5">
                                            <div class="rs-1000-parent4">
                                                <div class="rs-10007">Rs 1000</div>
                                                <img class="frame-child9" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-wrapper3" id="bookAppointmentBtn8">
                                        <button class="book-appointment-btn7">
                                            <div class="book-appointment8">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="book-test-card8">
                            <img class="image-icon8" alt="" src="<?php echo e(asset('images/Downloader 6.png')); ?>" />

                            <div class="frame-parent10">
                                <div class="complete-blood-count-wrapper5">
                                    <h3 class="complete-blood-count8">Complete Blood Count</h3>
                                </div>
                                <div class="price-frame-parent5">
                                    <div class="price-frame7">
                                        <div class="rs-5008">Rs 500</div>
                                        <div class="price-frame-inner6">
                                            <div class="rs-1000-parent5">
                                                <div class="rs-10008">Rs 1000</div>
                                                <img class="frame-child10" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="book-appointment-btn-wrapper4" id="bookAppointmentBtn9">
                                        <button class="book-appointment-btn8">
                                            <div class="book-appointment9">Book Now</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo-group1">
                        <div class="jammedical-container">
                            <div class="jammedical1">
                                <img class="footer-logo-icon" alt="" src="<?php echo e(asset('images/Vector-8.svg')); ?>" />
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
                <div class="footer-links">
                    <h3 class="tests">Tests</h3>
                    <div class="tests-links">
                        <div class="cbc-tests">
                            <div class="cbc-tests1">C.B.C Tests</div>
                        </div>
                        <div class="diabetes">
                            <div class="diabetes-tests">Diabetes Tests</div>
                        </div>
                        <div class="lipid-profile">Lipid Profile</div>
                        <div class="liver-profile">Liver Profile</div>
                        <div class="thyroid-tests">Thyroid Tests</div>
                        <div class="urinalysis">Urinalysis</div>
                        <div class="hemoglobin-a1c">Hemoglobin A1C</div>
                        <div class="cultures">Cultures</div>
                    </div>
                </div>
                <div class="package-links">
                    <h3 class="health-packages">Health Packages</h3>
                    <div class="package-links-list">
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
                <div class="contact">
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
            <div class="footer-social">
                <div class="social-icons-background"></div>
                <div class="separtor-line-wrapper">
                    <div class="separtor-line"></div>
                </div>
                <div class="social-links">
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
                    <div class="copyright">
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
    <script src="<?php echo e(asset('js/tl_nav.js')); ?>"></script>

</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/tl.blade.php ENDPATH**/ ?>