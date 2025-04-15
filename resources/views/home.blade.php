<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Service</title>
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- icon -->
    <link rel="icon" href="{{ asset('images/logo-removebg-preview.png') }}" type="image/svg+xml">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Start Header -->
    <header>
        <a class="logo-link" href="{{url('/home')}}">
        <div class="logo-container">
            <div class="logo-img">
                <img src="{{ asset('images/logo-removebg-preview.png') }}" alt=" Logo">
            </div>
            <div class="logo-text">
                <span>Local</span>
                <span>Service</span>
            </div>
        </div>
        </a>
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="nav-container">
            <nav>
                <ul>
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="#start-services">Services</a></li>
                    <li><a href="#advantages">About</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="{{route('login')}}">Become a Pro</a></li>
                    <li><a href="{{url('/adminlogin')}}">Admin Panel</a></li>
                </ul>
            </nav>

        </div>
    </header>
    <!-- End Header -->

    <!-- Start Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>
                <span class="highlight">We</span> create the best service<br>
                For <span class="highlight">Your</span> Help
            </h1>
            <p>The easiy to get service with better price and quality<br>
                Always ,think about your client</p>
            <div class="search-bar">
                <div class="search-input-container">
                    <i class="fas fa-search"></i>
                    <form action="{{ route('search.service') }}" method="GET">
                    <input type="text" name="query" id="service" list="services" placeholder="What Service do you need?"  autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required oninput="this.setAttribute('list', 'services')" onfocus="this.removeAttribute('list')">
                      <!-- Datalist for auto-suggestions -->
                      <datalist id="services">
                      <option value="electrical">
                      <option value="plumbing">
                      <option value="airconditiong">
                      <option value="painting">
                      <option value="carpentry">
                      <option value="appliance">
                     </datalist>
                </div>
                <button type="submit" class="search-button">Search</button>

            </div>
        </form>

        @if(session('error'))
         <p style="color: black">{{'*'. session('error') }}</p>
       @endif
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-placeholder.jpg') }}" alt="Professional workers">
        </div>
    </section>
    <!-- End Hero Section -->
    <!-- Start Services Section -->
        <section id="services" class="popular-services">
        <h2>Popular <span class="highlight">Service</span> In Your <span class="highlight">City</span></h2>
        <div class="service-container" id="start-services">
            <div class="service-card">
                <img src="{{ asset('images/plumbing.jpg') }}" alt="Plumbing Service">
                <h3>Plumbing Service</h3>
                <ul>
                    <li>Fix a leak</li>
                    <li>Unclog the drain</li>
                    <li>Replace a faucet</li>
                    <li>Install a new sink</li>
                </ul>
                <p class="price">$225.00/Visit</p>
                <button> <a class="serv-page" href="{{url('/plumbing')}}">Get The Service</a></button>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/carpentry.jpg') }}" alt="Carpentry Work">
                <h3>Carpentry Work</h3>
                <ul>
                    <li>Sand the wood</li>
                    <li>Fix a broken chair</li>
                    <li>Replace a door handle</li>
                    <li>Install new cabinets</li>
                </ul>
                <p class="price">$125.00/Visit</p>
                <button> <a class="serv-page" href="{{url('/carpentry')}}">Get The Service</a></button>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/electrical.jpg') }}" alt="Electrical Work">
                <h3>Electrical Work</h3>
                <ul>
                    <li>Fix a short circuit</li>
                    <li>Repair an outlet</li>
                    <li>Check the wiring</li>
                    <li>Install new switches</li>
                </ul>
                <p class="price">$275.00/Visit</p>
                <button> <a class="serv-page" href="{{url('/electrical')}}">Get The Service</a></button>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/painting.jpg') }}" alt="Painting Work">
                <h3>Painting Work</h3>
                <ul>
                    <li>Apply a primer</li>
                    <li>Paint the walls</li>
                    <li>Sand the surface</li>
                    <li>Remove old paint</li>
                </ul>
                <p class="price">$425.00/Visit</p>
                <button> <a class="serv-page" href="{{url('/painting')}}">Get The Service</a></button>
            </div>

            <div class="service-card">
                <img src="{{ asset('images/heating-cooling.jpg') }}" alt="Heating & Cooling Repairs">
                <h3>Heating & Cooling Repairs</h3>
                <ul>
                    <li>Fix the heater</li>
                    <li>Check the thermostat</li>
                    <li>Install an air conditioner</li>
                    <li>Replace air filters</li>
                </ul>
                <p class="price">$275.00/Visit</p>
                <button> <a class="serv-page" href="{{url('/airconditions')}}">Get The Service</a></button>
            </div>
            <div class="service-card">
                <img src="{{ asset('images/appliance-repair.jpg') }}" alt="Appliance Repairs">
                <h3>Appliance Repairs</h3>
                <ul>
                    <li>Fix a broken fridge</li>
                    <li>Check the oven thermostat</li>
                    <li>Replace a microwave fuse</li>
                    <li>Repair the washing machine</li>
                </ul>
                <p class="price">$325.00/Visit</p>
                <button> <a class="serv-page" href="{{url('/appliance')}}">Get The Service</a></button>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

      <!-- Start Our Advantages Section -->
      <section class="out-advantages" id="advantages">
        <div class="advantages-container">
            <div class="advantages-image">
             <img src="{{ asset('images/why-us.png') }}" alt="Professional Technician">
                <div class="star-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="advantages-content">
                <h2>Why <span class="highlight">Us?</span></h2>
                <h3>Instant Solution and team for you</h3>
                <p>Get instant solution . Build your team of local ,background-
                    checked professionals for your project. whatever you need
                    they have got it convered</p>
                <ul class="advantages-list">
                    <li>Choose and connect with the best person for the job</li>
                    <li>Compare taskers reviews, rating and prices</li>
                    <li>Save your favorites to book again and again</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Our Advantages Section -->

    <!-- Start Contact Section -->
    <section class="contact-section" id="contact">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact <span class="highlight">Us</span></h2>
                <div class="contact-details">
                    <div class="contact-address">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Port Said District, at Street</span>
                    </div>
                    <div class="contact-email">
                        <i class="fas fa-envelope"></i>
                        <span>localservice@email.com</span>
                    </div>
                    <div class="contact-phone">
                        <i class="fas fa-phone"></i>
                        <span>+20 1234567890</span>
                    </div>
                    <div class="contact-website">
                        <i class="fas fa-globe"></i>
                        <span>www.localservice.com</span>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="{{ config('app.facebook_url') }}" target="_blank"  class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ config('app.twitter_url') }}"  target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="{{ config('app.instagram_url') }}" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="{{ config('app.linkedin_url') }}"  target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <h3>Get In Touch With Us</h3>
                <p>AND WE WILL GET BACK TO YOU</p>
                <form action="{{ route('contact.submit') }}#contact" method="POST">
                    @csrf
                    <div class="form-row">
                        <input type="text" name="first_name" placeholder="First Name" required>
                        <input type="text" name="last_name" placeholder="Last Name" required>
                    </div>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject"  placeholder="Subject" required>
                    <textarea name="message"  placeholder="Message" required></textarea>
                    <button type="submit" class="submit-button">SUBMIT</button>
                </form>
                   @if(session('success'))
                   <p>
                  {{ session('success') }}
                   </p>
                 @endif
            </div>
        </div>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.7484820757695!2d32.2808094603286!3d31.2553853744432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f99c12c1a8708b%3A0x91d2cf7845b32b88!2z2YPZhNmK2Kkg2KrZg9mG2YjZhNmI2KzZitinINin2YTYpdiv2KfYsdipINmI2YbYuNmFINin2YTZhdi52YTZiNmF2KfYqiDYrNin2YXYudipINio2YjYsdiz2LnZitiv!5e0!3m2!1sar!2seg!4v1741184003010!5m2!1sar!2seg"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Footer Section -->
    <footer class="footer">
        <div class="footer-content" >
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo-removebg-preview.png') }}" alt="Local Service Logo">
                    <h3>Local Service</h3>
                </div>
                <p>Your trusted platform for professional home services and repairs. Quality work guaranteed.</p>
            </div>

            <div class="footer-section" >
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#start-services">Our Services</a></li>
                    <li><a href="#advantages">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{route('login')}}">Become a Pro</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Services</h4>
                <ul>
                    <li><a href="{{url('/plumbing')}}">Plumbing</a></li>
                    <li><a href="{{url('/electrical')}}">Electrical</a></li>
                    <li><a href="{{url('/carpentry')}}">Carpentry</a></li>
                    <li><a href="{{url('/appliance')}}">Appliance</a></li>
                    <li><a href="{{url('/airconditions')}}">Air Condition</a></li>
                    <li><a href="{{url('/painting')}}">Painting</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h2>
                    <i class="fa-solid fa-eye"></i>
                    {{ session('visits', 0) }} Visits
                </h2>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="social-links">
                <a href="{{ config('app.facebook_url') }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ config('app.twitter_url') }}"  target="_blank" ><i class="fab fa-twitter"></i></a>
                <a href="{{ config('app.instagram_url') }}" target="_blank" ><i class="fab fa-instagram"></i></a>
                <a href="{{ config('app.linkedin_url') }}"  target="_blank" ><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2025 Local Service. All rights reserved.</p>
        </div>
    </footer>
    <!-- End Footer Section -->


</body>

</html>
