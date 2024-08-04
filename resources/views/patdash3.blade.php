<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/patient_dashboard_6_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/patient_dashboard_6_styleguide.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="{{ asset('images/Frame 501.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="patient-my-prescription">
        <div class="patient-my-prescription-inner">
            <div class="iconoirsearch-parent">
                <img class="iconoirsearch" alt="" src="{{ asset('images/iconoir_search.svg') }}" />

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
                                    <img class="vector-icon" alt="" src="{{ asset('images/jam_medical.svg') }}" />
                                </div>
                            </div>
                        </div>
                        <a class="arogya-24x7">Arogya 24x7</a>
                    </div>
                </div>
                <div class="dashboard-sidebar-link-parent">
                    <a href="{{ route('patdash') }}">
                        <div class="dashboard-sidebar-link">
                            <div class="tablerfile-report-parent">
                                <img class="tablerfile-report-icon" alt="" src="{{ asset('images/tabler_file-report.svg') }}" />
                                <div class="upload-prescription">Upload Prescription</div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('patdash2') }}">
                        <div class="dashboard-sidebar-link1">
                            <div class="tablerfile-report-group">
                                <img class="tablerfile-report-icon1" alt="" src="{{ asset('images/tabler_file-report.svg') }}" />
                                <div class="upload-prescription1">My Reports</div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('patdash3') }}">
                        <div class="dashboard-sidebar-link2">
                            <div class="tablerfile-report-container">
                                <img class="tablerfile-report-icon2" alt="" src="{{ asset('images/tabler_file-report.svg') }}" />
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
                            <img class="carbonhelp-icon" alt="" src="{{ asset('images/carbon_help.svg') }}" />

                            <div class="help">Help</div>
                        </div>
                    </a>
                </div>
                <div class="dashboard-sidebar-link4">
                    <a href="{{ url('/') }}">
                        <div class="solarlogin-2-linear-parent">
                            <img class="solarlogin-2-linear-icon" alt="" src="{{ asset('images/solar_login-2-linear.svg') }}" />

                            <div class="log-out">Log Out</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <section class="topbar">
            <header class="dashboard-nav">
                <div class="profile-settings-notification">
                    <div class="settings-notification">
                        <img class="solarsettings-outline-icon" alt="" src="{{ asset('images/solar_settings-outline.svg') }}" />

                        <div class="notification-icon">
                            <img class="ionnotifications-outline-icon" alt="" src="{{ asset('images/Notification-Icon.svg') }}" />

                            <div class="notification-badge"></div>
                        </div>
                    </div>
                    <div class="frame-div">
                        <img class="frame-child" alt="" src="{{ asset('images/Frame 310.png') }}" />

                        <div class="patient-name-parent">
                            <a class="patient-name">Patient Name</a>
                            <img class="vector-icon1" alt="" src="{{ asset('images/Vector.svg') }}" />
                        </div>
                    </div>
                </div>
                <a class="my-prescription">My Prescription</a>
            </header>
            <div class="content">
                <div class="prescription-list">
                    <div class="search-filter">
                        <div class="search-bar">
                            <div class="search-input">
                                <div class="search-input-inner">
                                    <div class="frame-wrapper1">
                                        <div class="iconoirsearch-group">
                                            <img class="iconoirsearch1" alt="" src="{{ asset('images/iconoir_search.svg') }}" />

                                            <div class="search-prescription">
                                                Search Prescription
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-button">
                                    <a class="filters"> Filters</a>
                                    <img class="clarityfilter-line-icon" alt="" src="{{ asset('images/clarity_filter-line.svg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prescription-filters">
                        <div class="filter-options">
                            <div class="filter-items-parent">
                                <div class="filter-items">
                                    <img class="mdipatient-outline-icon" alt="" src="{{ asset('images/mdi_patient-outline.svg') }}" />

                                    <div class="doctor-name">Doctor Name</div>
                                </div>
                                <div class="filter-items1">
                                    <img class="healthiconshealth-alt-outline" alt=""
                                        src="{{ asset('images/healthicons_health-alt-outline.svg') }}" />

                                    <div class="clinic-name">Clinic Name</div>
                                </div>
                                <div class="filter-items2">
                                    <img class="carbonreport-icon" alt="" src="{{ asset('images/carbon_report.svg') }}" />

                                    <div class="patient-name1">Patient Name</div>
                                </div>
                                <div class="filter-items3">
                                    <img class="claritydate-line-icon" alt="" src="{{ asset('images/clarity_date-line.svg') }}" />

                                    <div class="uploaded-date">Uploaded Date</div>
                                </div>
                                <div class="filter-items4">
                                    <img class="formkittime-icon" alt="" src="{{ asset('images/formkit_time.svg') }}" />

                                    <div class="clinic-location">Clinic Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prescription-items">
                        <div class="prescription-item-content-parent">
                            <img class="prescription-item-content" alt="" src="{{ asset('images/Ellipse 27.svg') }}" />

                            <div class="doctor-info">
                                <div class="mark-wood">Mark Wood</div>
                            </div>
                        </div>
                        <div class="lab-names">
                            <div class="arogya-lab">Arogya Lab</div>
                        </div>
                        <div class="test-names">
                            <div class="blood-test">Blood Test</div>
                        </div>
                        <div class="wrapper">
                            <div class="div">12/02/2024</div>
                        </div>
                        <div class="am-wrapper">
                            <div class="am">10:30 am</div>
                        </div>
                    </div>
                    <div class="prescription-items1">
                        <div class="frame-parent1">
                            <div class="view-prescription-buttons-parent">
                                <div class="view-prescription-buttons">
                                    <div class="view-prescription">View Prescription</div>
                                </div>
                                <img class="carbonreport-icon1" alt="" src="{{ asset('images/carbon_report_1.svg') }}" />
                            </div>
                            <div class="download-text">
                                <div class="download-wrapper">
                                    <div class="download">Download</div>
                                </div>
                                <img class="material-symbols-lightdownloa" alt=""
                                    src="{{ asset('images/material-symbols-light_download.svg') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="prescription-items2">
                        <div class="ellipse-parent">
                            <img class="frame-item" alt="" src="{{ asset('images/Ellipse 27.svg') }}" />

                            <div class="mark-wood-wrapper">
                                <div class="mark-wood1">Mark Wood</div>
                            </div>
                        </div>
                        <div class="arogya-lab-wrapper">
                            <div class="arogya-lab1">Arogya Lab</div>
                        </div>
                        <div class="blood-test-wrapper">
                            <div class="blood-test1">Blood Test</div>
                        </div>
                        <div class="container">
                            <div class="div1">12/02/2024</div>
                        </div>
                        <div class="am-container">
                            <div class="am1">10:30 am</div>
                        </div>
                    </div>
                    <div class="prescription-items3">
                        <div class="frame-parent2">
                            <div class="frame-parent3">
                                <div class="view-prescription-wrapper">
                                    <div class="view-prescription1">View Prescription</div>
                                </div>
                                <img class="carbonreport-icon2" alt="" src="{{ asset('images/carbon_report_1.svg') }}" />
                            </div>
                            <div class="download-text1">
                                <div class="download-container">
                                    <div class="download1">Download</div>
                                </div>
                                <img class="material-symbols-lightdownloa" alt=""
                                    src="{{ asset('images/material-symbols-light_download.svg') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="prescription-items4">
                        <div class="ellipse-group">
                            <img class="frame-inner" alt="" src="{{ asset('images/Ellipse 27.svg') }}" />

                            <div class="mark-wood-container">
                                <div class="mark-wood2">Mark Wood</div>
                            </div>
                        </div>
                        <div class="arogya-lab-container">
                            <div class="arogya-lab2">Arogya Lab</div>
                        </div>
                        <div class="blood-test-container">
                            <div class="blood-test2">Blood Test</div>
                        </div>
                        <div class="frame">
                            <div class="div2">12/02/2024</div>
                        </div>
                        <div class="am-frame">
                            <div class="am2">10:30 am</div>
                        </div>
                    </div>
                    <div class="prescription-items5">
                        <div class="frame-parent4">
                            <div class="frame-parent5">
                                <div class="view-prescription-container">
                                    <div class="view-prescription2">View Prescription</div>
                                </div>
                                <img class="carbonreport-icon3" alt="" src="{{ asset('images/carbon_report_1.svg') }}" />
                            </div>
                            <div class="download-text2">
                                <div class="download-frame">
                                    <div class="download2">Download</div>
                                </div>
                                <img class="material-symbols-lightdownloa" alt=""
                                    src="{{ asset('images/material-symbols-light_download.svg') }}" />
                            </div>
                        </div>
                    </div>
                    <footer class="prescription-items6">
                        <div class="ellipse-container">
                            <img class="ellipse-icon" alt="" src="{{ asset('images/Ellipse 27.svg') }}" />

                            <div class="mark-wood-frame">
                                <div class="mark-wood3">Mark Wood</div>
                            </div>
                        </div>
                        <div class="arogya-lab-frame">
                            <div class="arogya-lab3">Arogya Lab</div>
                        </div>
                        <div class="blood-test-frame">
                            <div class="blood-test3">Blood Test</div>
                        </div>
                        <div class="wrapper1">
                            <div class="div3">12/02/2024</div>
                        </div>
                        <div class="am-wrapper1">
                            <div class="am3">10:30 am</div>
                        </div>
                    </footer>
                    <div class="prescription-items7">
                        <div class="frame-parent6">
                            <div class="frame-parent7">
                                <div class="view-prescription-frame">
                                    <div class="view-prescription3">View Prescription</div>
                                </div>
                                <img class="carbonreport-icon4" alt="" src="{{ asset('images/carbon_report_1.svg') }}" />
                            </div>
                            <div class="download-text3">
                                <div class="download-wrapper1">
                                    <div class="download3">Download</div>
                                </div>
                                <img class="material-symbols-lightdownloa" alt=""
                                    src="{{ asset('images/material-symbols-light_download.svg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
