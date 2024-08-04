<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Doctor Registration</title>
    <link rel="stylesheet" href="{{ asset('css/doctor_registration_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/doctor_registration_styleguide.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" />
    <link rel="icon" href="{{ asset('images/Frame 501.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="doctor-register">
        <header class="main">
            <div class="logo-group">
                <div class="logo-container">
                    <div class="jammedical">
                        <img class="logo-icon" alt="" src="{{ asset('images/Frame 501.svg') }}" />
                    </div>
                </div>
                <a class="arogya-24x7">Arogya 24x7</a>
            </div>
        </header>
        <main class="content">
            <section class="body">
                <div class="header">
                    <img class="navigation-icon" alt="" src="{{ asset('images/Frame 1368.png') }}" />
                </div>
                <form class="auth" action="" id="doctors">
                    <div class="form-container">
                        <div class="form">
                            <a href="{{ url('/') }}">
                                <div class="fields">
                                    <div class="login-button-parent">
                                        <div class="login-button">
                                            <div class="border"></div>
                                        </div>
                                        <div class="login">Login</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('registration') }}">
                                <div class="registration">
                                    <img class="register-button-icon" alt="" src="{{ asset('images/Frame 1277.svg') }}" />

                                    <div class="register-wrapper">
                                        <div class="register">Register</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="inputs-fields">
                            <div class="input-fields-comp">
                                <div class="input-labels">
                                    <input class="select-city" id="fullname" placeholder="Name" type="text" required />
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
                            <div class="input-fields-comp4">
                                <div class="select-city-container">
                                    <input class="select-city2" id="hospital" placeholder="Clinic / Hospital Name"
                                        type="text" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agreement">
                        <div class="agreement-content">
                            <input class="terms-icon" type="checkbox" required />

                            <div class="by-signing-up-container">
                                <span class="by-signing-up">By signing up, I agree with the
                                </span><br />
                                <a href="#" class="term">Terms and Conditions</a>
                            </div>
                        </div>
                        <button type="submit" class="input-fields-comp5" value="Submit">
                            <div class="dropdown">
                                <div class="select-city3">Register</div>
                            </div>
                        </button>
                    </div>
                </form>
            </section>
        </main>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
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

        var credentials = firebase.database().ref("doctors");

        document.getElementById("doctors").addEventListener("submit", submitForm);

        function submitForm(e) {
            e.preventDefault();

            var fullname = getElementVal("fullname");
            var emailid = getElementVal("emailid");
            var username = getElementVal("username");
            var password = getElementVal("password");
            var hospital = getElementVal("hospital");

            let isValid = true;

            if (isValid) {
                document.getElementById("doctors").reset();
                alert('Your details have been saved.');
                saveMessages(fullname, emailid, username, password, hospital);
            }
        }

        const saveMessages = (fullname, emailid, username, password, hospital) => {
            var newRecord = credentials.push();

            newRecord.set({
                fullname: fullname,
                emailid: emailid,
                username: username,
                password: password,
                hospital: hospital,
            });
        };

        const getElementVal = (id) => {
            return document.getElementById(id).value;
        };

    </script>

</body>

</html>
