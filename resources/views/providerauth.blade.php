<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication - Home Tech</title>
    <!-- Main authentication stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/providerauth.css') }}"> <!-- Adjust path if needed -->
    <!-- Boxicons CDN -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo-removebg-preview.png') }}" type="image/x-icon">
    <!-- Adjust path if needed -->
    <style>
        /* .input-group { -- No longer needed here, handled in main CSS
            position: relative;
        } */

        .password-toggle {
            position: absolute;
            right: 15px;
            /* Adjusted for new padding */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 3;
            /* Ensure it's above input, but below potential dropdowns if any */
            color: var(--color-text-light);
            /* Match other icons */
            font-size: 1.1rem;
            /* Slightly larger for better click target */
        }

        .password-toggle:hover {
            color: var(--color-text);
        }
        /* Start Responsive Styles */
.mobile-toggle {
    display: none;
    /* Hidden by default on desktop */
    margin-top: 1.2rem;
    /* تقليل */
    font-size: 0.85rem;
    /* تصغير */
    color: var(--color-text-light);
}

.mobile-toggle a {
    color: var(--color-primary-dark);
    text-decoration: none;
    font-weight: 500;
}

.mobile-toggle a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .container {
        max-width: 100%;
        min-height: auto;
        height: auto;
        border-radius: var(--border-radius-lg);
        box-shadow: var(--box-shadow-md);
        margin: 10px;
    }

    .toggle-container {
        display: none;
        /* Hide the sliding overlay */
    }

    .form-box {
        width: 100%;
        height: auto;
        position: relative;
        left: auto;
        top: auto;
        padding: 25px 15px;
        /* تعديل */
        min-height: auto;
        max-height: none;
        transform: none !important;
        opacity: 1 !important;
        z-index: auto !important;
        transition: none;
        overflow-y: visible;
    }

    .form-box form {
        padding: 10px 0;
        overflow-y: visible;
    }

    /* Show only the currently relevant form */
    .form-box.login {
        display: flex;
        /* Show login by default */
    }

    .form-box.register {
        display: none;
        /* Hide register by default */
    }

    /* Show mobile toggle links/buttons */
    .mobile-toggle {
        display: block;
    }

    .form-box h1 {
        font-size: 1.5rem;
        /* تعديل */
        margin-bottom: 0.8rem;
        /* تعديل */
    }

    .form-button {
        width: 100%;
        /* Make buttons full width on mobile */
        padding: 12px;
    }

    select:has(option[value="Air Conditioning Service"]:checked)~.option1,
    select:has(option[value="Carpentry Service"]:checked)~.option2,
    select:has(option[value="Electrical Work Service"]:checked)~.option3,
    select:has(option[value="Appliance Service"]:checked)~.option4,
    select:has(option[value="Painting Service"]:checked)~.option5,
    select:has(option[value="Plumbing Service"]:checked)~.option6 {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
    }

    .checkbox-group label {
        font-size: 10px;
    }

    /* JS will handle the display toggle */
    .container.active .form-box.login {
        display: none;
    }

    .container.active .form-box.register {
        display: flex;
    }
     .password-toggle {
            position: absolute;
            right:15px;
            /* Adjusted for new padding */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 3;
            /* Ensure it's above input, but below potential dropdowns if any */
            color: var(--color-text-light);
            /* Match other icons */
            font-size: 1.1rem;
            /* Slightly larger for better click target */
        }

        .password-toggle:hover {
            color: var(--color-text);
        }
}

