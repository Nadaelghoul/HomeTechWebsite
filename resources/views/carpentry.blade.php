<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpentry Work</title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
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
    <!-------------------------------------------------start Header ---------------------------------------------------------------------------------->
    <header>
        <div class="container-header">
            <a class="logo-link" href="{{url('/home')}}">
            <div class="container-logo">
                <div class="imag-logo">
                    <img src="{{ asset('images/logo-removebg-preview.png') }}" alt="logo image">
                </div>
                <div class="text-logo">
                    <span>Local</span>
                    <span>Service</span>
                </div>
            </div>
            </a>
            <div class="title-service">
                <h1>Carpentry Service</h1>
            </div>
        </div>
    </header>
    <!-------------------------------------------------end Header ---------------------------------------------------------------------------------->
    <section class="services-section">
        <div class="container">
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/carpentery/doors.jpeg') }}" alt="Door Installation and Repair">
                    </div>
                    <div class="card-detal">
                        <h2>Door Installation and Repair</h2>
                        <p>Professional service for installing new doors, repairing damaged doors, fixing squeaky
                            hinges, and ensuring proper alignment. Custom solutions for all door types.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 120-250 / <span>visit</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Door Installation and Repair') }}&price={{ urlencode(' 120-250 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service2  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/carpentery/windo.jpeg') }}" alt="Window Framing and Repair">
                    </div>
                    <div class="card-detal">
                        <h2>Window Framing and Repair</h2>
                        <p>Specialized service for wooden window frame installation, repair of damaged window sills,
                            weather sealing, and custom window solutions for any home style.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 150-300 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Window Framing and Repair') }}&price={{ urlencode(' 150-300 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------service3  ---------------------------------------------------------------------------------->
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/carpentery/bedroom.jpeg') }}" alt="Bedroom Furniture Solutions">
                    </div>
                    <div class="card-detal">
                        <h2>Bedroom Furniture Assembly</h2>
                        <p>Expert assembly and installation of bedroom furniture including bed frames, wardrobes,
                            dressers, and nightstands. Custom modifications available for perfect fit.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 180-400 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Bedroom Furniture Assembly') }}&price={{ urlencode(' 180-400 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service4  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/carpentery/table.jpeg') }}" alt="Custom Table Creation">
                    </div>
                    <div class="card-detal">
                        <h2>Table Crafting and Restoration</h2>
                        <p>Professional table repair, refinishing, and custom table creation. From dining tables to
                            coffee tables, we provide quality craftsmanship for all your needs.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 200-600 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Table Crafting and Restoration') }}&price={{ urlencode(' 200-600 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------------------------------------------------------------------------------top service---------------------------------------------------------------------------------->
    <section class="top-providers-section">
        <h2 class="section-title">Top Service Providers</h2>
        <div class="providers-scroll-container">
            <div class="container-top-card">
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro9.jpg') }}" alt="provider1">
                        </div>
                        <div class="user-data">
                            <h4>Tarek Hesham Nabil</h4>
                            <h6>Door Installation and Repair</h6>
                            <p>Master carpenter specializing in custom door installations</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span class="rate">10+ years 5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Tarek Hesham Nabil') }}&service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Door Installation and Repair') }}&price={{ urlencode('120-250 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro14.jpg') }}" alt="provider2">
                        </div>
                        <div class="user-data">
                            <h4>Zeyad Nasser Tawfik</h4>
                            <h6>Window Framing and Repair</h6>
                            <p>Window framing expert with custom woodworking skills</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>8+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Zeyad Nasser Tawfik') }}&service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Window Framing and Repair') }}&price={{ urlencode('150-300 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro16.jpg') }}" alt="provider3">
                        </div>
                        <div class="user-data">
                            <h4>Sherif Tamer AbdElAzeez</h4>
                            <h6>Bedroom Furniture Assembly</h6>
                            <p>Bedroom furniture specialist with bespoke designs</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>7+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Sherif Tamer AbdElAzeez') }}&service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Bedroom Furniture Assembly') }}&price={{ urlencode('180-400 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro15.jpg') }}" alt="provider4">
                        </div>
                        <div class="user-data">
                            <h4>Eyad Amr AbdElHameed</h4>
                            <h6>Table Crafting and Restoration</h6>
                            <p>Custom table craftsman with restoration expertise</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>9+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Eyad Amr AbdElHameed') }}&service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Table Crafting and Restoration') }}&price={{ urlencode('200-600 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro13.jpg') }}" alt="provider5">
                        </div>
                        <div class="user-data">
                            <h4>Karim Alaa Mansour</h4>
                            <h6>Door Installation and Repair</h6>
                            <p>Door restoration specialist</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>6+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Karim Alaa Mansour') }}&service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Door Installation and Repair') }}&price={{ urlencode('120-250 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro12.jpg') }}" alt="provider6">
                        </div>
                        <div class="user-data">
                            <h4>Samer Ehab Fadel</h4>
                            <h6>Bedroom Furniture Assembly</h6>
                            <p>Custom bedroom furniture fabrication expert</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span class="rate">7+ years 4</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Samer Ehab Fadel') }}&service={{ urlencode('Carpentry Service') }}&title={{ urlencode('Bedroom Furniture Assembly') }}&price={{ urlencode('180-400 $') }}"class="click-btn" target="_blank">Request</a>

                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Local Service. All rights reserved.</p>
            <a href="{{url('/home')}}" class="back-to-home">Back to Home</a>
        </div>
    </footer>
</body>

</html>
