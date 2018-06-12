<?php
    echo '<h2>Задание 1</h2>';

    $srt_uppercase = "LONDON";    
    echo ucwords(strtolower($srt_uppercase)).'</br>';

    echo '<h2>Задание 2</h2>';
    $password = '1234';
    echo (preg_match('/\d{5,10}/',$password)) ? 'Пароль подходит' : 'You need to think other password!';

    echo '<h2>Задание 3</h2>';
    $string = '123456789';
    echo substr($string, -4).'</br>';

    echo '<h2>Задание 4</h2>';
    $email = 'https://www.google.ru/';    
    
    echo (0 === strpos($email, 'http') ? 'да' : 'нет').'</br>';

    echo '<h2>Задание 5</h2>';
    $supported_image = array('jpg','png');
    $src_file_name = 'image.jpg';
    $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));
    echo ((in_array($ext, $supported_image)) ? "да" : 'нет').'</br>';

    echo '<h2>Задание 6</h2>';
    $date = 'Source: 3.10.2017'.'</br>';

    echo $date.str_replace('.', '/', $date);   
    
    echo '<h2>Задание 7</h2>';
    $str = 'abcabc'.'</br>';

    echo $date.str_replace('abc', '123', $str).'</br>';

    echo '<h2>Задание 7</h2>';
    $str = 'abcabc'.'</br>';
  
    echo $date.str_replace('abc', '123', $str).'</br>';
  
    echo '<h2>Задание 8</h2>';
    $wordsAndNum = '1a2b3c4b5d6e7f8g9h0'.'</br>';
  
    echo preg_replace('/[0-9]+/', '', $wordsAndNum).'</br>';
  
    echo '<h2>Задание 9</h2>';
    $numStr = '123456789';
    echo substr_replace($numStr, '!!!', 3, 5).'</br>';
  
    echo '<h2>Задание 10</h2>';
    $date = '3/10/2017'.'</br>';
  
    echo $date.str_replace('/', '.', $date);  
  
    echo '<h2>Задание 11</h2>';
    $n = $i = 7;
    while ($i--)
        echo str_repeat($n - $i, $n - $i)."</br>";
  
    echo '<h2>Задание 12</h2>';
    $arr = [3, 11, 13, 31, 28, 34];
    $res = preg_grep('/3/', $arr);  
    echo '<pre>'; print_r($res); echo '</br>';
?>
