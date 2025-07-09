<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dena Kamal D. - Portfolio</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-900 text-white font-sans">
    
    <!-- Subtle Background -->
    <div class="fixed inset-0 bg-gradient-to-br from-slate-900 via-purple-900/20 to-slate-900 pointer-events-none"></div>
    <div class="fixed top-20 right-20 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed bottom-20 left-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative min-h-screen flex flex-col">
        <!-- Header -->
        <header class="py-8 px-6">
            <div class="max-w-6xl mx-auto flex justify-between items-center">
                <div class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                    DKD
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#about" class="hover:text-purple-300 transition-colors">About</a>
                    <a href="#skills" class="hover:text-purple-300 transition-colors">Skills</a>
                    <a href="#contact" class="hover:text-purple-300 transition-colors">Contact</a>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 flex items-center justify-center px-6">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Profile Image -->
                <div class="mb-8">
                    <div class="relative inline-block">
                        <img src="https://i.pravatar.cc/200?u=2206090" alt="Dena Kamal D." 
                             class="w-32 h-32 rounded-full mx-auto border-2 border-purple-400/30 shadow-xl">
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-slate-900"></div>
                    </div>
                </div>

                <!-- Name & Title -->
                <div class="mb-12">
                    <h1 class="text-5xl md:text-6xl font-bold mb-4 text-white">
                        Dena Kamal D.
                    </h1>
                    <p class="text-xl text-purple-300 mb-2">Full Stack Developer</p>
                    <p class="text-gray-400 text-lg">NIM: 2206090</p>
                </div>

                <!-- Info Cards -->
                <div id="about" class="grid md:grid-cols-2 gap-6 mb-16">
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-graduation-cap text-purple-400 text-2xl mr-4"></i>
                            <div class="text-left">
                                <h3 class="font-semibold text-white">Education</h3>
                                <p class="text-gray-300 text-sm">Institut Teknologi Garut</p>
                                <p class="text-purple-300 font-medium">Informatika</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-6 rounded-2xl hover:bg-white/10 transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-code text-blue-400 text-2xl mr-4"></i>
                            <div class="text-left">
                                <h3 class="font-semibold text-white">Specialization</h3>
                                <p class="text-gray-300 text-sm">Web Development</p>
                                <p class="text-blue-300 font-medium">Laravel & React</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills -->
                <div id="skills" class="mb-16">
                    <h2 class="text-3xl font-bold mb-8 bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                        Skills
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all duration-300">
                            <i class="fab fa-laravel text-4xl text-red-500 mb-3"></i>
                            <p class="font-medium">Laravel</p>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all duration-300">
                            <i class="fab fa-react text-4xl text-blue-500 mb-3"></i>
                            <p class="font-medium">React</p>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all duration-300">
                            <i class="fab fa-js-square text-4xl text-yellow-500 mb-3"></i>
                            <p class="font-medium">JavaScript</p>
                        </div>
                        <div class="text-center p-4 bg-white/5 rounded-xl hover:bg-white/10 transition-all duration-300">
                            <i class="fab fa-php text-4xl text-purple-500 mb-3"></i>
                            <p class="font-medium">PHP</p>
                        </div>
                    </div>
                </div>

              
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-6 text-center text-gray-500 text-sm">
            &copy; 2024 Dena Kamal D. All rights reserved.
        </footer>
    </div>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        });
    </script>
</body>
</html>