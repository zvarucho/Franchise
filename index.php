<?php include("path.php"); 
    include 'app/database/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,regular,500italic&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Franchise</title>
</head>
<body>
    <?php include("app/include/header.php"); ?>
    <div class="wrapper">
        <main class="page">
            <section id="main" class="page__main main">
                <div class="main__container">
                    <div class="main__content">
                        <div class="main__header header-main">
                            <h1 class="header-main__title">Заробіток в Інстаграмі</h1>
                            <div class="header-main__text">
                                <p>
                                    Привіт мені 14. І я заробляю в Інтернеті продаючи франшизи.
                                    Готовий надати тобі інормацію що таке франшиза і як заробляти.
                                    Ознайомся зі всією інформацією та вступай в мою команду.
                                </p>
                            </div>
                            <div class="header-main__actions">
                                <a href="#pricing" class="header-main__button button">Придбати Франшизу</a>
                                <a href="#footer" class="header-main__button button-dark">Зв'язатися зі мною</a>
                            </div>
                        </div>
                    </div>
                    <div class="main__images images-main">
                        <div class="images-main__item">
                            <img src="assets/img/Avtor.png" alt="Avtor">
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="page__services services">
                <div class="services__container">
                   <div class="services__content">
                        <div class="services__header header-main">
                            <a class="header-main__label">Services</a>
                            <h1 class="header-main__title">З якими інструментами я працюю?</h1>
                            <div class="header-main__text">
                                <p>
                                    Для цієї роботи я користуюсь і працюю з досить актуальними інструментами. Кожна з яких є важливою для ефективної та якісної роботи. 
                                </p>
                            </div>
                            <div class="header-main__actions">
                                <a href="#pricing" class="header-main__button button">Придбати Франшизу</a>
                            </div>
                        </div>
                   </div>
                   <div class="services__items">
                        <div class="services__column">
                            <article class="services__item item-service">
                                <div class="item-service__icon">
                                    <img src="assets/img/services/inst.svg" alt="service">
                                </div>
                                <h4 class="item-service__title">Instagram</h4>
                                <div class="item-service__text text">
                                    Найголовніших програма, де відбувається 70% всієї роботи.
                                </div>
                            </article>
                            <article class="services__item item-service">
                                <div class="item-service__icon">
                                    <img src="assets/img/services/tik-tok.svg" alt="service">
                                </div>
                                <h4 class="item-service__title">Tik Tok</h4>
                                <div class="item-service__text text">
                                    Найефективніша програма для залучення великої кількості клієнтів.
                                </div>
                            </article>
                        </div>
                        <div class="services__column">
                            <article class="services__item item-service">
                                <div class="item-service__icon">
                                    <img src="assets/img/services/can.svg" alt="service">
                                </div>
                                <h4 class="item-service__title">Canva</h4>
                                <div class="item-service__text text">
                                    Безплатний графічний інструмент, для роботи з постами, фото, історіями в інстаграмі.
                                </div>
                            </article>
                            <article class="services__item item-service">
                                <div class="item-service__icon">
                                    <img src="assets/img/services/telegram.svg" alt="service">
                                </div>
                                <h4 class="item-service__title">Telegram</h4>
                                <div class="item-service__text text">
                                    Платформа, де відбувається 60% всіх продажів. Та телеграм канал, для моєї команди.
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section id="why" class="page__why why">
                <div class="why__container">
                    <div class="why__images images-why">
                        <div class="images-why__item images-why__item1"> 
                            <img src="assets/img/why/image.png" alt="Image">
                        </div>
                    </div>
                    <div class="why__content">
                        <div class="why__header header-main">
                            <a class="header-main__label">Why choose us</a>
                            <h1 class="header-main__title">Що ти отримаєш після покупки?</h1>
                            <div class="header-main__text">
                                <p>
                                    Придбавши одну із Франшиз, Ви отримуєте ряд моїх полсуг, щоб пришвидшити процес першого заробітку.
                                </p>
                            </div>
                            <ul class="header-main__list">
                                <li>Ціло добова підтримка</li>
                                <li>Насичений пакет Франшизи за найкращу ціну</li>
                                <li>Перший дохід вже за перший місяць</li>
                                <li>Поради які покращать твій дохід</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="advantages" class="page__advantages advantages">
                <div class="advantages__container">
                    <div class="advantages__items">
                        <article class="advantages__item">
                            <h4 class="advantages__value">6М</h4>
                            <div class="advantages__text">
                                Мій стаж роботи 6 місяців. І вже при такому короткому періоду я вже можу навчати інших
                            </div>
                        </article>
                        <article class="advantages__item">
                            <h4 class="advantages__value">55+</h4>
                            <div class="advantages__text">
                                Продажів за весь період 55. В піковий день було оформлено 7 продажів.
                            </div>
                        </article>
                        <article class="advantages__item">
                            <h4 class="advantages__value">45К</h4>
                            <div class="advantages__text">
                                Середній дохід в місяць сягає в районі 45.000 гривень
                            </div>
                        </article>
                        <article class="advantages__item">
                            <h4 class="advantages__value">3</h4>
                            <div class="advantages__text">
                                Я розробив 3 пакети Франшиз для Вас. В залежності від пакета в ньому міститимиться певна кількість інформації.
                            </div>
                        </article>
                    </div>
                    <div class="advantages__image">
                        <img src="assets/img/advantages/image.png" alt="Image">
                    </div>
                </div>
            </section>
            <section id="faq" class="page__faq faq">
                <div class="faq__container">
                    <div class="container__fluid">
                        <h1 class="header-main__title ">Відповіді на популярні запитання</h1>
                        <div class="accordion">
                          <div class="icon"></div>
                          <h5>Що таке Франшиза?</h5>
                        </div>
                        <div class="panel">
                          <p>
                            Що таке франшиза простими словами в Instagram - це довгострокова оренда бізнес-ідеї, 
                            а також передача прав на використання імені, бренду або торгової марки на обумовлених конкретних умовах. 
                            У соціальній мережі Instagram це поняття теж зберігається, але кілька видозмінюється. Найчастіше тут люди 
                            не взаємодіють безпосередньо з представниками бренду або якоїсь торгової марки. Найчастіше і продаж франшиз 
                            в Інстаграмі відгуки має не завжди позитивні, а іноді навіть негативні через те, що люди купують їх у неперевірених
                             продавців.Поняття франшизи в Instagram асоціюється зі сторінками дівчат в декреті, які за символічною вартістю 
                             пропонують цілий пакет різних франшиз або баз постачальників. У деяких все закінчується на етапі продажу. 
                             У інших же можна піти далі, заплатити ще й за навчання. Там детально розповідають про всі тонкощі цього бізнесу.
                              Коли людина намагається застосовувати на практиці ці знання і отриманий досвід, його чекає розчарування.
                          </p>
                        </div>
                      
                        <div class="accordion">
                          <div class="icon"></div>
                          <h5>Як отримувати дохід від Франшиз?</h5>
                        </div>
                        <div class="panel">
                          <p>
                            Тому відповідь на питання про те, чи реально заробити на франшизі в Інстаграммі для того, хто її створив, 
                            буде позитивним. Для цього слід грамотно упакувати свій бізнес-план і знайти, кому його запропонувати. 
                            Для цього потрібно: створити особистий бізнес-профіль в Instagram; зайнятися його оформленням, наповненням 
                            просуванням і розкруткою; скласти контент-план, опрацювати візуал, задіяти таргетовану рекламу та інші методи 
                            просування. Якщо вам вдасться завоювати лояльність аудиторії, грамотно запропонувати франшизу, описати її переваги, 
                            можливий рівень доходу, терміни окупності, люди погодяться її купити, скільки б ви за неї не запросили. Продаж франшиз в 
                            Інстаграмі - це високоприбуткове заняття, але тільки в тому випадку, якщо такі бізнес-плани працюють. Якщо ви націлені на 
                            довгостроковий результат, люди, яким вдасться їх реалізувати на практиці, стати підприємцями, отримувати хороший дохід, будуть 
                            залишати свої позитивні відгуки.  Цим вони будуть залучати нових клієнтів. Якщо ваша мета отримати гроші тут і зараз тільки від 
                            продажу неякісного бізнес-плану, який не призводить до успіху і не працює на практиці, заробляти в перспективі в цьому виді діяльності
                             вам не вдасться. Звичайно, негативні відгуки, коментарі, незадоволених людей можна блокувати в своєму профілі. Але і позитивних відгуків
                              теж не буде. А без них все-таки завоювати лояльність і довіру своєї публіки, потенційних клієнтів не вийде.
                          </p>
                        </div>
                      
                        <div class="accordion">
                          <div class="icon"></div>
                          <h5>Чи можна заробляти на Франшизі в Instagram?</h5>
                        </div>
                        <div class="panel">
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.
                          </p>
                        </div>
                      
                        <div class="accordion">
                          <div class="icon"></div>
                          <h5>Why do we use it?</h5>
                        </div>
                        <div class="panel">
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has survived not only
                            five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.
                          </p>
                        </div>
                      </div>
                </div>
            </section>
            <section id="testimonials" class="page__testimonials testimonials">
                <div class="testimonials__container">
                    <div class="testimonials__header header-main">
                        <a class="header-main__label">Testimonials</a>
                        <h1 class="header-main__title">Відгуки моїх учнів</h1>
                        <div class="header-main__body">
                            <div class="header-main__text">
                                <p>
                                    За весь період роботи я працював разом з понад 40 учнів, які можуть росказати про їх досвід зі мною. Більше відгуків розміщено в моєму   <a href="">Інстаграмі</a>.
                                </p>
                            </div>
                            <div class="header-main__actions">
                                <a href="#footer" class="header-main__buttton button">Написати</a>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials__items">
                        <article class="testimonials__item item-testimonial">
                            <div class="item-testimonial__user user-testimonial">
                                <div class="user-testimonial__avatar user-testimonial__avatar1">
                                    <img src="assets/img/.jpg" alt="Avatars">
                                </div>
                                <div class="user-testimonial__body">
                                    <div class="user-testimonial__title">Jhon Doe</div>
                                    <div class="user-testimonial__company">Company name</div>
                                </div>
                            </div>
                            <h4 class="item-testimonial__title">Я рекомендую придбати цю франшизу</h4>
                            <div class="item-testimonial__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Suspendisse varius enim in eros elementum tristique. 
                                    Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, 
                                    ut commodo diam libero.
                                </p>
                            </div>
                            <div class="item-testimonial__rating">3.6</div>
                        </article>
                        <article class="testimonials__item item-testimonial">
                            <div class="item-testimonial__user user-testimonial">
                                <div class="user-testimonial__avatar user-testimonial__avatar1">
                                    <img src="assets/img/.jpg" alt="Avatars">
                                </div>
                                <div class="user-testimonial__body">
                                    <div class="user-testimonial__title">Jhon Doe</div>
                                    <div class="user-testimonial__company">Company name</div>
                                </div>
                            </div>
                            <h4 class="item-testimonial__title">Я рекомендую придбати цю франшизу</h4>
                            <div class="item-testimonial__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Suspendisse varius enim in eros elementum tristique. 
                                    Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, 
                                    ut commodo diam libero.
                                </p>
                            </div>
                            <div class="item-testimonial__rating">3.6</div>
                        </article>
                        <article class="testimonials__item item-testimonial">
                            <div class="item-testimonial__user user-testimonial">
                                <div class="user-testimonial__avatar user-testimonial__avatar1">
                                    <img src="assets/img/.jpg" alt="Avatars">
                                </div>
                                <div class="user-testimonial__body">
                                    <div class="user-testimonial__title">Jhon Doe</div>
                                    <div class="user-testimonial__company">Company name</div>
                                </div>
                            </div>
                            <h4 class="item-testimonial__title">Я рекомендую придбати цю франшизу</h4>
                            <div class="item-testimonial__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Suspendisse varius enim in eros elementum tristique. 
                                    Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, 
                                    ut commodo diam libero.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Suspendisse varius enim in eros elementum tristique. 
                                    Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, 
                                    ut commodo diam libero.
                                </p>
                            </div>
                            <div class="item-testimonial__rating">3.6</div>
                        </article>
                    </div>
                </div>
            </section>
            <section id="start" class="page__start start">
                <div class="start__container">
                    <div class="start__body">
                        <div class="start__column">
                            <h2 class="start__title">Реально готовий <br> придбавти франшизу?</h2>
                            <div class="start__text text">
                                <p>Я надаю тільки якісний продукт. Якщо виникають сумніви Ви маєте можливість пройти невеличкий тест, дя впевненості.</p>
                            </div>
                        </div>
                        <div class="start__column">
                            <div class="start__actions">
                                <a href="#pricing" class="start__button button">Придбати</a>
                                <a href="app/quiz/quiz.php" target="_blank" class="start__button button-dark">Пройти тест</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="pricing" class="page__pricing pricing">
                <div class="pricing__container">
                    <div class='container'>
                        <!-- Card 1 -->
                        <div class='card'>
                          <div class='card__info' style='background-image: url(https://raw.githubusercontent.com/mohammadjarabah/codepen-assets/main/pens/xxXgjem/images/img1.jpg)'>
                            <h2 class='card__name'>BASIC</h2>
                            <p class='card__price' style='color: var(--color05)'>$19.99 <span class='card__priceSpan'>/month</span></p>
                          </div>
                          <div class='card__content' style='border-color: var(--color05)'>
                            <div class='card__rows'>
                              <p class='card__row'>5GB Disk Space</p>
                              <p class='card__row'>10 Domain Names</p>
                              <p class='card__row'>5 E-Mail Address</p>
                              <p class='card__row'>50GB Monthly Bandwidth</p>
                              <p class='card__row'>Fully Support</p>
                            </div>
                            <a href='#emptyLink' class='card__link' style='background-color: var(--color02)'>PURCHASE</a>
                          </div>
                        </div>
                      
                        <!-- Card 2 -->
                        <div class='card'>
                          <div class='card__info' style='background-image: url(https://raw.githubusercontent.com/mohammadjarabah/codepen-assets/main/pens/xxXgjem/images/img2.jpg)'>
                            <h2 class='card__name'>STANDARD</h2>
                            <p class='card__price' style='color: var(--color06)'>$29.99 <span class='card__priceSpan'>/month</span></p>
                          </div>
                          <div class='card__content' style='border-color: var(--color06)'>
                            <div class='card__rows'>
                              <p class='card__row'>10GB Disk Space</p>
                              <p class='card__row'>20 Domain Names</p>
                              <p class='card__row'>10 E-Mail Address</p>
                              <p class='card__row'>100GB Monthly Bandwidth</p>
                              <p class='card__row'>Fully Support</p>
                            </div>
                            <a href='#emptyLink' class='card__link' style='background-color: var(--color06)'>PURCHASE</a>
                          </div>
                        </div>
                      
                        <!-- Card 3 -->
                        <div class='card'>
                          <div class='card__info' style='background-image: url(https://raw.githubusercontent.com/mohammadjarabah/codepen-assets/main/pens/xxXgjem/images/img3.jpg)'>
                            <h2 class='card__name'>PREMIUM</h2>
                            <p class='card__price' style='color: var(--color12)'>$49.99 <span class='card__priceSpan'>/month</span></p>
                          </div>
                          <div class='card__content' style='border-color: var(--color07)'>
                            <div class='card__rows'>
                              <p class='card__row'>50GB Disk Space</p>
                              <p class='card__row'>50 Domain Names</p>
                              <p class='card__row'>20 E-Mail Address</p>
                              <p class='card__row'>300GB Monthly Bandwidth</p>
                              <p class='card__row'>Fully Support</p>
                            </div>
                            <a href='#emptyLink' class='card__link' style='background-color: var(--color04)'>PURCHASE</a>
                          </div>
                        </div>
                      </div>
                </div>
            </section>
        </main>
        <?php include("app/include/footer.php"); ?>
        <!-- <footer class="footer">
            <div class="footer__main main-footer">
                <div class="main-footer__container">
                    <div class="main-footer__column">
                            <h3 class="main-footer__logo-text">Мой блог</h3>
                            <div class="main-footer__text text">
                                <p>
                                    Мой блог - это блог сделаннный с целью обучения аудитории на платформе
                                    YouTube и заработка доволнительной кармы)).
                                </p>
                            </div>
                            <div class="main-footer__contact">
                                <span><i class="contact__phone"></i> &nbsp; 123-456-789</span>
                                <span><i class="contact__email"></i> &nbsp; info@myblog.com</span>
                            </div>
                            <div class="main-footer__socials">
                                <a href="#"><i class="socials__facebook"></i></a>
                                <a href="#"><i class="socials__instagram"></i></a>
                                <a href="#"><i class="socials__twitter"></i></a>
                                <a href="#"><i class="socials__youtube"></i></a>
                            </div>
                    </div>
                    <div class="main-footer__column">
                        <h3>Quick Links</h3>
                        <br>
                        <ul>
                            <a href="#">
                                <li>События</li>
                            </a>
                            <a href="#">
                                <li>Команда</li>
                            </a>
                            <a href="#">
                                <li>Упражнения</li>
                            </a>
                            <a href="#">
                                <li>Галлерея</li>
                            </a>
                            <a href="#">
                                <li>Что-то еще</li>
                            </a>
                        </ul>
                    </div>
                    <div class="main-footer__column">
                        <h3>Контакты</h3>
                        <br>
                        <form action="index.html" method="post">
                            <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                            <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                            <button type="submit" class="btn btn-big contact-btn">
                                <i class="fas fa-envelope"></i>
                                Отправить
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer__bottom bottom-footer">
                <div class="bottom-footer__container">
                    <div class="bottom-footer__copy">© Franchise 2023</div>
                </div>
            </div>
        </footer> -->
      
        <!-- <div class="footer container-fluid">
            <div class="footer-content container">
                <div class="row">
                    <div class="footer-section about col-md-4 col-12">
                        <h3 class="logo-text">Мой блог</h3>
                        <p>
                            Мой блог - это блог сделаннный с целью обучения аудитории на платформе
                            YouTube и заработка доволнительной кармы)).
                        </p>
                        <div class="contact">
                            <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
                            <span><i class="fas fa-envelope"></i> &nbsp; info@myblog.com</span>
                        </div>
                        <div class="socials">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
        
                    <div class="footer-section links col-md-4 col-12">
                        <h3>Quick Links</h3>
                        <br>
                        <ul>
                            <a href="#">
                                <li>События</li>
                            </a>
                            <a href="#">
                                <li>Команда</li>
                            </a>
                            <a href="#">
                                <li>Упражнения</li>
                            </a>
                            <a href="#">
                                <li>Галлерея</li>
                            </a>
                            <a href="#">
                                <li>Что-то еще</li>
                            </a>
                        </ul>
                    </div>
        
                    <div class="footer-section contact-form col-md-4 col-12">
                        <h3>Контакты</h3>
                        <br>
                        <form action="index.html" method="post">
                            <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                            <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                            <button type="submit" class="btn btn-big contact-btn">
                                <i class="fas fa-envelope"></i>
                                Отправить
                            </button>
                        </form>
                    </div>
        
                </div>
        
                <div class="footer-bottom">
                    &copy; myblog.com | Designed by Andrievskii
                </div>
            </div>
        </div>
        // footer -->
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>