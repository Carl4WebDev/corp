// ========================
// 🌙 THEME TOGGLE
// ========================
const themeToggle = document.getElementById("theme-toggle");
const html = document.documentElement;

if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    html.classList.toggle("dark");
    if (html.classList.contains("dark")) {
      themeToggle.textContent = "☀️";
      localStorage.setItem("theme", "dark");
    } else {
      themeToggle.textContent = "🌙";
      localStorage.setItem("theme", "light");
    }
  });

  // Load saved theme
  if (localStorage.getItem("theme") === "dark") {
    html.classList.add("dark");
    themeToggle.textContent = "☀️";
  }
}

// ========================
// 📱 MOBILE MENU TOGGLE
// ========================
const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");

if (menuToggle && mobileMenu) {
  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
}

// ========================
// 🌀 SIMPLE CAROUSEL AUTOPLAY + SWIPE (HOMEPAGE)
// ========================
const carouselItems = document.getElementById("carouselItems");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

if (carouselItems) {
  let idx = 0;
  const total = carouselItems.children.length;

  function updateCarousel() {
    carouselItems.style.transform = `translateX(-${idx * 100}%)`;
  }

  prevBtn?.addEventListener("click", () => {
    idx = (idx - 1 + total) % total;
    updateCarousel();
  });

  nextBtn?.addEventListener("click", () => {
    idx = (idx + 1) % total;
    updateCarousel();
  });

  setInterval(() => {
    idx = (idx + 1) % total;
    updateCarousel();
  }, 5000);

  // Swipe support (mobile)
  let startX = 0;
  carouselItems.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });
  carouselItems.addEventListener("touchend", (e) => {
    let endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) idx = (idx + 1) % total;
    if (endX - startX > 50) idx = (idx - 1 + total) % total;
    updateCarousel();
  });
}

// ========================
// 🌐 THREE.JS SPHERE (HERO)
// ========================
const canvas = document.getElementById("heroCanvas");
if (canvas && typeof THREE !== "undefined") {
  const scene = new THREE.Scene();

  const camera = new THREE.PerspectiveCamera(
    50,
    canvas.clientWidth / canvas.clientHeight,
    0.1,
    1000
  );

  const renderer = new THREE.WebGLRenderer({ canvas, alpha: true });
  renderer.setSize(canvas.clientWidth, canvas.clientHeight);
  renderer.setPixelRatio(window.devicePixelRatio);

  // ✅ Responsive sphere size
  const sphereSize = window.innerWidth < 640 ? 1.5 : 2.5;
  const geometry = new THREE.SphereGeometry(sphereSize, 32, 32);
  const material = new THREE.MeshBasicMaterial({
    color: 0xff3b3b,
    wireframe: true,
  });
  const sphere = new THREE.Mesh(geometry, material);
  scene.add(sphere);

  camera.position.z = 7;

  function animate() {
    requestAnimationFrame(animate);
    sphere.rotation.x += 0.003;
    sphere.rotation.y += 0.004;
    renderer.render(scene, camera);
  }
  animate();

  window.addEventListener("resize", () => {
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;
    renderer.setSize(width, height);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
  });
}

// ========================
// 🏗️ PROJECT CAROUSEL SCROLL BUTTONS
// ========================
const projectCarousel = document.getElementById("projectCarousel");
const prevButton = document.getElementById("carouselPrev");
const nextButton = document.getElementById("carouselNext");

if (projectCarousel && prevButton && nextButton) {
  const scrollAmount = 300;

  prevButton.addEventListener("click", () => {
    projectCarousel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
  });

  nextButton.addEventListener("click", () => {
    projectCarousel.scrollBy({ left: scrollAmount, behavior: "smooth" });
  });
}

