<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Service - Register</title>
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{ asset('CSS/servicerequest.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- icon -->
    <link rel="shortcut icon" href="assets/images/logo-removebg-preview.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header>
            <div class="container-header">
                <div class="container-logo">
                    <div class="imag-logo">
                        <img src="{{asset('images/logo-removebg-preview.png')}}" alt="Local Service logo">
                    </div>
                    <div class="text-logo">
                        <span>Local</span>
                        <span>Service</span>
                    </div>
                </div>
                <div class="title-service">
                <h1> Request A Service</h1>
            </div>
            </div>
        </header>

        <!-- Main Section -->
        <section>
            <div class="container-section">
                <div class="title">
                    <h1><span>Register</span> personal data</h1>
                </div>
                @if(session('success'))
                <p style="color:#1b5e20">{{'*'. session('success') }}</p>
                @endif
                <div class="content-wrapper">
                    <!-- Registration Form -->
                    <div class="form-wrapper">
                    <form action="{{ route('servicerequest.store') }}" method="POST">
                         @csrf
                            <div class="form">
                                <div class="form-group full-width">
                                    <label for="name">Full Name:</label>
                                    @error('name')<div class="text-danger small">{{'*'.$message }}</div>@enderror
                                    <input type="text" name="name" id="name"value="{{ old('name') }}" required>
                                </div>

                                <div class="form-container">
                                    <div class="form-part1">
                                        <div class="form-group">
                                            <label for="email">Email :</label>
                                            @error('email')<div class="text-danger small">{{'*'.$message }}</div>@enderror
                                            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="Problem_Address">Problem Address:</label>
                                            @error('Problem_Address')<div class="text-danger small">{{'*'.$message }}</div>@enderror
                                            <input type="text" name="address" id="address"  value="{{ old('Problem_Address') }}" required>
                                        </div>

                                        <label for="requirements">Requirements:</label>
                                        @error('requirements')<div class="text-danger small">{{'*'.$message }}</div>@enderror
                                        <textarea name="requirements" rows="5" cols="70" id="requirements" placeholder="Enter your requirements to provider" {{ old('requirements') }} >
                                        </textarea>
                                    </div>

                                    <div class="form-part2">
                                        <div class="form-group">
                                            <label for="mobile">Mobile:</label>
                                            @error('mobile')<div class="text-danger small">{{'*'.$message }}</div>@enderror
                                            <input type="tel" name="mobile" id="mobile" value="{{ old('mobile') }}"required>
                                        </div>

                                        <div class="form-group">
                                            <label for="area">your Area:</label>

                                            <select name="area" id="area"class="form-control" required>
                                                <option value="" selected disabled>Select area</option>
                                                @foreach(['Al Manakh District','Al Zohour District','Al-talatini District','South District','East Port Said District','Al-dowahi District','West District'] as $area)
                                                <option value="{{ $area }}" {{ old('area') == $area ? 'selected' : '' }}>{{ $area }}</option>
                                                @endforeach
                                            </select>
                                            @error('area')<div class="text-danger small">{{'*'.$message }}</div>@enderror
                                        </div>

                                        <div class="form-group">
                                            <label for= "execution_day">Select the execution day:</label>
                                            <input type="date" name="execution_day" id="execution_day"  value="{{ old('execution_day') }}" required>
                                        </div>
                                               <!-- Store Service & Skill in Hidden Fields (Fetched from Summary Card) -->
                                          <input type="hidden" name="service" value="{{ request()->query('service') }}">
                                          <input type="hidden" name="skill" value="{{ request()->query('title') }}">
                                          <input type="hidden" name="price" value="{{ request()->query('price') }}">

                                    </div>
                                </div>

                                <div class="register">
                                    <button type="submit" class="btn">Request Now <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Order Summary Card -->
                    <div class="summary-wrapper">
                        <div class="card">
                            <div class="head-card">
                                <h3>Summary of your order</h3>
                            </div>

                            <div class="body-card">
                                <p><span>Service:</span>{{request()->query('service','Not specified')}}</p>
                                <p><span>Type:</span>{{request()->query('title','Not specified')}}</p>
                                <p><span>Price:</span>{{request()->query('price','Not specified')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
