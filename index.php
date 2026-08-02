<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Discover the best Morocco tours with our expert guides. Book your desert adventure, city tours, and cultural experiences today.">
    <meta name="keywords" content="Morocco tours, Sahara desert, Marrakech, Fes, Agadir, travel Morocco">
    <meta name="author" content="Morocco Tours">
    <link rel="stylesheet" href="tours.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar">
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <div class="logo">Historicmorocco<span>Tours</span></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li class="dropdown">
                    <a href="#tours" class="dropbtn">Tours <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="#">Tours from Fes <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="fesmerzouga.html">2 day tour from Fes to Merzouga</a>
                                <a href="fesmarrakech.html">3 days desert tour from Fes to Marrakech</a>
                                <a href="fesmarrakech3.html">4 day tour from Fes to Marrakech</a>
                                <a href="fesmarrakech21.html">5 day from Fes to Marrakech desert tour</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#">Tours from Agadir <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="agadir1.html">2 day from Agadir to Sahara Desert</a>
                                <a href="agadir2.html">3day from Agadir to zagoura desert via ouarzazate</a>
                                <a href="agadir3.html">4 day from Agadir to marrackech via ouarzazate and taroudante</a>
                                <a href="agadir4.html">6 days from Agadir to Fez Morocco Imperial Cities</a>
                                <a href="agadir5.html">7 days Morocco desert tours Agadir to Fes via Marrakech</a>
                                <a href="agadir6.html">8 Days from Agadir to the South of Morocco</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#">Tours from Tangier <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="tanger1.html">8 days from Tangier to Marrakech via the Sahara Desert</a>
                                <a href="tanger2.html">10 days from Tangier to Marrakech via Merzouga</a>
                                <a href="tanger3.html">12 Days From Tangier To Marrakech Via Erg Chebbi</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#">Tours from Marrakech <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="marra1.html">2 days from Marrakech to Zagora</a>
                                <a href="marra2.html">2 days from Marrakech to Merzouga</a>
                                <a href="marra3.html">3 days Marrakech to Fes desert tour</a>
                                <a href="marra4.html">3 days from Marrakech to Merzouga Desert</a>
                                <a href="marra5.html">4 days from Marrakech to Fes Desert Tour</a>
                                <a href="marra6.html">4 days Marrakech to Merzouga Desert Tour</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#">Tours from Casablanca <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="casa1.html">2 days from Casablanca to Fes</a>
                                <a href="casa2.html">2 days from Casablanca to Chefchaouen</a>
                                <a href="casa3.html">3 days from Casablanca to Tangier and Chefchaouen</a>
                                <a href="casa4.html">4 days Desert Tour from Casablanca to Sahara Desert</a>
                                <a href="casa5.html">4 days Imperial cities back to Casablanca</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#day-trips" class="dropbtn">Day Trips <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <div class="dropdown-submenu">
                            <a href="#">Day Trips from Fes <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="1fes.html">One day guided tour Fes sightseeing</a>
                                <a href="2fes.html">Day trip from Fes to Volubilis and Meknes</a>
                                <a href="3fes.html">Day Trip from Fes to The Middle Atlas Mountains</a>
                                <a href="4fes.html">Day Trip from Fes to Chefchaouen</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#">Day Trips from Marrakech <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="1marra.html">Day Trip from Marrakech to Ait Benhaddou</a>
                                <a href="2marra.html">Day Trip from Marrakech to Essaouira</a>
                                <a href="3marra.html">Day Trip from Marrakech to the Ouzoud Falls</a>
                                <a href="4marra.html">Day Trip from Marrakech to Ourika Valley</a>
                            </div>
                        </div>
                        <div class="dropdown-submenu">
                            <a href="#">Day Trips from Casablanca <i class="fas fa-chevron-right"></i></a>
                            <div class="dropdown-submenu-content">
                                <a href="1casa.html">Day Trip from Casablanca to Fez</a>
                                <a href="2casa.html">Day Trip from Casablanca to Marrakech</a>
                                <a href="3casa.html">Day Trip from Casablanca to Rabat</a>
                                <a href="4casa.html">Day Trip from Casablanca to Volubilis</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Search tours..." autocomplete="off">
                <i class="fas fa-search search-icon"></i>
                <div class="search-results" id="search-results"></div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Discover the Magic of Morocco</h1>
            <p>All our tours can be modified according to your needs</p>
            <div class="hero-buttons">
                <a href="#tours" class="cta-button">Explore Tours</a>
                <a href="#contact" class="cta-button secondary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about" id="about">
        <div class="section-header">
            <h2>About Us</h2>
            <p>Why choose our tour agency</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <p>We are a premier tour operator specializing in customized Morocco tours. With over 10 years of experience, we create unforgettable journeys through this magical country.</p>
                <p>Our expert guides will take you through imperial cities, vast deserts, and breathtaking mountains, ensuring an authentic Moroccan experience.</p>
                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Local expert guides</li>
                    <li><i class="fas fa-check-circle"></i> Customized itineraries</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 customer support</li>
                    <li><i class="fas fa-check-circle"></i> Best price guarantee</li>
                </ul>
            </div>
            <div class="about-image">
                <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/0a/01/41/58.jpg" alt="Morocco tour guide">
            </div>
        </div>
    </section>

    <!-- Tours Section -->
    <section class="tours" id="tours">
        <div class="section-header">
            <h2>Popular Tours</h2>
            <p>Our most booked experiences</p>
        </div>
        <div class="tour-cards">
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1518544866330-95a3b3a8a131?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Desert Tour">
                    <span class="tour-duration">3 Days</span>
                </div>
                <div class="card-content">
                    <h3>3 Days Desert Tour from Fes to Marrakech</h3>
                    <div class="tour-highlights">
                        <span><i class="fas fa-map-marker-alt"></i> Fes, Merzouga, Marrakech</span>
                        <span><i class="fas fa-bed"></i> Desert Camp</span>
                    </div>
                    <p>Experience the magic of the Sahara Desert on this unforgettable journey through the Atlas Mountains to the golden dunes of Erg Chebbi.</p>
                    <div class="card-footer">
                        <span class="price">From $350</span>
                        <a href="#book" class="cta-button">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1483729558449-99ef09a8c325?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Imperial Cities">
                    <span class="tour-duration">5 Days</span>
                </div>
                <div class="card-content">
                    <h3>5 Day Imperial Cities Tour</h3>
                    <div class="tour-highlights">
                        <span><i class="fas fa-map-marker-alt"></i> Marrakech, Fes, Meknes</span>
                        <span><i class="fas fa-landmark"></i> Historical Sites</span>
                    </div>
                    <p>Discover Marrakech, Fes, Meknes and Rabat in this comprehensive tour of Morocco's most important historical cities.</p>
                    <div class="card-footer">
                        <span class="price">From $600</span>
                        <a href="#book" class="cta-button">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1596386461350-326ccb383e9f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Atlas Mountains">
                    <span class="tour-duration">1 Day</span>
                </div>
                <div class="card-content">
                    <h3>Atlas Mountains & Berber Villages</h3>
                    <div class="tour-highlights">
                        <span><i class="fas fa-map-marker-alt"></i> High Atlas</span>
                        <span><i class="fas fa-hiking"></i> Trekking</span>
                    </div>
                    <p>Explore the stunning landscapes and authentic Berber culture in the High Atlas mountains with local guides.</p>
                    <div class="card-footer">
                        <span class="price">From $200</span>
                        <a href="#book" class="cta-button">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="#all-tours" class="cta-button secondary">View All Tours</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="section-header">
            <h2>What Our Guests Say</h2>
            <p>Hear from our satisfied customers</p>
        </div>
        <div class="testimonial-cards">
            <div class="testimonial">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"The desert tour was absolutely magical! Our guide was knowledgeable and made sure we had the best experience possible."</p>
                <div class="guest-info">
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson">
                    <div>
                        <h4>Sarah Johnson</h4>
                        <span>USA</span>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Excellent service from start to finish. The itinerary was perfectly planned and we saw so much of Morocco in just one week."</p>
                <div class="guest-info">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael Brown">
                    <div>
                        <h4>Michael Brown</h4>
                        <span>UK</span>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>"The cultural experiences were authentic and the accommodations were top-notch. Would definitely book with them again!"</p>
                <div class="guest-info">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emma Garcia">
                    <div>
                        <h4>Emma Garcia</h4>
                        <span>Spain</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Get in touch for more information</p>
        </div>
        <div class="contact-content">
            <form class="contact-form" id="contactForm" action="process_contact.php" method="POST">
                <?php if (isset($_SESSION['errors'])): ?>
                    <div class="form-errors">
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                            <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['errors']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="form-success">
                        <p><?php echo htmlspecialchars($_SESSION['success']); ?></p>
                        <?php unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>                <div class="form-row">
                    <div class="form-group half-width">
                        <input type="tel" id="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group half-width">
                        <input type="text" id="country" name="country" placeholder="Country">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group third-width">
                        <input type="date" id="travel-date" name="travel_date" placeholder="Travel date">
                    </div>
                    <div class="form-group third-width">
                        <input type="number" id="passengers" name="passengers" placeholder="Number of passengers" min="1">
                    </div>
                    <div class="form-group third-width">
                        <input type="number" id="days" name="days" placeholder="Number of days" min="1">
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" placeholder="Your message" required></textarea>
                </div>
                <div class="form-group checkbox-group">
                    <input type="checkbox" id="agree-terms" name="agree_terms" required>
                    <label for="agree-terms">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="cta-button">Send Message</button>
            </form>

                <div class="form-row">
                    <div class="form-group half-width">
                        <input type="text" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group half-width">
                        <input type="email" id="email" name="email" placeholder="Email *" required>
                    </div>
                </div>



            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>123 Tour Street, Marrakech, Morocco</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>+212 612 345 678</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p>info@moroccotours.com</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <p>Monday - Sunday: 8:00 AM - 8:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="modern-footer">
        <div class="footer-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="#d4af37"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="#d4af37"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="#d4af37"></path>
            </svg>
        </div>

        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-col footer-brand">
                    <div class="logo-footer">Morocco<span>Tours</span></div>
                    <p class="footer-description">Creating unforgettable journeys through Morocco's magical landscapes since 2010.</p>

                    <div class="footer-social">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon" aria-label="TripAdvisor"><i class="fab fa-tripadvisor"></i></a>
                    </div>

                    <div class="footer-newsletter">
                        <h4>Subscribe to our newsletter</h4>
                        <form class="newsletter-form">
                            <input type="email" placeholder="Your email address" required>
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Explore</h3>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#about"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#tours"><i class="fas fa-chevron-right"></i> Tours</a></li>
                        <li><a href="#day-trips"><i class="fas fa-chevron-right"></i> Day Trips</a></li>
                        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Popular Tours</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Sahara Desert Adventure</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Atlas Mountains Trek</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Imperial Cities Tour</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Chefchaouen Day Trip</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Contact Us</h3>
                    <div class="footer-contact-info">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Our Office</h4>
                                <p>123 Tour Street, Marrakech, Morocco</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h4>Call Us</h4>
                                <p>+212 612 345 678</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email Us</h4>
                                <p>info@moroccotours.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-legal">
                    <p>&copy; 2023 Morocco Tours. All rights reserved.</p>
                    <div class="legal-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Cookie Policy</a>
                    </div>
                </div>

                <div class="footer-payments">
                    <p>We accept:</p>
                    <div class="payment-methods">
                        <i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-paypal"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="tours.js"></script>
</body>

</html>