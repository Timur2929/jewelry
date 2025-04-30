// Main initialization function
document.addEventListener("DOMContentLoaded", function () {
    initImageZoom();
    initQuantitySelector();
    initAccordions();
    initNewsletterValidation();
    initShoppingCart();
    initReviewsSystem();
  });
  
  // ===== IMAGE ZOOM FUNCTIONALITY =====
  function initImageZoom() {
    const productImage = document.querySelector(".product-image");
    const zoomContainer = document.querySelector(".zoom-container");
  
    if (!productImage || !zoomContainer) return;
  
    let isZoomed = false;
  
    productImage.addEventListener("click", function () {
      if (!isZoomed) {
        zoomIn();
      } else {
        zoomOut();
      }
    });
  
    // Close zoom when clicking outside the image
    zoomContainer.addEventListener("click", function (e) {
      if (e.target === zoomContainer) {
        zoomOut();
      }
    });
  
    // Close zoom with Escape key
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && isZoomed) {
        zoomOut();
      }
    });
  
    function zoomIn() {
      const imgSrc = productImage.getAttribute("src");
      zoomContainer.innerHTML = `<div class="zoom-image-wrapper">
        <img src="${imgSrc}" alt="Zoomed product image" class="zoomed-image">
        <button class="zoom-close" aria-label="Close zoom view">×</button>
      </div>`;
  
      zoomContainer.classList.add("active");
      document.body.classList.add("no-scroll");
      isZoomed = true;
  
      // Add event listener to close button
      const closeBtn = zoomContainer.querySelector(".zoom-close");
      closeBtn.addEventListener("click", zoomOut);
  
      // Add pan functionality
      const zoomedImage = zoomContainer.querySelector(".zoomed-image");
      let isDragging = false;
      let startX, startY, initialX, initialY;
  
      zoomedImage.addEventListener("mousedown", startDrag);
      zoomedImage.addEventListener("touchstart", startDrag, { passive: true });
  
      function startDrag(e) {
        isDragging = true;
  
        if (e.type === "touchstart") {
          startX = e.touches[0].clientX;
          startY = e.touches[0].clientY;
        } else {
          startX = e.clientX;
          startY = e.clientY;
        }
  
        initialX = zoomedImage.offsetLeft;
        initialY = zoomedImage.offsetTop;
  
        document.addEventListener("mousemove", drag);
        document.addEventListener("touchmove", drag, { passive: true });
        document.addEventListener("mouseup", stopDrag);
        document.addEventListener("touchend", stopDrag);
      }
  
      function drag(e) 
      {
        if (!isDragging) return;
  
        e.preventDefault();
  
        let currentX, currentY;
  
        if (e.type === "touchmove") 
          {
          currentX = e.touches[0].clientX;
          currentY = e.touches[0].clientY;
        } else {
          currentX = e.clientX;
          currentY = e.clientY;
        }
  
        const diffX = currentX - startX;
        const diffY = currentY - startY;
  
        zoomedImage.style.left = `${initialX + diffX}px`;
        zoomedImage.style.top = `${initialY + diffY}px`;
      }
  
      function stopDrag() 
      {
        isDragging = false;
        document.removeEventListener("mousemove", drag);
        document.removeEventListener("touchmove", drag);
        document.removeEventListener("mouseup", stopDrag);
        document.removeEventListener("touchend", stopDrag);
      }
    }
  
    function zoomOut() {
      zoomContainer.classList.remove("active");
      zoomContainer.innerHTML = "";
      document.body.classList.remove("no-scroll");
      isZoomed = false;
    }
  }
  
  // ===== QUANTITY SELECTOR =====
  function initQuantitySelector() {
    const quantitySelector = document.querySelector(".quantity-selector");
  
    if (!quantitySelector) return;
  
    const decreaseBtn = quantitySelector.querySelector(".quantity-decrease");
    const increaseBtn = quantitySelector.querySelector(".quantity-increase");
    const quantityInput = quantitySelector.querySelector(".quantity-input");
  
    decreaseBtn.addEventListener("click", function () {
      let currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    });
  
    increaseBtn.addEventListener("click", function () {
      let currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
    });
  
    // Prevent non-numeric input
    quantityInput.addEventListener("input", function () 
    {
      this.value = this.value.replace(/[^0-9]/g, "");
      if (this.value === "" || parseInt(this.value) < 1) 
      {
        this.value = 1;
      }
    });
  }
  
  // ===== ACCORDION FUNCTIONALITY =====
  function initAccordions() {
    const accordions = document.querySelectorAll(".product-details-accordion");
  
    accordions.forEach((accordion) => {
      const summary = accordion.querySelector("summary");
      const content = accordion.querySelector(".accordion-content");
  
      // Set initial height to 0 for closed accordions
      if (!accordion.hasAttribute("open")) {
        content.style.height = "0px";
        content.style.opacity = "0";
      }
  
      summary.addEventListener("click", function (e) 
      {
        e.preventDefault();
  
        // Toggle the open state
        if (accordion.hasAttribute("open")) 
        {
          closeAccordion(accordion);
        } 
        else 
        {
          openAccordion(accordion);
        }
      });
    });
  
    function openAccordion(accordion) {
      const content = accordion.querySelector(".accordion-content");
      const icon = accordion.querySelector(".accordion-icon");
  
      // Set open attribute
      accordion.setAttribute("open", "");
  
      // Get the height of the content
      content.style.height = "auto";
      const height = content.scrollHeight;
      content.style.height = "0px";
  
      // Trigger reflow
      content.offsetHeight;
  
      // Animate opening
      content.style.transition = "height 0.3s ease, opacity 0.3s ease";
      content.style.height = height + "px";
      content.style.opacity = "1";
  
      // Rotate icon
      if (icon) {
        icon.style.transform = "rotate(180deg)";
        icon.style.transition = "transform 0.3s ease";
      }
  
      // Remove transition after animation completes
      setTimeout(() => {
        content.style.height = "auto";
      }, 300);
    }
  
    function closeAccordion(accordion) {
      const content = accordion.querySelector(".accordion-content");
      const icon = accordion.querySelector(".accordion-icon");
  
      // Get the current height
      const height = content.scrollHeight;
      content.style.height = height + "px";
  
      // Trigger reflow
      content.offsetHeight;
  
      // Animate closing
      content.style.transition = "height 0.3s ease, opacity 0.3s ease";
      content.style.height = "0px";
      content.style.opacity = "0";
  
      // Rotate icon back
      if (icon) {
        icon.style.transform = "rotate(0deg)";
        icon.style.transition = "transform 0.3s ease";
      }
  
      // Remove open attribute after animation completes
      setTimeout(() => {
        accordion.removeAttribute("open");
      }, 300);
    }
  }
  
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
  
  // ===== SHOPPING CART FUNCTIONALITY =====
  function initShoppingCart() {
    const cartIcon = document.querySelector(".cart-icon");
    const cartDropdown = document.querySelector(".cart-dropdown");
    const addToCartBtn = document.querySelector(".add-to-cart-button");
    const cartItemsList = document.querySelector(".cart-items");
    const cartTotal = document.querySelector(".cart-total-value");
    const cartItemCount = document.querySelector(".cart-item-count");
  
    // Cart data
    let cartItems = [];
  
    if (
      !cartIcon ||
      !cartDropdown ||
      !addToCartBtn ||
      !cartItemsList ||
      !cartTotal
    )
      return;
  
    // Toggle cart dropdown
    cartIcon.addEventListener("click", function (e) {
      e.preventDefault();
      cartDropdown.classList.toggle("active");
  
      // Close cart when clicking outside
      if (cartDropdown.classList.contains("active")) {
        document.addEventListener("click", closeCartOnClickOutside);
      } else {
        document.removeEventListener("click", closeCartOnClickOutside);
      }
    });
  
    function closeCartOnClickOutside(e) {
      if (!cartDropdown.contains(e.target) && e.target !== cartIcon) {
        cartDropdown.classList.remove("active");
        document.removeEventListener("click", closeCartOnClickOutside);
      }
    }
  
    // Add to cart functionality
    addToCartBtn.addEventListener("click", function () {
      const productTitle = document.querySelector(".product-title").textContent;
      const productPrice = document.querySelector(".product-price").textContent;
      const productImage = document
        .querySelector(".product-image")
        .getAttribute("src");
      const quantity =
        parseInt(document.querySelector(".quantity-input").value) || 2;
  
      // Create a unique ID for the product
      const productId = productTitle.toLowerCase().replace(/\s+/g, "-");
  
      // Check if product already exists in cart
      const existingItemIndex = cartItems.findIndex(
        (item) => item.id === productId,
      );
  
      if (existingItemIndex !== -1) {
        // Update quantity if product already exists
        cartItems[existingItemIndex].quantity += quantity;
      } else {
        // Add new product to cart
        cartItems.push({
          id: productId,
          title: productTitle,
          price: productPrice,
          image: productImage,
          quantity: quantity,
        });
      }
  
      // Update cart UI
      updateCartUI();
  
      // Show cart dropdown
      cartDropdown.classList.add("active");
  
      // Show success message
      showCartNotification("Товар добавлен в корзину");
    });
  
    // Update cart UI
    function updateCartUI() {
      // Clear current items
      cartItemsList.innerHTML = "";
  
      if (cartItems.length === 0) {
        cartItemsList.innerHTML =
          '<li class="cart-empty">Ваша корзина пуста</li>';
        cartTotal.textContent = "0 ₽";
        updateCartCount(0);
        return;
      }
  
      // Calculate total
      let total = 0;
      let itemCount = 0;
  
      // Add items to cart
      cartItems.forEach((item) => {
        // Extract numeric price
        const priceValue = parseInt(item.price.replace(/[^\d]/g, ""));
        const itemTotal = priceValue * item.quantity;
        total += itemTotal;
        itemCount += item.quantity;
  
        const cartItemHTML = `
          <li class="cart-item" data-id="${item.id}">
            <img src="${item.image}" alt="${item.title}" class="cart-item-image">
            <div class="cart-item-details">
              <h4 class="cart-item-title">${item.title}</h4>
              <div class="cart-item-price">${item.price} × ${item.quantity}</div>
            </div>
            <button class="cart-item-remove" aria-label="Удалить товар">×</button>
          </li>
        `;
  
        cartItemsList.innerHTML += cartItemHTML;
      });
  
      // Update total
      cartTotal.textContent = `${total} ₽`;
      updateCartCount(itemCount);
  
      // Add event listeners to remove buttons
      const removeButtons = cartItemsList.querySelectorAll(".cart-item-remove");
      removeButtons.forEach((button) => {
        button.addEventListener("click", function () {
          const itemId = this.closest(".cart-item").dataset.id;
          removeCartItem(itemId);
        });
      });
    }
  
    // Remove item from cart
    function removeCartItem(itemId) {
      cartItems = cartItems.filter((item) => item.id !== itemId);
      updateCartUI();
    }
  
    // Update cart count badge
    function updateCartCount(count) {
      if (!cartItemCount) return;
  
      cartItemCount.textContent = count;
      cartItemCount.classList.toggle("active", count > 0);
    }
  
    // Show cart notification
    function showCartNotification(message) {
      // Create notification element if it doesn't exist
      let notification = document.querySelector(".cart-notification");
  
      if (!notification) {
        notification = document.createElement("div");
        notification.className = "cart-notification";
        document.body.appendChild(notification);
      }
  
      // Set message and show notification
      notification.textContent = message;
      notification.classList.add("active");
  
      // Hide notification after 3 seconds
      setTimeout(() => {
        notification.classList.remove("active");
      }, 3000);
    }
  
    // Initialize cart UI
    updateCartUI();
  }
  
  // ===== REVIEWS SYSTEM =====
  function initReviewsSystem() {
    initReviewSorting();
    initReviewForm();
    initLoadMoreReviews();
  }
  
  // Review sorting functionality
  function initReviewSorting() {
    const sortSelect = document.getElementById('sort-select');
    const reviewsList = document.querySelector('.reviews-list');
  
    if (!sortSelect || !reviewsList) return;
  
    // Sample reviews data for demonstration
    const reviews = Array.from(reviewsList.querySelectorAll('.review-card')).map(card => {
      const dateText = card.querySelector('.review-date').textContent;
      const ratingEl = card.querySelector('.stars-filled');
      const ratingWidth = ratingEl ? parseInt(ratingEl.style.width) : 0;
      const rating = Math.round(ratingWidth / 20); // Convert percentage to 1-5 scale
  
      // Parse date from text (format: "DD month YYYY")
      const dateParts = dateText.split(' ');
      const day = parseInt(dateParts[0]);
      const month = getMonthNumber(dateParts[1]);
      const year = parseInt(dateParts[2]);
      const date = new Date(year, month, day);
  
      return {
        element: card,
        date: date,
        rating: rating
      };
    });
  
    // Helper function to convert month name to number
    function getMonthNumber(monthName) {
      const months = {
        'января': 0, 'февраля': 1, 'марта': 2, 'апреля': 3, 'мая': 4, 'июня': 5,
        'июля': 6, 'августа': 7, 'сентября': 8, 'октября': 9, 'ноября': 10, 'декабря': 11
      };
      return months[monthName] || 0;
    }
  
    // Sort reviews based on selected option
    sortSelect.addEventListener('change', function() {
      const sortValue = this.value;
  
      // Sort the reviews array based on the selected criteria
      reviews.sort((a, b) => {
        switch(sortValue) {
          case 'newest':
            return b.date - a.date;
          case 'oldest':
            return a.date - b.date;
          case 'highest':
            return b.rating - a.rating;
          case 'lowest':
            return a.rating - b.rating;
          default:
            return 0;
        }
      });
  
      // Reorder the DOM elements
      reviews.forEach(review => {
        reviewsList.appendChild(review.element);
      });
    });
  }
  
  // Review form functionality
  function initReviewForm() {
    const reviewForm = document.querySelector('.review-form');
    const starInputs = document.querySelectorAll('.star-rating input');
  
    if (!reviewForm) return;
  
    // Handle form submission
    reviewForm.addEventListener('submit', function(e) {
      e.preventDefault();
  
      // Get form values
      const rating = document.querySelector('input[name="rating"]:checked')?.value || '';
      const title = document.getElementById('review-title').value;
      const text = document.getElementById('review-text').value;
      const name = document.getElementById('reviewer-name').value;
      const email = document.getElementById('reviewer-email').value;
  
      // Validate form
      if (!rating) {
        alert('Пожалуйста, выберите рейтинг');
        return;
      }
  
      // Create new review (in a real app, this would be sent to a server)
      const newReview = createReviewElement(name, new Date(), rating, title, text);
  
      // Add the new review to the top of the list
      const reviewsList = document.querySelector('.reviews-list');
      if (reviewsList) {
        reviewsList.insertBefore(newReview, reviewsList.firstChild);
  
        // Update review count
        updateReviewCount(1);
  
        // Reset form
        reviewForm.reset();
  
        // Show success message
        alert('Спасибо за ваш отзыв!');
      }
    });
  
    // Helper function to create a new review element
    function createReviewElement(name, date, rating, title, text) {
      // Format date as "DD month YYYY"
      const day = date.getDate();
      const monthNames = [
        'января', 'февраля', 'марта', 'апреля', 'мая', 'июня',
        'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
      ];
      const month = monthNames[date.getMonth()];
      const year = date.getFullYear();
      const formattedDate = `${day} ${month} ${year}`;
  
      // Calculate star rating width percentage
      const ratingPercentage = (rating / 5) * 100;
  
      // Create review card element
      const reviewCard = document.createElement('article');
      reviewCard.className = 'review-card';
      reviewCard.innerHTML = `
        <div class="review-header">
          <div class="reviewer-info">
            <span class="reviewer-name">${name}</span>
            <span class="review-date">${formattedDate}</span>
          </div>
          <div class="review-rating">
            <div class="stars-container small">
              <div class="stars-filled" style="width: ${ratingPercentage}%"></div>
            </div>
          </div>
        </div>
        <h3 class="review-title">${title}</h3>
        <p class="review-text">${text}</p>
      `;
  
      return reviewCard;
    }
  
    // Helper function to update review count
    function updateReviewCount(increment) {
      const reviewCountEl = document.querySelector('.review-count');
      if (reviewCountEl) {
        const currentCount = parseInt(reviewCountEl.textContent);
        const newCount = currentCount + increment;
        reviewCountEl.textContent = `${newCount} ${getReviewsText(newCount)}`;
      }
    }
  
    // Helper function to get the correct form of "отзыв" based on count
    function getReviewsText(count) {
      const lastDigit = count % 10;
      const lastTwoDigits = count % 100;
  
      if (lastTwoDigits >= 11 && lastTwoDigits <= 19) {
        return 'отзывов';
      }
  
      if (lastDigit === 1) {
        return 'отзыв';
      }
  
      if (lastDigit >= 2 && lastDigit <= 4) {
        return 'отзыва';
      }
  
      return 'отзывов';
    }
  }
  
  // Load more reviews functionality
  function initLoadMoreReviews() {
    const loadMoreButton = document.querySelector('.load-more-button');
  
    if (!loadMoreButton) return;
  
    // Sample additional reviews that would be loaded
    const additionalReviews = [
      {
        name: 'Ирина С.',
        date: '10 февраля 2023',
        rating: 5,
        title: 'Идеальное украшение',
        text: 'Купила себе на день рождения, очень довольна. Изделие выглядит дорого и стильно. Подходит к любому наряду.'
      },
      {
        name: 'Александр П.',
        date: '5 января 2023',
        rating: 4,
        title: 'Хороший подарок',
        text: 'Подарил жене на годовщину. Качество хорошее, но упаковка могла бы быть лучше. В целом рекомендую.'
      }
    ];
  
    let reviewsLoaded = false;
  
    loadMoreButton.addEventListener('click', function() {
      if (reviewsLoaded) {
        // If already loaded, show message
        loadMoreButton.textContent = 'Больше отзывов нет';
        loadMoreButton.disabled = true;
        return;
      }
  
      const reviewsList = document.querySelector('.reviews-list');
  
      // Add additional reviews
      additionalReviews.forEach(review => {
        const ratingPercentage = (review.rating / 5) * 100;
  
        const reviewCard = document.createElement('article');
        reviewCard.className = 'review-card';
        reviewCard.innerHTML = `
          <div class="review-header">
            <div class="reviewer-info">
              <span class="reviewer-name">${review.name}</span>
              <span class="review-date">${review.date}</span>
            </div>
            <div class="review-rating">
              <div class="stars-container small">
                <div class="stars-filled" style="width: ${ratingPercentage}%"></div>
              </div>
            </div>
          </div>
          <h3 class="review-title">${review.title}</h3>
          <p class="review-text">${review.text}</p>
        `;
  
        reviewsList.appendChild(reviewCard);
      });
  
      // Update review count
      const reviewCountEl = document.querySelector('.review-count');
      if (reviewCountEl) {
        const currentText = reviewCountEl.textContent;
        const currentCount = parseInt(currentText);
        const newCount = currentCount + additionalReviews.length;
        reviewCountEl.textContent = `${newCount} отзывов`;
      }
  
      // Mark as loaded
      reviewsLoaded = true;
      loadMoreButton.textContent = 'Показать еще отзывы';
    });
  }
  
  // Update with initial state on first load
  function update() {
    if (pendingUpdate === true) {
      return;
    }
    pendingUpdate = true;
  
    document.querySelectorAll("[space]").forEach((el) => {
      el.setAttribute("space", 79);
    });
  
    destroyAnyNodes();
  
    pendingUpdate = false;
  }
  
  // Variables for the original script
  let context = null;
  let nodesToDestroy = [];
  let pendingUpdate = false;
  
  function destroyAnyNodes() {
    // destroy current view template refs before rendering again
    nodesToDestroy.forEach((el) => el.remove());
    nodesToDestroy = [];
  }
  
  // Update with initial state on first load
  update();
  