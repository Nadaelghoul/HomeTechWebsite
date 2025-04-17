<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrical Work Service</title>
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
                <h1>Electrical Work Service</h1>
            </div>
        </div>
    </header>
    <!-------------------------------------------------end Header ---------------------------------------------------------------------------------->
    <section class="services-section">
        <div class="container">
            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/electrical/cabling.jpg') }}" alt="Wiring and Cabling Services">
                    </div>
                    <div class="card-detal">
                        <h2>Wiring and Cabling Services</h2>
                        <p>Our team specializes in wiring and cabling services for both residential and commercial
                            properties.
                            We ensure efficient and safe installations for all your electrical needs.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 500-1500 / <span>project</span></h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Wiring and Cabling Services') }}&price={{ urlencode('500-1500 $') }}" target="_blank">Register</a>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/electrical/install and maintaince.jpeg') }}" alt="Electrical Panel Installation">
                    </div>
                    <div class="card-detal">
                        <h2>Installing and Maintaining Electrical Panels</h2>
                        <p>We offer expert installation and maintenance of electrical panels, ensuring that your home or
                            business remains powered safely and efficiently.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 1000-3000 / <span>project</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Electrical Panels') }}&price={{ urlencode('1000-3000 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/electrical/light.jpg') }}" alt="Lighting Systems Installation">
                    </div>
                    <div class="card-detal">
                        <h2>Installing and Maintaining Lighting Systems</h2>
                        <p>We specialize in installing and maintaining various lighting systems, including ambient,
                            task, and
                            accent lighting to meet your needs and enhance your space.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 500-1500 / <span>project</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Lighting Systems') }}&price={{ urlencode('500-1500 $') }}" target="_blank">Register</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/electrical/alarm.jpg') }}" alt="Alarm and Home Security Systems">
                    </div>
                    <div class="card-detal">
                        <h2>Installing and Maintaining Alarm and Home Security Systems</h2>
                        <p>Our experts offer professional installation and maintenance of alarm systems and home
                            security
                            setups to keep your property safe and secure.</p>
                        <div class="reguest-button">
                            <h4><i class="fa-solid fa-dollar-sign"></i> 500-2000 / <span>project</span> </h4>
                            <a href="{{ url('/servicerequest') }}?service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Alarm and Home Security Systems') }}&price={{ urlencode('500-2000 $') }}" target="_blank">Register</a>
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
                            <img src="{{ asset('images/profile_photos/pro17.jpg') }}" alt="provider1">
                        </div>
                        <div class="user-data">
                            <h4>Ramy Adham Sabri</h4>
                            <h6>Wiring and Cabling Services</h6>
                            <p>Expert in electrical wiring and installations</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Ramy Adham Sabri') }}&service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Wiring and Cabling Services') }}&price={{ urlencode('500-1500 $') }}"class="click-btn" target="_blank">Request</a>

                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro19.jpg') }}" alt="provider2">
                        </div>
                        <div class="user-data">
                            <h4>Hazem Bassam Rafek</h4>
                            <h6>Installing and Maintaining Electrical Panels</h6>
                            <p>Specialist in electrical panel installation and maintenance</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Hazem Bassam Rafek') }}&service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Electrical Panels') }}&price={{ urlencode('1000-3000 $') }}"class="click-btn" target="_blank">Request</a>
                </div>
                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro20.jpg') }}" alt="provider3">
                        </div>
                        <div class="user-data">
                            <h4>Haithem Magdi Anwar</h4>
                            <h6>Installing and Maintaining Lighting Systems</h6>
                            <p>Expert in installing and maintaining lighting systems</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Haithem Magdi Anwar') }}&service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Lighting Systems') }}&price={{ urlencode('500-1500 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro22.jpg') }}" alt="provider4">
                        </div>
                        <div class="user-data">
                            <h4>Basel Adel Hassan</h4>
                            <h6>Installing and Maintaining Alarm and Home Security Systems</h6>
                            <p>Specialist in alarm and home security system installations</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Basel Adel Hassan') }}&service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Alarm and Home Security Systems') }}&price={{ urlencode('500-2000 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro21.jpg') }}" alt="provider5">
                        </div>
                        <div class="user-data">
                            <h4>Nader Galal Mohsen</h4>
                            <h6>Installing and Maintaining Electrical Panels</h6>
                            <p>Specialist in electrical panel maintenance </p>
                        </div>
                    </div>
                    <div class="foot-card">
                        <div class="experience">
                            <span><i class="fa-solid fa-briefcase"></i></span>
                            <span>5+ years 4</span>
                        </div>
                        <div class="service-rate">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Nader Galal Mohsen') }}&service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Electrical Panels') }}&price={{ urlencode('1000-3000 $') }}"class="click-btn" target="_blank">Request</a>
                </div>

                <div class="top-card">
                    <div class="head-card">
                        <div class="user-image">
                            <img src="{{ asset('images/profile_photos/pro18.jpg') }}" alt="provider6">
                        </div>
                        <div class="user-data">
                            <h4>Mazen Ayman Radwan </h4>
                            <h6>Installing and Maintaining Alarm and Home Security Systems</h6>
                            <p>Expert in alarm system installations and electrical repairs</p>
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
                    <a href="{{ route('topProviderRequest.create') }}?service_provider={{ urlencode('Mazen Ayman Radwan ') }}&service={{ urlencode('Electrical Work Service') }}&title={{ urlencode('Installing and Maintaining Alarm and Home Security Systems') }}&price={{ urlencode('500-2000 $') }}"class="click-btn" target="_blank">Request</a>
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
