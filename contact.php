<?php include 'partials/header.php'; ?>

<main class="relative bg-gray-50 dark:bg-gray-900 overflow-hidden">

    <!-- 3D Background Canvas -->
    <canvas id="contactBackground" class="absolute inset-0 w-full h-full z-0"></canvas>

    <!-- Overlay (adds slight dark tint to make text readable) -->
    <div class="absolute inset-0 bg-white/70 dark:bg-black/40 backdrop-blur-sm z-10"></div>

    <div class="relative z-20 py-20">
        <!-- Header Section -->
        <section class="text-center mb-16 px-6">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-rose-600">
                Get in Touch
            </h1>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                We’d love to hear from you. Whether you have a question about services, projects, or anything else — our team is ready to answer all your questions.
            </p>
        </section>

        <!-- Contact Info & Form -->
        <section class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-start">

            <!-- Info -->
            <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg relative overflow-hidden" data-aos="fade-right">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent"></div>
                <h2 class="text-2xl font-bold mb-6 relative z-10">Contact Information</h2>
                <ul class="space-y-5 text-gray-700 dark:text-gray-300 relative z-10">
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 text-xl">📍</span>
                        <span>RBDB & Sons Bldg., FS Dizon Rd, Davao City</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 text-xl">📞</span>
                        <span>
                            +63 917 701 0257<br />
                            +63 977 846 9616
                        </span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 text-xl">✉️</span>
                        <span>contact@thermodify.ph</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 text-xl">🕑</span>
                        <span>Mon – Sat: 8AM – 5PM</span>
                    </li>
                </ul>
            </div>

            <!-- Form -->
            <div data-aos="fade-left">
                <form class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-lg space-y-5">

                    <!-- 📝 Initial Screening -->
                    <div>
                        <label for="service-type" class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                            What service are you interested in?
                        </label>
                        <select id="service-type" name="service-type" required
                            class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 transition">
                            <option value="" disabled selected>-- Please select --</option>
                            <option value="solar">☀️ Solar Installation</option>
                            <option value="hvac">❄️ HVAC (Air Conditioning / Ventilation)</option>
                            <option value="fire-protection">🔥 Fire Protection Systems</option>
                            <option value="plumbing">🚰 Plumbing Services</option>
                            <option value="electrical">⚡ Electrical Works</option>
                            <option value="fabrication">🔧 Metal Fabrication</option>
                            <option value="consultation">💬 Consultation / Site Survey</option>
                            <option value="others">📄 Others</option>
                        </select>
                    </div>

                    <!-- 📍 Project Type -->
                    <div>
                        <label for="project-type" class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">
                            What type of project do you have?
                        </label>
                        <div class="grid sm:grid-cols-2 gap-3">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="project-type" value="residential" class="accent-red-500" />
                                <span>🏠 Residential</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="project-type" value="commercial" class="accent-red-500" />
                                <span>🏢 Commercial</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="project-type" value="industrial" class="accent-red-500" />
                                <span>🏭 Industrial</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="project-type" value="government" class="accent-red-500" />
                                <span>🏛 Government</span>
                            </label>
                        </div>
                    </div>

                    <!-- 👤 Contact Info -->
                    <div>
                        <input type="text" placeholder="Your Name" required
                            class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-red-500 transition" />
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email" required
                            class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-red-500 transition" />
                    </div>

                    <!-- 📝 Message -->
                    <div>
                        <textarea placeholder="Your Message" rows="4" required
                            class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-red-500 transition"></textarea>
                    </div>

                    <!-- 🚀 Submit -->
                    <button type="submit"
                        class="w-full bg-red-500 text-white px-6 py-3 rounded-lg font-medium hover:bg-red-600 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </section>

        <!-- Google Map -->
        <section class="mt-20 px-6" data-aos="fade-up">
            <div class="relative max-w-5xl mx-auto rounded-xl shadow-lg overflow-hidden">
                <iframe
                    class="w-full h-80 md:h-96"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.1409867834863!2d125.60783087500258!3d7.073716316903801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96dbf8f78f26d%3A0x1234567890abcdef!2sDavao%20City!5e0!3m2!1sen!2sph!4v1638357641000!5m2!1sen!2sph"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
                <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent pointer-events-none"></div>
            </div>
        </section>
    </div>
</main>

<?php include 'partials/footer.php'; ?>