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
