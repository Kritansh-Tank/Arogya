<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Laboratory Registration</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/laboratory_registration_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/laboratory_registration_styleguide.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="<?php echo e(asset('images/Frame 501.svg')); ?>" type="image/x-icon">
</head>

<body>
    <div class="laboratory-registration">
        <header class="header">
            <div class="logo-group">
                <div class="jam-medical-logo">
                    <div class="jammedical">
                        <img class="logo-image-icon" alt="" src="<?php echo e(asset('images/Frame 501.svg')); ?>" />
                    </div>
                </div>
                <a class="arogya-24x7">Arogya 24x7</a>
            </div>
        </header>
        <section class="content">
            <div class="registration-content-parent">
                <div class="registration-content">
                    <div class="registration-form">
                        <div class="title-wrapper">
                            <div class="title">
                                <div class="registration-title">
                                    <div class="labrotary-registration-wrapper">
                                        <h1 class="labrotary-registration">
                                            Labrotary Registration
                                        </h1>
                                    </div>
                                    <div class="description">
                                        <div class="at-arogya-we">
                                            At Arogya, we understand the importance of proactive
                                            healthcare. That's why we make it easy for you to
                                            schedule your health checkup appointments with us. Our
                                            state-of-the-art laboratory offers a wide range of tests
                                            and services designed to keep you on track with your
                                            health goals.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="customers">
                            <div class="ellipse-parent">
                                <img class="frame-child" alt="" src="<?php echo e(asset('images/Ellipse 15.png')); ?>" />

                                <img class="frame-item" alt="" src="<?php echo e(asset('images/Ellipse 16.png')); ?>" />

                                <img class="frame-inner" alt="" src="<?php echo e(asset('images/Ellipse 17.png')); ?>" />

                                <img class="ellipse-icon" alt="" src="<?php echo e(asset('images/Ellipse 18.png')); ?>" />

                                <img class="frame-child1" alt="" src="<?php echo e(asset('images/Ellipse 19.png')); ?>" />

                                <img class="frame-child2" alt="" src="<?php echo e(asset('images/Ellipse 20.png')); ?>" />

                                <img class="frame-child3" alt="" src="<?php echo e(asset('images/Ellipse 21.png')); ?>" />
                            </div>
                            <div class="customer-count">
                                <div class="happy-customers">
                                    <div class="customer-label">
                                        <div class="happy-customers1">191 + Happy Customers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="actions" action="" id="laboratories">
                    <div class="auth-options">
                        <div class="buttons">
                            <a href="<?php echo e(url('/')); ?>">
                                <div class="login-button-wrapper">
                                    <div class="login-button">
                                        <div class="login-content">
                                            <div class="border"></div>
                                        </div>
                                        <div class="login">Login</div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo e(route('registration')); ?>">
                                <div class="registration-button-parent">
                                    <img class="registration-button-icon" alt="" src="<?php echo e(asset('images/Frame 1277.svg')); ?>" />

                                    <div class="register-content">
                                        <div class="register">Register</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="inputs-fields">
                            <div class="input-fields-comp">
                                <div class="city-dropdown">
                                    <input class="select-city" id="laboratory" placeholder="Laboratory Name" type="text"
                                        required />
                                </div>
                            </div>
                            <div class="input-fields-comp1">
                                <div class="select-city-wrapper">
                                    <input class="select-city1" id="emailid" placeholder="Email" type="email"
                                        required />
                                </div>
                            </div>
                            <div class="input-fields-comp2">
                                <input class="input-fields-comp-child" id="username" placeholder="Username" type="text"
                                    required />
                            </div>
                            <div class="validation-message" style="color: red;"></div>
                            <div class="input-fields-comp3">
                                <input class="input-fields-comp-item" id="password" placeholder="Password"
                                    type="password" required />
                            </div>
                            <div class="validation-message" style="color: red;"></div>
                        </div>
                    </div>
                    <div class="terms">
                        <div class="terms-content">
                            <input class="agreement" type="checkbox" required />

                            <div class="by-signing-up-container">
                                <span class="by-signing-up">By signing up, I agree with the
                                </span><br />
                                <a href="#" class="term">Terms and Conditions</a>
                            </div>
                        </div>
                        <button type="submit" class="input-fields-comp4" value="Submit">
                            <div class="selection">
                                <div class="select-city2">Register</div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script type="module">
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

        firebase.initializeApp(firebaseConfig);

        var credentials = firebase.database().ref("laboratories");

        document.getElementById("laboratories").addEventListener("submit", submitForm);

        function submitForm(e) {
            e.preventDefault();

            var laboratory = getElementVal("laboratory");
            var emailid = getElementVal("emailid");
            var username = getElementVal("username");
            var password = getElementVal("password");

            let isValid = true;

            if (isValid) {
                document.getElementById("laboratories").reset();
                alert('Your details have been saved.');
                saveMessages(laboratory, emailid, username, password);
            }
        }

        const saveMessages = (laboratory, emailid, username, password) => {
            var newRecord = credentials.push();

            newRecord.set({
                laboratory: laboratory,
                emailid: emailid,
                username: username,
                password: password,
            });
        };

        const getElementVal = (id) => {
            return document.getElementById(id).value;
        };

    </script>

</body>

</html>
<?php /**PATH K:\VS Code Laravel\demo-app\resources\views/laboratory.blade.php ENDPATH**/ ?>