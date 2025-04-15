<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painting Service</title>
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
                <h1>Painting Service</h1>
            </div>
        </div>
    </header>
    <!-------------------------------------------------end Header ---------------------------------------------------------------------------------->
    <section class="services-section">
        <div class="container">
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/painting/pinting1.jpeg') }}" alt="Interior Wall Painting">
                    </div>
                    <div class="card-detal">
                        <h2>Interior Wall Painting</h2>
                        <p>Professional interior painting service with premium quality paints. We handle surface
                            preparation,
                            priming, and flawless application for a beautiful, long-lasting finish.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 250-450 / <span>room</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Painting Service') }}&title={{ urlencode('Interior Wall Painting') }}&price={{ urlencode(' 250-450 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service2  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/painting/pinting2.jpeg') }}" alt="Exterior House Painting">
                    </div>
                    <div class="card-detal">
                        <h2>Exterior House Painting</h2>
                        <p>Comprehensive exterior painting service including power washing, scraping, priming, and
                            painting
                            with weather-resistant paints to protect and beautify your home's exterior.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 1500-3000 / <span>project</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Painting Service') }}&title={{ urlencode('Exterior House Painting') }}&price={{ urlencode(' 1500-3000 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------service3  ---------------------------------------------------------------------------------->
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/painting/pinting3.jpeg') }}" alt="Cabinet Refinishing">
                    </div>
                    <div class="card-detal">
                        <h2>Cabinet Refinishing</h2>
                        <p>Transform your kitchen or bathroom with our professional cabinet refinishing service.
                            We sand, prime, and paint your cabinets for a fresh, modern look at a fraction of
                            replacement cost.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 800-1500 / <span>project</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Painting Service') }}&title={{ urlencode('Cabinet Refinishing') }}&price={{ urlencode(' 800-1500 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service4  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/painting/pinting4.jpeg') }}" alt="Decorative Painting">
                    </div>
                    <div class="card-detal">
                        <h2>Decorative Painting</h2>
                        <p>Specialty painting services including faux finishes, murals, accent walls, and decorative
                            techniques
                            to create unique and personalized spaces in your home.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 400-800 / <span>wall</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Painting Service') }}&title={{ urlencode('Decorative Painting') }}&price={{ urlencode(' 400-800 $') }}" target="_blank">Register</a>
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
                            <img src="{{ asset('images/profile_photos/pro33.jpg') }}" alt="provider1">
                        </div>
                        <div class="user-data">
                            <h4>Akram Marwan AbdEllatef</h4>
                            <h6>Interior Wall Painting</h6>
                            <p>Master painter specializing in interior finishes</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span class="rate">12+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Akram Marwan AbdEllatef') }}&service={{ urlencode('Painting Service') }}&title={{ urlencode('Interior Wall Painting') }}&price={{ urlencode('250-450 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro35.jpg') }}" alt="provider2">
                        </div>
                        <div class="user-data">
                            <h4>Adnan Taha Magdi</h4>
                            <h6>Exterior House Painting</h6>
                            <p>Exterior painting expert with weatherproofing skills</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>10+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Adnan Taha Magdi') }}&service={{ urlencode('Painting Service') }}&title={{ urlencode('Exterior House Painting') }}&price={{ urlencode('1500-3000 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro37.jpg') }}" alt="provider3">
                        </div>
                        <div class="user-data">
                            <h4>Hazem Nasr Zaki</h4>
                            <h6>Cabinet Refinishing</h6>
                            <p>Cabinet refinishing specialist with precision detailing</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Hazem Nasr Zaki') }}&service={{ urlencode('Painting Service') }}&title={{ urlencode('Cabinet Refinishing') }}&price={{ urlencode('800-1500 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro36.jpg') }}" alt="provider4">
                        </div>
                        <div class="user-data">
                            <h4>Mohand Rami Zakaria</h4>
                            <h6>Decorative Painting</h6>
                            <p>Decorative paint artist specializing in murals and faux finishes</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>9+ years 4</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Mohand Rami Zakaria') }}&service={{ urlencode('Painting Service') }}&title={{ urlencode('Decorative Painting') }}&price={{ urlencode('400-800 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro40.jpg') }}" alt="provider5">
                        </div>
                        <div class="user-data">
                            <h4>Fadel Zakria Nour</h4>
                            <h6>Exterior House Painting</h6>
                            <p>Commercial painting specialist with rapid completion</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>11+ years 4</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Fadel Zakria Nour') }}&service={{ urlencode('Painting Service') }}&title={{ urlencode('Exterior House Painting') }}&price={{ urlencode('1500-3000 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro38.jpg') }}" alt="provider6">
                        </div>
                        <div class="user-data">
                            <h4>Zaki Fouad Hamed</h4>
                            <h6>Decorative Painting</h6>
                            <p>Eco-friendly paint specialist using low-VOC products</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Zaki Fouad Hamed') }}&service={{ urlencode('Painting Service') }}&title={{ urlencode('Decorative Painting') }}&price={{ urlencode('400-800 $') }}"class="click-btn" target="_blank">Request</a>
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
