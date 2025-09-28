<?php include 'partials/header.php'; ?>

<main class="max-w-7xl mx-auto px-6 py-20 space-y-24">
    <!-- Decorative floating gradient blob background -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-red-500/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-rose-400/10 rounded-full blur-3xl -z-10"></div>

    <!-- Title -->
    <header class="text-center space-y-4">
        <h1 class="text-4xl sm:text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
            About Thermodify
        </h1>
        <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
            A trusted partner in sustainable engineering solutions across the Philippines.
        </p>
    </header>

    <!-- Mission / Vision / Quality -->
    <section class="grid md:grid-cols-3 gap-8">
        <?php
        $cards = [
            ["Mission", "Provide sustainable, high-quality engineering services that elevate communities."],
            ["Vision", "Be a nationwide leader in innovation, sustainability, and engineering excellence."],
            ["Quality Policy", "ISO-aligned systems with a commitment to continuous improvement and client satisfaction."]
        ];

        foreach ($cards as $i => $card) {
            echo "
      <div class='relative bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 text-center transform transition duration-300 hover:-translate-y-2 hover:shadow-2xl group'>
        <div class=\"absolute inset-0 rounded-2xl bg-gradient-to-r from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition\"></div>
        <div class='text-4xl mb-4'>" . ($i == 0 ? "🚀" : ($i == 1 ? "🌄" : "🏅")) . "</div>
        <h2 class='text-2xl font-bold mb-3 text-gray-800 dark:text-gray-100'>{$card[0]}</h2>
        <p class='text-gray-600 dark:text-gray-300 text-sm'>{$card[1]}</p>
      </div>
      ";
        }
        ?>
    </section>

    <!-- Timeline -->
    <section>
        <h2 class="text-3xl font-bold text-center mb-12">
            Our <span class="text-red-500">Journey</span>
        </h2>

        <div class="relative">
            <!-- Timeline line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gray-300 dark:bg-gray-700"></div>

            <!-- Timeline items -->
            <div class="space-y-12">
                <?php
                $timeline = [
                    ["2010 – Foundation", "Started as a small HVAC contractor in Davao."],
                    ["2015 – Expansion", "Expanded services to Solar, Fire Protection, and Fabrication."],
                    ["2022 – Nationwide Reach", "Now serving projects and communities across the Philippines."]
                ];

                foreach ($timeline as $i => $item) {
                    $isLeft = $i % 2 === 0;
                    echo "
          <div class='relative flex flex-col md:flex-row " . ($isLeft ? "md:justify-start" : "md:justify-end") . " items-center md:items-stretch'>
            <div class='md:w-1/2 " . ($isLeft ? "md:pr-8 md:text-right" : "md:pl-8 md:text-left") . " space-y-2' data-aos='fade-up' data-aos-delay='" . ($i * 150) . "'>
              <h3 class='text-xl font-semibold text-gray-800 dark:text-gray-100'>{$item[0]}</h3>
              <p class='text-gray-600 dark:text-gray-300'>{$item[1]}</p>
            </div>
            <div class='absolute left-1/2 transform -translate-x-1/2 bg-red-500 w-6 h-6 rounded-full shadow-md border-4 border-white dark:border-gray-800'></div>
          </div>
          ";
                }
                ?>
            </div>
        </div>
    </section>

</main>

<?php include 'partials/footer.php'; ?>