@media (max-width: 480px) {
    body {
        padding: 0;
        /* إزالة الـ padding في الشاشات الصغيرة جداً */
    }

    .container {
        margin: 0;
        border-radius: 0;
    }

    .form-box {
        padding: 20px 10px;
        /* تعديل */
    }

    .input-group input,
    .input-group select {
        padding: 11px 15px 11px 35px;
        /* تعديل */
        font-size: 0.8rem;
        /* تعديل */
    }

    .input-group input[type="password"] {
        padding-right: 35px;
        /* تعديل */
    }


    .input-group.select-group select {
        padding: 11px 15px;
        /* تعديل */
    }

    .form-button {
        padding: 10px;
        font-size: 0.8rem;
        /* تعديل */
    }

    .mobile-toggle {
        font-size: 0.8rem;
        /* تعديل */
    }

    .checkbox-group label {
        font-size: 9px;
    }

    select:has(option[value="Air Conditioning Service"]:checked)~.option1,
    select:has(option[value="Carpentry Service"]:checked)~.option2,
    select:has(option[value="Electrical Work Service"]:checked)~.option3,
    select:has(option[value="Appliance Service"]:checked)~.option4,
    select:has(option[value="Painting Service"]:checked)~.option5,
    select:has(option[value="Plumbing Service"]:checked)~.option6 {
        grid-template-columns: 1fr;
    }
}



/* End Responsive Styles */


        /* The lock icon .bxs-lock-alt is already positioned by .input-group i */
    </style>
</head>

