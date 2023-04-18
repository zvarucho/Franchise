<?php
include SITE_ROOT . "/app/database/db.php";

$isSubmit = false;
$errMsg = [];
$successfulMsg = '';

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . "admin/posts/index.php");
    }else{
        header('location: ' . BASE_URL);
    }
}
$users = selectAll('users');

//Код для форми реєстрація
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        array_push($errMsg, "Не всі поля заповнені!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Логін повинен бути більше 2 символів");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Паролі повинні збігатися!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            array_push($errMsg, "Користувач з такою пошттою уже існує!");
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id] );
            userAuth($user);
        }
    }
}else{
      $login = '';
      $email = '';
}
//Код для форми авторизації
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        array_push($errMsg, "Не всі поля заповнені!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);
        }else{
            array_push($errMsg, "Пошта або пароль введені не правильно!");
        }
    }
}else{
    $email = '';
}
// Код додавання користувача з адмінки
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])){


    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        array_push($errMsg, "Не всі поля заповнені!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Логін повинен бути більше 2 символів");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Паролі в двох полях повинні збігатися!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            array_push($errMsg, "Користувач з такою поштою уже існує!");
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            if (isset($_POST['admin'])) $admin = 1;
            $user = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id] );
            userAuth($user);
        }
    }
}else{
    $login = $login;
    $email = '';
}

// Код видалення користувача з адмінки
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('users', $id);
    header('location: ' . BASE_URL . 'admin/users/index.php');
}

// Редагування користувача за допомогою адмінки
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
    $user = selectOne('users', ['id' => $_GET['edit_id']]);

    $id =  $user['id'];
    $admin =  $user['admin'];
    $username = $user['username'];
    $email = $user['email'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){

    $id = $_POST['id'];
    $mail = trim($_POST['mail']);
    $login = trim($_POST['login']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $admin = isset($_POST['admin']) ? 1 : 0;

    if($login === ''){
        array_push($errMsg, "Не всі поля заповнені!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Логін повинен бути більше 2 символів");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Паролі в обох полях повинні збагітися!");
    }else{
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        if (isset($_POST['admin'])) $admin = 1;
        $user = [
            'admin' => $admin,
            'username' => $login,
            // 'email' => $mail,
            'password' => $pass
        ];

        $user = update('users', $id, $user);
        header('location: ' . BASE_URL . 'admin/users/index.php');
    }
}else{
    $id =  $user['id'];
    $admin =  $user['admin'];
    $username = $user['username'];
    $email = $user['email'];
}

?>