<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part2</title>
</head>
<body>
    <?php
      session_start();
      if(isset($_SESSION['email'])) {
        $email = $_SESSION["email"];
      }
    ?>
  
    <form action="thirdForm.php" method="post">      
      <label for="fname">Имя:</label>
      <input type="text" id="fname" name="fname"/></br>
      <label for="email">Логин:</label>
      <input type="text" id="login" name="login"/></br>      
      <label for="course">Email:</label></br>  
      <?php
        echo '<input type="email" id="email" name="email" value="'.$email.'"/></br>';
      ?>
      <input type="submit" name="submit" value="Отправить"/></br>
    </form>
</body>
</html>