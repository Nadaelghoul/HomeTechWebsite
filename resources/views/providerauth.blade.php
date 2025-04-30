<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication - Local Service</title>
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
</head>

<body>
    <!-- Container will have 'active' class added/removed by JS -->
    <div class="container" id="auth-container">

        <!-- Registration Form -->
        <div class="form-box register">
            <form action="{{ route('register.store') }}"  method="POST" id="registerForm" enctype="multipart/form-data">
                @csrf
                <h1>Sign Up</h1>
                <div class="input-group">
                    <input type="text" name="name" id="register-name" value="{{ old('name') }}" placeholder=" Full Name">
                    <i class='bx bxs-user'></i>
                </div>
                @error('name')<div style="color: red; font-size:13px;">{{'*'.$message }}</div>@enderror
                <div class="input-group">
                    <input type="email" name="email" id="register-email" value="{{old('email')}}" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                @error('email')<div style="color: red; font-size:13px;">{{'*'.$message }}</div>@enderror
                <div class="input-group">
                    <input type="password" name="password" id="register-password" value="{{ old('password') }}"placeholder=" password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                @error('password')<div style="color: red; font-size:13px;">{{'*'.$message }}</div>@enderror
                <div class="input-group">
                    <input type="phone" name="phone" id="register-phone" value="{{ old('phone') }}" placeholder=" phone Number">
                    <i class='bx bxs-phone'></i>
                </div>
                @error('phone')<div style="color: red; font-size:13px;">{{'*'.$message }}</div>@enderror
                <div class="input-group select-group">
                    <label for="area"> your Area:</label>
                    <select name="area" id="area"class="form-control"  required>
                        <option value="" selected disabled>Select area</option>
                        @foreach(['Al Manakh District','Al Zohour District','Al-talatini District','South District','East Port Said District','Al-dowahi District,West District'] as $area)
                        <option value="{{ $area }}" {{ old('area') == $area ? 'selected' : '' }}>{{ $area }}</option>
                        @endforeach
                    </select>
                    @error('area')<div style="color: red; font-size:13px;">{{'*'.$message }}</div>@enderror
                </div>
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
                    <br><br>
                    <div class="checkbox-group option1">
                          <p class="skills_title">choose your skills</p>
                        <label><input type="checkbox" name="skills[]" value="Air conditioning cleaning & summer maintenance">Air conditioning cleaning & summer maintenance</label>
                        <label><input type="checkbox" name="skills[]" value="Air conditioning inspection">Air conditioning inspection</label>
                        <label><input type="checkbox" name="skills[]" value="Charging Freon air conditioning">Charging Freon air conditioning</label>
                        <label><input type="checkbox" name="skills[]" value="Dismantling and installing Air conditioning">Dismantling and installing Air conditioning</label>
                    </div>
                    <div class="checkbox-group option2">
                        <p class="skills_title">choose your skills</p>
                      <label><input type="checkbox" name="skills[]" value="Door Installation and Repair">Door Installation and Repair</label>
                      <label><input type="checkbox" name="skills[]" value="Window Framing and Repair">Window Framing and Repair</label>
                      <label><input type="checkbox" name="skills[]" value="Bedroom Furniture Assembly">Bedroom Furniture Assembly</label>
                      <label><input type="checkbox" name="skills[]" value="Table Crafting and Restoration">Table Crafting and Restoration</label>
                  </div>
                  <div class="checkbox-group option3">
                    <p class="skills_title">choose your skills</p>
                  <label><input type="checkbox" name="skills[]" value="Wiring and Cabling Services">Wiring and Cabling Services</label>
                  <label><input type="checkbox" name="skills[]" value="Installing and Maintaining Electrical Panels">Installing and Maintaining Electrical Panels</label>
                  <label><input type="checkbox" name="skills[]" value="Installing and Maintaining Lighting Systems">Installing and Maintaining Lighting Systems</label>
                  <label><input type="checkbox" name="skills[]" value="Installing and Maintaining Alarm and Home Security Systems">Installing and Maintaining Alarm and Home Security Systems</label>
                  </div>
                  <div class="checkbox-group option4">
                    <p class="skills_title">choose your skills</p>
                  <label><input type="checkbox" name="skills[]" value="Washing Machine Repair">Washing Machine Repair</label>
                  <label><input type="checkbox" name="skills[]" value="Refrigerator Repair">Refrigerator Repair</label>
                  <label><input type="checkbox" name="skills[]" value="Water Heater Repair">Water Heater Repair</label>
                  <label><input type="checkbox" name="skills[]" value="Oven Repair">Oven Repair</label>
                  </div>
                  <div class="checkbox-group option5">
                    <p class="skills_title">choose your skills</p>
                  <label><input type="checkbox" name="skills[]" value="Interior Wall Painting">Interior Wall Painting</label>
                  <label><input type="checkbox" name="skills[]" value="Exterior House Painting">Exterior House Painting</label>
                 <label> <input type="checkbox" name="skills[]" value="Cabinet Refinishing">Cabinet Refinishing</label>
                  <label><input type="checkbox" name="skills[]" value="Decorative Painting">Decorative Painting</label>
                  </div>
                  <div class="checkbox-group option6">
                    <p class="skills_title">choose your skills</p>
                  <label><input type="checkbox" name="skills[]" value="Fix Leak">Fix Leak</label>
                  <label><input type="checkbox" name="skills[]" value="Unclog The Drain">Unclog The Drain</label>
                  <label><input type="checkbox" name="skills[]" value="Install A New Sink">Install A New Sink</label>
                  <label><input type="checkbox" name="skills[]" value="Replace A Faucet">Replace A Faucet</label>
                  </div>
                </div>
                <button type="submit" class="form-button">Sign Up</button>
                <p class="mobile-toggle">Already have an account? <a href="#login" id="mobile-login-link">Log In</a></p>
            </form>
        </div>
        @if(session('show_register'))
        <script>
            window.location.hash = '#register';
        </script>
        @endif
        <!-- Login Form -->
        <div class="form-box login">
            <form action="{{ route('login.submit') }}" method="POST" id="loginForm">
                @csrf
                <h1>Log In</h1>
                <div class="input-group">
                    <input type="email" name="email" id="login-email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="login-password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p style="color: red; font-size:13px; margin-left:-150px;">{{ '*'.$error }}</p>
                    @endforeach
                </div>
             @endif
                <a href="#" class="forgot-password">Forgot Your Password?</a>
                <button type="submit" class="form-button">Log In</button>
                <p class="mobile-toggle">Don't have an account? <a href="#register" id="mobile-register-link">Sign
                        Up</a></p>
            </form>
        </div>

        <!-- Toggle/Overlay Container -->
        <div class="toggle-container">
            <div class="toggle">
                <!-- Left Panel (Shows 'Welcome Back!' - Overlay is on the right initially) -->
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all site features</p>
                    <button class="toggle-button" id="login">Log In</button> <!-- Target for JS -->
                </div>
                <!-- Right Panel (Shows 'Hello, Friend!' - Overlay is on the right initially) -->
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all site features</p>
                    <button class="toggle-button" id="register">Sign Up</button> <!-- Target for JS -->
                </div>
            </div>
        </div>

    </div> <!-- End Container -->

    <script src="{{ asset('js/auth.js') }}"></script> <!-- Adjust path if needed -->
    <!-- ScrollReveal Library -->
    <script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>
