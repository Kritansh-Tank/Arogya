<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/patient_dashboard_2_style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/patient_dashboard_2_styleguide.css')); ?>" />
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
            <div class="sidebar-container">
                <div class="sidebar-container-inner">
                    <div class="frame-parent">
                        <div class="frame-wrapper">
                            <div class="jammedical-wrapper">
                                <div class="jammedical">
                                    <img class="vector-icon" loading="lazy" alt="" src="<?php echo e(asset('images/jam_medical.svg')); ?>" />
                                </div>
                            </div>
                        </div>
                        <a class="arogya-24x7">Arogya 24x7</a>
                    </div>
                </div>
                <div class="side-bar-links">
                    <a href="<?php echo e(route('patdash')); ?>">
                        <button class="dashboard-sidebar-link">
                            <div class="tablerfile-report-parent">
                                <img class="tablerfile-report-icon" alt="" src="<?php echo e(asset('images/tabler_file-report.svg')); ?>" />
                                <div class="upload-prescription">Upload Prescription</div>
                            </div>
                        </button>
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
            <div class="help-links">
                <div class="dashboard-sidebar-link3">
                    <a href="#">
                        <div class="carbonhelp-parent">
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
        <section class="user-panel">
            <header class="dashboard-nav">
                <div class="profile-settings-notification">
                    <div class="settings-notification">
                        <img class="solarsettings-outline-icon" alt="" src="<?php echo e(asset('images/solar_settings-outline.svg')); ?>" />

                        <div class="notification-icon">
                            <img class="ionnotifications-outline-icon" alt="" src="<?php echo e(asset('images/Notification-Icon.svg')); ?>" />

                            <div class="notification-dot"></div>
                        </div>
                    </div>
                    <div class="user-name">
                        <img class="user-name-container" alt="" src="<?php echo e(asset('images/Frame 310.png')); ?>" />

                        <div class="patient-name-parent">
                            <a class="patient-name">Patient Name</a>
                            <img class="user-name-icon" alt="" src="<?php echo e(asset('images/Vector.svg')); ?>" />
                        </div>
                    </div>
                </div>
                <div class="page-title">
                    <div class="send-prescription-to">Send Prescription to Doctor</div>
                </div>
            </header>
            <div class="content">
                <div class="main-container">
                    <div class="page-container">
                        <div class="frame-group">
                            <div class="send-prescription-wrapper">
                                <div class="send-prescription">Send Prescription</div>
                            </div>
                            <div class="search-bar">
                                <div class="search-input-container">
                                    <div class="search-input-container-inner">
                                        <div class="search-input-wrapper">
                                            <div class="search-input">
                                                <img class="iconoirsearch1" alt="" src="<?php echo e(asset('images/iconoir_search.svg')); ?>" />

                                                <a class="search-doctor">Search Doctor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filters-parent">
                                    <a class="filters"> Filters</a>
                                    <img class="clarityfilter-line-icon" alt="" src="<?php echo e(asset('images/clarity_filter-line.svg')); ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="doctors-list">
                            <div class="doctors-container">
                                <div class="doctors-cards">
                                    <div class="patient-upload-report-cards-parent">
                                        <div class="patient-upload-report-cards">
                                            <div class="doctor-card-containers-wrapper">
                                                <div class="doctor-card-containers">
                                                    <div class="doctor-card-items">
                                                        <img class="doctor-avatars-icon" alt=""
                                                            src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                        <div class="doctor-details">
                                                            <div class="dr-gaurav">Dr Gaurav</div>
                                                            <div class="mbbs-fcpsuk-neurosurgeon">
                                                                MBBS, FCPS(UK) Neurosurgeon
                                                            </div>
                                                            <div class="view-details">
                                                                <div class="view-details1">View Details</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="doctor-locations">
                                                        <img class="mdilocation-icon" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                        <div class="gandhi-nagar-kurla">
                                                            Gandhi Nagar, Kurla
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="patient-upload-report-cards1">
                                            <div class="patient-upload-report-cards-inner">
                                                <div class="frame-container">
                                                    <div class="ellipse-parent">
                                                        <img class="frame-child" alt="" src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

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
                                                        <img class="mdilocation-icon1" alt=""
                                                            src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                        <div class="gandhi-nagar-kurla1">
                                                            Gandhi Nagar, Kurla
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="patient-upload-report-cards2">
                                            <div class="patient-upload-report-cards-child">
                                                <div class="frame-div">
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
                                                        <img class="mdilocation-icon2" alt=""
                                                            src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                        <div class="gandhi-nagar-kurla2">
                                                            Gandhi Nagar, Kurla
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-state">
                                        <div class="empty-state-container">
                                            <div class="empty-state-container-child"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-upload-report-cards3">
                                    <div class="doctor-card-instance-container-wrapper">
                                        <div class="doctor-card-instance-container">
                                            <div class="doctor-card-instance-items">
                                                <img class="doctor-instance-avatar" alt="" src="<?php echo e(asset('images/Ellipse 22.png')); ?>" />

                                                <div class="doctor-instance-details">
                                                    <div class="dr-gaurav3">Dr Gaurav</div>
                                                    <div class="mbbs-fcpsuk-neurosurgeon3">
                                                        MBBS, FCPS(UK) Neurosurgeon
                                                    </div>
                                                    <div class="view-details6">
                                                        <div class="view-details7">View Details</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="doctor-instance-location">
                                                <img class="mdilocation-icon3" alt="" src="<?php echo e(asset('images/Vector-2.svg')); ?>" />

                                                <div class="gandhi-nagar-kurla3">
                                                    Gandhi Nagar, Kurla
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upload-container-wrapper">
                        <div class="upload-container">
                            <img class="drag-and-drop-icon" alt="" src="<?php echo e(asset('images/Vector-5.svg')); ?>" />
                            <input type="file" id="fileInput" accept=".pdf,.jpg,.png" />
                            <div class="upload-button-container">
                                <button class="upload-button-wrapper" type="submit" value="Submit" id="uploadButton">
                                    <div class="upload-report">Upload Report</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-database.js"></script>
    <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyA6C2MY6IZZcrzrIO3yO-y7Q39vmCZoTUQ",
            authDomain: "tester-57020.firebaseapp.com",
            databaseURL: "https://tester-57020-default-rtdb.firebaseio.com",
            projectId: "tester-57020",
            storageBucket: "tester-57020.appspot.com",
            messagingSenderId: "1057263461206",
            appId: "1:1057263461206:web:253d5bd4d016d9220c2cf7",
            measurementId: "G-BXJYKG1CFN"
        };

        // Initialize Firebase
        const app = firebase.initializeApp(firebaseConfig);
        const storage = firebase.storage();
        const database = firebase.database();

        // Upload file and save URL
        document.getElementById('uploadButton').addEventListener('click', function () {
            const fileInput = document.getElementById('fileInput');
            const file = fileInput.files[0];

            if (!file) {
                alert('Please select a report to upload.');
                return;
            }

            const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];
            const maxSize = 200 * 1024; // 200 KB

            if (!allowedTypes.includes(file.type)) {
                alert('Invalid report type. Please select a PDF, JPG, or PNG file.');
                return;
            } else if (file.size > maxSize) {
                alert('Report size exceeds 200KB. Please select a smaller file.');
                return;
            }

            // Create a storage ref
            const storageRef = storage.ref(`reports/${file.name}`);

            // Upload file
            const uploadTask = storageRef.put(file);

            uploadTask.on('state_changed',
                (snapshot) => {
                    // Observe state change events such as progress, pause, and resume
                },
                (error) => {
                    alert('Failed to upload file: ' + error.message);
                },
                () => {
                    // Handle successful uploads on complete
                    uploadTask.snapshot.ref.getDownloadURL().then((downloadURL) => {
                        alert('Report uploaded successfully!');
                        // Save file URL to Realtime Database
                        const reportRef = database.ref('reports').push();
                        reportRef.set({
                            fileName: file.name,
                            url: downloadURL
                        });
                        // Optionally, reset the file input
                        fileInput.value = '';
                    });
                }
            );
        });

    </script>

</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/patdash1.blade.php ENDPATH**/ ?>