// ========================
// 3D Cube (Projects Page)
// ========================
const projectCanvas = document.getElementById("projectCanvas");
if (projectCanvas) {
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(
    50,
    projectCanvas.clientWidth / projectCanvas.clientHeight,
    0.1,
    1000
  );

  const renderer = new THREE.WebGLRenderer({
    canvas: projectCanvas,
    alpha: true,
  });
  renderer.setSize(projectCanvas.clientWidth, projectCanvas.clientHeight);
  renderer.setPixelRatio(window.devicePixelRatio);

  const geometry = new THREE.BoxGeometry(2, 2, 2);
  const material = new THREE.MeshStandardMaterial({
    color: 0xff3b3b, // bright red
    wireframe: true, // ❌ remove wireframe
    metalness: 0.3,
    roughness: 0.4,
    shininess: 1000,
  });

  const cube = new THREE.Mesh(geometry, material);
  scene.add(cube);

  const light = new THREE.PointLight(0xffffff, 1);
  light.position.set(5, 5, 5);
  scene.add(light);

  camera.position.z = 5;

  function animate() {
    requestAnimationFrame(animate);
    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;
    renderer.render(scene, camera);
  }
  animate();

  window.addEventListener("resize", () => {
    const width = projectCanvas.clientWidth;
    const height = projectCanvas.clientHeight;
    renderer.setSize(width, height);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
  });
}

// ========================
// 3D Torus (Services Page)
// ========================
const servicesCanvas = document.getElementById("servicesCanvas");
if (servicesCanvas) {
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(
    50,
    servicesCanvas.clientWidth / servicesCanvas.clientHeight,
    0.1,
    1000
  );

  const renderer = new THREE.WebGLRenderer({
    canvas: servicesCanvas,
    alpha: true,
  });
  renderer.setSize(servicesCanvas.clientWidth, servicesCanvas.clientHeight);
  renderer.setPixelRatio(window.devicePixelRatio);

  // Geometry: Torus (Ring)
  const geometry = new THREE.TorusGeometry(2, 0.5, 16, 100);
  const material = new THREE.MeshPhongMaterial({
    color: 0xff6b6b, // lighter red
    shininess: 100,
  });
  const torus = new THREE.Mesh(geometry, material);
  scene.add(torus);

  // Lights
  const light = new THREE.PointLight(0xffffff, 1.5);
  light.position.set(5, 5, 5);
  scene.add(light);
  const ambient = new THREE.AmbientLight(0xffffff, 0.4);
  scene.add(ambient);

  camera.position.z = 7;

  function animate() {
    requestAnimationFrame(animate);
    torus.rotation.x += 0.01;
    torus.rotation.y += 0.01;
    renderer.render(scene, camera);
  }
  animate();

  window.addEventListener("resize", () => {
    const width = servicesCanvas.clientWidth;
    const height = servicesCanvas.clientHeight;
    renderer.setSize(width, height);
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
  });
}

// ==========================
// 3D Floating Points Background
// ==========================
const contactBg = document.getElementById("contactBackground");
if (contactBg) {
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(
    75,
    contactBg.clientWidth / contactBg.clientHeight,
    0.1,
    1000
  );
  const renderer = new THREE.WebGLRenderer({ canvas: contactBg, alpha: true });
  renderer.setSize(contactBg.clientWidth, contactBg.clientHeight);
  renderer.setPixelRatio(window.devicePixelRatio);

  // Create floating particles
  const particleCount = 250;
  const geometry = new THREE.BufferGeometry();
  const positions = new Float32Array(particleCount * 3);

  for (let i = 0; i < particleCount * 3; i++) {
    positions[i] = (Math.random() - 0.5) * 60; // spread wider
  }

  geometry.setAttribute("position", new THREE.BufferAttribute(positions, 3));

  const material = new THREE.PointsMaterial({
    color: 0xff6b6b, // light red
    size: 0.3,
    transparent: true,
    opacity: 0.8,
  });

  const particles = new THREE.Points(geometry, material);
  scene.add(particles);

  camera.position.z = 15;

  function animate() {
    requestAnimationFrame(animate);
    particles.rotation.y += 0.0008;
    particles.rotation.x += 0.0004;
    renderer.render(scene, camera);
  }

  animate();

  window.addEventListener("resize", () => {
    renderer.setSize(contactBg.clientWidth, contactBg.clientHeight);
    camera.aspect = contactBg.clientWidth / contactBg.clientHeight;
    camera.updateProjectionMatrix();
  });
}
