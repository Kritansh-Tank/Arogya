<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Appointment Form</title>
    <link rel="stylesheet" href="{{ asset('css/af_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/af_styleguide.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Be Vietnam:wght@600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
    <link rel="icon" href="{{ asset('images/Frame 501.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="appointment-form">
        <div class="appointment-form-item"></div>
        <header class="appointment-form-inner">
            <div class="logo-group-parent">
                <div class="logo-group" id="logoGroupContainer">
                    <div class="jammedical-wrapper">
                        <div class="jammedical">
                            <img class="vector-icon" alt="" src="{{ asset('images/Vector-8.svg') }}" />
                        </div>
                    </div>
                    <a class="arogya-24x7">Arogya 24x7</a>
                </div>
                <div class="nav-links-comp-parent">
                    <div class="nav-links-comp">
                        <a href="{{ route('home') }}" class="home">Home</a>
                    </div>
                    <div class="nav-links-comp1">
                        <a href="{{ route('hp') }}" class="home1">Health Packages</a>
                    </div>
                    <div class="nav-links-comp2">
                        <a href="{{ route('tl') }}" class="home2">Tests</a>
                    </div>
                    <div class="nav-links-comp3">
                        <a href="{{ route('au') }}" class="home3">About Us</a>
                    </div>
                    <div class="nav-links-comp4">
                        <a href="#" class="home4">Support Us</a>
                    </div>
                </div>
                <div class="frame-parent">
                    <div class="location-icon-container-parent">
                        <div class="location-icon-container">
                            <img class="ionlocation-outline-icon" alt="" src="{{ asset('images/ion_location-outline.svg') }}" />

                            <div class="mumbai-wrapper">
                                <a class="mumbai">Mumbai</a>
                            </div>
                        </div>
                        <div class="user-avatar-wrapper">
                            <img class="user-avatar-icon" alt="" src="{{ asset('images/Frame 90596.svg') }}" />
                        </div>
                    </div>
                    <div class="frame-group">
                        <img class="frame-child"   alt="" src="{{ asset('images/Frame 1324-1.png') }}" />

                        <div class="user-name-container">
                            <a class="hi-james">Hi James</a>
                            <img class="vector-icon1" id="user-dropdown-icon" alt="" src="{{ asset('images/Vector-7.svg') }}" />
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
        </header>
        <main class="frame-container">
            <section class="frame-section">
                <div class="frame-wrapper">
                    <div class="frame-div">
                        <div class="happy-customers-content-wrapper">
                            <div class="happy-customers-content">
                                <div class="frame-parent1">
                                    <div class="frame-parent2">
                                        <div class="ellipse-parent">
                                            <img class="frame-item" alt="" src="{{ asset('images/Ellipse 15.png') }}" />

                                            <img class="frame-inner" alt="" src="{{ asset('images/Ellipse 16.png') }}" />

                                            <img class="ellipse-icon" alt="" src="{{ asset('images/Ellipse 17.png') }}" />

                                            <img class="frame-child1" alt="" src="{{ asset('images/Ellipse 18.png') }}" />

                                            <img class="frame-child2" alt="" src="{{ asset('images/Ellipse 19.png') }}" />

                                            <img class="frame-child3" alt="" src="{{ asset('images/Ellipse 20.png') }}" />

                                            <img class="frame-child4" alt="" src="{{ asset('images/Ellipse 21.png') }}" />
                                        </div>
                                        <div class="frame-wrapper1">
                                            <div class="frame-wrapper2">
                                                <div class="happy-customers-wrapper">
                                                    <div class="happy-customers">
                                                        191 + Happy Customers
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="appointment-description-contai-wrapper">
                                        <div class="appointment-description-contai">
                                            <div class="time-to-make-an-appointment-wrapper">
                                                <h1 class="time-to-make">
                                                    Time to make an Appointment
                                                </h1>
                                            </div>
                                            <div class="at-arogya-we-understand-the-i-wrapper">
                                                <div class="at-arogya-we">
                                                    At Arogya, we understand the importance of proactive
                                                    healthcare. That's why we make it easy for you to
                                                    schedule your health checkup appointments with us.
                                                    Our state-of-the-art laboratory offers a wide range
                                                    of tests and services designed to keep you on track
                                                    with your health goals.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-type-columns-parent">
                                    <div class="appointment-type-columns">
                                        <div class="appointment-type-rows">
                                            <div class="appointment-type-icons">
                                                <div class="icon-placeholders">1</div>
                                            </div>
                                        </div>
                                        <div class="book-appointment">Book Appointment</div>
                                    </div>
                                    <div class="appointment-type-columns1">
                                        <img class="appointment-type-columns-child" alt="" src="{{ asset('images/Line 4.svg') }}" />
                                    </div>
                                    <div class="appointment-type-columns2">
                                        <div class="appointment-type-columns-inner">
                                            <div class="wrapper">
                                                <div class="div">2</div>
                                            </div>
                                        </div>
                                        <div class="give-sample">Give Sample</div>
                                    </div>
                                    <div class="appointment-type-columns3">
                                        <img class="appointment-type-columns-item" alt="" src="{{ asset('images/Line 4.svg') }}" />
                                    </div>
                                    <div class="appointment-type-columns4">
                                        <div class="appointment-type-columns-inner1">
                                            <div class="container">
                                                <div class="div1">3</div>
                                            </div>
                                        </div>
                                        <div class="get-report">Get Report</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="appointment-preference-contain-parent">
                            <div class="appointment-preference-contain">
                                <div class="i-would-like">I would like to</div>
                                <div class="booking-option-column-parent">
                                    <a href="{{ route('af') }}">
                                        <div class="booking-option-column">
                                            <img class="booking-option-column-child" alt="" src="{{ asset('images/Frame 1277.svg') }}" />
                                            <div class="book-my-appointment-wrapper">
                                                <div class="book-my-appointment">Book My Appointment</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ route('qf') }}">
                                        <div class="frame-wrapper3">
                                            <div class="frame-parent3">
                                                <div class="border-wrapper">
                                                    <div class="border"></div>
                                                </div>
                                                <div class="query">Query</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="inputs-register-btn">
                                <div class="inputs-fields">
                                    <div class="input-fields-comp">
                                        <div class="select-city-wrapper">
                                            <input class="select-city" placeholder="Patient Name" type="text" />
                                        </div>
                                    </div>
                                    <div class="input-fields-comp1">
                                        <div class="select-city-container">
                                            <input class="select-city1" placeholder="Email" type="email" />
                                        </div>
                                    </div>
                                    <div class="input-fields-comp2">
                                        <div class="select-city-frame">
                                            <input class="select-city2" placeholder="Mobile Number" type="tel" />
                                        </div>
                                    </div>
                                    <textarea class="input-fields-comp3" placeholder="Message" rows="{7}" cols="{18}"></textarea>
                                </div>
                                <button class="input-fields-comp4">
                                    <div class="select-city-wrapper1">
                                        <div class="select-city3">Book Appointment</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer-frame">
                    <div class="footer-company-info-parent">
                        <div class="footer-company-info">
                            <div class="logo-group1">
                                <div class="jammedical-container">
                                    <div class="jammedical1">
                                        <img class="vector-icon2" alt="" src="{{ asset('images/Vector-8.svg') }}" />
                                    </div>
                                </div>
                                <div class="arogya-24x71">Arogya 24x7</div>
                            </div>
                            <div class="aarogya24x7-is-initiative">
                                Aarogya24x7 is initiative of Society for Animal Health
                                Agriculture Science and Humanity registered Non-profit under
                                Indian societies registration Act 1860. Also registered under
                                NITI Aayog, Darpan with Unique ID : UP/2009/0002312. Donate &
                                Benefit #SaveTax. Support our programs and get tax deduction
                                u/s 80G of Income Tax Act 1961.
                            </div>
                        </div>
                        <div class="tests-parent">
                            <div class="tests">Tests</div>
                            <div class="tests-list">
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
                        <div class="health-packages-parent">
                            <div class="health-packages">Health Packages</div>
                            <div class="packages-list">
                                <div class="basic">
                                    <div class="basic-health-packages">
                                        Basic Health Packages
                                    </div>
                                </div>
                                <div class="annual">
                                    <div class="advanced-health-packages">
                                        Advanced Health Packages
                                    </div>
                                </div>
                                <div class="annual1">
                                    <div class="advance-health-package">
                                        Annual Health Package
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-us-parent">
                            <div class="contact-us">Contact Us</div>
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
                    <div class="frame-parent4">
                        <div class="frame-child5"></div>
                        <div class="separtor-line-wrapper">
                            <div class="separtor-line"></div>
                        </div>
                        <div class="social-media-icons-parent">
                            <div class="social-media-icons">
                                <a href="#">
                                    <img class="mditwitter-icon" alt="" src="{{ asset('images/mdi_twitter.svg') }}" />
                                </a>
                                <a href="#">
                                    <img class="icbaseline-facebook-icon" alt="" src="{{ asset('images/ic_baseline-facebook.svg') }}" />
                                </a>
                                <a href="#">
                                    <img class="uillinkedin-icon" alt="" src="{{ asset('images/uil_linkedin.svg') }}" />
                                </a>
                                <a href="#">
                                    <img class="fayoutube-icon" alt="" src="{{ asset('images/fa_youtube.svg') }}" />
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
            </section>
        </main>
    </div>

    <script src="{{ asset('js/menu.js') }}"></script>

</body>

</html>
