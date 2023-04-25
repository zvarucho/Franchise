<?php
    include "../../path.php";
    include_once SITE_ROOT . "/app/controllers/quiz.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Вітаю!</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <div class="container">
      <div id="end" class="flex-center flex-column">
        <h1 name="score" id="finalScore"></h1>
        <form method="post" action="end.php">
          <input type="text" name="names" id="username" placeholder="Ім'я"/>
          <input type="hiden" id="finalScore" name="score" placeholder="Ваш результат..">
          <button type="submit" class="btn" id="saveScoreBtn" name="goQuiz">Зберегти</button>
          <!-- onclick="saveHighScore(event)" disabled -->
        </form>
        <a class="btn" href="game.php">Спробувати ще раз</a>
        <a class="btn" href="quiz.php">На Головну</a>
      </div>
    </div>
    <script src="end.js"></script>
  </body>
</html>
