<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumbing Service</title>
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
                <h1>Plumbing Service</h1>
            </div>
        </div>
    </header>
    <!-------------------------------------------------end Header ---------------------------------------------------------------------------------->
    <section class="services-section">
        <div class="container">
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/plumping/plumping1.jpg') }}" alt="fix leak">
                    </div>
                    <div class="card-detal">
                        <h2>Fix Leak</h2>
                        <p>Maintenance and repair services for all plumbing malfunctions of the highest quality, in
                            addition to installing plumbing for bathrooms, kitchens and bathtubs</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 50-100 / <span>visit</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Fix Leak') }}&price={{ urlencode(' 50-100 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service2  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/plumping/plumping2.jpeg') }}" alt="unclog drain">
                    </div>
                    <div class="card-detal">
                        <h2>Unclog The Drain</h2>
                        <p>The installation of drainage and feeding pipes includes two bathrooms with bathtub and one
                            kitchen</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 175-200 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Unclog The Drain') }}&price={{ urlencode(' 175-200 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------service3  ---------------------------------------------------------------------------------->
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/plumping/plumping3.jpg') }}" alt="install sink">
                    </div>
                    <div class="card-detal">
                        <h2>Install A New Sink</h2>
                        <p>Professional installation of new sinks with proper connection to water supply and drainage
                            systems. All types of sinks available for bathrooms and kitchens.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 100-125 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Install A New Sink') }}&price={{ urlencode(' 100-125 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service4  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/plumping/plumping4.jpg') }}" alt="replace faucet">
                    </div>
                    <div class="card-detal">
                        <h2>Replace A Faucet</h2>
                        <p>Maintenance and repair services for all plumbing malfunctions with the highest quality, in
                            addition to installing and replacing faucets</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 200-250 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Replace A Faucet') }}&price={{ urlencode(' 200-250 $') }}" target="_blank">Register</a>
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
                            <img src="{{ asset('images/profile_photos/pro48.jpg') }}" alt="provider1">
                        </div>
                        <div class="user-data">
                            <h4>Akram Hossni Harab</h4>
                            <h6>Fix Leak</h6>
                            <p>Plumbing service specialist in leak repair</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span class="rate">8+ years 5</span>
                        </div>

                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Akram Hossni Harab') }}&service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Fix Leak') }}&price={{ urlencode('50-100 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
                <!-------------------------------------------------------------------------------------------------topservice2-------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro47.jpg') }}" alt="provider2">
                        </div>
                        <div class="user-data">
                            <h4>Amin Badr Fouad</h4>
                            <h6>Unclog The Drain</h6>
                            <p>Plumbing service specialist in drain unclogging</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Amin Badr Fouad') }}&service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Unclog The Drain') }}&price={{ urlencode('175-200 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
                <!-----------------------------------------------------------------------------------topservice3------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro44.jpg') }}" alt="provider3">
                        </div>
                        <div class="user-data">
                            <h4>Karim Mahmoud Gamal</h4>
                            <h6>Install A New Sink</h6>
                            <p>Plumbing specialist in bathroom sink installations</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Karim Mahmoud Gamal') }}&service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Install A New Sink') }}&price={{ urlencode('100-125 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
                <!----------------------------------------------------------------------------------topservice4-------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro45.jpg') }}" alt="provider4">
                        </div>
                        <div class="user-data">
                            <h4>Sherif Mahmoud Sabri</h4>
                            <h6>Replace A Faucet</h6>
                            <p>Plumbing specialist in faucet replacement</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Sherif Mahmoud Sabri') }}&service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Replace A Faucet') }}&price={{ urlencode('200-250 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
                <!----------------------------------------------------------------------------------topservice5-------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro42.jpg') }}" alt="provider5">
                        </div>
                        <div class="user-data">
                            <h4>Ibrahiem Ali Fadel</h4>
                            <h6>Install A New Sink</h6>
                            <p>Plumbing specialist in sink installation</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>8+ years 4</span>
                        </div>

                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Ibrahiem Ali Fadel') }}&service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Install A New Sink') }}&price={{ urlencode('100-125 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
                <!----------------------------------------------------------------------------------topservice6-------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro41.jpg') }}" alt="provider6">
                        </div>
                        <div class="user-data">
                            <h4>Ali Mansour Mohamed</h4>
                            <h6>Unclog The Drain</h6>
                            <p>Plumbing specialist in pipe installations</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span class="rate">6+ years 4</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Ali Mansour Mohamed') }}&service={{ urlencode('Plumbing Service') }}&title={{ urlencode('Unclog The Drain') }}&price={{ urlencode('175-200 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Local Service. All rights reserved.</p>
            <a href="{{ url('/home') }}" class="back-to-home">Back to Home</a>
        </div>
    </footer>
</body>

</html>
