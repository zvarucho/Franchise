<?php
// контроллер
include SITE_ROOT . "/app/database/db.php";
$errMsg = [];
$status = 0;
// Отримання значення score з форми
$score = isset($_POST['score']) ? $_POST['score'] : 0;
$quizResult = selectAll('quiz');

// Код для форми створення коментаря
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goQuiz'])){
    var_dump($score);
    $names = trim($_POST['names']);
    if($names === ''){
        array_push($errMsg, "Не всі поля заповнені!");
    }elseif (mb_strlen($names, 'UTF8') < 3){
        array_push($errMsg, "Ім'я повинно бути більше 3 символів");
    }else{
            $quiz = [
                'names' => $names,
                'score' => $score
            ];
            $quiz = insert('quiz', $quiz);
        }
}else{
    $names = '';
}

?>