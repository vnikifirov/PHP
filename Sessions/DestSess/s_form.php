<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part3.1</title>
</head>
<body>
    <?php
      session_start();
      if(isset($_SESSION['age'])) {
        $age = $_SESSION["age"];          
      }
  
      if(isset($_SESSION['city'])) {        
        $city = $_SESSION["city"];    
      }
    ?>
        
    <form action="t_form.php" method="post">
      <label for="age">Имя:</label></br>  
      <input type="name" id="name" name="name"/></br>   
      <label for="age">Возраст:</label></br>  
      <?php echo '<input type="number" id="age" name="age" value="'.$age.'"/></br>'; ?>
      <label for="city">Город:</label></br>       
      <?php echo '<input type="city" id="city" name="city" value="'.$city.'"/></br>'; ?>
      <input type="submit" name="submit" value="Отправить"/></br>
    </form>
    
</body>
</html>