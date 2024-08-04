<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Health Packages</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/hp_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/hp_styleguide.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Be Vietnam:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.png')); ?>" type="image/x-icon">
</head>

<body>
    <div class="health-packages-page">
        <main class="main">
            <header class="content">
                <div class="navigation">
                    <div class="logo-group" id="logoGroupContainer">
                        <div class="brand-name">
                            <div class="jammedical">
                                <img class="brand-icon" alt="" src="<?php echo e(asset('images/Vector-8.svg')); ?>" />
                            </div>
                        </div>
                        <a class="arogya-24x7">Arogya 24x7</a>
                    </div>
                    <div class="nav-links">
                        <div class="nav-links-comp" id="navLinksCompContainer">
                            <a href="<?php echo e(route('home')); ?>" class="home">Home</a>
                        </div>
                        <div class="nav-links-comp1">
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
                    <div class="appointment">
                        <button class="book-appointment-btn">
                            <a href="<?php echo e(route('af')); ?>" class="book-appointment">Book Appointment</a>
                        </button>
                        <div class="location">
                            <div class="location-details">
                                <div class="location-icon">
                                    <img class="ionlocation-outline-icon" alt="" src="<?php echo e(asset('images/ion_location-outline.svg')); ?>" />

                                    <div class="city">
                                        <a class="mumbai">Mumbai</a>
                                    </div>
                                </div>
                                <div class="vector-wrapper">
                                    <img class="vector-icon" alt="" src="<?php echo e(asset('images/Frame 90596.svg')); ?>" />
                                </div>
                            </div>
                            <div class="user">
                                <img class="user-profile-icon" alt="" src="<?php echo e(asset('images/Frame 1324-1.png')); ?>" />

                                <div class="user-details">
                                    <a class="hi-james">Hi James</a>
                                    <img class="vector-icon1" id="user-dropdown-icon" alt="" src="<?php echo e(asset('images/Vector-7.svg')); ?>" />
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
            <section class="packages">
                <div class="packages-content">
                    <div class="packages-filter">
                        <div class="filter-search">
                            <div class="tags">
                                <button class="tags1">
                                    <div class="basic-health-package">Basic Health Package</div>
                                </button>
                                <div class="tags2">
                                    <div class="advance-health-package">
                                        Advance Health Package
                                    </div>
                                </div>
                                <button class="tags3">
                                    <div class="annual-health-package">
                                        Annual Health Package
                                    </div>
                                </button>
                            </div>
                            <div class="filter-search-group">
                                <button class="packages-search-bar">
                                    <img class="iconamoonsearch-light" alt="" src="<?php echo e(asset('images/iconamoon_search-light.svg')); ?>" />

                                    <a class="search">Search</a>
                                </button>
                                <div class="filters">
                                    <a class="filters1">Filters</a>
                                    <img class="solarfilter-linear-icon" alt="" src="<?php echo e(asset('images/solar_filter-linear.svg')); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                    <div class="package-list">
                        <div class="package-cards">
                            <div class="new-basic-healt0packages">
                                <div class="package-card-containers">
                                    <div class="book-appointment-btn1">
                                        <div class="book-appointment1">50 % Off</div>
                                    </div>
                                </div>
                                <div class="package-info">
                                    <div class="package-info-details">
                                        <div class="package-info-items">
                                            <div class="package-info-rows">
                                                <div class="package-info-fields">
                                                    <div class="package-name">
                                                        <h2 class="basic-health-package1">
                                                            Basic Health Package
                                                        </h2>
                                                        <div class="applicable-for-individuals">
                                                            Applicable for Individuals aged 18-100 years
                                                        </div>
                                                    </div>
                                                    <div class="package-features">
                                                        <div class="package-feature-icons">
                                                            <div class="feature-icon-containers">
                                                                <div class="feature-backgrounds"></div>
                                                            </div>
                                                            <div class="feature-icons">
                                                                <img class="primeclock-icon" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                            </div>
                                                            <div class="fast-reporting">Fast Reporting</div>
                                                        </div>
                                                        <div class="sample-collection-icons">
                                                            <div class="sample-collection-icon-contain">
                                                                <div class="sample-collection-backgrounds"></div>
                                                            </div>
                                                            <div class="sample-collection-icons1">
                                                                <img class="mdirun-fast-icon" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                            </div>
                                                            <div class="free-sample-collection">
                                                                Free Sample Collection
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="package-tests">
                                                    <div class="package-test-rows">
                                                        <div class="test-name">
                                                            <div class="glucose-fasting">
                                                                Glucose Fasting
                                                            </div>
                                                        </div>
                                                        <div class="test-name1">
                                                            <div class="lipid-profile">Lipid Profile</div>
                                                        </div>
                                                        <div class="test-name2">
                                                            <div class="liver-profile">Liver Profile</div>
                                                        </div>
                                                    </div>
                                                    <div class="calcium-tests">
                                                        <div class="calcium-test-rows">
                                                            <a class="calcium">Calcium</a>
                                                        </div>
                                                        <div class="test-name3">
                                                            <div class="see-more">See More</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="additional-tests"></div>
                                    </div>
                                    <div class="price-containers-wrapper">
                                        <div class="price-containers">
                                            <div class="price-details">
                                                <div class="price-frame">
                                                    <div class="rs-500">Rs 500</div>
                                                    <div class="price-value-container">
                                                        <div class="rs-1000-parent">
                                                            <div class="rs-1000">Rs 1000</div>
                                                            <img class="price-divider-icon" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn2" id="bookAppointmentBtn1">
                                                <div class="book-appointment2">Book Appointment</div>
                                                <div class="fearrow-up-wrapper">
                                                    <img class="fearrow-up-icon" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages1">
                                <div class="book-appointment-btn-wrapper">
                                    <div class="book-appointment-btn3">
                                        <div class="book-appointment3">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent">
                                    <div class="frame-group">
                                        <div class="frame-wrapper">
                                            <div class="frame-container">
                                                <div class="frame-div">
                                                    <div class="basic-health-package-parent">
                                                        <h2 class="basic-health-package2">
                                                            Basic Health Package
                                                        </h2>
                                                        <div class="applicable-for-individuals1">
                                                            Applicable for Individuals aged 18-100 years
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent1">
                                                        <div class="frame-parent2">
                                                            <div class="ellipse-wrapper">
                                                                <div class="frame-child"></div>
                                                            </div>
                                                            <div class="primeclock-wrapper">
                                                                <img class="primeclock-icon1" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                            </div>
                                                            <div class="fast-reporting1">
                                                                Fast Reporting
                                                            </div>
                                                        </div>
                                                        <div class="frame-parent3">
                                                            <div class="ellipse-container">
                                                                <div class="frame-item"></div>
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
                                                <div class="test-name-frame">
                                                    <div class="test-name-parent">
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
                                                    <div class="frame-parent4">
                                                        <div class="calcium-wrapper">
                                                            <a class="calcium1">Calcium</a>
                                                        </div>
                                                        <div class="test-name7">
                                                            <div class="see-more1">See More</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="frame-inner"></div>
                                    </div>
                                    <div class="frame-wrapper1">
                                        <div class="frame-parent5">
                                            <div class="price-frame-wrapper">
                                                <div class="price-frame1">
                                                    <div class="rs-5001">Rs 500</div>
                                                    <div class="price-frame-inner">
                                                        <div class="rs-1000-group">
                                                            <div class="rs-10001">Rs 1000</div>
                                                            <img class="line-icon" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn4" id="bookAppointmentBtn2">
                                                <div class="book-appointment4">Book Appointment</div>
                                                <div class="fearrow-up-container">
                                                    <img class="fearrow-up-icon1" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages2">
                                <div class="book-appointment-btn-container">
                                    <div class="book-appointment-btn5">
                                        <div class="book-appointment5">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent6">
                                    <div class="frame-wrapper2">
                                        <div class="frame-parent7">
                                            <div class="frame-parent8">
                                                <div class="basic-health-package-group">
                                                    <h2 class="basic-health-package3">
                                                        Basic Health Package
                                                    </h2>
                                                    <div class="applicable-for-individuals2">
                                                        Applicable for Individuals aged 18-100 years
                                                    </div>
                                                </div>
                                                <div class="frame-parent9">
                                                    <div class="frame-parent10">
                                                        <div class="ellipse-frame">
                                                            <div class="ellipse-div"></div>
                                                        </div>
                                                        <div class="primeclock-container">
                                                            <img class="primeclock-icon2" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                        </div>
                                                        <div class="fast-reporting2">Fast Reporting</div>
                                                    </div>
                                                    <div class="frame-parent11">
                                                        <div class="ellipse-wrapper1">
                                                            <div class="frame-child1"></div>
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
                                            <div class="test-list">
                                                <div class="test-list-rows">
                                                    <div class="test-name8">
                                                        <div class="glucose-fasting2">
                                                            Glucose Fasting
                                                        </div>
                                                    </div>
                                                    <div class="test-name9">
                                                        <div class="lipid-profile2">Lipid Profile</div>
                                                    </div>
                                                    <div class="test-name10">
                                                        <div class="liver-profile2">Liver Profile</div>
                                                    </div>
                                                </div>
                                                <div class="calcium-list">
                                                    <div class="calcium-list-rows">
                                                        <div class="calcium2">Calcium</div>
                                                    </div>
                                                    <div class="test-name11">
                                                        <div class="see-more2">See More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper3">
                                        <div class="frame-child2"></div>
                                    </div>
                                    <div class="package-container-wrapper">
                                        <div class="package-container">
                                            <div class="package-details">
                                                <div class="package-pricing">
                                                    <div class="rs-5002">Rs 500</div>
                                                    <div class="original-price-container">
                                                        <div class="rs-1000-container">
                                                            <div class="rs-10002">Rs 1000</div>
                                                            <img class="original-price-divider" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn6" id="bookAppointmentBtn3">
                                                <div class="book-appointment6">Book Appointment</div>
                                                <div class="fearrow-up-frame">
                                                    <img class="fearrow-up-icon2" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages3">
                                <div class="book-appointment-btn-frame">
                                    <div class="book-appointment-btn7">
                                        <div class="book-appointment7">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent12">
                                    <div class="frame-parent13">
                                        <div class="frame-wrapper4">
                                            <div class="frame-parent14">
                                                <div class="frame-parent15">
                                                    <div class="basic-health-package-container">
                                                        <h2 class="basic-health-package4">
                                                            Basic Health Package
                                                        </h2>
                                                        <div class="applicable-for-individuals3">
                                                            Applicable for Individuals aged 18-100 years
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent16">
                                                        <div class="frame-parent17">
                                                            <div class="ellipse-wrapper2">
                                                                <div class="frame-child3"></div>
                                                            </div>
                                                            <div class="primeclock-frame">
                                                                <img class="primeclock-icon3" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                            </div>
                                                            <div class="fast-reporting3">
                                                                Fast Reporting
                                                            </div>
                                                        </div>
                                                        <div class="frame-parent18">
                                                            <div class="ellipse-wrapper3">
                                                                <div class="frame-child4"></div>
                                                            </div>
                                                            <div class="mdirun-fast-frame">
                                                                <img class="mdirun-fast-icon3" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                            </div>
                                                            <div class="free-sample-collection3">
                                                                Free Sample Collection
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="test-name-frame1">
                                                    <div class="test-name-group">
                                                        <div class="test-name12">
                                                            <div class="glucose-fasting3">
                                                                Glucose Fasting
                                                            </div>
                                                        </div>
                                                        <div class="test-name13">
                                                            <div class="lipid-profile3">Lipid Profile</div>
                                                        </div>
                                                        <div class="test-name14">
                                                            <div class="liver-profile3">Liver Profile</div>
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent19">
                                                        <div class="calcium-container">
                                                            <div class="calcium3">Calcium</div>
                                                        </div>
                                                        <div class="test-name15">
                                                            <div class="see-more3">See More</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="frame-child5"></div>
                                    </div>
                                    <div class="frame-wrapper5">
                                        <div class="frame-parent20">
                                            <div class="price-frame-container">
                                                <div class="price-frame2">
                                                    <div class="rs-5003">Rs 500</div>
                                                    <div class="price-frame-child">
                                                        <div class="rs-1000-parent1">
                                                            <div class="rs-10003">Rs 1000</div>
                                                            <img class="frame-child6" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn8" id="bookAppointmentBtn4">
                                                <div class="book-appointment8">Book Appointment</div>
                                                <div class="fearrow-up-wrapper1">
                                                    <img class="fearrow-up-icon3" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages4">
                                <div class="book-appointment-btn-wrapper1">
                                    <div class="book-appointment-btn9">
                                        <div class="book-appointment9">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent21">
                                    <div class="frame-parent22">
                                        <div class="frame-wrapper6">
                                            <div class="frame-parent23">
                                                <div class="frame-parent24">
                                                    <div class="basic-health-package-parent1">
                                                        <h2 class="basic-health-package5">
                                                            Basic Health Package
                                                        </h2>
                                                        <div class="applicable-for-individuals4">
                                                            Applicable for Individuals aged 18-100 years
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent25">
                                                        <div class="frame-parent26">
                                                            <div class="ellipse-wrapper4">
                                                                <div class="frame-child7"></div>
                                                            </div>
                                                            <div class="primeclock-wrapper1">
                                                                <img class="primeclock-icon4" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                            </div>
                                                            <div class="fast-reporting4">
                                                                Fast Reporting
                                                            </div>
                                                        </div>
                                                        <div class="frame-parent27">
                                                            <div class="ellipse-wrapper5">
                                                                <div class="frame-child8"></div>
                                                            </div>
                                                            <div class="mdirun-fast-wrapper1">
                                                                <img class="mdirun-fast-icon4" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                            </div>
                                                            <div class="free-sample-collection4">
                                                                Free Sample Collection
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="test-name-frame2">
                                                    <div class="test-name-container">
                                                        <div class="test-name16">
                                                            <div class="glucose-fasting4">
                                                                Glucose Fasting
                                                            </div>
                                                        </div>
                                                        <div class="test-name17">
                                                            <div class="lipid-profile4">Lipid Profile</div>
                                                        </div>
                                                        <div class="test-name18">
                                                            <div class="liver-profile4">Liver Profile</div>
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent28">
                                                        <div class="calcium-frame">
                                                            <div class="calcium4">Calcium</div>
                                                        </div>
                                                        <div class="test-name19">
                                                            <div class="see-more4">See More</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="frame-child9"></div>
                                    </div>
                                    <div class="frame-wrapper7">
                                        <div class="frame-parent29">
                                            <div class="price-frame-frame">
                                                <div class="price-frame3">
                                                    <div class="rs-5004">Rs 500</div>
                                                    <div class="price-frame-inner1">
                                                        <div class="rs-1000-parent2">
                                                            <div class="rs-10004">Rs 1000</div>
                                                            <img class="frame-child10" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn10" id="bookAppointmentBtn5">
                                                <div class="book-appointment10">Book Appointment</div>
                                                <div class="fearrow-up-wrapper2">
                                                    <img class="fearrow-up-icon4" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages5">
                                <div class="book-appointment-btn-wrapper2">
                                    <div class="book-appointment-btn11">
                                        <div class="book-appointment11">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent30">
                                    <div class="frame-wrapper8">
                                        <div class="frame-parent31">
                                            <div class="frame-parent32">
                                                <div class="basic-health-package-parent2">
                                                    <h2 class="basic-health-package6">
                                                        Basic Health Package
                                                    </h2>
                                                    <div class="applicable-for-individuals5">
                                                        Applicable for Individuals aged 18-100 years
                                                    </div>
                                                </div>
                                                <div class="frame-parent33">
                                                    <div class="frame-parent34">
                                                        <div class="ellipse-wrapper6">
                                                            <div class="frame-child11"></div>
                                                        </div>
                                                        <div class="primeclock-wrapper2">
                                                            <img class="primeclock-icon5" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                        </div>
                                                        <div class="fast-reporting5">Fast Reporting</div>
                                                    </div>
                                                    <div class="frame-parent35">
                                                        <div class="ellipse-wrapper7">
                                                            <div class="frame-child12"></div>
                                                        </div>
                                                        <div class="mdirun-fast-wrapper2">
                                                            <img class="mdirun-fast-icon5" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                        </div>
                                                        <div class="free-sample-collection5">
                                                            Free Sample Collection
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="test-name-frame3">
                                                <div class="test-name-parent1">
                                                    <div class="test-name20">
                                                        <div class="glucose-fasting5">
                                                            Glucose Fasting
                                                        </div>
                                                    </div>
                                                    <div class="test-name21">
                                                        <div class="lipid-profile5">Lipid Profile</div>
                                                    </div>
                                                    <div class="test-name22">
                                                        <div class="liver-profile5">Liver Profile</div>
                                                    </div>
                                                </div>
                                                <div class="frame-parent36">
                                                    <div class="calcium-wrapper1">
                                                        <div class="calcium5">Calcium</div>
                                                    </div>
                                                    <div class="test-name23">
                                                        <div class="see-more5">See More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-parent37">
                                        <div class="frame-child13"></div>
                                        <div class="package-container-container">
                                            <div class="package-container1">
                                                <div class="package-details1">
                                                    <div class="package-pricing1">
                                                        <div class="rs-5005">Rs 500</div>
                                                        <div class="original-price-container1">
                                                            <div class="rs-1000-parent3">
                                                                <div class="rs-10005">Rs 1000</div>
                                                                <img class="original-price-divider1" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="book-appointment-btn12"  id="bookAppointmentBtn6">
                                                    <div class="book-appointment12">Book Appointment</div>
                                                    <div class="fearrow-up-wrapper3">
                                                        <img class="fearrow-up-icon5" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>g" />
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages6">
                                <div class="book-appointment-btn-wrapper3">
                                    <div class="book-appointment-btn13">
                                        <div class="book-appointment13">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent38">
                                    <div class="frame-parent39">
                                        <div class="frame-wrapper9">
                                            <div class="frame-parent40">
                                                <div class="frame-parent41">
                                                    <div class="basic-health-package-parent3">
                                                        <h2 class="basic-health-package7">
                                                            Basic Health Package
                                                        </h2>
                                                        <div class="applicable-for-individuals6">
                                                            Applicable for Individuals aged 18-100 years
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent42">
                                                        <div class="frame-parent43">
                                                            <div class="ellipse-wrapper8">
                                                                <div class="frame-child14"></div>
                                                            </div>
                                                            <div class="primeclock-wrapper3">
                                                                <img class="primeclock-icon6" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                            </div>
                                                            <div class="fast-reporting6">
                                                                Fast Reporting
                                                            </div>
                                                        </div>
                                                        <div class="frame-parent44">
                                                            <div class="ellipse-wrapper9">
                                                                <div class="frame-child15"></div>
                                                            </div>
                                                            <div class="mdirun-fast-wrapper3">
                                                                <img class="mdirun-fast-icon6" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                            </div>
                                                            <div class="free-sample-collection6">
                                                                Free Sample Collection
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="test-name-frame4">
                                                    <div class="test-name-parent2">
                                                        <div class="test-name24">
                                                            <div class="glucose-fasting6">
                                                                Glucose Fasting
                                                            </div>
                                                        </div>
                                                        <div class="test-name25">
                                                            <div class="lipid-profile6">Lipid Profile</div>
                                                        </div>
                                                        <div class="test-name26">
                                                            <div class="liver-profile6">Liver Profile</div>
                                                        </div>
                                                    </div>
                                                    <div class="frame-parent45">
                                                        <div class="calcium-wrapper2">
                                                            <div class="calcium6">Calcium</div>
                                                        </div>
                                                        <div class="test-name27">
                                                            <div class="see-more6">See More</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="frame-child16"></div>
                                    </div>
                                    <div class="frame-wrapper10">
                                        <div class="frame-parent46">
                                            <div class="price-frame-wrapper1">
                                                <div class="price-frame4">
                                                    <div class="rs-5006">Rs 500</div>
                                                    <div class="price-frame-inner2">
                                                        <div class="rs-1000-parent4">
                                                            <div class="rs-10006">Rs 1000</div>
                                                            <img class="frame-child17" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn14"  id="bookAppointmentBtn7">
                                                <div class="book-appointment14">Book Appointment</div>
                                                <div class="fearrow-up-wrapper4">
                                                    <img class="fearrow-up-icon6" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages7">
                                <div class="book-appointment-btn-wrapper4">
                                    <div class="book-appointment-btn15">
                                        <div class="book-appointment15">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent47">
                                    <div class="frame-wrapper11">
                                        <div class="frame-parent48">
                                            <div class="frame-parent49">
                                                <div class="basic-health-package-parent4">
                                                    <h2 class="basic-health-package8">
                                                        Basic Health Package
                                                    </h2>
                                                    <div class="applicable-for-individuals7">
                                                        Applicable for Individuals aged 18-100 years
                                                    </div>
                                                </div>
                                                <div class="frame-parent50">
                                                    <div class="frame-parent51">
                                                        <div class="ellipse-wrapper10">
                                                            <div class="frame-child18"></div>
                                                        </div>
                                                        <div class="primeclock-wrapper4">
                                                            <img class="primeclock-icon7" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                        </div>
                                                        <div class="fast-reporting7">Fast Reporting</div>
                                                    </div>
                                                    <div class="frame-parent52">
                                                        <div class="ellipse-wrapper11">
                                                            <div class="frame-child19"></div>
                                                        </div>
                                                        <div class="mdirun-fast-wrapper4">
                                                            <img class="mdirun-fast-icon7" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                        </div>
                                                        <div class="free-sample-collection7">
                                                            Free Sample Collection
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="test-name-frame5">
                                                <div class="test-name-parent3">
                                                    <div class="test-name28">
                                                        <div class="glucose-fasting7">
                                                            Glucose Fasting
                                                        </div>
                                                    </div>
                                                    <div class="test-name29">
                                                        <div class="lipid-profile7">Lipid Profile</div>
                                                    </div>
                                                    <div class="test-name30">
                                                        <div class="liver-profile7">Liver Profile</div>
                                                    </div>
                                                </div>
                                                <div class="frame-parent53">
                                                    <div class="calcium-wrapper3">
                                                        <div class="calcium7">Calcium</div>
                                                    </div>
                                                    <div class="test-name31">
                                                        <div class="see-more7">See More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-wrapper12">
                                        <div class="frame-child20"></div>
                                    </div>
                                    <div class="frame-wrapper13">
                                        <div class="frame-parent54">
                                            <div class="price-frame-wrapper2">
                                                <div class="price-frame5">
                                                    <div class="rs-5007">Rs 500</div>
                                                    <div class="price-frame-inner3">
                                                        <div class="rs-1000-parent5">
                                                            <div class="rs-10007">Rs 1000</div>
                                                            <img class="frame-child21" alt=""  src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="book-appointment-btn16" id="bookAppointmentBtn8">
                                                <div class="book-appointment16">Book Appointment</div>
                                                <div class="fearrow-up-wrapper5">
                                                    <img class="fearrow-up-icon7" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-basic-healt0packages8">
                                <div class="book-appointment-btn-wrapper5">
                                    <div class="book-appointment-btn17">
                                        <div class="book-appointment17">50 % Off</div>
                                    </div>
                                </div>
                                <div class="frame-parent55">
                                    <div class="frame-wrapper14">
                                        <div class="frame-parent56">
                                            <div class="frame-parent57">
                                                <div class="basic-health-package-parent5">
                                                    <h2 class="basic-health-package9">
                                                        Basic Health Package
                                                    </h2>
                                                    <div class="applicable-for-individuals8">
                                                        Applicable for Individuals aged 18-100 years
                                                    </div>
                                                </div>
                                                <div class="frame-parent58">
                                                    <div class="frame-parent59">
                                                        <div class="ellipse-wrapper12">
                                                            <div class="frame-child22"></div>
                                                        </div>
                                                        <div class="primeclock-wrapper5">
                                                            <img class="primeclock-icon8" alt="" src="<?php echo e(asset('images/prime_clock.svg')); ?>" />
                                                        </div>
                                                        <div class="fast-reporting8">Fast Reporting</div>
                                                    </div>
                                                    <div class="frame-parent60">
                                                        <div class="ellipse-wrapper13">
                                                            <div class="frame-child23"></div>
                                                        </div>
                                                        <div class="mdirun-fast-wrapper5">
                                                            <img class="mdirun-fast-icon8" alt="" src="<?php echo e(asset('images/Vector-3.svg')); ?>" />
                                                        </div>
                                                        <div class="free-sample-collection8">
                                                            Free Sample Collection
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="test-name-frame6">
                                                <div class="test-name-parent4">
                                                    <div class="test-name32">
                                                        <div class="glucose-fasting8">
                                                            Glucose Fasting
                                                        </div>
                                                    </div>
                                                    <div class="test-name33">
                                                        <div class="lipid-profile8">Lipid Profile</div>
                                                    </div>
                                                    <div class="test-name34">
                                                        <div class="liver-profile8">Liver Profile</div>
                                                    </div>
                                                </div>
                                                <div class="frame-parent61">
                                                    <div class="calcium-wrapper4">
                                                        <div class="calcium8">Calcium</div>
                                                    </div>
                                                    <div class="test-name35">
                                                        <div class="see-more8">See More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame-parent62">
                                        <div class="frame-child24"></div>
                                        <div class="frame-wrapper15">
                                            <div class="frame-parent63">
                                                <div class="price-frame-wrapper3">
                                                    <div class="price-frame6">
                                                        <div class="rs-5008">Rs 500</div>
                                                        <div class="price-frame-inner4">
                                                            <div class="rs-1000-parent6">
                                                                <div class="rs-10008">Rs 1000</div>
                                                                <img class="frame-child25" alt="" src="<?php echo e(asset('images/Line 1.svg')); ?>" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="book-appointment-btn18" id="bookAppointmentBtn9">
                                                    <div class="book-appointment18">Book Appointment</div>
                                                    <div class="fearrow-up-wrapper6">
                                                        <img class="fearrow-up-icon8" alt="" src="<?php echo e(asset('images/fe_arrow-up.svg')); ?>" />
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer-content">
                <div class="brand-info">
                    <div class="logo-group1">
                        <div class="brand-icon-container">
                            <div class="jammedical1">
                                <img class="icon-path" alt="" src="<?php echo e(asset('images/Vector-8.svg')); ?>" />
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
                    <div class="tests-list">
                        <div class="cbc-tests">
                            <div class="cbc-tests1">C.B.C Tests</div>
                        </div>
                        <div class="diabetes">
                            <div class="diabetes-tests">Diabetes Tests</div>
                        </div>
                        <div class="lipid-profile9">Lipid Profile</div>
                        <div class="liver-profile9">Liver Profile</div>
                        <div class="thyroid-tests">Thyroid Tests</div>
                        <div class="urinalysis">Urinalysis</div>
                        <div class="hemoglobin-a1c">Hemoglobin A1C</div>
                        <div class="cultures">Cultures</div>
                    </div>
                </div>
                <div class="packages-link">
                    <h3 class="health-packages">Health Packages</h3>
                    <div class="package-types">
                        <div class="basic">
                            <div class="basic-health-packages">Basic Health Packages</div>
                        </div>
                        <div class="annual">
                            <div class="advanced-health-packages">
                                Advanced Health Packages
                            </div>
                        </div>
                        <div class="annual1">
                            <div class="advance-health-package1">Annual Health Package</div>
                        </div>
                    </div>
                </div>
                <div class="contact-link">
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
                <div class="spacer"></div>
                <div class="divider-container">
                    <div class="separtor-line"></div>
                </div>
                <div class="footer-details">
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
    <script src="<?php echo e(asset('js/hp_nav.js')); ?>"></script>

</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/hp.blade.php ENDPATH**/ ?>