<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/patient_dashboard_5_style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/patient_dashboard_5_styleguide.css')); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.svg')); ?>" type="image/x-icon">
</head>

<body>
    <div class="patient-my-reports">
        <div class="patient-my-reports-inner">
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
                <div class="dashboard-sidebar-links">
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
            <div class="help-logout-links">
                <div class="dashboard-sidebar-link3">
                    <a href="#">
                        <div class="help-logout-icons">
                            <img class="carbonhelp-icon" alt="" src="<?php echo e(asset('images/carbon_help.svg')); ?>" />

                            <div class="help">Help</div>
                        </div>
                    </a>
                </div>
                <div class="dashboard-sidebar-link4">
                    <a href="<?php echo e(url('/')); ?>">
                        <div class="solarlogin-2-linear-parent">
                            <img class="solarlogin-2-linear-icon" alt="" src="<?php echo e(asset('images/solar_login-2-linear.svg')); ?>" />

                            <div class="log-out">Log Out</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <section class="dashboard-nav">
            <header class="dashboard-nav1">
                <div class="profile-settings-notification">
                    <div class="settings-notification">
                        <img class="solarsettings-outline-icon" alt="" src="<?php echo e(asset('images/solar_settings-outline.svg')); ?>" />

                        <div class="notification-icon">
                            <img class="ionnotifications-outline-icon" alt="" src="<?php echo e(asset('images/Notification-Icon.svg')); ?>" />

                            <div class="notification-icon-child"></div>
                        </div>
                    </div>
                    <div class="frame-div">
                        <img class="frame-child" alt="" src="<?php echo e(asset('images/Frame 310.png')); ?>" />

                        <div class="patient-name-parent">
                            <a class="patient-name">Patient Name</a>
                            <img class="vector-icon1" alt="" src="<?php echo e(asset('images/Vector.svg')); ?>" />
                        </div>
                    </div>
                </div>
                <a class="my-reports">My Reports</a>
            </header>
            <div class="dashboard-nav-inner">
                <div class="frame-wrapper1">
                    <div class="frame-parent1">
                        <div class="frame-wrapper2">
                            <div class="search-input-wrapper">
                                <div class="search-input">
                                    <img class="iconoirsearch1" alt="" src="<?php echo e(asset('images/iconoir_search.svg')); ?>" />

                                    <a class="search-reports">Search reports</a>
                                </div>
                            </div>
                        </div>
                        <div class="filters-parent">
                            <a class="filters"> Filters</a>
                            <img class="clarityfilter-line-icon" alt="" src="<?php echo e(asset('images/clarity_filter-line.svg')); ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="report-list-parent-wrapper">
                <div class="report-list-parent">
                    <div class="report-list-container">
                        <div class="report-header">
                            <div class="header-items">
                                <img class="mdipatient-outline-icon" alt="" src="<?php echo e(asset('images/mdi_patient-outline.svg')); ?>" />

                                <div class="patient-name1">Patient Name</div>
                            </div>
                            <div class="header-items1">
                                <img class="healthiconshealth-alt-outline" alt=""
                                    src="<?php echo e(asset('images/healthicons_health-alt-outline.svg')); ?>" />

                                <div class="associated-lab-name">Associated Lab Name</div>
                            </div>
                            <div class="header-items2">
                                <img class="carbonreport-icon" alt="" src="<?php echo e(asset('images/carbon_report.svg')); ?>" />

                                <div class="report-subject">Report Subject</div>
                            </div>
                            <div class="header-items3">
                                <img class="claritydate-line-icon" alt="" src="<?php echo e(asset('images/clarity_date-line.svg')); ?>" />

                                <div class="uploaded-date">Uploaded Date</div>
                            </div>
                            <div class="header-items4">
                                <img class="formkittime-icon" alt="" src="<?php echo e(asset('images/formkit_time.svg')); ?>" />

                                <div class="uploaded-time">Uploaded Time</div>
                            </div>
                        </div>
                    </div>
                    <div class="report-list">
                        <div class="report-list-content">
                            <div class="patient-dash-report-list">
                                <div class="report-item-content-wrapper">
                                    <div class="report-item-content">
                                        <div class="mark-wood">Mark Wood</div>
                                        <div class="arogya-lab">Arogya Lab</div>
                                        <div class="blood-test">Blood Test</div>
                                        <div class="report-separator">12/02/2024</div>
                                        <div class="am">10:30 am</div>
                                    </div>
                                </div>
                                <div class="report-actions">
                                    <div class="frame-parent2">
                                        <div class="view-report-wrapper">
                                            <div class="view-report">View Report</div>
                                        </div>
                                        <img class="carbonreport-icon1" alt="" src="<?php echo e(asset('images/carbon_report_1.svg')); ?>" />
                                    </div>
                                    <div class="download-text">
                                        <div class="download-wrapper">
                                            <a class="download">Download </a>
                                        </div>
                                        <img class="material-symbols-lightdownloa" alt=""
                                            src="<?php echo e(asset('images/material-symbols-light_download.svg')); ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="patient-dash-report-list1">
                                <div class="patient-dash-report-list-inner">
                                    <div class="mark-wood-parent">
                                        <div class="mark-wood1">Mark Wood</div>
                                        <div class="arogya-lab1">Arogya Lab</div>
                                        <div class="blood-test1">Blood Test</div>
                                        <div class="div">12/02/2024</div>
                                        <div class="am1">10:30 am</div>
                                    </div>
                                </div>
                                <div class="frame-parent3">
                                    <div class="frame-parent4">
                                        <div class="view-report-container">
                                            <div class="view-report1">View Report</div>
                                        </div>
                                        <img class="carbonreport-icon2" alt="" src="<?php echo e(asset('images/carbon_report_1.svg')); ?>" />
                                    </div>
                                    <div class="download-text1">
                                        <div class="download-container">
                                            <div class="download1">Download</div>
                                        </div>
                                        <img class="material-symbols-lightdownloa" alt=""
                                            src="<?php echo e(asset('images/material-symbols-light_download.svg')); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="report-item-single">
                <div class="patient-dash-report-list2">
                    <div class="single-report-content-wrapper">
                        <div class="single-report-content">
                            <div class="mark-wood2">Mark Wood</div>
                            <div class="arogya-lab2">Arogya Lab</div>
                            <div class="blood-test2">Blood Test</div>
                            <div class="div1">12/02/2024</div>
                            <div class="am2">10:30 am</div>
                        </div>
                    </div>
                    <div class="single-report-action">
                        <div class="single-view-report">
                            <div class="view-report-frame">
                                <div class="view-report2">View Report</div>
                            </div>
                            <img class="carbonreport-icon3" alt="" src="<?php echo e(asset('images/carbon_report_1.svg')); ?>" />
                        </div>
                        <div class="download-text2">
                            <div class="single-download">
                                <div class="download2">Download</div>
                            </div>
                            <img class="material-symbols-lightdownloa" alt=""
                                src="<?php echo e(asset('images/material-symbols-light_download.svg')); ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/patdash2.blade.php ENDPATH**/ ?>