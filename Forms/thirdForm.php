<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Func Part 3</title>
</head>
<body>
    <?php
      $display = true;
      
      $courceName = [
        "1" => "HTML",
        "2" => "JavaScript",
        "3" => "PHP"];
  
      $courceDate = [
        "HTML" => "01-10-17",
        "JavaScript" => "02-10-17",
        "PHP" => "03-10-17"];
      $courceTime= [
        "HTML" => "17:00",
        "JavaScript" => "16:50",
        "PHP" => "12:00"];
  
      function clean($value) {
        $value = trim($value);
        $value = stripcslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        
        return $value;
      }
  
      if(isset($_POST['submit'])) {
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $courseId = $_POST['course'];                                       
        $str = '';                
                
        $course = isset($courceName[$courseId]) ? $courceName[$courseId] : ''; 
        $date = isset($courceDate[$course]) ? $courceDate[$course] : ''; 
        $time = isset($courceTime[$course]) ? $courceDate[$course] : '';        
        
        if(!empty($name) && !empty($email)) {    
          $name = clean($name);
          $email= clean($email);
          $valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
          
          if ($valid_email) {
            $str = 'Здравствуйте, '.$name.'!</br>Первое занятие по курсу '.$course.' состоится '.$date.' в '.$time.'.</br> Инф письмо будет отпр Вам по адресу'.$email.'</br>';                        
            $display = false;
          } else {
            $str = 'Проверьте правильность адреса электронной почты.';    
          }          
          
        } else {
          // contains HTML
          $str = 'Заполните пустые поля.';  
        }
        
        echo $str;
      }
  
      if ($display) {
    ?>
      <!--Задание 2-->
      <form action="thirdForm.php" method="post">      
          <label for="fname">Имя:</label>
          <input type="text" id="fname" name="fname"/></br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"/></br>      
          <label for="course">Курс для изучения:</label></br>  
          <select name="course">
            <option value="1">HTML</option>
            <option value="2">JavaScript</option>
            <option value="3">PHP</option>          
          </select>
          <input type="submit" name="submit" value="Отправить"/></br>
      </form>
    
    <?php
      }
    ?>

</body>
</html>