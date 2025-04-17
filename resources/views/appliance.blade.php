<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appliance Service</title>
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
                <div class="logo-container" style="margin-left:-12px;">
                    <div class="logo-img">
                        <img src="{{ asset('images/logo-removebg-preview.png') }}" alt=" Logo">
                    </div>
                    <div class="logo-text"  style="margin-left:-20px;">
                        <span style="font-size:20px;">Home</span>
                        <span style="font-size:22px;margin-top:-5px;">Tech</span>
                    </div>
                </div>
                </a>
            <div class="title-service">
                <h1>Appliance Service</h1>
            </div>
        </div>
    </header>
    <!-------------------------------------------------end Header ---------------------------------------------------------------------------------->
    <section class="services-section">
        <div class="container">
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/appliance/washing.jpg') }}" alt="Washing Machine Repair">
                    </div>
                    <div class="card-detal">
                        <h2>Washing Machine Repair</h2>
                        <p>Professional washing machine repair service. Our experts diagnose and fix common issues,
                            ensuring your washer runs smoothly.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 100-300 / <span>repair</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Appliance Service') }}&title={{ urlencode('Washing Machine Repair') }}&price={{ urlencode('100-300 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/appliance/applaince2.png') }}" alt="Refrigerator Repair">
                    </div>
                    <div class="card-detal">
                        <h2>Refrigerator Repair</h2>
                        <p>Get your refrigerator back to working condition. We fix cooling issues, leaks, and more,
                            using high-quality parts for long-lasting results.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 150-400 / <span>repair</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Appliance Service') }}&title={{ urlencode('Refrigerator Repair') }}&price={{ urlencode('150-400 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/appliance/heater.jpg') }}" alt="Water Heater Repair">
                    </div>
                    <div class="card-detal">
                        <h2>Water Heater Repair</h2>
                        <p>Our experts specialize in repairing water heaters of all types. From electrical faults to
                            thermostat issues, we provide reliable fixes.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 200-500 / <span>repair</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Appliance Service') }}&title={{ urlencode('Water Heater Repair') }}&price={{ urlencode('200-500 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/appliance/oven.jpg') }}" alt="Oven Repair">
                    </div>
                    <div class="card-detal">
                        <h2>Oven Repair</h2>
                        <p>Fix your oven with our professional repair service. We address all issues, including
                            temperature inconsistencies, electrical malfunctions, and more.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 150-400 / <span>repair</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Appliance Service') }}&title={{ urlencode('Oven Repair') }}&price={{ urlencode(' 150-400 $') }}" target="_blank">Register</a>

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
                            <img src="{{ asset('images/profile_photos/pro25.jpg') }}" alt="provider1">
                        </div>
                        <div class="user-data">
                            <h4>Seif Ehab Nader</h4>
                            <h6>Washing Machine Repair</h6>
                            <p>Washing machine repair specialist</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span class="rate">12+ years 5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Karim Nader') }}&service={{ urlencode('Appliance Service') }}&title={{ urlencode('Washing Machine Repair') }}&price={{ urlencode('100-300 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro28.jpg') }}" alt="provider2">
                        </div>
                        <div class="user-data">
                            <h4>Adel Fouad Masoud</h4>
                            <h6>Refrigerator Repair</h6>
                            <p>Refrigerator repair expert with quick service</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>10+ years 5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star half-filled"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Hany Essam') }}&service={{ urlencode('Appliance Service') }}&title={{ urlencode('Refrigerator Repair') }}&price={{ urlencode('150-400 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro29.jpg') }}" alt="provider3">
                        </div>
                        <div class="user-data">
                            <h4>Louay Hossam Ramzi</h4>
                            <h6>Water Heater Repair</h6>
                            <p>Water heater repair specialist</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>8+ years 5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star half-filled"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Louay Hossam Ramzi') }}&service={{ urlencode('Appliance Service') }}&title={{ urlencode('Water Heater Repair') }}&price={{ urlencode('200-500 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro32.jpg') }}" alt="provider4">
                        </div>
                        <div class="user-data">
                            <h4>Hamza Yasser Rakouf</h4>
                            <h6>Oven Repair</h6>
                            <p>Oven repair professional with high ratings</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Hamza Yasser Rakouf') }}&service={{ urlencode('Appliance Service') }}&title={{ urlencode('Oven Repair') }}&price={{ urlencode('150-400 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro30.jpg') }}" alt="provider5">
                        </div>
                        <div class="user-data">
                            <h4>Diya Khaled AbdElBaset</h4>
                            <h6>Washing Machine Repair</h6>
                            <p>Expert in washing machine diagnostics and repairs</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>5+ years 4.5</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Diya Khaled AbdElBaset') }}&service={{ urlencode('Appliance Service') }}&title={{ urlencode('Washing Machine Repair') }}&price={{ urlencode('100-300 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro32.jpg') }}" alt="provider6">
                        </div>
                        <div class="user-data">
                            <h4>Hamza Yasser Rakouf</h4>
                            <h6>Refrigerator Repair</h6>
                            <p>Specialist in refrigerator maintenance and repairs</p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>7+ years 4</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Hamza Yasser Rakouf') }}&service={{ urlencode('Appliance Service') }}&title={{ urlencode('Refrigerator Repair') }}&price={{ urlencode('150-400 $') }}"class="click-btn" target="_blank">Request</a>

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
