<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KAMENIKA - Ожерелья</title>
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&family=Karla:wght@344;400;435&display=swap"
      rel="stylesheet"
    />
    @vite(['resources/css/catalog2.css', 'resources/js/catalog2.js'])
  </head>
  <body>
    <div class="page-container">
      <div class="top-banner"></div>

      <header class="main-header">
        <nav class="main-nav">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b95ed232fdd5968d071c0798245cbfe31470a04d01c8ca450ef9916f66866d72?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
            alt="Menu icon"
            class="menu-icon"
          />
          <a href="{{ url('/') }}" class="nav-link">Изделия</a>
          <a href="{{ url('about') }}" class="nav-link">О нас</a>
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
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/a19428d00aee23dbbdcd47dea2b9ed1141c83525db7c327311364d368d7edd51?placeholderIfAbsent=true&apiKey=b05fb0c8128446cd86c05494f402903e"
            alt="Shopping cart"
            class="cart-icon"
          />
        </div>
      </header>

      <main class="main-content">
        <h1 class="page-title">Серьги</h1>
        <p class="page-subtitle">Фантастические украшения для ваших близких</p>

        <section class="products-grid top-row">
          <article class="product-card">
            <img
              src="https://www.figma.com/design/2YnCTIj4MxzGZWtEYXEQxJ/Jewelry?node-id=212-4&t=sjlR0qUVti8thwgM-4"
              alt="Diamond Studs"
              class="product-image"
            />
            <div class="product-info">
              <h2 class="product-name">DIAMOND STUDS</h2>
              <p class="product-price">14000 ₽</p>
            </div>
          </article>

          <article class="product-card">
            <img
              src="https://www.figma.com/design/2YnCTIj4MxzGZWtEYXEQxJ/Jewelry?node-id=212-7&t=sjlR0qUVti8thwgM-4"
              alt="Dangling Leaves"
              class="product-image"
            />
            <div class="product-info">
              <h2 class="product-name">DANGLING LEAVES</h2>
              <p class="product-price">26000 ₽</p>
            </div>
          </article>

          <article class="product-card">
            <img
              src="https://www.figma.com/design/2YnCTIj4MxzGZWtEYXEQxJ/Jewelry?node-id=197-745&t=sjlR0qUVti8thwgM-4"
              alt="Leaf Studs"
              class="product-image"
            />
            <div class="product-info">
              <h2 class="product-name">LEAF STUDS</h2>
              <p class="product-price">5000 ₽</p>
            </div>
          </article>
        </section>
      </main>

   
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
</body>
</html>