

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Func Part 2</title>
</head>
<body>
    <?php
      if(isset($_POST['submit'])) {
        $userName = $_POST['fname'];
        $age = $_POST['age'];
        $msg = $_POST['msg'];
        
        $str = '';
        
        if(!$userName != strip_tags($userName) || !$msg != strip_tags($msg)) {          
          $str = 'Привет, '.$userName.', '.$age.' лет.'.'</br>'.'Твое сообщение: '.$msg;             
        } else {
          // contains HTML
          $str = 'Введенные данные некорректные';  
        }
        
        echo $str;
      }
    ?>
  
    <!--Задание 2-->
    <form action="secondForm.php" method="post">      
        <label for="fname">Имя:</label>
        <input type="text" id="fname" name="fname"/></br>
        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age"/></br>      
        <label for="msg">Сообщение:</label></br>  
        <textarea id="msg" name="msg" rows="4" cols="25"></textarea> </br>
        <input type="submit" name="submit" value="Отправить запрос"/></br>
    </form>

</body>
</html>