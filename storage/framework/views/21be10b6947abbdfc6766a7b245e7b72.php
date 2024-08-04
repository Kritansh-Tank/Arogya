<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/patient_dashboard_1_style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/patient_dashboard_1_styleguide.css')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.svg')); ?>" type="image/x-icon">
</head>

<body>
    <div class="patient-upload-report-prescrip">
        <div class="patient-upload-report-prescrip-inner">
            <div class="iconoirsearch-parent">
                <img class="iconoirsearch" alt="" src="<?php echo e(asset('images/iconoir_search.svg')); ?>" />

                <div class="search">Search</div>
            </div>
        </div>
        <div class="side-bar">
            <div class="frame-parent">
                <div class="frame-wrapper">
                    <div class="frame-group">
                        <div class="frame-container">
                            <div class="jammedical-wrapper">
                                <div class="jammedical">
                                    <img class="vector-icon" alt="" src="<?php echo e(asset('images/jam_medical.svg')); ?>" />
                                </div>
                            </div>
                        </div>
                        <a class="arogya-24x7">Arogya 24x7</a>
                    </div>
                </div>
                <div class="dashboard-sidebar-link-parent">
                    <a href="<?php echo e(route('patdash')); ?>">
                        <div class="dashboard-sidebar-link">
                            <div class="tablerfile-report-parent">
                                <img class="tablerfile-report-icon" alt="" src="<?php echo e(asset('images/tabler_file-report.svg')); ?>" />
                                <div class="upload-prescription">Upload Prescription</div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo e(route('patdash2')); ?>">
                        <div class="dashboard-sidebar-link1">
                            <div class="tablerfile-report-group">
                                <img class="tablerfile-report-icon1" alt="" src="<?php echo e(asset('images/tabler_file-report.svg')); ?>" />
                                <div class="upload-prescription1">My Reports</div>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo e(route('patdash3')); ?>">
                        <div class="dashboard-sidebar-link2">
                            <div class="tablerfile-report-container">
                                <img class="tablerfile-report-icon2" alt="" src="<?php echo e(asset('images/tabler_file-report.svg')); ?>" />
                                <div class="upload-prescription2">My Prescription</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="dashboard-sidebar-link-group">
                <div class="dashboard-sidebar-link3">
                    <a href="#">
                        <div class="carbonhelp-parent">
                            <img class="carbonhelp-icon" alt="" src="<?php echo e(asset('images/carbon_help.svg')); ?>" />

                            <div class="help" style="color: white;">Help</div>
                        </div>
                    </a>
                </div>
                <div class="dashboard-sidebar-link4">
                    <a href="<?php echo e(url('/')); ?>">
                        <div class="solarlogin-2-linear-parent">
                            <img class="solarlogin-2-linear-icon" alt="" src="<?php echo e(asset('images/solar_login-2-linear.svg')); ?>" />

                            <div class="log-out" style="color: white;">Log Out</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <section class="navigation">
            <header class="dashboard-nav">
                <div class="profile-settings-notification">
                    <div class="settings-notification">
                        <img class="solarsettings-outline-icon" src="<?php echo e(asset('images/solar_settings-outline.svg')); ?>" />

                        <div class="notification-icon">
                            <img class="ionnotifications-outline-icon" alt="" src="<?php echo e(asset('images/Notification-Icon.svg')); ?>" />

                            <div class="notification-dot"></div>
                        </div>
                    </div>
                    <div class="user-profile">
                        <img class="user-profile-image" alt="" src="<?php echo e(asset('images/Frame 310.png')); ?>" />

                        <div class="user-name">
                            <a class="patient-name">Patient Name</a>
                            <img class="vector-icon1" alt="" src="<?php echo e(asset('images/Vector.svg')); ?>" />
                        </div>
                    </div>
                </div>
                <div class="page-title">
                    <div class="send-prescription-to">Send Prescription to Doctor</div>
                </div>
            </header>
            <div class="content">
                <div class="search-doctors">
                    <div class="search-bar">
                        <div class="search-input">
                            <div class="search-icon">
                                <div class="send-prescription">Send Prescription</div>
                            </div>
                            <div class="doctor-filters">
                                <div class="search-field">
                                    <div class="search-terms-wrapper">
                                        <div class="search-terms">
                                            <div class="search-input-box">
                                                <img class="iconoirsearch1" alt="" src="<?php echo e(asset('images/iconoir_search.svg')); ?>" />

                                                <a class="search-doctor">Search Doctor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-options">
                                    <a class="filters"> Filters</a>
                                    <img class="clarityfilter-line-icon" alt="" src="<?php echo e(asset('images/clarity_filter-line.svg')); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="doctors-list">
                            <div class="doctors-container">
                                <div class="doctor-cards">
                                    <div class="patient-upload-report-cards">
                                        <a href="<?php echo e(route('patdash1')); ?>">
                                            <div class="doctor-card-container">
                                                <div class="doctor-card-info">
                                                    <div class="doctor-card-details">
                                                        <img class="doctor-profile-pic" alt=""
                                                            src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                        <div class="doctor-info">
                                                            <div class="dr-gaurav">Dr Gaurav</div>
                                                            <div class="mbbs-fcpsuk-neurosurgeon">
                                                                MBBS, FCPS(UK) Neurosurgeon
                                                            </div>
                                                            <div class="view-details">
                                                                <div class="view-details1">View Details</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="doctor-location">
                                                        <img class="mdilocation-icon" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                        <div class="gandhi-nagar-kurla">
                                                            Gandhi Nagar, Kurla
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="patient-upload-report-cards1">
                                        <div class="patient-upload-report-cards-inner">
                                            <div class="frame-div">
                                                <div class="ellipse-parent">
                                                    <img class="doctor-profile-pic" alt="" src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                    <div class="dr-gaurav-parent">
                                                        <div class="dr-gaurav1">Dr Gaurav</div>
                                                        <div class="mbbs-fcpsuk-neurosurgeon1">
                                                            MBBS, FCPS(UK) Neurosurgeon
                                                        </div>
                                                        <div class="view-details2">
                                                            <div class="view-details3">View Details</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mdilocation-parent">
                                                    <img class="mdilocation-icon1" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                    <div class="gandhi-nagar-kurla1">
                                                        Gandhi Nagar, Kurla
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="patient-upload-report-cards2">
                                        <div class="patient-upload-report-cards-child">
                                            <div class="frame-parent1">
                                                <div class="ellipse-group">
                                                    <img class="frame-item" alt="" src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                    <div class="dr-gaurav-group">
                                                        <div class="dr-gaurav2">Dr Gaurav</div>
                                                        <div class="mbbs-fcpsuk-neurosurgeon2">
                                                            MBBS, FCPS(UK) Neurosurgeon
                                                        </div>
                                                        <div class="view-details4">
                                                            <div class="view-details5">View Details</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mdilocation-group">
                                                    <img class="mdilocation-icon2" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                    <div class="gandhi-nagar-kurla2">
                                                        Gandhi Nagar, Kurla
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="patient-upload-report-cards3">
                                        <div class="patient-upload-report-cards-inner1">
                                            <div class="frame-parent2">
                                                <div class="ellipse-container">
                                                    <img class="frame-inner" alt="" src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                    <div class="dr-gaurav-container">
                                                        <div class="dr-gaurav3">Dr Gaurav</div>
                                                        <div class="mbbs-fcpsuk-neurosurgeon3">
                                                            MBBS, FCPS(UK) Neurosurgeon
                                                        </div>
                                                        <div class="view-details6">
                                                            <div class="view-details7">View Details</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mdilocation-container">
                                                    <img class="mdilocation-icon3" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                    <div class="gandhi-nagar-kurla3">
                                                        Gandhi Nagar, Kurla
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="patient-upload-report-cards4">
                                        <div class="patient-upload-report-cards-inner2">
                                            <div class="frame-parent3">
                                                <div class="ellipse-parent1">
                                                    <img class="ellipse-icon" alt="" src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                    <div class="dr-gaurav-parent1">
                                                        <div class="dr-gaurav4">Dr Gaurav</div>
                                                        <div class="mbbs-fcpsuk-neurosurgeon4">
                                                            MBBS, FCPS(UK) Neurosurgeon
                                                        </div>
                                                        <div class="view-details8">
                                                            <div class="view-details9">View Details</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mdilocation-parent1">
                                                    <img class="mdilocation-icon4" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                    <div class="gandhi-nagar-kurla4">
                                                        Gandhi Nagar, Kurla
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <div class="footer-content">
                                        <div class="page-navigation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-state"></div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/patdash.blade.php ENDPATH**/ ?>