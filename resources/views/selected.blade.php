<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Heart hides scars - KAMENIKA</title>
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&family=Karla:wght@344;400;435&display=swap"
      rel="stylesheet"
    />
    @vite(['resources/css/selected.css', 'resources/js/selected.js'])
  </head>
  <body>
    <div class="product-page">
      <div class="top-bar"></div>
      <header class="main-header">
        <nav class="main-nav">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b36921aa2204c2f04ac6afc41e2f231f4c6edc6862b5da203206664c836337e?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
            alt="Menu icon"
            class="menu-icon"
          />
          <ul class="nav-links">
            <li><a href="{{ url('/') }}" class="nav-link">Изделия</a></li>
            <li><a href="{{ url('about') }}" class="nav-link">О нас</a></li>
          </ul>
        </nav>
        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/32ea672a13cad6c0fc48e9dc7ad775d4f6d9de4df61a65d0d38e3d0f6b1bd5ef?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
          alt="KAMENIKA logo"
          class="logo"
        />
        <div class="header-actions">
          <div class="search-bar">
            <span class="search-text">Искать</span>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/aa9207d8c9211535deb3726d7c25ca158894a34ad43ffd586307d239b8e6d0f4?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Search icon"
              class="search-icon"
            />
          </div>
          <div class="cart-wrapper">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/a19428d00aee23dbbdcd47dea2b9ed1141c83525db7c327311364d368d7edd51?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Shopping cart"
              class="cart-icon"
            />
            <span class="cart-item-count">0</span>
            <div class="cart-dropdown">
              <h3 class="cart-title">Корзина</h3>
              <ul class="cart-items">
                <li class="cart-empty">Ваша корзина пуста</li>
              </ul>
              <div class="cart-footer">
                <div class="cart-total">
                  Итого: <span class="cart-total-value">0 ₽</span>
                </div>
                <button class="cart-checkout">Оформить заказ</button>
              </div>
            </div>
          </div>
        </div>
      </header>

      <main class="product-content" space="79">
        <div class="product-container">
          <section class="product-image-section">
            <div class="image-container">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/0b9e2c3d83544931b9504c753f1d7517653640016e9bce3030b6897db77e312b?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
                alt="Heart hides scars pendant"
                class="product-image"
                tabindex="0"
                aria-label="Click to zoom"
              />
              <div class="zoom-hint">Нажмите для увеличения</div>
            </div>
            <div class="zoom-container" aria-live="polite"></div>
          </section>
          <section class="product-details-section">
            <div class="product-info">
              <div class="product-text">
                <a href="#" class="back-link">Вернуться к выбору</a>
                <h1 class="product-title">Heart hides scars</h1>
                <p class="product-price">2000 ₽</p>
                <button class="wishlist-button" aria-label="Add to wishlist">
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/e553aa7550b36e54f819d1148c499f1a788a14e06bb2f4c34256a55690e30d73?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
                    alt="Heart icon"
                    class="wishlist-icon"
                  />
                </button>
                <p class="product-description">
                  Сердце - Что же там спрятано... Сердце помнит то, что разум
                  забывает.
                </p>
              </div>
            </div>
            <div class="product-actions">
              <div class="quantity-selector">
                <button
                  class="quantity-decrease"
                  aria-label="Уменьшить количество"
                >
                  -
                </button>
                <input
                  type="text"
                  value="1"
                  class="quantity-input"
                  aria-label="Количество товара"
                  min="1"
                  max="99"
                />
                <button
                  class="quantity-increase"
                  aria-label="Увеличить количество"
                >
                  +
                </button>
              </div>
              <button class="add-to-cart-button">Добавить в корзину</button>
            </div>
            <details class="product-details-accordion">
              <summary class="accordion-header">
                <span>Детали</span>
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/76643b3a18cd30aeda25005a6a1c715541c67d5f4c147c7ccdfec6072186f89d?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
                  alt="Expand details"
                  class="accordion-icon"
                />
              </summary>
              <div class="accordion-content">
                <p>Материал: серебро 925 пробы</p>
                <p>Размеры: 2.5 см x 1.8 см</p>
                <p>Вес: 3.5 г</p>
                <p>Цепочка в комплекте: 45 см</p>
              </div>
            </details>
            <details class="product-details-accordion">
              <summary class="accordion-header">
                <span>Советы и предупреждения</span>
                <img
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/76643b3a18cd30aeda25005a6a1c715541c67d5f4c147c7ccdfec6072186f89d?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
                  alt="Expand tips"
                  class="accordion-icon"
                />
              </summary>
              <div class="accordion-content">
                <p>Избегайте контакта с парфюмерией и косметикой.</p>
                <p>Снимайте украшение перед сном и занятиями спортом.</p>
                <p>Храните в сухом месте, избегайте попадания влаги.</p>
                <p>Для чистки используйте мягкую ткань.</p>
              </div>
            </details>
          </section>
        </div>
      </main>

      <section class="reviews-section">
        <h2 class="section-title">Отзывы покупателей</h2>

        <div class="reviews-header">
          <div class="reviews-summary">
            <div class="average-rating">
              <span class="rating-value">4.7</span>
              <div class="stars-container">
                <div class="stars-filled" style="width: 94%"></div>
              </div>
              <span class="review-count">23 отзыва</span>
            </div>
            <div class="rating-breakdown">
              <div class="rating-bar-container">
                <span class="rating-label">5</span>
                <div class="rating-bar">
                  <div class="rating-fill" style="width: 75%"></div>
                </div>
                <span class="rating-count">18</span>
              </div>
              <div class="rating-bar-container">
                <span class="rating-label">4</span>
                <div class="rating-bar">
                  <div class="rating-fill" style="width: 15%"></div>
                </div>
                <span class="rating-count">3</span>
              </div>
              <div class="rating-bar-container">
                <span class="rating-label">3</span>
                <div class="rating-bar">
                  <div class="rating-fill" style="width: 5%"></div>
                </div>
                <span class="rating-count">1</span>
              </div>
              <div class="rating-bar-container">
                <span class="rating-label">2</span>
                <div class="rating-bar">
                  <div class="rating-fill" style="width: 5%"></div>
                </div>
                <span class="rating-count">1</span>
              </div>
              <div class="rating-bar-container">
                <span class="rating-label">1</span>
                <div class="rating-bar">
                  <div class="rating-fill" style="width: 0%"></div>
                </div>
                <span class="rating-count">0</span>
              </div>
            </div>
          </div>

          <div class="reviews-controls">
            <div class="reviews-sort">
              <label for="sort-select">Сортировать по:</label>
              <select id="sort-select" class="sort-select">
                <option value="newest">Сначала новые</option>
                <option value="oldest">Сначала старые</option>
                <option value="highest">Высокий рейтинг</option>
                <option value="lowest">Низкий рейтинг</option>
              </select>
            </div>
          </div>
        </div>

        <div class="reviews-list">
          <article class="review-card">
            <div class="review-header">
              <div class="reviewer-info">
                <span class="reviewer-name">Анна К.</span>
                <span class="review-date">15 мая 2023</span>
              </div>
              <div class="review-rating">
                <div class="stars-container small">
                  <div class="stars-filled" style="width: 100%"></div>
                </div>
              </div>
            </div>
            <h3 class="review-title">Прекрасное украшение!</h3>
            <p class="review-text">
              Очень красивый кулон, ношу не снимая. Качество отличное, серебро
              не темнеет. Рекомендую всем, кто ценит стильные и необычные
              украшения.
            </p>
          </article>

          <article class="review-card">
            <div class="review-header">
              <div class="reviewer-info">
                <span class="reviewer-name">Михаил Д.</span>
                <span class="review-date">2 апреля 2023</span>
              </div>
              <div class="review-rating">
                <div class="stars-container small">
                  <div class="stars-filled" style="width: 80%"></div>
                </div>
              </div>
            </div>
            <h3 class="review-title">Отличный подарок</h3>
            <p class="review-text">
              Подарил девушке на день рождения, она в восторге! Единственный
              минус - цепочка могла бы быть подлиннее. В остальном всё супер.
            </p>
          </article>

          <article class="review-card">
            <div class="review-header">
              <div class="reviewer-info">
                <span class="reviewer-name">Елена В.</span>
                <span class="review-date">17 марта 2023</span>
              </div>
              <div class="review-rating">
                <div class="stars-container small">
                  <div class="stars-filled" style="width: 100%"></div>
                </div>
              </div>
            </div>
            <h3 class="review-title">Превзошло ожидания</h3>
            <p class="review-text">
              Кулон выглядит даже лучше, чем на фото. Очень аккуратная работа,
              приятный вес. Доставка быстрая, упаковка надежная. Буду заказывать
              еще!
            </p>
          </article>
        </div>

        <div class="load-more-container">
          <button class="load-more-button">Показать еще отзывы</button>
        </div>

        <div class="review-form-container">
          <h3 class="form-title">Оставить отзыв</h3>
          <form class="review-form">
            <div class="rating-input">
              <span class="rating-label">Ваша оценка:</span>
              <div class="star-rating">
                <input type="radio" id="star5" name="rating" value="5" />
                <label for="star5" title="5 звезд"></label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label for="star4" title="4 звезды"></label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label for="star3" title="3 звезды"></label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label for="star2" title="2 звезды"></label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label for="star1" title="1 звезда"></label>
              </div>
            </div>

            <div class="form-group">
              <label for="review-title">Заголовок:</label>
              <input
                type="text"
                id="review-title"
                class="review-title-input"
                placeholder="Кратко опишите ваше впечатление"
                required
              />
            </div>

            <div class="form-group">
              <label for="review-text">Отзыв:</label>
              <textarea
                id="review-text"
                class="review-text-input"
                placeholder="Расскажите подробнее о вашем опыте с этим товаром"
                rows="5"
                required
              ></textarea>
            </div>

            <div class="form-group">
              <label for="reviewer-name">Имя:</label>
              <input
                type="text"
                id="reviewer-name"
                class="reviewer-name-input"
                placeholder="Как к вам обращаться"
                required
              />
            </div>

            <div class="form-group">
              <label for="reviewer-email">Email:</label>
              <input
                type="email"
                id="reviewer-email"
                class="reviewer-email-input"
                placeholder="Не будет опубликован"
                required
              />
            </div>

            <div class="form-actions">
              <button type="submit" class="submit-review-button">
                Отправить отзыв
              </button>
            </div>
          </form>
        </div>
      </section>

      <section class="recommendations-section">
        <h2 class="recommendations-title">Рекомендованно для вас</h2>
        <p class="recommendations-subtitle">Основано на ваших просмотрах</p>
      </section>

      <section class="product-gallery">
        <div class="gallery-container">
          <article class="product-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/33d099789cc3fd83de98305b7f9e9bbf89eb8945ac36eba3e6e8b21345c2c903?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Heart Drop pendant"
              class="card-image"
            />
            <div class="card-info">
              <h3 class="card-title">HEART DROP</h3>
              <p class="card-price">5000 ₽</p>
            </div>
          </article>
          <article class="product-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/f7d96655a5cd4710cdabd1d01b8b9ea52be9ee56730eca1e0713df13f499a0c5?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Diamond Choker necklace"
              class="card-image"
            />
            <div class="card-info">
              <h3 class="card-title">DIAMOND CHOKER</h3>
              <p class="card-price">3000 ₽</p>
            </div>
          </article>
          <article class="product-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/9df17fead6eef7dc9fdce120272d5778f0c0bc4cb4dc27494fabd6ea22cfb57d?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Leaf Pendant"
              class="card-image"
            />
            <div class="card-info">
              <h3 class="card-title">LEAF PENDANT</h3>
              <p class="card-price">2000 ₽</p>
            </div>
          </article>
          <article class="product-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/d2f133610433fd2d0c5f1bd56b2b4030d702be4b1168df96a53e2b3084234c71?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Ruby Pendant"
              class="card-image"
            />
            <div class="card-info">
              <h3 class="card-title">RUBY PENDANT</h3>
              <p class="card-price">8000 ₽</p>
            </div>
          </article>
          <article class="product-card">
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/1c5832e45b0232037ae2abbf51e91e9178b635c6673609d4143e5b9e4fae36d2?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
              alt="Opal Heart pendant"
              class="card-image"
            />
            <div class="card-info">
              <h3 class="card-title">OPAL HEART</h3>
              <p class="card-price">9000 ₽</p>
            </div>
          </article>
        </div>
      </section>

      <footer class="main-footer">
        <div class="footer-container">
          <div class="footer-content">
            <div class="footer-columns">
              <div class="footer-column">
                <h4 class="column-title">Обслуживание клиентов</h4>
                <ul class="footer-links">
                  <li><a href="#" class="footer-link">Отследить заказ</a></li>
                  <li>
                    <a href="#" class="footer-link">Доставка и возврат</a>
                  </li>
                  <li><a href="#" class="footer-link">Связь с нами</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h4 class="column-title">О нас</h4>
                <ul class="footer-links">
                  <li><a href="#" class="footer-link">Наша цель</a></li>
                  <li><a href="#" class="footer-link">Карьера</a></li>
                  <li><a href="#" class="footer-link">Контакты</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h4 class="column-title">Забота о материалах</h4>
                <ul class="footer-links">
                  <li><a href="#" class="footer-link">Ремонт изделия</a></li>
                  <li><a href="#" class="footer-link">Размеры</a></li>
                  <li><a href="#" class="footer-link">Советы</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h4 class="column-title">Основные офисы</h4>
                <ul class="footer-links">
                  <li><a href="#" class="footer-link">Иркутск, RU</a></li>
                  <li><a href="#" class="footer-link">Москва, RU</a></li>
                  <li><a href="#" class="footer-link">Оренбург, RU</a></li>
                </ul>
              </div>
            </div>
            <div class="newsletter-section">
              <h4 class="newsletter-title">Вы можете быть на шаг впереди.</h4>
              <p class="newsletter-description">
                Подпишитесь, чтобы получать информацию о наших обновлениях.
              </p>
              <form class="newsletter-form">
                <div class="form-group">
                  <input
                    type="email"
                    placeholder="Ваш e-mail адрес"
                    class="email-input"
                    aria-label="Email address"
                    required
                  />
                  <div class="form-message" aria-live="polite"></div>
                </div>
                <button type="submit" class="signup-button">SIGN UP</button>
              </form>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/1e5cc24875d2e2e1a916b88b6e2d719c2afa2e3123a47811e87a9059e5b746b9?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
                alt="Social media icons"
                class="social-icons"
              />
            </div>
          </div>
          <div class="footer-bottom">
            <p class="copyright">© KAMENIKA, LLC</p>
            <p class="legal-links">
              PRIVACY POLICY • TERMS OF USE • SITEMAP • DO NOT SELL MY
              INFORMATION • COOKIES
            </p>
          </div>
        </div>
      </footer>
    </div>

    <script>
      (() => {
        const state = {};

        let context = null;
        let nodesToDestroy = [];
        let pendingUpdate = false;

        function destroyAnyNodes() {
          // destroy current view template refs before rendering again
          nodesToDestroy.forEach((el) => el.remove());
          nodesToDestroy = [];
        }

        // Function to update data bindings and loops
        // call update() when you mutate state and need the updates to reflect
        // in the dom
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

        // Update with initial state on first load
        update();
      })();
    </script>
  </body>
</html>
