<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part2</title>
</head>
<body>
    <?php
    session_start();
      if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
      } else {
        echo ($_SESSION['count']++);
      }
    ?>
</body>
</html>