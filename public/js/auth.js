/* Start JS Logic */
document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("auth-container");
    const registerBtn = document.getElementById("register"); // Desktop toggle btn
    const loginBtn = document.getElementById("login"); // Desktop toggle btn

    // --- Get Form Elements ---
    const loginFormBox = document.querySelector(".form-box.login");
    const registerFormBox = document.querySelector(".form-box.register");

    // --- Mobile Toggle Links ---
    const mobileRegisterLink = document.getElementById("mobile-register-link");
    const mobileLoginLink = document.getElementById("mobile-login-link");

     // --- START: ScrollReveal Code for Auth Page ---

  // Check if ScrollReveal is loaded
  if (typeof ScrollReveal !== "undefined") {
    const srAuth = ScrollReveal({
      origin: "bottom",
      distance: "40px", // Slightly less distance maybe
      duration: 600,
      delay: 100, // Start animations faster on this page
      opacity: 0,
      scale: 0.95, // Add a subtle scale effect
      easing: "cubic-bezier(0.5, 0, 0, 1)",
      reset: false // Only animate once on load
      // No viewFactor needed as elements are visible on load
    });

    // --- Animate Form Elements ---
    srAuth.reveal(".form-box h1", {
      origin: "top",
      distance: "30px",
      delay: 200,
      scale: 1 // Override default scale for heading
    });

    srAuth.reveal(".form-box .input-group", {
      origin: "left",
      distance: "30px",
      interval: 80, // Stagger input fields
      delay: 300,
      scale: 1
    });

    srAuth.reveal(".form-box .forgot-password", {
      delay: 500,
      origin: "bottom",
      distance: "20px",
      scale: 1
    });

    srAuth.reveal(".form-box .form-button", {
      delay: 600,
      scale: 1 // Button scales up from default 0.95
    });

    srAuth.reveal(".form-box .mobile-toggle", {
      delay: 700,
      origin: "bottom",
      distance: "20px",
      scale: 1
    });

    // --- Animate Toggle Panels ---

    srAuth.reveal(".toggle-left h1, .toggle-left p, .toggle-left button", {
      origin: "right", // Left panel content slides from the right
      distance: "40px",
      interval: 100,
      delay: 250, // Start slightly after form H1
      scale: 1
    });

    srAuth.reveal(".toggle-right h1, .toggle-right p, .toggle-right button", {
      origin: "left", // Right panel content slides from the left
      distance: "40px",
      interval: 100,
      delay: 250, // Start slightly after form H1
      scale: 1
    });
  } else {
    console.error("ScrollReveal is not loaded correctly on auth page.");
  }

  // --- END: ScrollReveal Code for Auth Page ---


    // --- Function to handle view switching ---
    const setActiveView = (isRegister) => {
      if (!container) return;

      if (isRegister) {
        container.classList.add("active");
        history.pushState(null, null, "#register"); // Update hash

        // Mobile specific display handling
        if (window.innerWidth <= 768) {
          if (loginFormBox) loginFormBox.style.display = "none";
          if (registerFormBox) registerFormBox.style.display = "flex";
        }
      } else {
        container.classList.remove("active");
        history.pushState(null, null, "#login"); // Update hash

        // Mobile specific display handling
        if (window.innerWidth <= 768) {
          if (loginFormBox) loginFormBox.style.display = "flex";
          if (registerFormBox) registerFormBox.style.display = "none";
        }
      }
    };

    // --- Event Listeners for Desktop Toggle Buttons ---
    if (registerBtn) {
      registerBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent default if it's inside a form
        setActiveView(true);
      });
    }

    if (loginBtn) {
      loginBtn.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent default if it's inside a form
        setActiveView(false);
      });
    }

    // --- Event Listeners for Mobile Toggle Links ---
    if (mobileRegisterLink) {
      mobileRegisterLink.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent hash jump
        setActiveView(true);
      });
    }

    if (mobileLoginLink) {
      mobileLoginLink.addEventListener("click", (e) => {
        e.preventDefault(); // Prevent hash jump
        setActiveView(false);
      });
    }

    // --- Initial Check on Load based on Hash ---
    const checkHash = () => {
      const currentHash = window.location.hash;
      const isRegister = currentHash === "#register";
      // Use setTimeout to ensure styles are applied after initial render
      setTimeout(() => setActiveView(isRegister), 0);
    };

    // --- Responsive Resize Handling ---
    const handleResize = () => {
      // Reset inline display styles when moving *away* from mobile
      if (window.innerWidth > 768) {
        if (loginFormBox) loginFormBox.style.display = "";
        if (registerFormBox) registerFormBox.style.display = "";
      } else {
        // Re-apply correct display based on current state when resizing *into* mobile
        checkHash(); // Re-run the check based on the current hash/active class
      }
    };

    checkHash(); // Check hash on initial load
    window.addEventListener("resize", handleResize); // Adjust display on resize

    // --- Form submission is now handled by Laravel directly ---
    // No JS interference with form submissions
  });
  /* End JS Logic */
