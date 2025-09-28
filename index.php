<?php include 'partials/header.php'; ?>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<main class="space-y-24">
    <!-- Hero -->
    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 md:py-24">
        <!-- Floating gradient background -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/20 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/20 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 px-6 items-center">
            <!-- Text -->
            <div class="space-y-6 animate-fadeIn text-center md:text-left" data-aos="fade-right">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">
                    Building
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
                        Sustainable
                    </span><br>
                    Engineering Solutions
                </h1>
                <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 max-w-md mx-auto md:mx-0">
                    HVAC • Solar • Fire Protection • Electrical • Fabrication
                </p>
                <a href="services.php"
                    class="inline-block bg-gradient-to-r from-red-500 to-rose-600 hover:from-rose-600 hover:to-red-600 text-white px-8 py-3 rounded-lg font-semibold shadow-lg transition transform hover:scale-105 hover:shadow-2xl">
                    Explore Services →
                </a>
            </div>

            <!-- 3D Canvas Container -->
            <div class="relative flex justify-center items-center" data-aos="fade-left">
                <!-- Stylish frame behind canvas -->
                <div class="absolute inset-0 bg-gradient-to-tr from-red-500/20 to-transparent rounded-3xl blur-2xl scale-105"></div>

                <!-- Canvas -->
                <canvas id="heroCanvas"
                    class="w-[220px] h-[220px] sm:w-[280px] sm:h-[280px] md:w-[400px] md:h-[400px] rounded-xl shadow-2xl">
                </canvas>
            </div>
        </div>
    </section>



    <!-- Why Choose Us -->
    <!-- Why Choose Us -->
    <section class="relative py-20 overflow-hidden">
        <!-- Floating background blobs -->
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
                Why Choose <span class="text-red-500">Thermodify</span>?
            </h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto mb-14">
                We combine decades of engineering expertise with modern, sustainable solutions that deliver results built to last.
            </p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100"
                    class="group relative p-8 bg-white/70 dark:bg-gray-800/60 rounded-2xl shadow-lg backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">

                    <!-- Gradient ring on hover -->
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-rose-500 opacity-0 group-hover:opacity-100 blur-sm transition duration-500"></div>

                    <div class="relative z-10 flex flex-col items-center space-y-3">
                        <div class="text-5xl transform group-hover:scale-125 transition duration-300">⚡</div>
                        <h3 class="text-xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
                            Expert Engineers
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Decades of combined technical expertise.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200"
                    class="group relative p-8 bg-white/70 dark:bg-gray-800/60 rounded-2xl shadow-lg backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">

                    <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-rose-500 opacity-0 group-hover:opacity-100 blur-sm transition duration-500"></div>

                    <div class="relative z-10 flex flex-col items-center space-y-3">
                        <div class="text-5xl transform group-hover:scale-125 transition duration-300">🏗️</div>
                        <h3 class="text-xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
                            Quality Work
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            ISO-compliant, sustainable, client-focused projects.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300"
                    class="group relative p-8 bg-white/70 dark:bg-gray-800/60 rounded-2xl shadow-lg backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 hover:shadow-2xl transition-transform duration-300 hover:-translate-y-3">

                    <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-rose-500 opacity-0 group-hover:opacity-100 blur-sm transition duration-500"></div>

                    <div class="relative z-10 flex flex-col items-center space-y-3">
                        <div class="text-5xl transform group-hover:scale-125 transition duration-300">🤝</div>
                        <h3 class="text-xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
                            Trusted Partner
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            Long-term success over short-term gains.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <!-- Services Grid -->
    <section class="relative max-w-7xl mx-auto px-6 py-20">
        <!-- Decorative floating gradient blob background -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10"></div>

        <h2 class="text-4xl font-extrabold text-center mb-4 bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
            Our Services
        </h2>
        <p class="text-gray-600 dark:text-gray-300 text-center max-w-2xl mx-auto mb-14">
            We provide end-to-end engineering solutions tailored to your needs — from sustainable energy to precision fabrication.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            $services = [
                ["Air Conditioning", "❄️", "Reliable cooling systems for residential and commercial use."],
                ["Solar Installation", "☀️", "Harness the power of the sun with sustainable solar solutions."],
                ["Metal Fabrication", "🛠️", "Precision fabrication and custom metal works."],
                ["Plumbing", "🚰", "Water supply, drainage, and efficient piping systems."],
                ["Fire Protection", "🔥", "Comprehensive detection and suppression systems."],
                ["Electrical Systems", "⚡", "Safe, efficient, and modern electrical installations."],
                ["Ducting", "🌬️", "Quality ducting systems for effective air distribution."],
                ["Control Systems", "🖥️", "Automation and intelligent control solutions."],
                ["Ventilation", "🌪️", "Clean airflow systems for healthy spaces."],
            ];

            foreach ($services as $s) {
                echo "
            <div class='group relative p-8 bg-white/70 dark:bg-gray-800/70 rounded-2xl shadow-lg overflow-hidden backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 transition-transform duration-300 hover:-translate-y-3 hover:shadow-2xl'>
                
                <!-- Animated Gradient Border on Hover -->
                <div class='absolute inset-0 bg-gradient-to-r from-red-500 to-rose-500 opacity-0 group-hover:opacity-100 blur-sm transition duration-500'></div>
                
                <!-- Content Layer -->
                <div class='relative z-10 flex flex-col items-center text-center space-y-3'>
                    <div class='text-5xl transition-transform duration-300 group-hover:scale-125'>
                        {$s[1]}
                    </div>
                    <h3 class='text-xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600'>
                        {$s[0]}
                    </h3>
                    <p class='text-gray-600 dark:text-gray-300 text-sm'>{$s[2]}</p>
                </div>

                <!-- Decorative Floating Circle -->
                <div class='absolute -top-8 -right-8 w-24 h-24 bg-red-500/10 rounded-full blur-2xl group-hover:scale-125 transition duration-500'></div>
            </div>";
            }
            ?>
        </div>
    </section>


    <!-- Process Section -->
    <section class="relative bg-gray-100 dark:bg-gray-900 py-20 overflow-hidden">
        <!-- Decorative floating gradient blob background -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10"></div>
        <!-- ✨ Animated Gradient Blobs -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-10 left-10 w-72 h-72 bg-red-400/10 rounded-full blur-3xl animate-float-slow"></div>
            <div class="absolute bottom-10 right-20 w-96 h-96 bg-rose-500/10 rounded-full blur-3xl animate-float-slower"></div>
            <div class="absolute -bottom-20 left-1/2 transform -translate-x-1/2 w-80 h-80 bg-red-300/10 rounded-full blur-3xl animate-float"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-8">
                Our <span class="text-red-500">Process</span>
            </h2>

            <?php
            $steps = [
                ["Survey & Design", "HVAC-engineering-system.webp", "We analyze and design tailored solutions."],
                ["Implementation", "vent-system.jpg", "Efficient and safe execution of works."],
                ["Commissioning & Start-up", "rooftop.avif", "Ensure systems run at peak performance."],
                ["Consultation", "installation-featured-min.jpg", "Expert guidance throughout the project."]
            ];

            foreach ($steps as $i => $step) {
                $reverse = $i % 2 == 1 ? "md:flex-row-reverse" : "";
                $stepNumber = $i + 1;

                echo "
            <div class='relative flex flex-col md:flex-row {$reverse} items-center gap-10 md:gap-16 group' data-aos='fade-up' data-aos-delay='" . ($i * 150) . "'>
                
                <!-- Timeline line -->
                <div class='absolute left-1/2 transform -translate-x-1/2 top-0 hidden md:block h-full w-1 bg-gradient-to-b from-red-500 to-transparent opacity-30'></div>

                <!-- Text Section -->
                <div class='flex-1 text-center md:text-left space-y-4 relative'>
                    <div class='flex justify-center md:justify-start'>
                        <div class=\"flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-red-500 to-rose-500 text-white font-bold text-xl shadow-xl group-hover:scale-110 transition\">
                            {$stepNumber}
                        </div>
                    </div>
                    <h3 class='text-2xl font-semibold text-gray-800 dark:text-gray-100'>{$step[0]}</h3>
                    <div class='mx-auto md:mx-0 w-20 h-1 bg-gradient-to-r from-red-500 to-rose-500 rounded-full'></div>
                    <p class='text-gray-600 dark:text-gray-300 max-w-md mx-auto md:mx-0'>{$step[2]}</p>
                </div>

                <!-- Image Section -->
                <div class='flex-1 w-full'>
                    <div class='relative group w-full max-w-[500px] mx-auto overflow-hidden rounded-xl shadow-lg'>
                        <img src='assets/img/{$step[1]}' alt='{$step[0]}'
                            class='w-full h-56 sm:h-64 md:h-72 object-cover transform transition duration-700 group-hover:scale-110'>
                        <div class='absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500'></div>
                    </div>
                </div>
            </div>";
            }
            ?>
        </div>
    </section>

    <!-- Projects Carousel -->
    <section class="relative bg-gray-50 dark:bg-gray-900 py-20 overflow-hidden">
        <!-- Decorative floating gradient blob background -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10"></div>
        <!-- ✨ Animated Gradient Background -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute top-0 left-0 w-72 h-72 bg-red-400/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-500/10 rounded-full blur-3xl animate-float-slow"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 w-80 h-80 bg-red-300/10 rounded-full blur-3xl animate-float-slower"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">
                Featured <span class="text-red-500">Projects</span>
            </h2>

            <div class="relative">
                <div id="projectCarousel" class="flex space-x-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory scroll-smooth pb-6">
                    <?php
                    $projects = [
                        ["solar.webp", "Solar Installation – Davao", "6.6kW residential PV system providing sustainable energy for homes."],
                        ["vent.jpg", "Turbine Ventilation – Malita", "Roof turbine ventilators improving industrial airflow and efficiency."],
                        ["ducting.webp", "Ducting Works – Abreeza", "Commercial mall ducting installation for efficient climate control."]
                    ];

                    foreach ($projects as $project) {
                        echo "
                    <div class='snap-start min-w-[85%] sm:min-w-[60%] md:min-w-[45%] lg:min-w-[30%] bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden group relative transition-transform transform hover:scale-[1.02] hover:shadow-2xl'>
                        <div class='relative h-64 overflow-hidden'>
                            <img src='assets/img/{$project[0]}' alt='{$project[1]}'
                                class='w-full h-full object-cover transform transition duration-700 group-hover:scale-110'>
                            <div class='absolute inset-0 bg-gradient-to-t from-black/70 to-transparent'></div>
                            <div class='absolute bottom-4 left-4 right-4 flex justify-between items-end'>
                                <h3 class='text-xl font-semibold text-white'>{$project[1]}</h3>
                                <a href='projects.php' class='text-white bg-red-500 hover:bg-rose-600 px-4 py-2 rounded-lg text-sm font-medium shadow-md transition opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0'>
                                    View →
                                </a>
                            </div>
                        </div>
                        <div class='p-4 text-gray-600 dark:text-gray-300'>
                            <p>{$project[2]}</p>
                        </div>
                    </div>";
                    }
                    ?>
                </div>

                <!-- Navigation Buttons -->
                <button id="carouselPrev" class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-gray-300 dark:bg-gray-700 p-3 rounded-full shadow-lg hover:bg-red-500 hover:text-white transition">‹</button>
                <button id="carouselNext" class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-gray-300 dark:bg-gray-700 p-3 rounded-full shadow-lg hover:bg-red-500 hover:text-white transition">›</button>
            </div>
        </div>
    </section>

    <!-- ✨ Floating Animation CSS -->
    <style>
        @keyframes float {
            0% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-20px) translateX(15px);
            }

            100% {
                transform: translateY(0) translateX(0);
            }
        }

        @keyframes float-slow {
            0% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(-30px) translateX(-20px);
            }

            100% {
                transform: translateY(0) translateX(0);
            }
        }

        @keyframes float-slower {
            0% {
                transform: translateY(0) translateX(0);
            }

            50% {
                transform: translateY(25px) translateX(-10px);
            }

            100% {
                transform: translateY(0) translateX(0);
            }
        }

        .animate-float {
            animation: float 12s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 18s ease-in-out infinite;
        }

        .animate-float-slower {
            animation: float-slower 24s ease-in-out infinite;
        }
    </style>



</main>

<?php include 'partials/footer.php'; ?>