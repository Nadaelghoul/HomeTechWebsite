<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Conditioning</title>
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
                <h1>Air Conditioning Service</h1>
            </div>
        </div>
    </header>
    <!-------------------------------------------------end Header ---------------------------------------------------------------------------------->
    <section class="services-section">
        <div class="container">
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/air-condition/service1.jpeg') }}" alt="fix leak">
                    </div>
                    <div class="card-detal">
                        <h2>Air conditioning cleaning & summer maintenance</h2>
                        <p>Prepare your air conditioning for the heat, professional cleaning service to ensure the best
                            performance during the
                            summer season.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 50-100 / <span>visit</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Air conditioning cleaning & summer maintenance') }}&price={{ urlencode('50-100 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service2  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/air-condition/service2.jpeg') }}" alt="unclog drain">
                    </div>
                    <div class="card-detal">
                        <h2>Air conditioning inspection</h2>
                        <p>To avoid sudden breakdowns, book a comprehensive preview to adapt you to detect potential
                            problems</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 175-200 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Air conditioning inspection and inspection') }}&price={{ urlencode('175-200 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------service3  ---------------------------------------------------------------------------------->
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/air-condition/service3.jpeg') }}" alt="install sink">
                    </div>
                    <div class="card-detal">
                        <h2>Charging Freon air conditioning</h2>
                        <p>Is it poor cooling? We offer a freon filling service to rejuvenate the efficiency of your
                            conditioning</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 100-125 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Charging Freon air conditioning') }}&price={{ urlencode('100-125 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------service4  ---------------------------------------------------------------------------------->

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/air-condition/service4.png') }}" alt="replace faucet">
                    </div>
                    <div class="card-detal">
                        <h2>Dismantling and installing Air conditioning</h2>
                        <p>Pofessional technicians to deal with all types of air conditioners accurately and efficiently
                        </p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 200-250 / <span>visit</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Dismantling and installing Air conditioning') }}&price={{ urlencode('200-250 $') }}" target="_blank">Register</a>
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
                            <img src="{{ asset('images/profile_photos/pro4.jpg') }}" alt="provider1">
                        </div>
                        <div class="user-data">
                            <h4>Ali Mostafa Zedan</h4>
                            <h6>Air conditioning cleaning & summer maintenance</h6>
                            <p>AC specialist in maintenance and cleaning services</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Ali Mostafa Zedan') }}&service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Air conditioning cleaning & summer maintenance') }}&price={{ urlencode('50-100 $') }}"
                        class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro5.jpg') }}" alt="provider2">
                        </div>
                        <div class="user-data">
                            <h4>Youssef Soliman Fouad</h4>
                            <h6>Charging Freon air conditioning</h6>
                            <p>AC technician specializing in freon charging and repairs</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Youssef Soliman Fouad') }}&service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Charging Freon air conditioning') }}&price={{ urlencode('100-125 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro2.jpg') }}" alt="provider3">
                        </div>
                        <div class="user-data">
                            <h4>Mohamed Sami Youssef</h4>
                            <h6>Dismantling and installing Air conditioning</h6>
                            <p>AC expert specializing in installation and dismantling</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Mohamed Sami Youssef') }}&service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Dismantling and installing Air conditioning') }}&price={{ urlencode('200-250 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro3.jpg') }}" alt="provider4">
                        </div>
                        <div class="user-data">
                            <h4>Khaled Omar Ibrahiem</h4>
                            <h6>Air conditioning inspection</h6>
                            <p>AC specialist in troubleshooting and repairs</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Khaled Omar Ibrahiem') }}&service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Air conditioning inspection') }}&price={{ urlencode('175-200 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro6.jpg') }}" alt="provider5">
                        </div>
                        <div class="user-data">
                            <h4>Hassan Waleed Kamal</h4>
                            <h6>Dismantling and installing Air conditioning</h6>
                            <p>AC technician specializing in central AC systems</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Hassan Waleed Kamal') }}&service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Dismantling and installing Air conditioning') }}&price={{ urlencode('200-250 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro7.jpg') }}" alt="provider6">
                        </div>
                        <div class="user-data">
                            <h4>Marawan Saead Zaher</h4>
                            <h6>Air conditioning inspection</h6>
                            <p>AC specialist in preventive maintenance and inspection</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Marawan Saead Zaher') }}&service={{ urlencode('Air Conditioning') }}&title={{ urlencode('Air conditioning inspection') }}&price={{ urlencode('175-200 $') }}"class="click-btn" target="_blank">Request</a>

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
