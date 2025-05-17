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
    @vite(['resources/css/Osnova.css', 'resources/js/selected.js'])
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
            <li><a href="#section1" class="nav-link">Изделия</a></li>
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
    <div class="w">
        &nbsp; <div class="er">
            <span style="font-size: 45px; font-weight: 600;">Осенняя распродажа</span><br><br>
            <span style="font-size: 25px; font-weight: 400;">Наступила осень.</span><br>
            <span style="font-size: 25px; font-weight: 400;">Покупайте наши новые изделия, 
                начиная с сегодняшнего дня.</span>
        </div>
       <div class="et">
        <a style="color: white;" href="#section1"><span>Купить сейчас</span></a>
        </div>
</div>
 <div class="e" id="section1">
        <div class="conti2">
    <span style="font-size: 30px;">Делайте покупки по категориям</span><br>
    <span style="padding-left: 45px; font-size: 20px;">Насладитесь тем, что мы предлагаем.</span>
        </div>
        <div class="conti3">
            <div style="background-image: url(../img/Rectangle\ 38\ \(5\).png);" class="hi">
                <div style="width: 130px; border: 1px solid black; margin-left: 55px; border-radius: 8px;" class="hara"><a href="{{ url('catalog') }}">Ожерелья</a></div>
            </div>
            <div style="background-image: url(../img/Rectangle\ 38\ \(6\).png);" class="hi">
                <div style="width: 130px; border: 1px solid black; margin-left: 55px; border-radius: 8px;" class="hara"><a href="{{ url('catalog2') }}">Серьги</a></div>
            </div>
            <div style="background-image: url(../img/Rectangle\ 38\ \(7\).png);" class="hi">
                <div style="width: 130px; border: 1px solid black; margin-left: 55px; border-radius: 8px;" class="hara"><a href="{{ url('catalog3') }}">Браслеты</a></div>
            </div>
        </div>
</div>
    <div class="r">
        <div class="poer"></div>
        <div class="conti4">
        <span style="font-size: 20px;">Артикль    &nbsp;   •  &nbsp;   &nbsp; Апрель  &nbsp;   •  &nbsp; &nbsp; 2025</span><br><br><br><br><br>
        <span style="font-size: 35px;">В золотой час.</span><br><br>
        <span style="font-size: 28px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> 
            tempor incididunt ut labore et dolore magna aliqua. Metus vulputate eu <br>
            scelerisque felis imperdiet proin fermentum. Cras semper auctor neque <br>
            vitae tempus quam pellentesque. Elementum sagittis vitae et leo duis.<br><br>

            Elementum sagittis vitae et leo duis. Libero nunc consequat interdum <br>
            varius. Habitant morbi tristique senectus et netus et malesuada fames ac. </span>
        </div>
        <div class="ert"><a style="color: white;" href="../Index/4.html">Читать</a></div>
</div>
    <div class="t">
        &nbsp;   <div class="conti6">
    <span style="font-size: 45px;">Подарки сезона</span><br><br>
    <span style="font-size: 23px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br>
    do eiusmod tempor incididunt ut labore et dolore magna <br>
    aliqua. Metus vulputate eu scelerisque felis imperdiet proin <br>
    fermentum. Cras semper auctor neque vitae tempus quam <br>
    pellentesque. Elementum sagittis vitae et leo duis.
</span>
</div>
<div class="rty"><a href="{{ url('gifts') }}">Купить подарки</a></div>
<div class="ima4"></div>
</div>
    <div class="y">
<div class="ima5"></div>
<div class="conti7">
    <span style="font-size: 35px;">Кто мы такие?</span><br><br><br>
    <span style="font-size: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br>
        eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
        Metus vulputate eu scelerisque felis imperdiet proin <br>
        fermentum. Cras semper auctor neque vitae tempus quam <br>
        pellentesque. Elementum sagittis vitae et leo duis.<br><br>

        Elementum sagittis vitae et leo duis. Libero nunc consequat <br>
        interdum varius. Habitant morbi tristique senectus et netus et <br>
        malesuada fames ac. 
    </span>
</div>
<div class="rti"><a style="color: white;" href="{{ url('about') }}">О нас</a></div>
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
