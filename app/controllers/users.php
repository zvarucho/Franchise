<?php
    include "app/database/db.php";

    $isSubmit = false;
    $errMsg = '';
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

    //Код для форми реєстрація
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
        // tt($_POST);
        // echo 'Я прийшов з форми реєстрації';
        // exit();
        $admin = 0;
        $login = trim($_POST['login']);
        $email = trim($_POST['mail']);
        $passF = trim($_POST['pass-first']);
        $passS = trim($_POST['pass-second']);

        if($login === '' || $email === '' || $passF === ''){
            $errMsg = "Не всі поля заповнені!";
        }elseif(mb_strlen($login, 'UTF8') < 2){
            $errMsg = "Логін занадто короткий!";
        }elseif($passF !== $passS){
            $errMsg = "Паролі повинні збігатися!";
        }else{
            $existence = selectOne('users', ['email' => $email]);
            if($existence['email'] === $email){
                $errMsg = "Користувач з такою поштою уже існує!";
            }else{
                $pass = password_hash($passF, PASSWORD_DEFAULT);
                $post = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass,
                ];
                $id = insert('users', $post);
                $user = selectOne('users', ['id' => $id]);
                userAuth($existence);
                // tt($_SESSION);
                // exit();
                // $successfulMsg = "Користувач " . "<strong>" . $login . "</strong>" . " успішно зареєстрований!";
                // $isSubmit = true;
                // tt($post);
            }
        }
        // $last_row = selectOne('users', ['id' => $id]);
    }else{
        echo 'GET';
        $login = '';
        $email = '';
    }
        // $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
    //Код для форми авторизації
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
        $email = trim($_POST['mail']);
        $pass = trim($_POST['password']);

        if($email === '' || $passF === ''){
            $errMsg = "Не всі поля заповнені!";
        }else{
            $existence = selectOne('users', ['email' => $email]);
            // tt($existence);
            if($existence && password_verify($pass, $existence['password'])){
                userAuth($existence);
            }else{
                $errMsg = "Пошта або пароль введені неправильно!";
            }
        }   
    }else{
        $email = '';
    }
?>