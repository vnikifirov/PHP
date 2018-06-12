<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part1</title>
</head>
<body>
    <?php
      session_start();
      if(isset($_SESSION['userName'])) {
        echo 'Привет, '.$_SESSION["userName"].'</br>';
      }
    ?>
    <!--Задание 1-->
</body>
</html>