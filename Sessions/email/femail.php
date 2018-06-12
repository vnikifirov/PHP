<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part2</title>
</head>
<body>
    <?php
      session_start();
  
      if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        header("Location: semail.php");
        exit();
      }
    ?>
  
    <form action="femail.php" method="post">      
      <label for="course">Email:</label></br>  
      <input type="email" id="email" name="email"/></br>   
      <input type="submit" name="submit" value="Отправить"/></br>
    </form>
</body>
</html>