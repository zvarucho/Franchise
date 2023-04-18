<link rel="stylesheet" href="assets/css/style.css">
<header class="header">
    <div class="header__container">
        <a href="<?php echo BASE_URL ?>" class="header__logo">
            <img src="../../assets/img/logo4.svg" alt="logo">
        </a>
        <div class="dropdown">
            <a href="<?php echo BASE_URL . 'log.php'?>" class="dropdown__account">
                <img class="account-img" src="../../assets/img/account-white.svg" alt="login">
                <button class="dropbtn"><?php echo $_SESSION['login']; ?></button>
            </a>  
            <a class="dropdown__exit"href="<?php echo BASE_URL . "logout.php"; ?>">Вихід</a>
        </div>
    </div>
</header>