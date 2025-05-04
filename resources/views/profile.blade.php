<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Tech</title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
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
                            <button type="submit">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Log Out</p>
                            </button>
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
                    <h1>My Profile</h1>
                </div>
            </header>

            <!-- Profile Content -->
            <div class="data">
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

                <div class="part2">
                    <div class="container-section">
                        <div class="title2">
                            <h3>{{$provider->name}}</h3>
                            <h1><span>Personal</span> Information</h1>
                        </div>

                        <div class="info">
                            <div class="detals">
                                <h3>Name</h3>
                                {{ $provider->name }}
                            </div>

                            <div class="detals">
                                <h3>Email</h3>
                                {{ $provider->email }}
                            </div>

                            <div class="detals">
                                <h3>Phone</h3>
                                {{ $provider->phone }}
                            </div>

                            <div class="detals">
                                <h3>Area</h3>
                                {{ $provider->area }}
                            </div>

                            <div class="detals">
                                <h3>Service</h3>
                                {{ $provider->service }}
                            </div>

                            <div class="detals">
                                <h3>Skills</h3>
                                @php
                                $selectedSkills = is_string($provider->skills) ? json_decode($provider->skills, true) :
                                $provider->skills;
                                $selectedSkills = is_array($selectedSkills) ? $selectedSkills : [];
                                @endphp

                                <ul class="checklist">
                                    @if(!empty($selectedSkills))
                                    @foreach($selectedSkills as $skill)
                                    <li>{{ $skill }}</li>
                                    @endforeach
                                    @else
                                    <li>None</li>
                                    @endif
                                </ul>
                            </div>
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
</body>

</html>
