<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login_styleguide.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-database.js"></script>
    <script src="<?php echo e(asset('js/store.js')); ?>"></script>
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.svg')); ?>" type="image/x-icon">
</head>

<body>
    <div class="doctor-login">
        <div class="doctor-login-child"></div>
        <section class="main">
            <div class="logo-group">
                <div class="jam-medical-logo">
                    <div class="jammedical">
                        <img class="jam-medical-icon" alt="" src="<?php echo e(asset('images/Frame 501.svg')); ?>" />
                    </div>
                </div>
                <a class="arogya-24x7">Arogya 24x7</a>
            </div>
        </section>
        <section class="content">
            <div class="welcome-title-parent">
                <div class="welcome-title">
                    <h2 class="welcome-back">Welcome Back</h2>
                </div>
                <div class="description">
                    <div class="services-description-parent">
                        <div class="services-description">
                            <h1 class="welcome-to-arogya-container">
                                <p class="welcome-to-arogya-24x7">
                                    <span class="welcome-to">Welcome to</span>
                                    <span class="arogya-24x71"> Arogya 24x7</span>
                                    <span> </span>
                                </p>
                                <p class="healthcare-services">Healthcare Services</p>
                            </h1>
                        </div>
                        <div class="benefits">
                            <div class="customer-benefits">
                                <div class="happy-customers-icons">
                                    <img class="customer-icons" alt="" src="<?php echo e(asset('images/Ellipse 15.png')); ?>" />
                                    <img class="customer-icons1" alt="" src="<?php echo e(asset('images/Ellipse 16.png')); ?>" />
                                    <img class="customer-icons2" alt="" src="<?php echo e(asset('images/Ellipse 17.png')); ?>" />
                                    <img class="customer-icons3" alt="" src="<?php echo e(asset('images/Ellipse 18.png')); ?>" />
                                    <img class="customer-icons4" alt="" src="<?php echo e(asset('images/Ellipse 19.png')); ?>" />
                                    <img class="customer-icons5" alt="" src="<?php echo e(asset('images/Ellipse 20.png')); ?>" />
                                    <img class="customer-icons6" alt="" src="<?php echo e(asset('images/Ellipse 21.png')); ?>" />
                                </div>
                                <div class="happy-customers-count-wrapper">
                                    <div class="happy-customers-count">
                                        <div class="customers-count">
                                            <div class="happy-customers">191 + Happy Customers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="empty-benefit-icon" alt="" src="<?php echo e(asset('images/Frame 1368.png')); ?>" />
                    </div>
                    <div class="login-instructions-parent">
                        <div class="login-instructions">
                            <img class="login-notice-icon" alt="" src="<?php echo e(asset('images/border.svg')); ?>" />
                            <div class="please-login-to-container">
                                <p class="please-login">
                                    Please login to access patient records
                                </p>
                                <p class="and-medical-reports">and medical reports</p>
                            </div>
                        </div>
                        <div class="login-form">
                            <div class="login-form-fields">
                                <a href="<?php echo e(url('/')); ?>">
                                    <div class="login-button">
                                        <img class="login-button-icon" alt="" src="<?php echo e(asset('images/Frame 1277.svg')); ?>" />
                                        <div class="login-wrapper">
                                            <div class="login">Login</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo e(route('registration')); ?>">
                                    <div class="register-button">
                                        <div class="register-button-content">
                                            <div class="register-button-border">
                                                <div class="border"></div>
                                            </div>
                                            <div class="register">Register</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <form class="input-fields" onsubmit="login(event)">
                                <div class="inputs-fields">
                                    <div class="input-fields-comp">
                                        <input class="city-dropdown" id="username" placeholder="Username" type="text" />
                                    </div>
                                    <div class="input-fields-comp1">
                                        <input class="input-fields-comp-child" id="password" placeholder="Password"
                                            type="password" />
                                    </div>
                                </div>
                                <div class="forgot-password-parent">
                                    <a href="#">
                                        <div class="forgot-password">Forgot Password?</div>
                                    </a>
                                    <button type="submit" class="input-fields-comp2">
                                        <div class="select-city-wrapper">
                                            <div class="select-city">Login</div>
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        window.homeUrl = "<?php echo e(route('home')); ?>";
    </script>

</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/welcome.blade.php ENDPATH**/ ?>