<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Func Part1</title>
</head>
<body>
    <?php
      if(isset($_POST['submit'])) {
        echo 'Привет, '.$_POST['userName'].'</br>';
      }
    ?>
    <!--Задание 1-->
    <form style="margin-bottom: 20px;" action="firstForm.php" method="post">      
        <label for="userName">Ваше имя:</label>
        <input type="text" id="" name="userName"/></br>
        <input type="submit" name="submit" value="Отправить"/></br>
    </form>  

</body>
</html>