<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Charles Manuel Diestro</title>
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
                    <a href="{{ route('projects') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300 active">Projects</a>
                    <a href="{{ route('contact') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300">Contact</a>
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
                <li><a href="{{ route('projects') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300 active">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="pt-20">
        <!-- Projects Hero Section -->
        <section id="projects-hero" class="bg-dark-purple text-primary-white py-16 relative overflow-hidden">
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
                <h1 class="text-4xl font-bold mb-4">My Projects</h1>
                <p class="text-xl text-accent-red mb-6">Showcasing My Web Development Journey</p>
                <p class="text-secondary-gray max-w-2xl mx-auto">
                    A collection of my web development projects, demonstrating my skills in frontend and backend development,
                    responsive design, and modern web technologies.
                </p>
            </div>
        </section>

        <!-- Featured Projects -->
        <section id="featured-projects" class="py-16 bg-primary-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark-purple mb-12 text-center">Featured Projects</h2>
                
                <!-- StepStyle Project -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                    <div class="grid md:grid-cols-2 gap-0">
                        <!-- Project Image Side -->
                        <div class="relative group">
                            <img src="{{ asset('img/stepstyle-project/homepage.png') }}" 
                                 alt="StepStyle Project" 
                                 class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 bg-dark-purple/80 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <a href="https://step-style-eight.vercel.app/" 
                                   target="_blank"
                                   class="bg-accent-red hover:bg-accent-red/90 text-white px-6 py-3 rounded-full flex items-center space-x-2 transition duration-300">
                                    <span>View Live Site</span>
                                    <i class="fas fa-external-link-alt ml-2"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Project Details Side -->
                        <div class="p-8">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold text-navy-blue">StepStyle</h3>
                                    <p class="text-accent-red">E-commerce Landing Page</p>
                                </div>
                                <span class="text-sm text-navy-blue bg-secondary-gray/30 px-3 py-1 rounded-full">2024</span>
                            </div>
                            
                            <p class="text-navy-blue mb-6">
                                A modern and responsive landing page for a shoe store, featuring a clean design, smooth animations,
                                and an intuitive user interface. The project showcases my frontend development skills and attention to detail.
                            </p>
                            
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-semibold text-navy-blue mb-2">Key Features:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Responsive design for all devices</li>
                                        <li>Modern UI with smooth animations</li>
                                        <li>Product showcase with hover effects</li>
                                        <li>Performance optimized assets</li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h4 class="font-semibold text-navy-blue mb-2">Technologies Used:</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-accent-green/10 px-3 py-1 rounded-full text-sm text-navy-blue flex items-center">
                                            <i class="fab fa-html5 mr-1"></i>HTML
                                        </span>
                                        <span class="bg-accent-green/10 px-3 py-1 rounded-full text-sm text-navy-blue flex items-center">
                                            <i class="fab fa-css3-alt mr-1"></i>CSS
                                        </span>
                                        <span class="bg-accent-green/10 px-3 py-1 rounded-full text-sm text-navy-blue flex items-center">
                                            <i class="fab fa-js mr-1"></i>JavaScript
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Projects -->
                <div class="bg-white p-6 rounded-xl shadow-lg border-2 border-dashed border-accent-red/20">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-12 h-12 bg-accent-red/10 rounded-full flex items-center justify-center">
                            <i class="fas fa-rocket text-xl text-accent-red"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-navy-blue">More Projects Coming Soon</h3>
                            <p class="text-accent-red">Stay Tuned!</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        I'm currently working on several exciting projects that showcase different technologies 
                        and solve real-world problems. Check back soon to see what's new!
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-accent-green/10 px-3 py-1 rounded-full text-sm text-navy-blue">Web Development</span>
                        <span class="bg-accent-green/10 px-3 py-1 rounded-full text-sm text-navy-blue">Mobile-First Design</span>
                        <span class="bg-accent-green/10 px-3 py-1 rounded-full text-sm text-navy-blue">Modern Technologies</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Development Process -->
        <section id="process" class="py-16 bg-secondary-gray">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark-purple mb-12 text-center">Development Process</h2>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Planning -->
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-lightbulb text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Planning</h3>
                        <p class="text-sm text-gray-600">Requirements gathering and project scope definition</p>
                    </div>

                    <!-- Design -->
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-pencil-ruler text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Design</h3>
                        <p class="text-sm text-gray-600">Creating wireframes and visual designs</p>
                    </div>

                    <!-- Development -->
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-code text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Development</h3>
                        <p class="text-sm text-gray-600">Writing clean, efficient, and maintainable code</p>
                    </div>

                    <!-- Testing -->
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-check-circle text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Testing</h3>
                        <p class="text-sm text-gray-600">Quality assurance and performance optimization</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section id="cta" class="py-16 bg-dark-purple text-primary-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-6">Have a Project in Mind?</h2>
                <p class="text-secondary-gray mb-8 max-w-2xl mx-auto">
                    I'm always interested in new projects and collaborations. Let's work together to bring your ideas to life.
                </p>
                <a href="{{ route('contact') }}" 
                   class="inline-block bg-accent-red hover:bg-accent-red/90 text-white px-8 py-3 rounded-full transition duration-300">
                    Get in Touch
                </a>
            </div>
        </section>
    </main>

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