<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Service</title>
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
        <label for="sidebar-toggle" class="close-btn" style="color: white">&times;</label>
        <div class="menu">
            <div class="detal">
                <a href="{{ url('/home') }}" style="text-decoration: none;"> <i class="fa-solid fa-house"></i>&nbsp;<p>Home</p></a><br>
                <a href="{{route('provider.profile', ['id' => $provider->id])}}" style="text-decoration: none;"> <i class="fa-solid fa-user"></i>&nbsp;<p> Personal Profile</p></a><br>
                         <!-- Notify Link -->
            <a href="#!" onclick="document.getElementById('notification-message').style.display='block';" style="text-decoration: none; position: relative;">
                <i class="fa-solid fa-bell" style="position: relative;">
                    @if($pendingRequestsCount > 0)
                        <span class="notification-badge">{{ $pendingRequestsCount }}</span>
                    @endif
                </i>
                &nbsp;<p>Notify</p>
            </a>

            <!-- Notification Message (Initially Hidden) -->
            @if($pendingRequestsCount > 0)
                <div id="notification-message" class="notification-cardd" style="display: none;">
                    <span class="close-btn" onclick="document.getElementById('notification-message').style.display='none';">&times;</span>
                    <p><h4>You have a new service request waiting for you. Check it in your dashboard.</h4></p>
                    <a href="{{ route('provider.dashboard', ['provider_id' => auth('provider')->id()]) }}" class="btnnotify">Go to Dashboard</a>
                </div>
            @endif
                <a href="{{ route('provider.dashboard', ['provider_id' => $provider->id]) }}" style="text-decoration: none;"><i class="fa-solid fa-border-all"></i>&nbsp;<p>Dashboard</p></a><br>
                <a href="{{route('provider.edit', ['id' => $provider->id])}}" style="text-decoration: none;"><i class="fa-solid fa-pen-to-square"></i>&nbsp;<p>Edit Profile</p></a><br>
                <p><form action="{{ route('provider.logout') }}" method="POST" class="logout">
                    @csrf<button type="submit"><i class="fas fa-sign-out-alt"></i>&nbsp;log out</button>
                </form></p>

            </div>
        </div>
    </aside>
<!----------------------------------------------------------------------aside2--------------------------------------------------------------------------------------------------------------------------------------->

<div class="content">
    <input type="checkbox" id="sidebar-toggle">

    <!-- Sidebar Toggle Button with Notification Badge -->
    <label for="sidebar-toggle" class="icon-menu" style="color: white">
        &#9776;
        @if( $pendingRequestsCount > 0)
            <span class="notification-badge">{{  $pendingRequestsCount}}</span>
        @endif
    </label>
  <div class="aside2">
    <header>
        <div class="title">
        <h1>My Profile</h1>
        </div>
    </header>

    <div class="content  data">
        <div class="part1">
            <div class="container-part1" style="margin-left: 50px; margin-right:50px;">
                <br><br><div class="user-image ">
                    <img src="{{ asset($provider->profile->photo) }}" alt="Profile Photo" class="profile-image">
                    <!-- Camera icon to update photo -->
                    <label for="photo-upload" class="camera-icon">
                        📷
                    </label>
                </div>

                  <!-- Profile Photo Upload Form -->
            <form action="{{ route('provider.updatePhoto', $provider->id) }}" method="POST" enctype="multipart/form-data" style="display: none;">
             @csrf
            <input type="file" id="photo-upload" name="photo" accept="image/*" onchange="this.form.submit()">
            </form>
            </div>
        </div>


        <div class="part2">
            <div class="container">

                <div class="form">
                    <form action="{{ route('provider.update', ['id' => $provider->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $provider->name) }}">

                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $provider->email) }}">

                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', $provider->phone) }}">

                            <label for="area">Area:</label>
                            <select name="area" id="area">
                                <option value="" disabled>Select area</option>
                                @foreach(['Al Manakh District','Al Zohour District','Al-talatini District','South District','East Port Said District','Al-dowahi District,West District'] as $area)
                                    <option value="{{ $area }}" {{ old('area', $provider->area) == $area ? 'selected' : '' }}>{{ $area }}</option>
                                @endforeach
                            </select>

                               <label for="service">Your Service:</label>
                               <input type="text" name="service" value="{{ $provider->service }}" readonly>

                              <p class="tit">Choose your skills:</p>
                              @php
                               // Ensure skills is an array
                            $selectedSkills = is_string($provider->skills) ? json_decode($provider->skills, true) : $provider->skills;
                             $selectedSkills = is_array($selectedSkills) ? $selectedSkills : []; // Ensure it's always an array
                              @endphp
                              @foreach ($availableSkills as $skill)
                             <p class="checklabel">
                             <input type="checkbox" name="skills[]" value="{{ $skill }}" {{ in_array($skill, $selectedSkills) ? 'checked' : '' }}>
                                  {{ $skill }}
                             </p>
                            @endforeach

                            <div class="button">
                                <button class="btn"><p>save change </p></button>
                                <button class="btn"><a href="{{ route('provider.profile', ['id' => $provider->id]) }}" class="click">discard change</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </body>
    </html>


