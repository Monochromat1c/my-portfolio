<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charles Manuel Diestro - Portfolio</title>
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
                    },
                    animation: {
                        'fadeDown': 'fadeDown 1s ease-out',
                        'fadeUp': 'fadeUp 1s ease-out',
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        fadeDown: {
                            '0%': { transform: 'translateY(-20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        fadeUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
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
                    <a href="{{ route('home') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300 active">Home</a>
                    <a href="{{ route('about') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300">About</a>
                    <a href="{{ route('projects') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300">Projects</a>
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
                <li><a href="{{ route('home') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300 active">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">About</a></li>
                <li><a href="{{ route('projects') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen relative overflow-hidden flex items-center">
        <!-- Background image with overlay -->
        <div class="absolute inset-0 z-0">
            <img 
                src="https://images.unsplash.com/photo-1517134191118-9d595e4c8c2b?q=80&w=2070" 
                alt="Background" 
                class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-r from-dark-purple/90 via-navy-blue/80 to-dark-purple/90"></div>
        </div>
        
        <!-- Animated background elements with reduced opacity -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-64 h-64 bg-accent-red/10 rounded-full mix-blend-overlay filter blur-xl animate-blob"></div>
            <div class="absolute top-40 right-10 w-64 h-64 bg-accent-green/10 rounded-full mix-blend-overlay filter blur-xl animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-8 left-20 w-64 h-64 bg-navy-blue/10 rounded-full mix-blend-overlay filter blur-xl animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="text-center">
                <div class="mb-8 animate-fadeDown">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4 text-primary-white">
                        Charles Manuel Diestro
                    </h1>
                    <p class="text-xl md:text-2xl text-secondary-gray">
                        Aspiring Web Developer
                    </p>
                </div>
                <div class="flex justify-center space-x-4 animate-fadeUp">
                    <a href="https://github.com/Monochromat1c" 
                       target="_blank" 
                       class="group bg-accent-red text-primary-white px-8 py-4 rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg backdrop-blur-sm bg-opacity-90">
                        <i class="fab fa-github mr-2 group-hover:animate-bounce"></i>
                        <span>GitHub</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#about" class="text-primary-white hover:text-accent-red transition-colors duration-300">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-secondary-gray py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-dark-purple">About Me</h2>
            
            <!-- About content with grid layout -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <!-- Left column: Personal info -->
                <div class="bg-primary-white p-8 rounded-lg shadow-lg">
                    <div class="flex flex-col sm:flex-row items-center mb-6">
                        <div class="w-32 h-32 mb-4 sm:mb-0 overflow-hidden rounded-full border-4 border-accent-red shadow-lg">
                            <img src="{{ asset('img/self-portrait/self.jpg') }}" 
                                 alt="Charles Manuel Diestro" 
                                 class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="ml-0 sm:ml-6 text-center sm:text-left">
                            <h3 class="text-xl font-semibold text-navy-blue">Charles Manuel Diestro</h3>
                            <p class="text-accent-red">Web Developer</p>
                        </div>
                    </div>
                    <div class="space-y-4 text-navy-blue">
                        <p class="leading-relaxed">
                            I am a fourth-year BSIT student at Filamer Christian University, passionate about creating elegant and functional web solutions. My journey in web development has equipped me with both technical skills and creative problem-solving abilities.
                        </p>
                        <div class="border-l-4 border-accent-red pl-4 italic text-gray-600">
                            "Aspiring to create meaningful digital experiences through innovative web development."
                        </div>
                        <div class="space-y-2">
                            <p class="flex items-center">
                                <i class="fas fa-map-marker-alt text-accent-red w-6"></i>
                                <span>Cogon, Panay, Capiz, 5801, Philippines</span>
                            </p>
                            <p class="flex items-center">
                                <i class="fas fa-graduation-cap text-accent-red w-6"></i>
                                <span>BSIT - Filamer Christian University</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right column: Skills -->
                <div>
                    <h3 class="text-xl font-semibold mb-6 text-navy-blue">Technical Skills</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-html5 text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">HTML</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[85%]"></div>
                            </div>
                        </div>
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-css3-alt text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">CSS</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[80%]"></div>
                            </div>
                        </div>
                        <!-- Repeat for other skills with appropriate progress bars -->
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-php text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">PHP</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[75%]"></div>
                            </div>
                        </div>
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-laravel text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">Laravel</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[70%]"></div>
                            </div>
                        </div>
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-js text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">JavaScript</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[65%]"></div>
                            </div>
                        </div>
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-bootstrap text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">Bootstrap</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[80%]"></div>
                            </div>
                        </div>
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fab fa-github text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">GitHub</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[70%]"></div>
                            </div>
                        </div>
                        <div class="bg-primary-white p-6 rounded-lg shadow-md text-center transform hover:scale-105 transition duration-300 hover:shadow-lg border-b-4 border-accent-red group">
                            <i class="fas fa-database text-3xl mb-3 text-accent-red group-hover:scale-110 transition-transform"></i>
                            <p class="font-medium text-navy-blue">MySQL</p>
                            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                <div class="bg-accent-red h-2 rounded-full w-[75%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-primary-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-dark-purple mb-4">Projects</h2>
                <p class="text-navy-blue">Showcasing my latest web development work</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- StepStyle Project -->
                <a href="https://step-style-eight.vercel.app/" class="group">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-500 hover:shadow-2xl">
                        <!-- Project Image Container -->
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('img/stepstyle-project/homepage.png') }}" 
                                 alt="StepStyle Project" 
                                 class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500"
                            >
                            <!-- Overlay on hover -->
                            <div class="absolute inset-0 bg-gradient-to-t from-dark-purple/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                <div class="p-4 text-white">
                                    <p class="font-medium">View Live Site</p>
                                </div>
                            </div>
                        </div>

                        <!-- Project Details -->
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-xl font-bold text-accent-red group-hover:text-accent-red transition-colors duration-300">StepStyle</h3>
                                <div class="flex space-x-2">
                                    <i class="fas fa-external-link-alt text-navy-blue group-hover:text-accent-red transition-colors duration-300"></i>
                                </div>
                            </div>
                            
                            <p class="text-navy-blue mb-6">A modern and responsive landing page for a shoe store, featuring a clean design and smooth user experience.</p>
                            
                            <!-- Technologies Used -->
                            <div class="space-y-3">
                                <p class="text-sm font-medium text-navy-blue">Technologies Used:</p>
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

                        <!-- Project Footer -->
                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center text-sm text-navy-blue">
                                    <i class="far fa-calendar-alt mr-2"></i>
                                    <span>2024</span>
                                </div>
                                <span class="text-sm text-accent-red group-hover:translate-x-1 transition-transform duration-300 flex items-center">
                                    View Project <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Placeholder for future project -->
                <div class="bg-white/50 rounded-xl border-2 border-dashed border-navy-blue/20 flex items-center justify-center p-8 text-center">
                    <div class="space-y-4">
                        <div class="w-16 h-16 bg-accent-green/10 rounded-full flex items-center justify-center mx-auto">
                            <i class="fas fa-plus text-2xl text-navy-blue"></i>
                        </div>
                        <p class="text-navy-blue font-medium">More Projects Coming Soon</p>
                        <p class="text-sm text-gray-500">Stay tuned for future developments</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-secondary-gray py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-dark-purple">Contact Me</h2>
            <div class="text-center">
                <p class="text-navy-blue mb-4">Feel free to reach out to me for any inquiries or collaboration opportunities.</p>
                <div class="flex justify-center space-x-4">
                    <a href="https://github.com/Monochromat1c" target="_blank" class="text-accent-red hover:text-navy-blue transition duration-300 transform hover:scale-110">
                        <i class="fab fa-github text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy-blue text-primary-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="opacity-90">&copy; 2024 Charles Manuel Diestro. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Intersection Observer for scroll animations
        const sections = document.querySelectorAll('section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        sections.forEach(section => {
            observer.observe(section);
        });

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
    </script>
</body>
</html> 