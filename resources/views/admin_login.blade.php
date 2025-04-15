<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN </title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/admin_login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('images/logo-removebg-preview.png') }}" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="container-login">
            <div class="aside2" >
                <header>

                </header>


                <div class="title">
                    <h2>Welcome,Admin </h2>
                </div>

                <div class="form">
                    <form action="{{ route('admin.login.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="username" required>
                        <label for="pass">Password</label>
                        <input type="password" name="password" id="pass" placeholder="Please enter your password"required>
                        @if(session('error'))
                        <div>{{'*'. session('error') }}</div>
                        @endif
                        <div class="login_btn">
                            <button class="click">LOG IN</button>
                        </div>

                        </div>
                    </form>
                    @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
