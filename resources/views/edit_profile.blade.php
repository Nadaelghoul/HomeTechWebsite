<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Tech</title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/edit_profile.css') }}">
    <!-- icon -->
    <link rel="icon" href="{{asset('images/logo-removebg-preview.png')}}" type="image/svg+xml">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Sidebar Toggle Checkbox -->
        <input type="checkbox" id="sidebar-toggle">

        <!-- Sidebar -->
        <aside id="sidebar">
            <label for="sidebar-toggle" class="close-btn">&times;</label>
            <div class="menu">
                <div class="detal">
                    <a href="{{ url('/home') }}">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </a>

                    <a href="{{route('provider.profile', ['id' => $provider->id])}}">
                        <i class="fa-solid fa-user"></i>
                        <p>Personal Profile</p>
                    </a>

                    <!-- Notify Link -->
                    <a href="#!" onclick="document.getElementById('notification-message').style.display='block';"
                        style="position: relative;">
                        <i class="fa-solid fa-bell">
                            @if($pendingRequestsCount > 0)
                            <span class="notification-badge">{{ $pendingRequestsCount }}</span>
                            @endif
                        </i>
                        <p>Notifications</p>
                    </a>

                    <a href="{{ route('provider.dashboard', ['provider_id' => $provider->id]) }}">
                        <i class="fa-solid fa-border-all"></i>
                        <p>Dashboard</p>
                    </a>

                    <a href="{{route('provider.edit', ['id' => $provider->id])}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>Edit Profile</p>
                    </a>

                    <div class="logout">
                        <form action="{{ route('provider.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="logoutbn"> <i class="fas fa-sign-out-alt"></i>Log Out </button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="content">
            <!-- Sidebar Toggle Button with Notification Badge -->
            <label for="sidebar-toggle" class="icon-menu">
                <i class="fas fa-bars"></i>
                @if($pendingRequestsCount > 0)
                <span class="notification-badge">{{ $pendingRequestsCount }}</span>
                @endif
            </label>

            <!-- Header -->
            <header>
                <div class="title">
                    <h1>Edit Profile</h1>
                </div>
            </header>

            <!-- Profile Content -->
            <div class="data">
                <!-- Profile Picture Section -->
                <div class="part1">
                    <div class="container-part1">
                        <div class="user-image">
                            <img src="{{ asset($provider->profile->photo) }}" alt="Profile Photo" class="profile-image">
                            <!-- Camera icon to update photo -->
                            <label for="photo-upload" class="camera-icon">
                                <i class="fas fa-camera"></i>
                            </label>
                        </div>

                        <!-- Profile Photo Upload Form -->
                        <form action="{{ route('provider.updatePhoto', $provider->id) }}" method="POST"
                            enctype="multipart/form-data" style="display: none;">
                            @csrf
                            <input type="file" id="photo-upload" name="photo" accept="image/*"
                                onchange="this.form.submit()">
                        </form>
                    </div>
                </div>

                <!-- Edit Form Section -->
                <div class="part2">
                    <div class="container-section">
                        <div class="title2">
                            <h1>Edit <span>Profile</span> Information</h1>
                        </div>

                        <div class="form">
                            <form action="{{ route('provider.update', ['id' => $provider->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <div class="input-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            value="{{ old('name', $provider->name) }}">
                                    </div>

                                    <div class="input-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email"
                                            value="{{ old('email', $provider->email) }}">
                                    </div>

                                    <div class="input-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone"
                                            value="{{ old('phone', $provider->phone) }}">
                                    </div>

                                    <div class="input-group">
                                        <label for="area">Area</label>
                                        <select name="area" id="area">
                                            <option value="" disabled>Select area</option>
                                            @foreach(['Al Manakh District','Al Zohour District','Al-talatini
                                            District','South District','East Port Said District','Al-dowahi
                                            District','West District'] as $area)
                                            <option value="{{ $area }}" {{ old('area', $provider->area) == $area ?
                                                'selected' : '' }}>{{ $area }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group">
                                        <label for="service">Your Service</label>
                                        <input type="text" name="service" id="service" value="{{ $provider->service }}"
                                            readonly>
                                    </div>

                                    <div class="skills-section">
                                        <h3 class="tit">Choose your skills:</h3>
                                        <div class="skills-grid">
                                            @php
                                            // Ensure skills is an array
                                            $selectedSkills = is_string($provider->skills) ?json_decode($provider->skills, true) : $provider->skills;
                                            $selectedSkills = is_array($selectedSkills) ? $selectedSkills : []; //Ensure it's always an array
                                            @endphp

                                            @foreach ($availableSkills as $skill)
                                            <div class="checklabel">
                                                <input type="checkbox" name="skills[]" id="skill-{{ $loop->index }}" value="{{ $skill }}" {{ in_array($skill, $selectedSkills) ?
                                                'checked': '' }}>
                                                <label for="skill-{{ $loop->index }}">{{ $skill }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="button">
                                        <button type="submit" class="btn save-btn">
                                            <i class="fas fa-save"></i>
                                            <p>Save Changes</p>
                                        </button>
                                        <a href="{{ route('provider.profile', ['id' => $provider->id]) }}"
                                            class="btn discard-btn">
                                            <i class="fas fa-times"></i>
                                            <p>Discard Changes</p>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification Message (Initially Hidden) -->
    @if($pendingRequestsCount > 0)
    <div id="notification-message" class="notification-cardd" style="display: none;">
        <span class="close-btn"
            onclick="document.getElementById('notification-message').style.display='none';">&times;</span>
        <h4>You have a new service request waiting for you</h4>
        <p>Check it in your dashboard to respond to your clients.</p>
        <a href="{{ route('provider.dashboard', ['provider_id' => auth('provider')->id()]) }}" class="btnnotify">Go to
            Dashboard</a>
    </div>
    @endif

    <!-- Simple JavaScript to enhance user experience -->
    <script>
        // Optional: Add animation when form is submitted
        document.querySelector('form').addEventListener('submit', function () {
            document.querySelector('.save-btn').classList.add('saving');
        });

        // Optional: Confirm before discarding changes
        document.querySelector('.discard-btn').addEventListener('click', function (e) {
            if (!confirm('Are you sure you want to discard all changes?')) {
                e.preventDefault();
            }
        });
    </script>
</body>

</html>
