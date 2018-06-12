<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Sess Part3.3</title>
</head>
<body>
    <?php
      if (!isset($_SESSION))
      {
        session_start();
      }
      // remove all session variables
      session_unset(); 
      // destroy the session 
      session_destroy(); 
    ?>        
</body>
</html>