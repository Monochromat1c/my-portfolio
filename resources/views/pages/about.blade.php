<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Charles Manuel Diestro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Copy the entire Tailwind config from index.html -->
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
                    <a href="{{ route('about') }}" class="nav-link py-2 px-3 text-primary-white hover:text-accent-red transition duration-300 active">About</a>
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
                <li><a href="{{ route('home') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300 active">About</a></li>
                <li><a href="{{ route('projects') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link block text-sm px-6 py-4 text-primary-white hover:text-accent-red transition duration-300">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="pt-20">
        <!-- About Hero Section -->
        <section id="about-hero" class="bg-dark-purple text-primary-white py-16 relative overflow-hidden">
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

            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="order-2 md:order-1">
                        <h1 class="text-4xl font-bold mb-4">Charles Manuel Diestro</h1>
                        <p class="text-xl text-accent-red mb-4">Web Developer & BSIT Student</p>
                        <p class="text-secondary-gray leading-relaxed mb-6">
                            Passionate about creating elegant and functional web solutions. Currently focused on full-stack development
                            with expertise in modern web technologies and frameworks.
                        </p>
                        <div class="flex space-x-4">
                            <a href="https://github.com/Monochromat1c" target="_blank" 
                               class="bg-accent-red hover:bg-accent-red/90 text-white px-6 py-2 rounded-full flex items-center space-x-2 transition duration-300">
                                <i class="fab fa-github"></i>
                                <span>GitHub</span>
                            </a>
                            <a href="contact.html" 
                               class="border-2 border-accent-red text-accent-red hover:bg-accent-red hover:text-white px-6 py-2 rounded-full flex items-center space-x-2 transition duration-300">
                                <i class="fas fa-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 flex justify-center">
                        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full border-4 border-accent-red shadow-lg overflow-hidden">
                            <img src="{{ asset('img/self-portrait/self.jpg') }}" 
                                 alt="Charles Manuel Diestro" 
                                 class="w-full h-full object-cover"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="py-16 bg-primary-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark-purple mb-12 text-center">Education & Achievements</h2>
                <div class="space-y-8">
                    <!-- Current Education -->
                    <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-accent-red">
                        <div class="flex flex-wrap justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-semibold text-navy-blue">Bachelor of Science in Information Technology</h3>
                                <p class="text-accent-red">Filamer Christian University</p>
                            </div>
                            <span class="text-sm text-navy-blue bg-secondary-gray/30 px-3 py-1 rounded-full">2021 - Present</span>
                        </div>
                        <ul class="list-disc list-inside text-navy-blue space-y-2 ml-4">
                            <li>Major in Web Development</li>
                            <li>Created an Asset Management System for the University as a Capstone Project</li>
                        </ul>
                    </div>

                    <!-- Certifications -->
                    <div class="bg-white p-6 rounded-lg shadow-lg border-l-4 border-accent-green">
                        <h3 class="text-xl font-semibold text-navy-blue mb-4">Certifications & Training</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-secondary-gray/10 rounded-lg">
                                <div class="flex items-center space-x-3 mb-2">
                                    <i class="fas fa-certificate text-accent-red"></i>
                                    <h4 class="font-medium text-navy-blue">Web Development Fundamentals</h4>
                                </div>
                                <p class="text-sm text-gray-600">freeCodeCamp - 2022</p>
                            </div>
                            <div class="p-4 bg-secondary-gray/10 rounded-lg">
                                <div class="flex items-center space-x-3 mb-2">
                                    <i class="fas fa-certificate text-accent-red"></i>
                                    <h4 class="font-medium text-navy-blue">JavaScript Algorithms</h4>
                                </div>
                                <p class="text-sm text-gray-600">freeCodeCamp - 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section with Detailed Breakdown -->
        <section id="skills" class="py-16 bg-secondary-gray">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark-purple mb-12 text-center">Technical Expertise</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Frontend Development -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-navy-blue mb-6 flex items-center">
                            <i class="fas fa-code text-accent-red mr-3"></i>
                            Frontend Development
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-navy-blue">HTML5 & CSS3</span>
                                    <span class="text-accent-red">85%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-accent-red h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-navy-blue">JavaScript</span>
                                    <span class="text-accent-red">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-accent-red h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-navy-blue">Tailwind CSS</span>
                                    <span class="text-accent-red">80%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-accent-red h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend Development -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-navy-blue mb-6 flex items-center">
                            <i class="fas fa-server text-accent-red mr-3"></i>
                            Backend Development
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-navy-blue">PHP</span>
                                    <span class="text-accent-red">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-accent-red h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-navy-blue">Laravel</span>
                                    <span class="text-accent-red">70%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-accent-red h-2 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-1">
                                    <span class="text-navy-blue">MySQL</span>
                                    <span class="text-accent-red">75%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-accent-red h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Development Tools -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-navy-blue mb-6 flex items-center">
                            <i class="fas fa-tools text-accent-red mr-3"></i>
                            Development Tools
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center space-x-2">
                                <i class="fab fa-github text-accent-red"></i>
                                <span class="text-navy-blue">Git & GitHub</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-code-branch text-accent-red"></i>
                                <span class="text-navy-blue">Version Control</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-terminal text-accent-red"></i>
                                <span class="text-navy-blue">Command Line</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-bug text-accent-red"></i>
                                <span class="text-navy-blue">Debugging</span>
                            </div>
                        </div>
                    </div>

                    <!-- Soft Skills -->
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-navy-blue mb-6 flex items-center">
                            <i class="fas fa-users text-accent-red mr-3"></i>
                            Soft Skills
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-secondary-gray/10 p-3 rounded-lg text-center">
                                <i class="fas fa-comments text-accent-red mb-2"></i>
                                <p class="text-navy-blue">Communication</p>
                            </div>
                            <div class="bg-secondary-gray/10 p-3 rounded-lg text-center">
                                <i class="fas fa-tasks text-accent-red mb-2"></i>
                                <p class="text-navy-blue">Problem Solving</p>
                            </div>
                            <div class="bg-secondary-gray/10 p-3 rounded-lg text-center">
                                <i class="fas fa-users-cog text-accent-red mb-2"></i>
                                <p class="text-navy-blue">Team Work</p>
                            </div>
                            <div class="bg-secondary-gray/10 p-3 rounded-lg text-center">
                                <i class="fas fa-lightbulb text-accent-red mb-2"></i>
                                <p class="text-navy-blue">Creativity</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interests Section -->
        <section id="interests" class="py-16 bg-primary-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-dark-purple mb-12 text-center">Interests & Activities</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:transform hover:scale-105 transition duration-300">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-laptop-code text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Web Development</h3>
                        <p class="text-sm text-gray-600">Building modern web applications</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:transform hover:scale-105 transition duration-300">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-book text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Continuous Learning</h3>
                        <p class="text-sm text-gray-600">Exploring new technologies</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:transform hover:scale-105 transition duration-300">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-puzzle-piece text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Problem Solving</h3>
                        <p class="text-sm text-gray-600">Tackling complex challenges</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:transform hover:scale-105 transition duration-300">
                        <div class="w-16 h-16 bg-accent-red/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-2xl text-accent-red"></i>
                        </div>
                        <h3 class="font-semibold text-navy-blue mb-2">Community</h3>
                        <p class="text-sm text-gray-600">Contributing to tech community</p>
                    </div>
                </div>
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