<body>
    <!-- Container will have 'active' class added/removed by JS -->
    <div class="container" id="auth-container">

        <!-- Registration Form -->
        <div class="form-box register">
            <form action="{{ route('register.store') }}" method="POST" id="registerForm" enctype="multipart/form-data">
                @csrf
                <h1>Sign Up</h1>
                <div class="input-group">
                    <input type="text" name="name" id="register-name" value="{{ old('name') }}"
                        placeholder=" Full Name">
                    <i class='bx bxs-user'></i>
                </div>
                @error('name')<div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">
                    {{'*'.$message }}</div>@enderror

                <div class="input-group">
                    <input type="email" name="email" id="register-email" value="{{old('email')}}" placeholder="Email"
                        required>
                    <i class='bx bxs-envelope'></i>
                </div>
                @error('email')<div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">
                    {{'*'.$message }}</div>@enderror

                <div class="input-group">
                    <input type="password" name="password" id="register-password" value="{{ old('password') }}" placeholder=" Password">
                    <i class='bx bxs-lock-alt'></i>
                    <i class='bx bxs-hide password-toggle' onclick="togglePassword('register-password', this)"></i>
                </div>
                @error('password')<div
                    style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">{{'*'.$message }}
                </div>@enderror

                <div class="input-group">
                    <input type="password" name="password_confirmation" id="register-confirm-password" value="{{ old('password_confirmation') }}" placeholder="Confirm Password">
                    <i class='bx bxs-lock-alt'></i>
                    <i class='bx bxs-hide password-toggle' onclick="togglePassword('register-confirm-password', this)"></i>
                </div>
                @error('password_confirmation')
                <div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">{{ '*'.$message}}</div>
                @enderror

                <div class="input-group">
                    <input type="phone" name="phone" id="register-phone" value="{{ old('phone') }}"
                        placeholder=" Phone Number">
                    <i class='bx bxs-phone'></i>
                </div>
                @error('phone')<div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">
                    {{'*'.$message }}</div>@enderror

                <div class="input-group select-group">
                    <label for="area">Your Area:</label>
                    <select name="area" id="area" class="form-control" required>
                        <option value="" selected disabled>Select area</option>
                        @foreach(['Al Manakh District','Al Zohour District','Al-talatini District','South
                        District','East Port Said District','Al-dowahi District,West District'] as $area)
                        <option value="{{ $area }}" {{ old('area')==$area ? 'selected' : '' }}>{{ $area }}</option>
                        @endforeach
                    </select>
                </div>
                @error('area')<div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">
                    {{'*'.$message }}</div>@enderror

                <div class="input-group select-group">
                       <label for="service">your service :</label>
                    <select name="service" id="service" required>
                        <option value="" selected disabled>choose your service</option>
                        <option value="Air Conditioning Service">Air Conditioning Service</option>
                        <option value="Carpentry Service">Carpentry Service</option>
                        <option value="Electrical Work Service">Electrical Work Service</option>
                        <option value="Appliance Service">Appliance Service</option>
                        <option value="Painting Service">Painting Service</option>
                        <option value="Plumbing Service">Plumbing Service</option>
                    </select>

                    <!-- Checkbox groups - no <br><br> needed as margins handle spacing -->
                    <div class="checkbox-group option1">
                        <p class="skills_title">Choose your skills</p>
                        <label><input type="checkbox" name="skills[]"
                                value="Air conditioning cleaning & summer maintenance">Air conditioning cleaning &
                            summer maintenance</label>
                        <label><input type="checkbox" name="skills[]" value="Air conditioning inspection">Air
                            conditioning inspection</label>
                        <label><input type="checkbox" name="skills[]" value="Charging Freon air conditioning">Charging
                            Freon air conditioning</label>
                        <label><input type="checkbox" name="skills[]"
                                value="Dismantling and installing Air conditioning">Dismantling and installing Air
                            conditioning</label>
                    </div>
                    <div class="checkbox-group option2">
                        <p class="skills_title">Choose your skills</p>
                        <label><input type="checkbox" name="skills[]" value="Door Installation and Repair">Door
                            Installation and Repair</label>
                        <label><input type="checkbox" name="skills[]" value="Window Framing and Repair">Window Framing
                            and Repair</label>
                        <label><input type="checkbox" name="skills[]" value="Bedroom Furniture Assembly">Bedroom
                            Furniture Assembly</label>
                        <label><input type="checkbox" name="skills[]" value="Table Crafting and Restoration">Table
                            Crafting and Restoration</label>
                    </div>
                    <div class="checkbox-group option3">
                        <p class="skills_title">Choose your skills</p>
                        <label><input type="checkbox" name="skills[]" value="Wiring and Cabling Services">Wiring and
                            Cabling Services</label>
                        <label><input type="checkbox" name="skills[]"
                                value="Installing and Maintaining Electrical Panels">Installing and Maintaining
                            Electrical Panels</label>
                        <label><input type="checkbox" name="skills[]"
                                value="Installing and Maintaining Lighting Systems">Installing and Maintaining Lighting
                            Systems</label>
                        <label><input type="checkbox" name="skills[]"
                                value="Installing and Maintaining Alarm and Home Security Systems">Installing and
                            Maintaining Alarm and Home Security Systems</label>
                    </div>
                    <div class="checkbox-group option4">
                        <p class="skills_title">Choose your skills</p>
                        <label><input type="checkbox" name="skills[]" value="Washing Machine Repair">Washing Machine
                            Repair</label>
                        <label><input type="checkbox" name="skills[]" value="Refrigerator Repair">Refrigerator
                            Repair</label>
                        <label><input type="checkbox" name="skills[]" value="Water Heater Repair">Water Heater
                            Repair</label>
                        <label><input type="checkbox" name="skills[]" value="Oven Repair">Oven Repair</label>
                    </div>
                    <div class="checkbox-group option5">
                        <p class="skills_title">Choose your skills</p>
                        <label><input type="checkbox" name="skills[]" value="Interior Wall Painting">Interior Wall
                            Painting</label>
                        <label><input type="checkbox" name="skills[]" value="Exterior House Painting">Exterior House
                            Painting</label>
                        <label> <input type="checkbox" name="skills[]" value="Cabinet Refinishing">Cabinet
                            Refinishing</label>
                        <label><input type="checkbox" name="skills[]" value="Decorative Painting">Decorative
                            Painting</label>
                    </div>
                    <div class="checkbox-group option6">
                        <p class="skills_title">Choose your skills</p>
                        <label><input type="checkbox" name="skills[]" value="Fix Leak">Fix Leak</label>
                        <label><input type="checkbox" name="skills[]" value="Unclog The Drain">Unclog The Drain</label>
                        <label><input type="checkbox" name="skills[]" value="Install A New Sink">Install A New Sink</label>
                        <label><input type="checkbox" name="skills[]" value="Replace A Faucet">Replace A Faucet</label>
                    </div>
                </div>
                @error('service')<div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">{{'*'.$message }} </div>@enderror
                @error('skills')<div style="color: red; font-size:11px; width:100%; text-align:left; padding-left:5px;">
                    {{'*'.$message }}</div>@enderror


                <button type="submit" class="form-button">Sign Up</button>
                <p class="mobile-toggle">Already have an account? <a href="#login" id="mobile-login-link">Log In</a></p>
            </form>
        </div>
        @if(session('show_register'))
        <script>
            // Ensure this runs after the main auth.js logic might have set initial state
            document.addEventListener('DOMContentLoaded', function () {
                if (window.location.hash !== '#register') {
                    window.location.hash = '#register';
                }
                // If auth.js already handled it, this won't do much, which is fine.
                // If not, this ensures the register form is shown.
                const container = document.getElementById("auth-container");
                if (container && !container.classList.contains('active')) {
                    // Simulate click if setActiveView isn't globally available
                    // or re-call setActiveView(true) if it is.
                    // For simplicity, just add active class and handle mobile.
                    container.classList.add("active");
                    if (window.innerWidth <= 768) {
                        const loginFormBox = document.querySelector(".form-box.login");
                        const registerFormBox = document.querySelector(".form-box.register");
                        if (loginFormBox) loginFormBox.style.display = "none";
                        if (registerFormBox) registerFormBox.style.display = "flex";
                    }
                }
            });
        </script>
        @endif
        <!-- Login Form -->
        <div class="form-box login">
            <form action="{{ route('login.submit') }}" method="POST" id="loginForm">
                @csrf
                <h1>Log In</h1>
                <div class="input-group">
                    <input type="email" name="email" id="login-email" placeholder="Email" value="{{ old('email') }}"
                        required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="login-password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                    <i class='bx bxs-hide password-toggle' onclick="togglePassword('login-password', this)"></i>
                </div>
                @if ($errors->any() && !session('show_register')) {{-- Only show general login errors if not
                specifically on register page --}}
                <div>
                    @foreach ($errors->all() as $error)
                    <p style="color: red; font-size:11px; width:100%; text-align:center; margin-top: 3px;">{{ '*'.$error
                        }}</p>
                    @endforeach
                </div>
                @endif
                <button type="submit" class="form-button">Log In</button>
                <p class="mobile-toggle">Don't have an account? <a href="#register" id="mobile-register-link">Sign
                        Up</a></p>
            </form>
        </div>

        <!-- Toggle/Overlay Container -->
        <div class="toggle-container">
            <div class="toggle">
                <!-- Left Panel (Shows 'Welcome Back!' - Overlay is on the right initially, this panel is hidden left) -->
                <div class="toggle-panel toggle-left">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to start your journey with us.</p>
                    <button class="toggle-button" id="login">Log In</button> <!-- Target for JS -->
                </div>
                <!-- Right Panel (Shows 'Hello, Friend!' - Overlay is on the right initially, this panel is visible) -->
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back!</h1>
                    <p>Log in with your personal details to continue your journey with us.</p>

                    <button class="toggle-button" id="register">Sign Up</button> <!-- Target for JS -->
                </div>
            </div>
        </div>

    </div> <!-- End Container -->

    <script src="{{ asset('js/auth.js') }}"></script> <!-- Adjust path if needed -->
    <script src="{{asset('js/validationmessages.js')}}"></script>
    <!-- ScrollReveal Library -->
   <script src="https://unpkg.com/scrollreveal"></script>
    <script>
         function togglePassword(inputId, icon) {
            const passwordInput = document.getElementById(inputId);

            if (passwordInput.type === 'password') {
                // Change to text to show password
                passwordInput.type = 'text';
                // Change icon to "show" icon
                icon.classList.remove('bxs-hide');
                icon.classList.add('bxs-show');
            } else {
                // Change back to password to hide
                passwordInput.type = 'password';
                // Change icon back to "hide" icon
                icon.classList.remove('bxs-show');
                icon.classList.add('bxs-hide');
            }
        }

        // Small adjustment for error messages to make them less obtrusive
        document.addEventListener('DOMContentLoaded', function () {
            const errorMessages = document.querySelectorAll('div[style*="color: red"]');
            errorMessages.forEach(function (msg) {
                msg.style.marginTop = '2px';
                msg.style.marginBottom = '2px';
            });
        });
    </script>

</body>

</html>
