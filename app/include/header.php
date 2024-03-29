<header class="header">
    <div class="header__container">
        <a href="<?php echo BASE_URL ?>" class="header__logo">
            <img src="assets/img/logo4.svg" alt="logo">
        </a>
        <nav class="header__menu menu">
            <div class="menu__body">
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="<?php echo BASE_URL ?>" class="menu__link">Головна</a>
                    </li>
                    <li class="menu__item">
                        <a href="#main" class="menu__link">Про автора</a>
                    </li>
                    <li class="menu__item">
                        <a href="#faq" class="menu__link">Франшиза</a>
                    </li>
                    <li class="menu__item">
                        <a href="#testimonials" class="menu__link">Відгуки</a>
                    </li>
                </ul>
            </div>
        </nav>
        <a href="#" class="header__cart cart-header">
            <span class="cart-header__text">Придбано</span>
            <span class="cart-header__quantity">3</span>
        </a>
        <a href="#pricing" class="header__button button">Придбати</a>
        <div class="dropdown">
            <?php if (isset($_SESSION['id'])): ?>
                <a href="<?php echo BASE_URL . 'log.php'?>" class="dropdown__account">
                    <img class="account-img" src="assets/img/account-white.svg" alt="login">
                    <button class="dropbtn"><?php echo $_SESSION['login']; ?></button>
                </a>
                <div class="dropdown-content">
                    <?php if ($_SESSION['admin']): ?>
                        <a href="<?php echo BASE_URL . "../../admin/posts/index.php"; ?>">Адмін панель</a>
                    <?php endif; ?>
                    <a href="<?php echo BASE_URL . "logout.php"; ?>">Вихід</a>
                </div>
            <?php else: ?>
                <a href="<?php echo BASE_URL . "log.php"; ?>" class="dropdown__account">
                    <img class="account-img" src="assets/img/account-white.svg" alt="login">
                    <button class="dropbtn">Ввійти</button>
                </a>
                <div class="dropdown-content">
                    <a href="<?php echo BASE_URL . "reg.php"; ?>">Реєстрація</a>
                </div>
            <?php endif; ?>
        </div>
        <a href="" class="header__language">en</a>  
        <!-- <a href="" class="account">
            <i class="fa fa-user"></i>
            Кабинет
            <ul class="log-account">
                <li><a href="#">Админ панель</a></li>
                <li><a href="#">Выход</a></li>
            </ul>
        </a> -->
        <button class="icon-menu" type="button">
            <span></span>
        </button>
    </div>
</header>