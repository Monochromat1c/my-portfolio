<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Charles Manuel Diestro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-white': '#fcfbfb',
                        'secondary-gray': '#d6d3d5',
                        'dark-purple': '#1b0e1c',
                        'navy-blue': '#2d445d',
                        'accent-red': '#fc3f2a',
                        'accent-green': '#a0b982',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <nav class="bg-dark-purple/80 backdrop-blur-md shadow-lg fixed w-full z-10">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex justify-between items-center py-4">
                <div class="flex space-x-7">
                    <div>
                        <a href="{{ route('home') }}" class="flex items-center">
                            <span class="font-bold text-2xl text-primary-white hover:text-accent-red transition duration-300">CD</span>
                            <span class="font-medium text-primary-white ml-2 hidden sm:inline">Charles Diestro</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('home') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300">Home</a>
                    <a href="{{ route('about') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300">About</a>
                    <a href="{{ route('projects') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300">Projects</a>
                    <a href="{{ route('contact') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300 active">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button text-primary-white">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="hidden mobile-menu md:hidden">
            <ul class="bg-dark-purple/80 backdrop-blur-md border-t border-white/10">
                <li><a href="{{ route('home') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">About</a></li>
                <li><a href="{{ route('projects') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300 active">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="pt-20">
        <!-- Contact Hero Section -->
        <section id="contact-hero" class="bg-dark-purple text-primary-white py-16 relative overflow-hidden">
            <!-- Background image with overlay -->
            <div class="absolute inset-0 z-0">
                <img 
                    src="https://images.unsplash.com/photo-1517134191118-9d595e4c8c2b?q=80&w=2070" 
                    alt="Background" 
                    class="w-full h-full object-cover"
                >
                <div class="absolute inset-0 bg-gradient-to-r from-dark-purple/90 via-navy-blue/80 to-dark-purple/90"></div>
            </div>
            
            <!-- Animated background elements -->
            <div class="absolute inset-0">
                <div class="absolute top-20 left-10 w-64 h-64 bg-accent-red/10 rounded-full mix-blend-overlay filter blur-xl animate-blob"></div>
                <div class="absolute top-40 right-10 w-64 h-64 bg-accent-green/10 rounded-full mix-blend-overlay filter blur-xl animate-blob animation-delay-2000"></div>
                <div class="absolute -bottom-8 left-20 w-64 h-64 bg-navy-blue/10 rounded-full mix-blend-overlay filter blur-xl animate-blob animation-delay-4000"></div>
            </div>

            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <h1 class="text-4xl font-bold mb-4">Get In Touch</h1>
                <p class="text-xl text-accent-red mb-6">Let's Work Together</p>
                <p class="text-secondary-gray max-w-2xl mx-auto">
                    Whether you have a project in mind or just want to connect, I'm always open to discussing new opportunities and ideas.
                </p>
            </div>
        </section>

        <!-- Contact Options -->
        <section id="contact-options" class="py-16 bg-primary-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <h2 class="text-2xl font-bold text-navy-blue mb-6">Contact Information</h2>
                            <div class="space-y-6">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-accent-red/10 rounded-full flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-accent-red"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-navy-blue">Location</h3>
                                        <p class="text-gray-600">Cogon, Panay, Capiz, 5801, Philippines</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-accent-red/10 rounded-full flex items-center justify-center">
                                        <i class="fas fa-envelope text-accent-red"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-navy-blue">Email</h3>
                                        <a href="mailto:charlesdiestro6@gmail.com" class="text-accent-red hover:text-navy-blue transition-colors duration-300">
                                            charlesdiestro6@gmail.com
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-accent-red/10 rounded-full flex items-center justify-center">
                                        <i class="fab fa-github text-accent-red"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-navy-blue">GitHub</h3>
                                        <a href="https://github.com/Monochromat1c" target="_blank" class="text-accent-red hover:text-navy-blue transition-colors duration-300">
                                            @Monochromat1c
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Availability Card -->
                        <div class="bg-white p-8 rounded-lg shadow-lg border-l-4 border-accent-green">
                            <h3 class="text-xl font-semibold text-navy-blue mb-4">Current Availability</h3>
                            <p class="text-gray-600 mb-4">
                                I'm currently available for freelance work and interesting project collaborations.
                                My typical response time is within 24 hours.
                            </p>
                            <div class="flex items-center text-accent-green">
                                <i class="fas fa-circle text-xs mr-2"></i>
                                <span class="font-medium">Available for new projects</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-bold text-navy-blue mb-6">Send a Message</h2>
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6" id="contact-form">
                            @csrf
                            <div>
                                <label class="block text-navy-blue mb-2" for="name">Full Name</label>
                                <input type="text" id="name" name="name" 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-accent-red focus:ring-2 focus:ring-accent-red/20 outline-none transition duration-300 @error('name') border-red-500 @enderror"
                                       placeholder="John Doe"
                                       value="{{ old('name') }}"
                                       required>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-navy-blue mb-2" for="email">Email Address</label>
                                <input type="email" id="email" name="email" 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-accent-red focus:ring-2 focus:ring-accent-red/20 outline-none transition duration-300 @error('email') border-red-500 @enderror"
                                       placeholder="john@example.com"
                                       value="{{ old('email') }}"
                                       required>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-navy-blue mb-2" for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" 
                                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-accent-red focus:ring-2 focus:ring-accent-red/20 outline-none transition duration-300 @error('subject') border-red-500 @enderror"
                                       placeholder="Project Inquiry"
                                       value="{{ old('subject') }}"
                                       required>
                                @error('subject')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-navy-blue mb-2" for="message">Message</label>
                                <textarea id="message" name="message" rows="5" 
                                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-accent-red focus:ring-2 focus:ring-accent-red/20 outline-none transition duration-300 @error('message') border-red-500 @enderror"
                                          placeholder="Your message here..."
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" 
                                    class="w-full bg-accent-red text-white py-3 rounded-lg hover:bg-opacity-90 transition duration-300 transform hover:-translate-y-1 flex items-center justify-center space-x-2">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>

                            @if(session('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                    <span class="block sm:inline">{{ session('success') }}</span>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <span class="block sm:inline">{{ session('error') }}</span>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-16 bg-secondary-gray">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark-purple mb-12 text-center">Frequently Asked Questions</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-navy-blue mb-3">What type of projects do you work on?</h3>
                        <p class="text-gray-600">
                            I specialize in web development projects, including responsive websites and web applications. I'm particularly experienced with Laravel and modern frontend technologies.
                        </p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-navy-blue mb-3">What is your typical response time?</h3>
                        <p class="text-gray-600">
                            I aim to respond to all inquiries within 24 hours. For urgent matters, please indicate
                            this in your message subject line.
                        </p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-navy-blue mb-3">Do you offer maintenance services?</h3>
                        <p class="text-gray-600">
                            Yes, I provide ongoing maintenance and support services for websites and applications
                            I've developed, ensuring they remain up-to-date and secure.
                        </p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-navy-blue mb-3">How do you handle project communication?</h3>
                        <p class="text-gray-600">
                            I maintain clear and regular communication throughout the project via email and scheduled
                            video calls, providing weekly updates on progress and milestones.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section id="cta" class="py-16 bg-dark-purple text-primary-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-6">Ready to Start Your Project?</h2>
                <p class="text-secondary-gray mb-8 max-w-2xl mx-auto">
                    Let's collaborate to bring your ideas to life. I'm here to help you create something amazing.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="https://github.com/Monochromat1c" 
                       target="_blank"
                       class="bg-accent-red hover:bg-accent-red/90 text-white px-8 py-3 rounded-full flex items-center space-x-2 transition duration-300">
                        <i class="fab fa-github"></i>
                        <span>View My Work</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Loading Overlay -->
    <div id="loading-overlay" class="fixed inset-0 bg-dark-purple/50 backdrop-blur-sm hidden items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 border-4 border-accent-red border-t-transparent rounded-full animate-spin mb-4"></div>
                <p class="text-navy-blue font-medium">Sending message...</p>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-dark-purple/50 backdrop-blur-sm hidden items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-4 transform transition-all duration-300 scale-90 opacity-0" id="modal-content">
            <div class="text-center">
                <div class="w-20 h-20 bg-accent-green/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-4xl text-accent-green"></i>
                </div>
                <h3 class="text-2xl font-bold text-navy-blue mb-4">Thank You!</h3>
                <p class="text-gray-600 mb-8">
                    Your message has been successfully sent. I'll get back to you as soon as possible!
                </p>
                <button onclick="closeModal()" 
                        class="bg-accent-red hover:bg-accent-red/90 text-white px-8 py-3 rounded-full transition duration-300">
                    Close
                </button>
            </div>
        </div>
    </div>

    <footer class="bg-navy-blue text-primary-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="opacity-90">&copy; 2024 Charles Manuel Diestro. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu functionality
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        // Close mobile menu when clicking a link
        const mobileLinks = document.querySelectorAll(".mobile-menu a");
        mobileLinks.forEach(link => {
            link.addEventListener("click", () => {
                menu.classList.add("hidden");
            });
        });

        // Modal and Loading functionality
        const modal = document.getElementById('success-modal');
        const modalContent = document.getElementById('modal-content');
        const loadingOverlay = document.getElementById('loading-overlay');

        function showLoading() {
            loadingOverlay.classList.remove('hidden');
            loadingOverlay.classList.add('flex');
        }

        function hideLoading() {
            loadingOverlay.classList.remove('flex');
            loadingOverlay.classList.add('hidden');
        }

        function showModal() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            // Add small delay to trigger animation
            setTimeout(() => {
                modalContent.classList.remove('scale-90', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal() {
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-90', 'opacity-0');
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }

        // Close modal when clicking outside
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Form submission handling
        const form = document.getElementById('contact-form');
        const submitButton = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Disable submit button and show loading
            submitButton.disabled = true;
            showLoading();
            
            try {
                const formData = new FormData(form);
                const response = await fetch('{{ route('contact.submit') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    hideLoading();
                    showModal();
                    form.reset();
                } else {
                    throw new Error(result.message || 'Form submission failed');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Sorry, there was an error sending your message. Please try again.');
            } finally {
                // Re-enable submit button and hide loading
                submitButton.disabled = false;
                hideLoading();
            }
        });

        // Section visibility animation
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html> 