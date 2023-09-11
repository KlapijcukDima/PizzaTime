<?php
/*
Template Name: Головна
*/
?>

<?php get_header(); ?>


<!-- section-top -->
<section class="section-top lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-top/bg.webp"
  data-src-replace-webp="img/section-top/bg.jpg">
  <div class="container section-top__container">
    <p class="section-top__info">Від італійського кухаря</p>
    <p class="section-top__title">Краща піцца в Україні</p>
    <div>
      <button class="btn" type="button">Вибрати</button>
    </div>
  </div>
</section>
<!-- /.section-top -->


<!-- section-catalog -->
<section class="section section-catalog">
  <div class="container">
    <header class="section__header">
      <h2 class="page-title page-title--accent">Меню</h2>
      <nav class="catalog-nav">
        <ul class="catalog-nav__wrapper">
          <li class="catalog-nav__item">
            <button class="catalog-nav__btn is-active" type="button" data-filter="all">все</button>
          </li>
          <li class="catalog-nav__item">
            <button class="catalog-nav__btn" type="button" data-filter="mushrooms">грибні</button>
          </li>
          <li class="catalog-nav__item">
            <button class="catalog-nav__btn" type="button" data-filter="meat">мясні</button>
          </li>
          <li class="catalog-nav__item">
            <button class="catalog-nav__btn" type="button" data-filter="cheese">сирні</button>
          </li>
        </ul>
      </nav>
    </header>

    <div class="catalog">
      <div class="catalog__item" data-category="mushrooms">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/1.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/1.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Салямі</h3>
            <p class="product__description">Салями, картопля і морква, огірки мариновані, моцарелла, курча, шинка та
              французький соус </p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">850</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="meat">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/2.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/2.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Хіт</h3>
            <p class="product__description">Картопля та морква, огірки
              мариновані, моцарелла, курча,
              шинка та французький соус </p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">950</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="cheese">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/3.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/3.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Яловичина-гриби</h3>
            <p class="product__description">Салями, картопля та морква, огірки
              мариновані, моцарелла, курча,
              шинка та французький соус</p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">880</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="cheese">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/4.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/4.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Карбонара</h3>
            <p class="product__description">Салями, картопля і морква, огірки мариновані, моцарелла, курча, шинка та
              французький соус </p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">1250</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="cheese">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/5.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/5.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Фірмова</h3>
            <p class="product__description">Томатно-вершковий соус, бекон, моцарелла</p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">890</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="meat">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/6.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/6.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Ассорті</h3>
            <p class="product__description">Картопля моцарелла, курча, гриби,
              шинка та французький соус</p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">850</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="mushrooms">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/7.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/7.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Л-01</h3>
            <p class="product__description">Томати, моцарелла, курча,
              шинка та французький соус, секретний інгредієнт</p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">920</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="mushrooms">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/8.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/8.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">Три сира</h3>
            <p class="product__description">Чеддер, камамбер, едам</p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">990</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
      <div class="catalog__item" data-category="mushrooms">
        <div class="product catalog__product">
          <picture>
            <source type="image/webp"
              srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/9.webp">
            <img class="product__img lazy"
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
              data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-catalog/9.png" alt="">
          </picture>
          <div class="product__content">
            <h3 class="product__title">М'ясна</h3>
            <p class="product__description">Курка, яловичина, вершковий соус, салямі,
              огірки мариновані, томати, гриби,
              бекон</p>
          </div>
          <footer class="product__footer">
            <div class="product__sizes">
              <button data-product-size-price="950" class="product__size is-active" type="button">35см</button>
              <button data-product-size-price="850" class="product__size" type="button">30см</button>
              <button data-product-size-price="650" class="product__size" type="button">25см</button>
            </div>
            <div class="product__bottom">
              <div class="product__price">
                <span class="product__price-value">950</span>
                <span class="product__currency"></span>
              </div>
              <button class="btn product__btn" type="button" data-popup="popup-order">Замовити</button>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.section-catalog -->

<!-- section-about -->
<section class="section section-about">
  <picture>
    <source type="image/webp"
      srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
      data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/bg.webp">
    <img class="section-about__img lazy"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
      data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-about/bg.jpg" alt="">
  </picture>
  <div class="container section-about__container">
    <div class="section-about__content">
      <h2 class="page-title section-about__title">Про нас</h2>
      <p class="section-about__text">Доставимо вам гарячу піцу менш як за годину або піца безкоштовно.
        Ми готуємо піцу лише зі свіжих продуктів. Щодня ми купуємо свіжі овочі, гриби та м'ясо.</p>
    </div>
  </div>
</section>
<!-- /.section-about -->

<!-- section-contacts -->
<section class="section section-contacts">
  <div class="container section-contacts__container">
    <div class="section-contacts__img lazy"
      data-src="<?php echo get_template_directory_uri(); ?>/assets/img/section-contacts/tomatoes.webp"
      data-src-replace-webp="img/section-contacts/tomatoes.jpg"></div>
    <header class="section__header">
      <h2 class="page-title sectoin-contacts__title">Контакти</h2>
    </header>
    <div class="contacts">
      <div class="contacts__start">
        <div class="contacts__map" id="ymap"></div>
      </div>
      <div class="contacts__end">
        <div class="contacts__item">
          <h3 class="contacts__title">Адреса</h3>
          <p class="contacts__text">м.Чернівці</p>
        </div>
        <div class="contacts__item">
          <h3 class="contacts__title">Телефон</h3>
          <p class="contacts__text">
            <a class="contacts__phone" href="tel:+3809117112123">+380 (911) 711-21-23</a>
          </p>
        </div>
        <div class="contacts__item">
          <h3 class="contacts__title">Соціальні мережі</h3>
          <ul class="socials">
            <li class="socials__item">
              <a href="#" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--fb" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 112.2 112.2" width="35" height="35">
                  <g>
                    <circle cx="56.1" cy="56.1" r="56.1" />
                    <path class="socials__logo"
                      d="M70.2,58.3h-10V95H45V58.3H37.8V45.4H45V37.1c0-6,2.8-15.3,15.3-15.3H71.5V34.3H63.3c-1.3,0-3.2.7-3.2,3.5v7.6H71.4Z" />
                  </g>
                </svg>
              </a>
            </li>
            <li class="socials__item">
              <a href="#" class="socials__link" target="_blank">
                <svg class="socials__icon socials__icon--inst" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  width="35" height="35">
                  <g>
                    <path
                      d="M332.3,136.2H179.7a44.21,44.21,0,0,0-44.2,44.2V333a44.21,44.21,0,0,0,44.2,44.2H332.3A44.21,44.21,0,0,0,376.5,333V180.4A44.21,44.21,0,0,0,332.3,136.2ZM256,336a79.3,79.3,0,1,1,79.3-79.3A79.42,79.42,0,0,1,256,336Zm81.9-142.2A18.8,18.8,0,1,1,356.7,175,18.78,18.78,0,0,1,337.9,193.8Z" />
                    <path d="M256,210.9a45.8,45.8,0,1,0,45.8,45.8A45.86,45.86,0,0,0,256,210.9Z" />
                    <path
                      d="M256,0C114.6,0,0,114.6,0,256S114.6,512,256,512,512,397.4,512,256,397.4,0,256,0ZM410,333a77.78,77.78,0,0,1-77.7,77.7H179.7A77.78,77.78,0,0,1,102,333V180.4a77.84,77.84,0,0,1,77.7-77.7H332.3A77.84,77.84,0,0,1,410,180.4Z" />
                  </g>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.section-contacts -->

<?php get_footer(); ?>