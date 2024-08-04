<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/doctor_dashboard_1_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/doctor_dashboard_1_styleguide.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="{{ asset('images/Frame 501.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="doctor-dashboard">
        <div class="doctor-dashboard-inner">
            <div class="iconoirsearch-parent">
                <input class="iconoirsearch" type="checkbox" />

                <div class="search">Search</div>
            </div>
        </div>
        <div class="side-bar">
            <div class="sidebar-content-parent">
                <div class="sidebar-content">
                    <div class="sidebar-items">
                        <div class="sidebar-item">
                            <div class="sidebar-link-container">
                                <div class="jammedical">
                                    <img class="logo-icon" alt="" src="{{ asset('images/jam_medical.svg') }}" />
                                </div>
                            </div>
                        </div>
                        <a class="arogya-24x7">Arogya 24x7</a>
                    </div>
                </div>
                <div class="sidebar-links">
                    <button class="dashboard-sidebar-link">
                        <div class="link-items">
                            <img class="tablerfile-report-icon" alt="" src="{{ asset('images/upload.svg') }}" />
                            <div class="upload-prescription">Patient List</div>
                        </div>
                    </button>
                    <div class="dashboard-sidebar-link1">
                        <div class="tablerfile-report-parent">
                            <img class="tablerfile-report-icon1" alt="" src="{{ asset('images/report.svg') }}" />

                            <a class="upload-prescription1">Laboratory</a>
                        </div>
                    </div>
                    <div class="dashboard-sidebar-link2">
                        <div class="tablerfile-report-group">
                            <img class="tablerfile-report-icon2" alt="" src="{{ asset('images/tabler_file-report.svg') }}" />

                            <div class="upload-prescription2">My Prescription</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="help-and-logout">
                <div class="dashboard-sidebar-link3">
                    <a href="#">
                        <div class="account-items">
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
        <section class="user-bar">
            <header class="dashboard-nav">
                <div class="profile-settings-notification">
                    <div class="settings-notification">
                        <img class="solarsettings-outline-icon" alt="" src="{{ asset('images/solar_settings-outline.svg') }}" />

                        <div class="notification-icon">
                            <img class="ionnotifications-outline-icon" alt="" src="{{ asset('images/Notification-Icon.svg') }}" />

                            <div class="notification-badge"></div>
                        </div>
                    </div>
                    <div class="user-image-parent">
                        <img class="user-image-icon" alt="" src="{{ asset('images/Frame 310.png') }}" />

                        <div class="name-container">
                            <a class="doctor-name">Doctor Name</a>
                            <img class="vector-icon" alt="" src="{{ asset('images/Vector.svg') }}" />
                        </div>
                    </div>
                </div>
                <div class="patients-heading">
                    <a class="patients">Patients</a>
                </div>
            </header>
            <div class="patient-search">
                <div class="search-container">
                    <div class="search-bar">
                        <div class="search-input">
                            <div class="search-field">
                                <div class="search-input-container">
                                    <div class="search-icon-container">
                                        <img class="iconoirsearch1" alt="" src="{{ asset('images/iconoir_search.svg') }}" />

                                        <a class="search-patient">Search Patient</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="filters-parent">
                            <a class="filters"> Filters</a>
                            <img class="clarityfilter-line-icon" alt="" src="{{ asset('images/clarity_filter-line.svg') }}" />
                        </button>
                    </div>
                    <div class="patient-list">
                        <div class="list-container">
                            <div class="list-header">
                                <div class="header-row">
                                    <div class="header-cells">
                                        <div class="patient-info">
                                            <div class="id">#ID</div>
                                            <div class="info-labels">
                                                <div class="patient-name">Patient Name</div>
                                            </div>
                                            <div class="info-labels1">
                                                <div class="gender">Gender</div>
                                            </div>
                                            <div class="info-labels2">
                                                <div class="age">Age</div>
                                            </div>
                                            <div class="info-labels3">
                                                <div class="phone">Phone</div>
                                            </div>
                                        </div>
                                        <div class="patient-actions"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="patient-details">
                                <div class="patient-card">
                                    <div class="card-container">
                                        <input class="card-background" type="checkbox" />

                                        <div class="placeholder">
                                            <div class="empty-state">#1234</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-avatar">
                                    <img class="avatar-icon" alt="" src="{{ asset('images/Ellipse 22.png') }}" />

                                    <div class="patient-name-container">
                                        <div class="mike-hussy">Mike Hussy</div>
                                    </div>
                                </div>
                                <div class="gender-container">
                                    <div class="male">Male</div>
                                </div>
                                <div class="details-row">
                                    <div class="status">32</div>
                                </div>
                                <div class="details-row1">
                                    <div class="div">7507388777</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
