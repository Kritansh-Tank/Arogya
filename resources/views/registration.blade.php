<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/registration_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registration_styleguide.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" />
    <link rel="icon" href="{{ asset('images/Frame 501.svg') }}" type="image/x-icon">
</head>

<body>
    <div class="register">
        <div class="register-child"></div>
        <header class="header">
            <div class="logo-group">
                <div class="logo-container">
                    <div class="jammedical">
                        <img class="logo-shape-icon" alt="" src="{{ asset('images/Vector-8.svg') }}" />
                    </div>
                </div>
                <a class="arogya-24x7">Arogya 24x7</a>
            </div>
        </header>
        <section class="body">
            <div class="content">
                <img class="left-panel-icon" alt="" src="{{ asset('images/Frame 1368.png') }}" />

                <div class="right-panel">
                    <div class="form-container">
                        <div class="city-dropdown">
                            <div class="login-button-container">
                                <a href="{{ url('/') }}">
                                    <div class="login-button-wrapper">
                                        <div class="login-button-inner">
                                            <div class="login-button-shape">
                                                <div class="border"></div>
                                            </div>
                                            <div class="login">Login</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('registration') }}">
                                    <div class="register-button-container">
                                        <img class="register-button-wrapper" alt="" src="{{ asset('images/Frame 1277.svg') }}" />

                                        <div class="register-wrapper">
                                            <div class="register1">Register</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="{{ route('patient') }}">
                                <div class="input-fields-comp">
                                    <div class="city-option">
                                        <div class="select-city">As Patient</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('doctor') }}">
                                <div class="input-fields-comp1">
                                    <div class="select-city-wrapper">
                                        <div class="select-city1">As Doctor</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('laboratory') }}">
                                <div class="input-fields-comp2">
                                    <div class="select-city-container">
                                        <div class="select-city2">As Laboratory</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
