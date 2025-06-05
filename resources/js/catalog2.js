// Product data
const products = [
    {
      id: 19,
      name: "DIAMOND STUDS",
      price: 14000,
      category: "studs",
      image:
        "https://www.figma.com/design/2YnCTIj4MxzGZWtEYXEQxJ/Jewelry?node-id=212-4&t=sjlR0qUVti8thwgM-4",
    },
    {
      id: 20,
      name: "DANGLING LEAVES",
      price: 26000,
      category: "leaves",
      image:
        "https://www.figma.com/design/2YnCTIj4MxzGZWtEYXEQxJ/Jewelry?node-id=212-7&t=sjlR0qUVti8thwgM-4",
    },
    {
      id: 30,
      name: "LEAF STUDS",
      price: 5000,
      category: "studs",
      image:
        "https://www.figma.com/design/2YnCTIj4MxzGZWtEYXEQxJ/Jewelry?node-id=197-745&t=sjlR0qUVti8thwgM-4",
    },
    
  ];
  








  // Shopping cart
  let cart = [];
  let isCartOpen = false;
  
  // DOM Elements
  document.addEventListener("DOMContentLoaded", function () {
    // Initialize product cards with data attributes and add-to-cart buttons
    initializeProducts();
  
    // Setup event listeners
    setupEventListeners();
  
    // Initialize filter options
    initializeFilters();
  
    // Setup image zoom
    setupImageZoom();
  
    // Setup search functionality
    setupSearch();
  
    // Setup cart functionality
    setupCart();
  });
  
  function initializeProducts() {
    const productCards = document.querySelectorAll(".product-card");
  
    productCards.forEach((card, index) => {
      const product = products[index];
      if (!product) return;
  
      // Add data attributes
      card.setAttribute("data-product-id", product.id);
      card.setAttribute("data-product-category", product.category);
      card.setAttribute("data-product-price", product.price);
  
      // Add add-to-cart button
      const productInfo = card.querySelector(".product-info");
      const addButton = document.createElement("button");
      addButton.className = "add-to-cart-btn";
      addButton.textContent = "В корзину";
      addButton.setAttribute("data-product-id", product.id);
      productInfo.appendChild(addButton);
    });
  }
  
  function setupEventListeners() {
    // Add to cart buttons
    document.querySelectorAll(".add-to-cart-btn").forEach((button) => {
      button.addEventListener("click", function (e) {
        e.stopPropagation();
        const productId = parseInt(this.getAttribute("data-product-id"));
        addToCart(productId);
      });
    });
  
    // Filter price range
    const priceRange = document.getElementById("price-range");
    if (priceRange) {
      priceRange.addEventListener("input", function () {
        document.getElementById("price-value").textContent = this.value + " ₽";
        filterProducts();
      });
    }
  
    // Filter category
    document.querySelectorAll(".category-filter").forEach((filter) => {
      filter.addEventListener("change", filterProducts);
    });
  
    // Clear filters
    const clearFiltersBtn = document.getElementById("clear-filters");
    if (clearFiltersBtn) {
      clearFiltersBtn.addEventListener("click", clearFilters);
    }
  
    // Toggle cart
    const cartIcon = document.querySelector(".cart-icon");
    if (cartIcon) {
      cartIcon.addEventListener("click", toggleCart);
    }
  
    // Close cart button
    const closeCartBtn = document.getElementById("close-cart");
    if (closeCartBtn) {
      closeCartBtn.addEventListener("click", toggleCart);
    }
  
    // Search input
    const searchInput = document.getElementById("search-input");
    if (searchInput) {
      searchInput.addEventListener("input", performSearch);
    }
  }
  
  function initializeFilters() {
    // Get unique categories
    const categories = [...new Set(products.map((product) => product.category))];
  
    // Create category filters
    const filterContainer = document.querySelector(".filter-options");
    if (filterContainer) {
      categories.forEach((category) => {
        const label = document.createElement("label");
        label.className = "category-label";
  
        const input = document.createElement("input");
        input.type = "checkbox";
        input.className = "category-filter";
        input.value = category;
  
        label.appendChild(input);
        label.appendChild(document.createTextNode(category.toUpperCase()));
  
        filterContainer.appendChild(label);
      });
    }
  }
  
  function setupImageZoom() {
    const productImages = document.querySelectorAll(".product-image");
  
    productImages.forEach((image) => {
      // Create zoom container
      const zoomContainer = document.createElement("div");
      zoomContainer.className = "zoom-container";
  
      // Replace image with zoom container
      const parent = image.parentNode;
      parent.insertBefore(zoomContainer, image);
      zoomContainer.appendChild(image);
  
      // Add event listeners for zoom effect
      zoomContainer.addEventListener("mouseenter", function () {
        this.classList.add("zoomed");
      });
  
      zoomContainer.addEventListener("mouseleave", function () {
        this.classList.remove("zoomed");
      });
  
      zoomContainer.addEventListener("mousemove", function (e) {
        const { left, top, width, height } = this.getBoundingClientRect();
        const x = ((e.clientX - left) / width) * 100;
        const y = ((e.clientY - top) / height) * 100;
  
        this.style.setProperty("--x", `${x}%`);
        this.style.setProperty("--y", `${y}%`);
      });
    });
  }
  
  function setupSearch() {
    // Replace search bar with input
    const searchBar = document.querySelector(".search-bar");
    if (searchBar) {
      searchBar.innerHTML = `
        <input type="text" id="search-input" placeholder="Искать" class="search-input">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/aa9207d8c9211535deb3726d7c25ca158894a34ad43ffd586307d239b8e6d0f4?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e" alt="Search icon" class="search-icon">
      `;
    }
  }
  
  function setupCart() {
    // Create cart container
    const cartContainer = document.createElement("div");
    cartContainer.className = "cart-container";
    cartContainer.id = "shopping-cart";
    cartContainer.innerHTML = `
      <div class="cart-header">
        <h3>Корзина</h3>
        <button id="close-cart">&times;</button>
      </div>
      <div class="cart-items"></div>
      <div class="cart-footer">
        <div class="cart-total">Итого: <span id="cart-total-price">0 ₽</span></div>
        <button class="checkout-btn">Оформить заказ</button>
      </div>
    `;
  
    document.body.appendChild(cartContainer);
  
    // Add cart counter to cart icon
    const cartIcon = document.querySelector(".cart-icon");
    if (cartIcon) {
      const cartCounter = document.createElement("span");
      cartCounter.className = "cart-counter";
      cartCounter.id = "cart-counter";
      cartCounter.textContent = "0";
  
      const cartIconWrapper = document.createElement("div");
      cartIconWrapper.className = "cart-icon-wrapper";
  
      const parent = cartIcon.parentNode;
      parent.insertBefore(cartIconWrapper, cartIcon);
      cartIconWrapper.appendChild(cartIcon);
      cartIconWrapper.appendChild(cartCounter);
    }
  }
  
  function addToCart(productId) {
    const product = products.find((p) => p.id === productId);
    if (!product) return;
  
    // Check if product is already in cart
    const existingItem = cart.find((item) => item.id === productId);
  
    if (existingItem) {
      existingItem.quantity += 1;
    } else {
      cart.push({
        id: product.id,
        name: product.name,
        price: product.price,
        image: product.image,
        quantity: 1,
      });
    }
  
    updateCart();
  
    // Show notification
    showNotification(`${product.name} добавлен в корзину`);
  }
  
  function removeFromCart(productId) {
    cart = cart.filter((item) => item.id !== productId);
    updateCart();
  }
  
  function updateQuantity(productId, newQuantity) {
    const item = cart.find((item) => item.id === productId);
    if (item) {
      if (newQuantity <= 0) {
        removeFromCart(productId);
      } else {
        item.quantity = newQuantity;
        updateCart();
      }
    }
  }
  
  function updateCart() {
    // Update cart counter
    const cartCounter = document.getElementById("cart-counter");
    if (cartCounter) {
      const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
      cartCounter.textContent = totalItems;
  
      if (totalItems > 0) {
        cartCounter.classList.add("has-items");
      } else {
        cartCounter.classList.remove("has-items");
      }
    }
  
    // Update cart items
    const cartItemsContainer = document.querySelector(".cart-items");
    if (cartItemsContainer) {
      cartItemsContainer.innerHTML = "";
  
      if (cart.length === 0) {
        cartItemsContainer.innerHTML =
          '<p class="empty-cart">Ваша корзина пуста</p>';
      } else {
        cart.forEach((item) => {
          const cartItem = document.createElement("div");
          cartItem.className = "cart-item";
          cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="cart-item-image">
            <div class="cart-item-details">
              <h4 class="cart-item-name">${item.name}</h4>
              <div class="cart-item-price">${item.price} ₽</div>
              <div class="cart-item-quantity">
                <button class="quantity-btn minus" data-product-id="${item.id}">-</button>
                <span>${item.quantity}</span>
                <button class="quantity-btn plus" data-product-id="${item.id}">+</button>
              </div>
            </div>
            <button class="remove-item-btn" data-product-id="${item.id}">&times;</button>
          `;
  
          cartItemsContainer.appendChild(cartItem);
        });
  
        // Add event listeners to quantity buttons
        document.querySelectorAll(".quantity-btn.minus").forEach((btn) => {
          btn.addEventListener("click", function () {
            const productId = parseInt(this.getAttribute("data-product-id"));
            const item = cart.find((item) => item.id === productId);
            if (item) {
              updateQuantity(productId, item.quantity - 1);
            }
          });
        });
  
        document.querySelectorAll(".quantity-btn.plus").forEach((btn) => {
          btn.addEventListener("click", function () {
            const productId = parseInt(this.getAttribute("data-product-id"));
            const item = cart.find((item) => item.id === productId);
            if (item) {
              updateQuantity(productId, item.quantity + 1);
            }
          });
        });
  
        // Add event listeners to remove buttons
        document.querySelectorAll(".remove-item-btn").forEach((btn) => {
          btn.addEventListener("click", function () {
            const productId = parseInt(this.getAttribute("data-product-id"));
            removeFromCart(productId);
          });
        });
      }
    }
  
    // Update total price
    const totalPrice = document.getElementById("cart-total-price");
    if (totalPrice) {
      const total = cart.reduce(
        (sum, item) => sum + item.price * item.quantity,
        0,
      );
      totalPrice.textContent = `${total} ₽`;
    }
  }
  
  function toggleCart() {
    const cart = document.getElementById("shopping-cart");
    if (cart) {
      isCartOpen = !isCartOpen;
  
      if (isCartOpen) {
        cart.classList.add("open");
      } else {
        cart.classList.remove("open");
      }
    }
  }
  
  function filterProducts() {
    const priceRange = document.getElementById("price-range");
    const maxPrice = priceRange ? parseInt(priceRange.value) : 30000;
  
    const selectedCategories = Array.from(
      document.querySelectorAll(".category-filter:checked"),
    ).map((checkbox) => checkbox.value);
  
    const productCards = document.querySelectorAll(".product-card");
  
    productCards.forEach((card) => {
      const price = parseInt(card.getAttribute("data-product-price"));
      const category = card.getAttribute("data-product-category");
  
      const matchesPrice = price <= maxPrice;
      const matchesCategory =
        selectedCategories.length === 0 || selectedCategories.includes(category);
  
      if (matchesPrice && matchesCategory) {
        card.style.display = "";
      } else {
        card.style.display = "none";
      }
    });
  }
  
  function clearFilters() {
    // Reset price range
    const priceRange = document.getElementById("price-range");
    if (priceRange) {
      priceRange.value = priceRange.max;
      document.getElementById("price-value").textContent = priceRange.max + " ₽";
    }
  
    // Uncheck all category filters
    document.querySelectorAll(".category-filter").forEach((checkbox) => {
      checkbox.checked = false;
    });
  
    // Clear search
    const searchInput = document.getElementById("search-input");
    if (searchInput) {
      searchInput.value = "";
    }
  
    // Show all products
    document.querySelectorAll(".product-card").forEach((card) => {
      card.style.display = "";
    });
  }
  
  function performSearch() {
    const searchInput = document.getElementById("search-input");
    if (!searchInput) return;
  
    const searchTerm = searchInput.value.toLowerCase().trim();
  
    const productCards = document.querySelectorAll(".product-card");
  
    productCards.forEach((card) => {
      const productId = parseInt(card.getAttribute("data-product-id"));
      const product = products.find((p) => p.id === productId);
  
      if (product && product.name.toLowerCase().includes(searchTerm)) {
        card.style.display = "";
      } else {
        card.style.display = "none";
      }
    });
  }
  
  function showNotification(message) {
    // Create notification element
    const notification = document.createElement("div");
    notification.className = "notification";
    notification.textContent = message;
  
    document.body.appendChild(notification);
  
    // Show notification
    setTimeout(() => {
      notification.classList.add("show");
    }, 10);
  
    // Hide and remove notification
    setTimeout(() => {
      notification.classList.remove("show");
  
      notification.addEventListener("transitionend", function () {
        notification.remove();
      });
    }, 3000);
  }
  
  document.addEventListener('DOMContentLoaded', function() {
    const cartMenu = document.getElementById('cartMenu');
    const closeBtn = document.getElementById('closeCartMenu');
    const cartIcon = document.querySelector('.cart-icon');

    // Открытие меню при клике на иконку корзины
    cartIcon.addEventListener('click', function() {
        cartMenu.classList.add('active');
    });

    // Закрытие меню при клике на крестик
    closeBtn.addEventListener('click', function() {
        cartMenu.classList.remove('active');
    });
});

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


