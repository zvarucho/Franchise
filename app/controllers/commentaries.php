<?php
// контроллер
include_once SITE_ROOT . "/app/database/db.php";
$errMsg = [];
$status = 0;
$commentsForAdm = selectAll('comment');
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goQuiz'])){
    $names = trim($_POST['names']);

    if($names === ''){
        array_push($errMsg, "Не всі поля заповнені!");
    }elseif (mb_strlen($names, 'UTF8') < 3){
        array_push($errMsg, "Ім'я повинно бути більше 3 символів");
    }else{
            $quiz = [
                'names' => $names
            ];
            $quiz = insert('quiz', $quiz);
        }
}else{
    $names = '';
}
// Код для форми створення коментаря
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goComment'])){
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    if($email === '' || $comment === ''){
        array_push($errMsg, "Не всі поля заповнені!");
    }elseif (mb_strlen($comment, 'UTF8') < 5){
        array_push($errMsg, "Логін повинен бути більше 5 символів");
    }else{
        $user = selectOne('users', ['email' => $email]);
        if ($user['email'] == $email && $user['admin'] == 1){
        $status = 1;
        } 
            $comment = [
                'status' => $status,
                'email' => $email,
                'comment' => $comment
            ];
            $comment = insert('comment', $comment);
        }
}else{
    $email = '';
    $comment = '';
}
// Видалення коменаря
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('comment', $id);
    header('location: ' . BASE_URL . 'admin/comments/index.php');
}

// Статус опублікувати чи зняти з публікації
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $publish = $_GET['publish'];

    $postId = update('comments', $id, ['status' => $publish]);

    header('location: ' . BASE_URL . 'admin/comments/index.php');
    exit();
}


// Апдейт
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $oneComment = selectOne('comment', ['id' => $_GET['id']]);
    $id =  $oneComment['id'];
    $email =  $oneComment['email'];
    $text1 = $oneComment['comment'];
    $pub = $oneComment['status'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_comment'])){
    $id =  $_POST['id'];
    $text = trim($_POST['content']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if($text === ''){
        array_push($errMsg, "Коментарій пустий");
    }elseif (mb_strlen($text, 'UTF8') < 5){
        array_push($errMsg, "Кількість символів менше 5");
    }else{
        $com = [
            'comment' => $text,
            'status' => $publish
        ];

        $comment = update('comment', $id, $com);
        header('location: ' . BASE_URL . 'admin/comments/index.php');
    }
}else{
    $text = trim($_POST['content']);
    $publish = isset($_POST['publish']) ? 1 : 0;
}
?>