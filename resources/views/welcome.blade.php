@extends('layout.base')

@section('content')
    <!-- Hotel Hero Section -->
    <section id="hotel-hero" class="hotel-hero section dark-background">

        <div class="hero-content">
            <div class="hero-background">
                <video autoplay="" muted="" loop="" loading="lazy">
                    <source src="assets/img/hotel/video-6.mp4" type="video/mp4">
                </video>
                <div class="hero-overlay"></div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="hero-text text-center" data-aos="fade-up" data-aos-delay="100">
                            <h1>Trouvez le logement parfait, en toute simplicité</h1>
                            <p class="hero-subtitle">Bienvenue sur HE YOU, votre plateforme de confiance pour la location de
                                logements. Que vous recherchiez un appartement en centre-ville, une maison familiale au
                                calme, nous avons ce qu’il vous faut.</p>
                        </div>

                        <div class="hero-actions" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{ route('auth.register') }}" class="btn btn-light btn-md">
                                <i class="bi bi-house-door"></i>
                                Mettre votre logement en location(gratuit)
                            </a>
                            <a href="{{ route('view_search') }}" class="btn btn-outline-light btn-md">
                                <i class="bi bi-search"></i>
                                Rechercher un logement
                            </a>
                        </div>

                        <div class="hero-stats" data-aos="fade-up" data-aos-delay="500">
                            <div class="stat-item">
                                <div class="stat-number">
                                    <span data-purecounter-start="0" data-purecounter-end="250"
                                        data-purecounter-duration="2" class="purecounter"></span>+
                                </div>
                                <div class="stat-label">Logements</div>
                            </div>

                            <div class="stat-item">
                                <div class="stat-number">
                                    <span data-purecounter-start="0" data-purecounter-end="98"
                                        data-purecounter-duration="2" class="purecounter"></span>%
                                </div>
                                <div class="stat-label">Satisfaction des clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hotel Hero Section -->

    <!-- About Home Section -->
    <section id="about-home" class="about-home section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-images">
                        <div class="image-stack">
                            <div class="image-main">
                                <img src="assets/img/hotel/showcase-3.webp" alt="Heritage Hotel Exterior"
                                    class="img-fluid">
                            </div>
                            <div class="image-overlay">
                                <img src="assets/img/hotel/room-8.webp" alt="Elegant Room Interior" class="img-fluid">
                            </div>
                        </div>
                        <div class="floating-badge">
                            <div class="badge-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="badge-info">
                                <span class="badge-title">5-Star</span>
                                <span class="badge-subtitle">Luxury</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End About Images -->

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-content">
                        <div class="section-header">
                            <span class="subtitle">Heritage &amp; Excellence</span>
                            <h2>Discover the Pinnacle of Hospitality</h2>
                        </div>

                        <p>Experience unparalleled luxury at Heritage Grand Hotel, where timeless elegance meets modern
                            sophistication. For over four decades, we have crafted memorable experiences through exceptional
                            service and attention to every detail.</p>

                        <p>Our commitment to excellence has earned recognition from prestigious hospitality awards
                            worldwide, making us the preferred choice for discerning guests seeking both comfort and
                            distinction.</p>

                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Premium Suites</h4>
                                    <p>Luxuriously appointed accommodations with panoramic city views</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Award-Winning Service</h4>
                                    <p>Personalized hospitality that exceeds every expectation</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Prime Location</h4>
                                    <p>Situated in the heart of the city's cultural district</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-fork-knife"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Michelin Dining</h4>
                                    <p>Exceptional culinary experiences by renowned chefs</p>
                                </div>
                            </div>
                        </div><!-- End Features Grid -->

                        <div class="about-actions">
                            <a href="about.html" class="btn-discover">
                                <span>Discover Our Story</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div><!-- End About Content -->

            </div>

        </div>

    </section><!-- /About Home Section -->

    <!-- Rooms Showcase Section -->
    <section id="rooms-showcase" class="rooms-showcase section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Rooms</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="room-showcase-card featured">
                        <div class="room-hero-image">
                            <img src="assets/img/hotel/room-7.webp" alt="Presidential Suite" class="img-fluid">
                            <div class="room-badge">Popular Choice</div>
                            <div class="room-icons">
                                <span class="icon-item"><i class="bi bi-people"></i> 4</span>
                                <span class="icon-item"><i class="bi bi-house"></i> Suite</span>
                                <span class="icon-item"><i class="bi bi-star"></i> Luxury</span>
                            </div>
                        </div>
                        <div class="room-info">
                            <div class="room-header">
                                <h3>Luxury Presidential Suite</h3>
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <p class="room-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
                            <div class="room-amenities">
                                <i class="bi bi-wifi"></i>
                                <i class="bi bi-tv"></i>
                                <i class="bi bi-cup-hot"></i>
                                <i class="bi bi-snow"></i>
                                <i class="bi bi-telephone"></i>
                                <i class="bi bi-safe"></i>
                            </div>
                            <div class="room-bottom">
                                <div class="pricing-info">
                                    <span class="price-tag">$549</span>
                                    <span class="price-label">per night</span>
                                </div>
                                <a href="room-details.html" class="explore-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Featured Room Card -->

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12 mb-4" data-aos="slide-left" data-aos-delay="250">
                            <div class="room-showcase-card compact">
                                <div class="compact-image">
                                    <img src="assets/img/hotel/room-11.webp" alt="Executive Suite" class="img-fluid">
                                    <div class="quick-view">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                </div>
                                <div class="compact-content">
                                    <h4>Executive Business Suite</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</p>
                                    <div class="compact-features">
                                        <span><i class="bi bi-briefcase"></i> Work Desk</span>
                                        <span><i class="bi bi-building"></i> City View</span>
                                    </div>
                                    <div class="compact-bottom">
                                        <span class="compact-price">$289<small>/night</small></span>
                                        <a href="room-details.html" class="quick-book">Reserve</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Compact Room Card -->

                        <div class="col-12 mb-4" data-aos="slide-left" data-aos-delay="300">
                            <div class="room-showcase-card compact">
                                <div class="compact-image">
                                    <img src="assets/img/hotel/room-16.webp" alt="Ocean View" class="img-fluid">
                                    <div class="quick-view">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                </div>
                                <div class="compact-content">
                                    <h4>Ocean View Double Room</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                        ea commodo.</p>
                                    <div class="compact-features">
                                        <span><i class="bi bi-water"></i> Ocean View</span>
                                        <span><i class="bi bi-tree"></i> Balcony</span>
                                    </div>
                                    <div class="compact-bottom">
                                        <span class="compact-price">$219<small>/night</small></span>
                                        <a href="room-details.html" class="quick-book">Reserve</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Compact Room Card -->

                        <div class="col-12 mb-4" data-aos="slide-left" data-aos-delay="350">
                            <div class="room-showcase-card compact">
                                <div class="compact-image">
                                    <img src="assets/img/hotel/room-9.webp" alt="Family Room" class="img-fluid">
                                    <div class="quick-view">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                </div>
                                <div class="compact-content">
                                    <h4>Family Connecting Rooms</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="compact-features">
                                        <span><i class="bi bi-door-open"></i> Connected</span>
                                        <span><i class="bi bi-controller"></i> Entertainment</span>
                                    </div>
                                    <div class="compact-bottom">
                                        <span class="compact-price">$379<small>/night</small></span>
                                        <a href="room-details.html" class="quick-book">Reserve</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Compact Room Card -->

                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="room-showcase-card mini">
                        <div class="mini-image">
                            <img src="assets/img/hotel/room-13.webp" alt="Standard Room" class="img-fluid">
                            <div class="mini-overlay">
                                <a href="room-details.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mini-content">
                            <h5>Classic Double Room</h5>
                            <div class="mini-price">$159<span>/night</span></div>
                            <div class="mini-amenities">
                                <i class="bi bi-wifi"></i>
                                <i class="bi bi-tv"></i>
                                <i class="bi bi-telephone"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Mini Room Card -->

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="room-showcase-card mini">
                        <div class="mini-image">
                            <img src="assets/img/hotel/room-18.webp" alt="Deluxe Room" class="img-fluid">
                            <div class="mini-overlay">
                                <a href="room-details.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mini-content">
                            <h5>Deluxe King Suite</h5>
                            <div class="mini-price">$199<span>/night</span></div>
                            <div class="mini-amenities">
                                <i class="bi bi-wifi"></i>
                                <i class="bi bi-cup-hot"></i>
                                <i class="bi bi-snow"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Mini Room Card -->

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="room-showcase-card mini">
                        <div class="mini-image">
                            <img src="assets/img/hotel/room-4.webp" alt="Superior Room" class="img-fluid">
                            <div class="mini-overlay">
                                <a href="room-details.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mini-content">
                            <h5>Superior Garden View</h5>
                            <div class="mini-price">$239<span>/night</span></div>
                            <div class="mini-amenities">
                                <i class="bi bi-tree"></i>
                                <i class="bi bi-tv"></i>
                                <i class="bi bi-wifi"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Mini Room Card -->

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="550">
                    <div class="room-showcase-card mini">
                        <div class="mini-image">
                            <img src="assets/img/hotel/room-20.webp" alt="Penthouse" class="img-fluid">
                            <div class="mini-overlay">
                                <a href="room-details.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="mini-content">
                            <h5>Penthouse Suite</h5>
                            <div class="mini-price">$899<span>/night</span></div>
                            <div class="mini-amenities">
                                <i class="bi bi-award"></i>
                                <i class="bi bi-house"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- End Mini Room Card -->

            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
                <a href="rooms.html" class="discover-all-btn">Discover All Accommodations</a>
            </div>

        </div>

    </section><!-- /Rooms Showcase Section -->

    <!-- Amenities Cards Section -->
    <section id="amenities-cards" class="amenities-cards section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Amenities</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5">

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="amenity-card">
                        <div class="card-header">
                            <div class="amenity-icon">
                                <i class="bi bi-water"></i>
                            </div>
                            <h4>Rooftop Pool &amp; Terrace</h4>
                        </div>
                        <div class="amenity-content">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione.</p>
                            <div class="amenity-features">
                                <span class="feature-tag">24/7 Access</span>
                                <span class="feature-tag">Pool Bar</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Amenity Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="amenity-card">
                        <div class="card-header">
                            <div class="amenity-icon">
                                <i class="bi bi-heart-pulse"></i>
                            </div>
                            <h4>Luxury Spa Center</h4>
                        </div>
                        <div class="amenity-content">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                sed quia non numquam eius modi.</p>
                            <div class="amenity-features">
                                <span class="feature-tag">Massage</span>
                                <span class="feature-tag">Sauna</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Amenity Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="amenity-card">
                        <div class="card-header">
                            <div class="amenity-icon">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                            <h4>Gourmet Restaurant</h4>
                        </div>
                        <div class="amenity-content">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti.</p>
                            <div class="amenity-features">
                                <span class="feature-tag">Room Service</span>
                                <span class="feature-tag">Live Music</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Amenity Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="amenity-card">
                        <div class="card-header">
                            <div class="amenity-icon">
                                <i class="bi bi-bicycle"></i>
                            </div>
                            <h4>Modern Fitness Studio</h4>
                        </div>
                        <div class="amenity-content">
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                                et voluptates repudiandae.</p>
                            <div class="amenity-features">
                                <span class="feature-tag">Personal Training</span>
                                <span class="feature-tag">Yoga Classes</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Amenity Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="amenity-card">
                        <div class="card-header">
                            <div class="amenity-icon">
                                <i class="bi bi-wifi"></i>
                            </div>
                            <h4>High-Speed Internet</h4>
                        </div>
                        <div class="amenity-content">
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                nobis est eligendi optio cumque.</p>
                            <div class="amenity-features">
                                <span class="feature-tag">Business Center</span>
                                <span class="feature-tag">Conference Rooms</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Amenity Item -->

                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="amenity-card">
                        <div class="card-header">
                            <div class="amenity-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>24/7 Security Service</h4>
                        </div>
                        <div class="amenity-content">
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores
                                alias consequatur aut perferendis.</p>
                            <div class="amenity-features">
                                <span class="feature-tag">Concierge</span>
                                <span class="feature-tag">Valet Parking</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Amenity Item -->

            </div>

            <div class="amenities-cta text-center mt-5" data-aos="fade-up" data-aos-delay="600">
                <div class="cta-content">
                    <h5>Experience Premium Comfort</h5>
                    <p class="mb-4">Discover all the exceptional facilities we offer to make your stay unforgettable</p>
                    <a href="amenities.html" class="btn-explore">Explore All Amenities</a>
                </div>
            </div>

        </div>

    </section><!-- /Amenities Cards Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="testimonial-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

                <div class="swiper-wrapper">

                    <!-- Testimonial Slide 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">
                            <div class="testimonial-header">
                                <img src="assets/img/person/person-f-12.webp" alt="Client" class="img-fluid"
                                    loading="lazy">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum consectetur adipiscing elit sed eiusmod tempor.</p>
                            </div>
                            <div class="testimonial-footer">
                                <h5>Jessica Martinez</h5>
                                <span>UX Designer</span>
                                <div class="quote-icon">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Testimonial Slide -->

                    <!-- Testimonial Slide 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
                            <div class="testimonial-header">
                                <img src="assets/img/person/person-m-8.webp" alt="Client" class="img-fluid"
                                    loading="lazy">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa.</p>
                            </div>
                            <div class="testimonial-footer">
                                <h5>David Rodriguez</h5>
                                <span>Software Engineer</span>
                                <div class="quote-icon">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Testimonial Slide -->

                    <!-- Testimonial Slide 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
                            <div class="testimonial-header">
                                <img src="assets/img/person/person-f-6.webp" alt="Client" class="img-fluid"
                                    loading="lazy">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
                            </div>
                            <div class="testimonial-footer">
                                <h5>Amanda Wilson</h5>
                                <span>Creative Director</span>
                                <div class="quote-icon">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Testimonial Slide -->

                    <!-- Testimonial Slide 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="500">
                            <div class="testimonial-header">
                                <img src="assets/img/person/person-m-12.webp" alt="Client" class="img-fluid"
                                    loading="lazy">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                            </div>
                            <div class="testimonial-footer">
                                <h5>Ryan Thompson</h5>
                                <span>Business Analyst</span>
                                <div class="quote-icon">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Testimonial Slide -->

                    <!-- Testimonial Slide 5 -->
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="600">
                            <div class="testimonial-header">
                                <img src="assets/img/person/person-f-10.webp" alt="Client" class="img-fluid"
                                    loading="lazy">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <div class="testimonial-body">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                            </div>
                            <div class="testimonial-footer">
                                <h5>Rachel Chen</h5>
                                <span>Project Manager</span>
                                <div class="quote-icon">
                                    <i class="bi bi-chat-quote-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Testimonial Slide -->

                </div>

                <div class="swiper-navigation">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Offer Cards Section -->
    <section id="offer-cards" class="offer-cards section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Offers</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="offer-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="offer-badge">
                            <span class="discount">25% OFF</span>
                        </div>
                        <div class="offer-image">
                            <img src="assets/img/hotel/showcase-3.webp" alt="Weekend Getaway" class="img-fluid">
                        </div>
                        <div class="offer-content">
                            <h3>Weekend Getaway</h3>
                            <p>Escape the ordinary with our exclusive weekend package. Includes complimentary breakfast and
                                late checkout until 2 PM.</p>
                            <div class="offer-details">
                                <div class="price-info">
                                    <span class="original-price">$299</span>
                                    <span class="offer-price">$224</span>
                                    <span class="per-night">per night</span>
                                </div>
                                <div class="validity">
                                    <i class="bi bi-calendar-check"></i>
                                    <span>Valid until Dec 31, 2024</span>
                                </div>
                            </div>
                            <a href="#" class="btn-book">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="offer-card featured" data-aos="zoom-in" data-aos-delay="300">
                        <div class="offer-badge">
                            <span class="discount">BEST VALUE</span>
                        </div>
                        <div class="offer-image">
                            <img src="assets/img/hotel/showcase-7.webp" alt="Extended Stay Deal" class="img-fluid">
                        </div>
                        <div class="offer-content">
                            <h3>Extended Stay Deal</h3>
                            <p>Stay 5 nights or more and enjoy significant savings. Perfect for business travelers and
                                extended vacations with premium amenities.</p>
                            <div class="offer-details">
                                <div class="price-info">
                                    <span class="original-price">$189</span>
                                    <span class="offer-price">$149</span>
                                    <span class="per-night">per night</span>
                                </div>
                                <div class="validity">
                                    <i class="bi bi-calendar-check"></i>
                                    <span>Book by Jan 15, 2025</span>
                                </div>
                            </div>
                            <a href="#" class="btn-book">Reserve Today</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="offer-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="offer-badge">
                            <span class="discount">EARLY BIRD</span>
                        </div>
                        <div class="offer-image">
                            <img src="assets/img/hotel/showcase-11.webp" alt="Advance Booking" class="img-fluid">
                        </div>
                        <div class="offer-content">
                            <h3>Advance Booking</h3>
                            <p>Plan ahead and save more! Book your stay 30 days in advance and enjoy exclusive rates with
                                free cancellation up to 7 days.</p>
                            <div class="offer-details">
                                <div class="price-info">
                                    <span class="original-price">$249</span>
                                    <span class="offer-price">$199</span>
                                    <span class="per-night">per night</span>
                                </div>
                                <div class="validity">
                                    <i class="bi bi-calendar-check"></i>
                                    <span>Available year-round</span>
                                </div>
                            </div>
                            <a href="#" class="btn-book">Book Early</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="offer-banner" data-aos="fade-up" data-aos-delay="500">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="banner-content">
                                    <h2>Limited Time Offer</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <div class="banner-action">
                                    <div class="countdown" data-count="2025/12/15">
                                        <div>
                                            <span class="count-days"></span>
                                            <label>Days</label>
                                        </div>
                                        <div>
                                            <span class="count-hours"></span>
                                            <label>Hours</label>
                                        </div>
                                        <div>
                                            <span class="count-minutes"></span>
                                            <label>Minutes</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-cta">Claim Offer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Offer Cards Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta-content text-center">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="text-content">
                                    <h2>Experience Luxury Like Never Before</h2>
                                    <p class="lead mb-0">Book your dream getaway today and enjoy exclusive amenities,
                                        world-class service, and unforgettable memories. Limited availability for our
                                        premium suites.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="cta-action" data-aos="zoom-in" data-aos-delay="200">
                                    <a href="booking.html" class="btn btn-cta">
                                        <i class="bi bi-calendar-check me-2"></i>
                                        Book Now
                                    </a>
                                    <div class="offer-badge" data-aos="fade-up" data-aos-delay="300">
                                        <span>Save up to 25%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Free Cancellation</h5>
                        <p>Cancel up to 24 hours before check-in</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5>Best Rate Guarantee</h5>
                        <p>We'll match any lower rate you find</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock customer assistance</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-lock"></i>
                        </div>
                        <h5>Secure Booking</h5>
                        <p>Your payment information is protected</p>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Events Cards Section -->
    <section id="events-cards" class="events-cards section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Events</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="event-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="event-image">
                            <img src="assets/img/hotel/event-6.webp" alt="Wedding Celebration" class="img-fluid">
                            <div class="event-overlay">
                                <h4>Elegant Weddings</h4>
                                <p>Create unforgettable moments in our stunning ballroom</p>
                                <a href="events.html" class="event-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Event Card -->

                <div class="col-lg-4 col-md-6">
                    <div class="event-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="event-image">
                            <img src="assets/img/hotel/event-3.webp" alt="Corporate Events" class="img-fluid">
                            <div class="event-overlay">
                                <h4>Corporate Meetings</h4>
                                <p>Professional spaces for productive business gatherings</p>
                                <a href="events.html" class="event-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Event Card -->

                <div class="col-lg-4 col-md-6">
                    <div class="event-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="event-image">
                            <img src="assets/img/hotel/event-7.webp" alt="Private Celebrations" class="img-fluid">
                            <div class="event-overlay">
                                <h4>Private Celebrations</h4>
                                <p>Intimate venues perfect for special occasions</p>
                                <a href="events.html" class="event-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Event Card -->

                <div class="col-lg-4 col-md-6">
                    <div class="event-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="event-image">
                            <img src="assets/img/hotel/event-2.webp" alt="Conference Facilities" class="img-fluid">
                            <div class="event-overlay">
                                <h4>Conference Facilities</h4>
                                <p>State-of-the-art technology for successful conferences</p>
                                <a href="events.html" class="event-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Event Card -->

                <div class="col-lg-4 col-md-6">
                    <div class="event-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="event-image">
                            <img src="assets/img/hotel/event-9.webp" alt="Social Gatherings" class="img-fluid">
                            <div class="event-overlay">
                                <h4>Social Gatherings</h4>
                                <p>Versatile spaces for memorable social events</p>
                                <a href="events.html" class="event-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Event Card -->

                <div class="col-lg-4 col-md-6">
                    <div class="event-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="event-image">
                            <img src="assets/img/hotel/event-10.webp" alt="Corporate Retreats" class="img-fluid">
                            <div class="event-overlay">
                                <h4>Corporate Retreats</h4>
                                <p>Inspiring environments for team building and planning</p>
                                <a href="events.html" class="event-btn">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Event Card -->

            </div>

        </div>

    </section><!-- /Events Cards Section -->

    <!-- Location Cards Section -->
    <section id="location-cards" class="location-cards section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Location &amp; Activities</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="location-card">
                        <img src="assets/img/hotel/location-1.webp" alt="Local Attractions"
                            class="img-fluid location-image">
                        <div class="location-content">
                            <div class="location-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h4>Museums &amp; Culture</h4>
                            <p>Explore world-class museums and cultural landmarks just minutes from your doorstep. From
                                contemporary art to historical exhibitions.</p>
                            <ul class="nearby-places">
                                <li><i class="bi bi-dot"></i> Metropolitan Museum - 0.8 miles</li>
                                <li><i class="bi bi-dot"></i> Art Gallery District - 1.2 miles</li>
                                <li><i class="bi bi-dot"></i> Cultural Center - 0.5 miles</li>
                            </ul>
                            <a href="location.html" class="explore-btn">Explore Area</a>
                        </div>
                    </div>
                </div><!-- End Location Card -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="location-card">
                        <img src="assets/img/hotel/location-2.webp" alt="Shopping District"
                            class="img-fluid location-image">
                        <div class="location-content">
                            <div class="location-icon">
                                <i class="bi bi-bag-check"></i>
                            </div>
                            <h4>Shopping &amp; Dining</h4>
                            <p>Indulge in premier shopping and culinary experiences. From boutique stores to award-winning
                                restaurants in the entertainment district.</p>
                            <ul class="nearby-places">
                                <li><i class="bi bi-dot"></i> Grand Shopping Mall - 0.3 miles</li>
                                <li><i class="bi bi-dot"></i> Restaurant Row - 0.6 miles</li>
                                <li><i class="bi bi-dot"></i> Night Market - 0.9 miles</li>
                            </ul>
                            <a href="location.html" class="explore-btn">View Restaurants</a>
                        </div>
                    </div>
                </div><!-- End Location Card -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="location-card">
                        <img src="assets/img/hotel/location-10.webp" alt="Business District"
                            class="img-fluid location-image">
                        <div class="location-content">
                            <div class="location-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h4>Business Hub</h4>
                            <p>Strategically located in the heart of the financial district. Perfect for business travelers
                                with easy access to corporate centers.</p>
                            <ul class="nearby-places">
                                <li><i class="bi bi-dot"></i> Convention Center - 0.4 miles</li>
                                <li><i class="bi bi-dot"></i> Financial District - 0.7 miles</li>
                                <li><i class="bi bi-dot"></i> Business Park - 1.1 miles</li>
                            </ul>
                            <a href="location.html" class="explore-btn">Business Services</a>
                        </div>
                    </div>
                </div><!-- End Location Card -->

            </div>

        </div>

    </section><!-- /Location Cards Section -->

    <!-- Gallery Showcase Section -->
    <section id="gallery-showcase" class="gallery-showcase section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="gallery-carousel swiper init-swiper" data-aos="fade-up" data-aos-delay="200">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 3000
              },
              "slidesPerView": 1,
              "spaceBetween": 20,
              "centeredSlides": true,
              "breakpoints": {
                "576": {
                  "slidesPerView": 2,
                  "centeredSlides": false
                },
                "768": {
                  "slidesPerView": 3,
                  "centeredSlides": false
                },
                "992": {
                  "slidesPerView": 4,
                  "centeredSlides": false
                },
                "1200": {
                  "slidesPerView": 5,
                  "centeredSlides": false
                }
              }
            }
          </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-1.webp" alt="Luxurious Suite" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-1.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-5.webp" alt="Modern Lobby" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-5.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-12.webp" alt="Elegant Dining Area" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-12.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-8.webp" alt="Grand Ballroom Setup" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-8.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-15.webp" alt="Relaxing Poolside" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-15.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-3.webp" alt="Cozy Guest Room" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-3.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-18.webp" alt="Spa and Wellness Center" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-18.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-item">
                            <img src="assets/img/hotel/gallery-7.webp" alt="Conference Facilities" class="img-fluid"
                                loading="lazy">
                            <a href="assets/img/hotel/gallery-7.webp" class="gallery-overlay glightbox">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                <a href="gallery.html" class="btn btn-gallery">
                    <i class="bi bi-collection me-2"></i>Discover Our Full Gallery
                </a>
            </div>

        </div>

    </section><!-- /Gallery Showcase Section -->
@endsection
