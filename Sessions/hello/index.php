<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Func Part1</title>
</head>
<body>
    <?php
      session_start();
  
      if(isset($_POST['submit'])) {
        $name = $_POST['userName'];
        $_SESSION['userName'] = $name;
        header("Location: hello.php");
        exit();
      }
    ?>
    <!--Задание 1-->
    <form style="margin-bottom: 20px;" action="index.php" method="post">      
        <label for="userName">Ваше имя:</label>
        <input type="text" id="" name="userName"/></br>
        <input type="submit" name="submit" value="Отправить"/></br>
    </form>  

</body>
</html>