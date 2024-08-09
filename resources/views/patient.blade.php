
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Patient Registration</title>
    <link rel="stylesheet" href="{{ asset('css/patient_registration_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/patient_registration_styleguide.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="{{ asset('images/Frame 501.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="patient-registration">
        <header class="header">
            <div class="logo-group">
                <div class="jam-medical-logo">
                    <div class="jammedical">
                        <img class="logo-image-icon" alt="" src="{{ asset('images/Frame 501.svg') }}" />
                    </div>
                </div>
                <a class="arogya-24x7">Arogya 24x7</a>
            </div>
        </header>
        <section class="body">
            <div class="content">
                <div class="registration">
                    <div class="registration-form">
                        <div class="content-description-wrapper">
                            <div class="content-description">
                                <div class="title-parent">
                                    <div class="title">
                                        <h1 class="patient-registration1">
                                            Patient Registration
                                        </h1>
                                    </div>
                                    <div class="welcome-message">
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
                        <div class="statistics">
                            <div class="customer-icons">
                                <img class="icons" alt="" src="{{ asset('images/Ellipse 15.png') }}" />

                                <img class="icons1" alt="" src="{{ asset('images/Ellipse 16.png') }}" />

                                <img class="icons2" alt="" src="{{ asset('images/Ellipse 17.png') }}" />

                                <img class="icons3" alt="" src="{{ asset('images/Ellipse 18.png') }}" />

                                <img class="icons4" alt="" src="{{ asset('images/Ellipse 19.png') }}" />

                                <img class="icons5" alt="" src="{{ asset('images/Ellipse 20.png') }}" />

                                <img class="icons6" alt="" src="{{ asset('images/Ellipse 21.png') }}" />
                            </div>
                            <div class="customer-count">
                                <div class="happy-customers">
                                    <div class="happy-customers-wrapper">
                                        <div class="happy-customers1">191 + Happy Customers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="actions" action="" id="patients">
                    <div class="auth-options">
                        <div class="buttons">
                            <a href="{{ url('/') }}">
                                <div class="login-button-wrapper">
                                    <div class="login-button">
                                        <div class="login-circle">
                                            <div class="border"></div>
                                        </div>
                                        <div class="login">Login</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('registration') }}">
                                <div class="register-button-parent">
                                    <img class="register-button-icon" alt="" src="{{ asset('images/Frame 1277.svg') }}" />

                                    <div class="register-wrapper">
                                        <div class="register">Register</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="inputs-fields">
                            <div class="input-fields-comp">
                                <div class="city-dropdown">
                                    <input class="select-city" id="fullname" placeholder="Name" type="text" required/>
                                </div>
                            </div>
                            <div class="input-fields-comp1">
                                <div class="select-city-wrapper">
                                    <input class="select-city1" id="emailid" placeholder="Email" type="email" required/>
                                </div>
                            </div>
                            <div class="input-fields-comp2">
                                <input class="input-fields-comp-child" id="username" placeholder="Username"
                                    type="text" required/>
                            </div>
                            <div class="validation-message" style="color: red;"></div>
                            <div class="input-fields-comp3">
                                <input class="input-fields-comp-item" id="password" placeholder="Password"
                                    type="password" required/>
                            </div>
                            <div class="validation-message" style="color: red;"></div>
                        </div>
                    </div>
                    <div class="agreement">
                        <div class="terms">
                            <input class="terms-and-conditions" type="checkbox" required/>

                            <div class="by-signing-up-container">
                                <span class="by-signing-up">By signing up, I agree with the
                                </span><br />
                                <a href="#" class="term">Terms and Conditions</a>
                            </div>
                        </div>
                        <button type="submit" class="input-fields-comp4" value="Submit">
                            <div class="select-city2">
                                <div class="select-city3">Register</div>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <script type="module">
        const firebaseConfig = {
            apiKey: "your-api-key",
            authDomain: "your-project-id.firebaseapp.com",
            databaseURL: "your-database-url",
            projectId: "your-project-id",
            storageBucket: "your-project-id.appspot.com",
            messagingSenderId: "your-sender-id",
            appId: "your-app-id",
            measurementId: "your-measurement-id"
        };

        firebase.initializeApp(firebaseConfig);

        var credentials = firebase.database().ref("patients");

        document.getElementById("patients").addEventListener("submit", submitForm);

        function submitForm(e) {
            e.preventDefault();

            var fullname = getElementVal("fullname");
            var emailid = getElementVal("emailid");
            var username = getElementVal("username");
            var password = getElementVal("password");

            let isValid = true;

            if (isValid) {
                document.getElementById("patients").reset();
                alert('Your details have been saved.');
                saveMessages(fullname, emailid, username, password);
            }
        }

        const saveMessages = (fullname, emailid, username, password) => {
            var newRecord = credentials.push();

            newRecord.set({
                fullname: fullname,
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
