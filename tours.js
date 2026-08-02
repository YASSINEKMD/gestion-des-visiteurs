document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (mobileMenuBtn && navLinks) {
        mobileMenuBtn.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        });
    }

    // Dropdown menus for mobile
    document.querySelectorAll('.dropdown > a').forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const dropdownContent = this.nextElementSibling;
                dropdownContent.classList.toggle('active');
                this.parentElement.classList.toggle('active');
            }
        });
    });

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            if (this.getAttribute('href') !== '#') {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    // Close mobile menu if open
                    if (navLinks && navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        mobileMenuBtn.classList.remove('active');
                    }
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Form validation and submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            // Clear previous errors
            clearErrors();
            
            // Validate form
            if (validateForm()) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                
                try {
                    submitBtn.disabled = true;
                    submitBtn.textContent = "Sending...";
                    
                    // Create FormData object
                    const formData = new FormData(this);
                    
                    // Add additional data if needed
                    formData.append('action', 'submit_contact_form');
                    
                    // Send data via Fetch API
                    const response = await fetch('process_contact.php', {
                        method: 'POST',
                        body: formData
                    });
                    
                    const result = await response.json();
                    
                    if (result.success) {
                        // Show success message
                        showSuccessMessage(result.message);
                        
                        // Reset form if needed
                        if (result.reset_form) {
                            this.reset();
                        }
                    } else {
                        // Show errors
                        showFormErrors(result.errors);
                    }
                } catch (error) {
                    showFormErrors(['An error occurred. Please try again later.']);
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                }
            }
        });
    }

    // Book Now buttons functionality
    document.querySelectorAll('.cta-button[href="#book"]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const tourCard = this.closest('.card');
            const tourName = tourCard.querySelector('h3').textContent;
            
            // Scroll to contact form
            document.querySelector('#contact').scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Initialize search functionality
    initSearch();
    
    // Initialize scroll animations
    initScrollAnimations();
    
    // Initialize sticky header
    initStickyHeader();

    // Helper functions
    function validateForm() {
        let isValid = true;
        
        // Validate name
        const name = document.getElementById('name');
        if (name.value.trim() === '') {
            showError(name, 'Name is required');
            isValid = false;
        }
        
        // Validate email
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value.trim() === '') {
            showError(email, 'Email is required');
            isValid = false;
        } else if (!emailRegex.test(email.value)) {
            showError(email, 'Please enter a valid email');
            isValid = false;
        }
        
        // Validate message
        const message = document.getElementById('message');
        if (message.value.trim() === '') {
            showError(message, 'Message is required');
            isValid = false;
        }
        
        // Validate checkbox
        const agreeTerms = document.getElementById('agree-terms');
        if (!agreeTerms.checked) {
            showError(agreeTerms, 'You must agree to the terms and conditions');
            isValid = false;
        }
        
        return isValid;
    }

    function showError(field, message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        field.classList.add('error-field');
        field.parentNode.insertBefore(errorElement, field.nextSibling);
    }

    function clearErrors() {
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        document.querySelectorAll('.error-field').forEach(el => el.classList.remove('error-field'));
    }

    function showFormErrors(errors) {
        if (!Array.isArray(errors)) return;
        
        const form = document.getElementById('contactForm');
        if (!form) return;
        
        const errorContainer = form.querySelector('.form-errors') || document.createElement('div');
        errorContainer.className = 'form-errors';
        errorContainer.innerHTML = '';
        
        errors.forEach(error => {
            const errorElement = document.createElement('p');
            errorElement.className = 'error-message';
            errorElement.textContent = error;
            errorContainer.appendChild(errorElement);
        });
        
        if (!form.querySelector('.form-errors')) {
            form.prepend(errorContainer);
        }
    }

    function showSuccessMessage(message) {
        const form = document.getElementById('contactForm');
        if (!form) return;
        
        const successContainer = form.querySelector('.form-success') || document.createElement('div');
        successContainer.className = 'form-success';
        successContainer.innerHTML = `<p>${message}</p>`;
        
        if (!form.querySelector('.form-success')) {
            form.prepend(successContainer);
        }
        
        // Scroll to show success message
        successContainer.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    function initSearch() {
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');
        
        if (searchInput && searchResults) {
            const toursData = [
                { title: "2 day tour from Fes to Merzouga", url: "fesmerzouga.html" },
                { title: "3 days desert tour from Fes to Marrakech", url: "fesmarrakech.html" },
                { title: "4 day tour from Fes to Marrakech", url: "fesmarrakech3.html" },
                { title: "5 day from Fes to Marrakech desert tour", url: "fesmarrakech21.html" },
                { title: "Agadir to Sahara Desert Tour", url: "agadirtosahara.html" },
                { title: "Tangier to Chefchaouen Tour", url: "tanger.html" },
                { title: "Marrakech Desert Tour", url: "marrackechtour.html" },
                { title: "Casablanca City Tour", url: "casablanca.html" }
            ];

            searchInput.addEventListener('input', function() {
                const query = this.value.trim().toLowerCase();
                
                if (query.length < 2) {
                    searchResults.innerHTML = '';
                    searchResults.classList.remove('active');
                    return;
                }
                
                const results = toursData.filter(tour => 
                    tour.title.toLowerCase().includes(query)
                );
                
                searchResults.innerHTML = results.length > 0 
                    ? results.map(tour => `
                        <a href="${tour.url}" class="search-result-item">
                            ${tour.title}
                        </a>
                    `).join('')
                    : '<div class="no-results">No tours found</div>';
                    
                searchResults.classList.add('active');
            });
            
            // Close results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.remove('active');
                }
            });
        }
    }

    function initScrollAnimations() {
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.card, .testimonial');
            const windowHeight = window.innerHeight;
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                
                if (elementPosition < windowHeight - 100) {
                    element.classList.add('animate');
                }
            });
        };
        
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);
    }

    function initStickyHeader() {
        const header = document.querySelector('header');
        if (header) {
            window.addEventListener('scroll', function() {
                header.classList.toggle('scrolled', window.scrollY > 100);
            });
        }
    }
});