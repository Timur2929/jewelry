// Main initialization function
document.addEventListener("DOMContentLoaded", function () {
    initNewsletterValidation();
  });
    // ===== NEWSLETTER VALIDATION =====
  function initNewsletterValidation() {
    const newsletterForm = document.querySelector(".newsletter-form");
    const emailInput = document.querySelector(".email-input");
    const formMessage = document.querySelector(".form-message");
  
    if (!newsletterForm || !emailInput) return;
  
    newsletterForm.addEventListener("submit", function (e) {
      e.preventDefault();
  
      const email = emailInput.value.trim();
  
      // Simple email validation
      if (!isValidEmail(email)) {
        showFormError("Пожалуйста, введите корректный email адрес");
        emailInput.classList.add("input-error");
        return;
      }
  
      // Simulate form submission
      showFormSuccess("Спасибо за подписку!");
      emailInput.value = "";
      emailInput.classList.remove("input-error");
  
      // Reset success message after 3 seconds
      setTimeout(() => {
        if (formMessage) {
          formMessage.textContent = "";
          formMessage.classList.remove("success", "error");
        }
      }, 3000);
    });
  
    // Remove error styling when user starts typing again
    emailInput.addEventListener("input", function () {
      this.classList.remove("input-error");
      if (formMessage) {
        formMessage.textContent = "";
        formMessage.classList.remove("error");
      }
    });
  
    function isValidEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  
    function showFormError(message) {
      if (!formMessage) return;
  
      formMessage.textContent = message;
      formMessage.classList.add("error");
      formMessage.classList.remove("success");
    }
  
    function showFormSuccess(message) {
      if (!formMessage) return;
  
      formMessage.textContent = message;
      formMessage.classList.add("success");
      formMessage.classList.remove("error");
    }
  }