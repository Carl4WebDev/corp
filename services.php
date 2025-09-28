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

    <!-- ✨ Decorative floating gradient blob background -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10 animate-float"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10 animate-float-slow"></div>

    <!-- Hero Section with 3D Torus -->
    <section class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text -->
        <div class="space-y-6 text-center md:text-left" data-aos="fade-right">
            <h1 class="text-4xl sm:text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600 leading-tight">
                Engineering Services<br />for a <span class="text-red-500">Sustainable Future</span>
            </h1>
            <p class="text-gray-600 dark:text-gray-300 max-w-md mx-auto md:mx-0">
                Delivering high-quality, sustainable, and reliable solutions across HVAC, Solar, Fire Protection, Electrical, and more.
            </p>
        </div>

        <!-- 3D Canvas -->
        <div class="flex justify-center items-center" data-aos="fade-left">
            <canvas id="servicesCanvas" class="w-[250px] h-[250px] sm:w-[300px] sm:h-[300px] md:w-[400px] md:h-[400px]"></canvas>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="max-w-7xl mx-auto px-6 relative">
        <h2 class="text-3xl font-bold text-center mb-12">
            Our <span class="text-red-500">Expertise</span>
        </h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php
            $services = [
                ["Air Conditioning", "❄️", "Cooling & comfort systems."],
                ["Ventilation", "🌬️", "Fresh, clean airflow systems."],
                ["Solar", "☀️", "Sustainable solar solutions."],
                ["Plumbing", "🚰", "Water supply and drainage."],
                ["Fire Protection", "🔥", "Detection and suppression."],
                ["Electrical", "⚡", "Safe, efficient electrical setups."],
                ["Metal Fabrication", "🔩", "Custom fabrication & welding."],
                ["Control Systems", "🖥️", "Automation and controls."],
                ["Consultation", "📞", "Expert engineering advice."],
            ];

            foreach ($services as $index => $s) {
                $delay = $index * 100;
                echo "
        <div class='relative group bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg overflow-hidden transform transition hover:-translate-y-3 hover:shadow-2xl text-center space-y-3' data-aos='zoom-in' data-aos-delay='{$delay}'>
          <div class=\"absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent opacity-0 group-hover:opacity-100 transition\"></div>
          <div class='text-5xl group-hover:scale-110 transition'>{$s[1]}</div>
          <h2 class='text-xl font-semibold text-gray-800 dark:text-gray-100'>{$s[0]}</h2>
          <p class='text-gray-600 dark:text-gray-300 text-sm'>{$s[2]}</p>
        </div>
        ";
            }
            ?>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>