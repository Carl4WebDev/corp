<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thermodify</title>

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ AOS CSS & JS (Scroll Animations) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            AOS.init({
                duration: 1000,
                once: true
            });
        });
    </script>

    <!-- ✅ Three.js must come BEFORE your script -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.158.0/build/three.min.js"></script>

    <!-- ✅ Your custom script (deferred) -->
    <script src="assets/js/script.js" defer></script>
</head>


<body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors">
    <header class="bg-white dark:bg-gray-800 shadow sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="text-2xl font-bold">Thermodify</div>
            <!-- Desktop Links -->
            <ul class="hidden md:flex space-x-6">
                <li><a href="index.php" class="hover:text-red-500">Home</a></li>
                <li><a href="about.php" class="hover:text-red-500">About</a></li>
                <li><a href="services.php" class="hover:text-red-500">Services</a></li>
                <li><a href="projects.php" class="hover:text-red-500">Projects</a></li>
                <li><a href="contact.php" class="hover:text-red-500">Contact</a></li>
            </ul>
            <!-- Theme toggle + Mobile Menu Button -->
            <div class="flex items-center gap-2">
                <button id="theme-toggle" class="p-2 rounded bg-gray-200 dark:bg-gray-700">🌙</button>
                <button id="menu-toggle" class="md:hidden p-2 bg-gray-200 dark:bg-gray-700 rounded">☰</button>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-100 dark:bg-gray-800">
            <ul class="flex flex-col text-center py-4 space-y-2">
                <li><a href="index.php" class="hover:text-red-500">Home</a></li>
                <li><a href="about.php" class="hover:text-red-500">About</a></li>
                <li><a href="services.php" class="hover:text-red-500">Services</a></li>
                <li><a href="projects.php" class="hover:text-red-500">Projects</a></li>
                <li><a href="contact.php" class="hover:text-red-500">Contact</a></li>

            </ul>
        </div>
    </header>