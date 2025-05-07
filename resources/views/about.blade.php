<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Golden Hour</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&family=Karla:wght@344;400;435&display=swap"
      rel="stylesheet"
    />
    @vite(['resources/css/about.css', 'resources/js/about.js'])
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
<div class="backgi">
    <div class="container">
            <span style="font-size: 35px; margin-left: 140px; color: rgba(255, 255, 255, 1); margin-top: 200px;">О нас</span>
            <hr>
            <span style="font-size: 25px; margin-left: 140px; color: rgba(255, 255, 255, 1); margin-top: 50px;">Украшения и сувениры ручной работы, заряженные силой природы.<br> <br>

                По вопросам заказа изделий: @nika_kony<br> <br>
                
                Каталог: https://vk.com/kamenika</span>
        </div>
    </div>
</div> 
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
</body>
</html>