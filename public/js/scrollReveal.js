// Check if ScrollReveal is loaded
if (typeof ScrollReveal !== "undefined") {
  // Initialize ScrollReveal with default settings
  const sr = ScrollReveal({
    origin: "bottom",
    distance: "50px",
    duration: 700,
    delay: 200,
    opacity: 0,
    scale: 1,
    easing: "cubic-bezier(0.5, 0, 0, 1)",
    reset: false
  });

  // --- Header Elements (subtle entrance) ---
  // Logo comes from left
  sr.reveal(".logo-container", {
    origin: "left",
    distance: "30px",
    delay: 200,
    duration: 500
  });
  // Nav links come from top, staggered
  sr.reveal(".nav-container nav ul li", {
    origin: "top",
    distance: "20px",
    interval: 100,
    delay: 300,
    duration: 400
  });
  // Auth buttons come from right
  sr.reveal(".auth-buttons", {
    origin: "right",
    distance: "30px",
    delay: 400,
    duration: 500
  });

  // --- Hero Section ---
  sr.reveal(".hero-content h1", {
    origin: "top",
    distance: "40px",
    delay: 300,
    duration: 800
  });
  sr.reveal(".hero-content p", {
    origin: "top",
    distance: "30px",
    delay: 500,
    duration: 700
  });
  // Search bar slides up
  sr.reveal(".search-bar", {
    origin: "bottom",
    distance: "40px",
    delay: 700,
    duration: 700
  });
  // Hero image fades/slides in from the right
  sr.reveal(".hero-image", {
    origin: "right",
    distance: "80px",
    delay: 400,
    duration: 900,
    easing: "ease-out"
  });

  // --- Popular Services Section ---
  sr.reveal(".popular-services h2", { delay: 200 });

  sr.reveal(".service-card", {
    interval: 150,
    distance: "40px",
    origin: "bottom",
    duration: 600,
    delay: 300
  });

  // --- Our Advantages Section ---
  sr.reveal(".advantages-image", {
    origin: "left",
    distance: "60px",
    delay: 300,
    duration: 800
  });
  // Content slides in from the right
  sr.reveal(".advantages-content", {
    origin: "right",
    distance: "60px",
    delay: 400,
    duration: 800
  });
  sr.reveal(".advantages-content h2", { origin: "right", delay: 400 });
  sr.reveal(".advantages-content h3", { origin: "right", delay: 500 });
  sr.reveal(".advantages-content p", { origin: "right", delay: 600 });
  sr.reveal(".advantages-list li", {
    origin: "right",
    delay: 700,
    interval: 100
  });

  // --- Contact Section ---
  // Contact info slides from left
  sr.reveal(".contact-info", {
    origin: "left",
    distance: "60px",
    delay: 300,
    duration: 800
  });
  // Contact form slides from right
  sr.reveal(".contact-form", {
    origin: "right",
    distance: "60px",
    delay: 400,
    duration: 800
  });
  // Map fades/slides up
  sr.reveal(".contact-map", { delay: 500, duration: 900 });

  // --- Footer Section ---
  // Footer columns fade/slide up, staggered
  sr.reveal(".footer-section", {
    interval: 100,
    distance: "30px",
    duration: 500,
    delay: 200
  });
  // Footer bottom fades in last
  sr.reveal(".footer-bottom", { delay: 400, duration: 600 });
} else {
  console.error("ScrollReveal is not loaded correctly.");
}
