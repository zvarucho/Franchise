<?php
    include "app/database/db.php";

    $isSubmit = false;
    $errMsg = '';
    $successfulMsg = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $admin = 0;
        $login = trim($_POST['login']);
        $email = trim($_POST['mail']);
        $passF = trim($_POST['pass-first']);
        $passS = trim($_POST['pass-second']);

        if($login === '' || $email === '' || $passF === ''){
            $errMsg = "Не всі поля заповнені!";
        }elseif (mb_strlen($login, 'UTF8') < 2){
            $errMsg = "Логін занадто короткий!";
        }elseif($passF !== $passS){
            $errMsg = "Паролі повинні збігатися!";
        } else{
            $existence = selectOne('users', ['email' => $email]);
            if($existence['email'] === $email){
                $errMsg = "Користувач з такою поштою уже існує!";
            } else {
                $pass = password_hash($passF, PASSWORD_DEFAULT);
                $post = [
                    'admin' => $admin,
                    'username' => $login,
                    'email' => $email,
                    'password' => $pass,
                ];
                $id = insert('users', $post);
                $successfulMsg = "Користувач " . "<strong>" . $login . "</strong>" . " успішно зареєстрований!";
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
?>