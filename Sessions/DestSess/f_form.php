<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part3.1</title>
</head>
<body>
    <?php
      session_start();
  
      if(isset($_POST['submit'])) {
        $age = $_POST['age'];
        $_SESSION['age'] = $age;
        
        $city = $_POST['city'];
        $_SESSION['city'] = $city;
        
        header("Location: s_form.php");
        exit();
      }
    ?>
  
    <form action="f_form.php" method="post">      
      <label for="age">Возраст:</label></br>  
      <input type="number" id="age" name="age"/></br>   
      <label for="city">Город:</label></br> 
      <input type="city" id="city" name="city"/></br>   
      <input type="submit" name="submit" value="Отправить"/></br>
    </form>
    
</body>
</html>