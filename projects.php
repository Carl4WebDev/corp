<?php include 'partials/header.php'; ?>

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

    .animate-float {
        animation: float 14s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float-slow 20s ease-in-out infinite;
    }
</style>

<main class="relative bg-gray-50 dark:bg-gray-900 py-20 space-y-24 overflow-hidden">

    <!-- ✨ Floating Gradient Background -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10 animate-float"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10 animate-float-slow"></div>

    <!-- Hero Section with 3D Cube -->
    <section class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6 text-center md:text-left" data-aos="fade-right">
            <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">
                Innovative <span class="text-red-500">Engineering</span> Projects
            </h1>
            <p class="text-gray-600 dark:text-gray-300 max-w-md mx-auto md:mx-0">
                A showcase of sustainable and cutting-edge projects that shape communities across the Philippines.
            </p>
        </div>

        <div class="flex justify-center items-center" data-aos="fade-left">
            <canvas id="projectCanvas" class="w-[250px] h-[250px] sm:w-[300px] sm:h-[300px] md:w-[400px] md:h-[400px]"></canvas>
        </div>
    </section>

    <!-- Project Grid -->
    <section class="max-w-7xl mx-auto px-6 relative">
        <h2 class="text-3xl font-bold text-center mb-12">
            Featured <span class="text-red-500">Projects</span>
        </h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $projects = [
                ["HVAC-1.jpg", "Solar Installation – Davao", "6.6kW PV system for a residential project."],
                ["procurement-featured-min.jpg", "Ventilation System – Malita", "Roof turbine ventilators for industrial airflow."],
                ["hvac_install_blog.jpeg", "Ducting Works – Abreeza", "Commercial mall ducting installation project."],
                ["elect.webp", "Electrical Systems – City Mall", "Reliable power solutions for commercial spaces."],
                ["fireprotection.jpg", "Fire Protection – Samal Resort", "Fire suppression systems ensuring safety."],
                ["plumb.webp", "Plumbing – Business Hub", "Water supply & drainage systems for commercial hubs."]
            ];

            foreach ($projects as $index => $p) {
                $delay = $index * 100;
                echo "
        <div class='relative group bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2 hover:shadow-2xl' data-aos='zoom-in' data-aos-delay='{$delay}'>
          <img src='assets/img/{$p[0]}' alt='{$p[1]}' class='w-full h-52 object-cover group-hover:scale-105 transition duration-500'/>
          <div class='absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition'></div>
          <div class='absolute bottom-0 p-4 text-white'>
            <h3 class='font-semibold text-lg'>{$p[1]}</h3>
            <p class='text-sm opacity-90'>{$p[2]}</p>
          </div>
        </div>
        ";
            }
            ?>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="max-w-5xl mx-auto px-6 relative" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-10">More <span class="text-red-500">Highlights</span></h2>
        <div class="relative">
            <div id="carousel" class="overflow-hidden relative rounded-xl shadow-lg">
                <div id="carouselItems" class="flex transition-transform duration-700">
                    <div class="min-w-full bg-white dark:bg-gray-800 p-8">
                        <h3 class="font-semibold text-xl mb-2 text-red-500">Fire Protection – Samal Resort</h3>
                        <p class="text-gray-600 dark:text-gray-300 max-w-md">
                            Installed advanced fire suppression systems ensuring safety compliance.
                        </p>
                    </div>
                    <div class="min-w-full bg-white dark:bg-gray-800 p-8">
                        <h3 class="font-semibold text-xl mb-2 text-red-500">Plumbing – Business Hub</h3>
                        <p class="text-gray-600 dark:text-gray-300 max-w-md">
                            Complete water supply and drainage installation for a modern business complex.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button id="prevBtn" class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-300 dark:bg-gray-700 hover:bg-red-500 hover:text-white p-3 rounded-full transition">‹</button>
            <button id="nextBtn" class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-300 dark:bg-gray-700 hover:bg-red-500 hover:text-white p-3 rounded-full transition">›</button>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>