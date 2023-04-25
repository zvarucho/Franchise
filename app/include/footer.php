<?php
    include_once SITE_ROOT . "/app/controllers/commentaries.php";
?>
<footer id="footer" class="footer">
    <div class="footer__main main-footer">
        <div class="main-footer__container">
            <div class="main-footer__column">
                <div class="main-footer__logo">
                    <img src="" alt="logo">
                </div>
                <div class="main-footer__text text">
                    <p>
                        Продукт Franchise надає якісні послуги своїм покупцям. Який має досвід у цій сфері понад 6 місяців та допоміг заробити понад 30-ьом учням. Чекаємо тебе в нашій команді!
                    </p>
                </div>
                <div class="main-footer__social social">
                    <a href="" class="social__link">
                        <img src="assets/img/social/linkedin.svg" alt="social">
                    </a>
                    <a href="" class="social__link">
                        <img src="assets/img/social/twitter.svg" alt="social">
                    </a>
                    <a href="" class="social__link">
                        <img src="assets/img/social/facebook.svg" alt="social">
                    </a>
                    <a href="" class="social__link">
                        <img src="assets/img/social/YouTube.svg" alt="social">
                    </a>
                    <a href="" class="social__link">
                        <img src="assets/img/social/instagram.svg" alt="social">
                    </a>
                </div>
            </div>
            <div class="main-footer__column">
                <div class="main-footer__label">Навігація</div>
                <nav class="main-footer__menu menu-footer">
                    <ul class="menu-footer__list">
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Головна</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Про автора</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Франшиза</a>
                        </li>
                        <li class="menu-footer__item">
                            <a href="" class="menu-footer__link">Відгуки</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="main-footer__column">
                <div class="main-footer__label">Untility Pages</div>
                <nav class="main-footer__menu menu-footer">
                        <ul class="menu-footer__list">
                            <li class="menu-footer__item">
                                <a href="" class="menu-footer__link">Головна</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="" class="menu-footer__link">Про автора</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="" class="menu-footer__link">Франшиза</a>
                            </li>
                            <li class="menu-footer__item">
                                <a href="" class="menu-footer__link">Відгуки</a>
                            </li>
                        </ul>
                </nav>
                </div>
            <div class="main-footer__column">
                <div class="main-footer__label">Зв'язатися</div>
                <div class="main-footer__text text">Залиши свій відгук або пораду щодо продукту.</div>
                <div class="mb-3 col-12 col-md-4 msg">
                        <?php include_once SITE_ROOT . "/app/helps/errorInfo.php"; ?>
                    </div>
                <form action="#" method="post" class="login">
                    <div class="login__div">
                        <input type="hidden" name="page" value="<?=$page; ?>">
                        <input name="email" type="email" placeholder="Введіть свій email" required class="login__input"></input>
                        <textarea name="comment" rows="4" name="message" class="login__textarea" placeholder="Твій відгук..." required></textarea>
                    </div>
                    <button name="goComment" type="submit" class="login__button button">Надіслати</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer__bottom bottom-footer">
        <div class="bottom-footer__container">
            <div class="bottom-footer__copy">© Franchise 2023</div>
        </div>
    </div>
</footer>