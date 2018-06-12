<?php
    echo '<h2>Задание 1</h2>';
    $n   = 15;
    $arr = array();
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $arr[$i] = 1;
        } else {
            $arr[$i] = 0;
        }
        echo $arr[$i];
    }
    echo '<h2>Задание 2</h2>';

    $n   = 30;
    $a   = 0;
    $b   = 1;
    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1, 10);
        $a += $arr[$i];
        $b *= $arr[$i];
        echo ' ', $arr[$i];
    }
    echo '<br/>Сумма элементов = ', $a;
    echo '<br/>Произведение элементов = ', $b;
    echo "<br/>Сумма элементов(функция) = " . array_sum($arr) . "";
    echo "<br/>Произведение элементов(функция) = " . array_product($arr) . "";
    echo '<h2>Задание 3</h2>';

    $tmp = array_count_values($arr);
    for ($i = 0; $i < $n; $i++) {
        $result = array_search($arr[$i], $tmp);
        echo 'Значение ', $result, ' - ', $arr[$i], '<br/>';

    }
    $max    = max($tmp);
    $result = array_search($max, $tmp);
    echo 'Чаще всего ', $result, ' - ', $max, '<br/>';

    echo '<h2>Задание 4</h2>';
    echo 'Было: ';
    for ($i = 0; $i < $n; $i++) {
        echo ' ', $arr[$i];
    }
    echo '<br/>Стало (функция): ';

    $result = array_unique($arr);
    for ($i = 0; $i < $n; $i++) {
        echo ' ', $result[$i];
    }
    echo '<br/>Стало: ';

    $result = array_unique($arr);
    for ($i = 0; $i < $n; $i++) {
        echo ' ', $result[$i];
    }
    echo '<h2>Задание 5</h2>';
    $a5 = array();
    $b5 = array();
    for ($i = 0; $i < 15; $i++) {
        $a5[$i] = rand(-10, 20);
        $b5[$i] = rand(-10, 20);
    }
    $result = array_merge($a5, $b5);
    sort($result);
    for ($i = 0; $i < $n; $i++) {
        echo ' ', $result[$i];
    }

    echo "<h3> Задание 6 </h3>";
    $str='3.10.2017';
    echo $str, "<br>", str_replace('.', '-', $str);

    echo "<h3> Задание 7 </h3>";
    $str='abcabc';
    $str1=str_replace('c', '3', (str_replace('b', '2', (str_replace('a', '1', $str)))));
    echo $str, "<br>", $str1;

    echo "<h3> Задание 8 </h3>";
    $str='1a2b3c4b5d6e7f8g9h0';
    echo $str, "<br>", preg_replace('/[0-9]{1}/', '', $str);

    echo "<h3> Задание 9 </h3>";
    $str='123456789';
    echo $str, "<br>", str_replace(substr($str, 2, 5), '!!!', $str);

    echo "<h3> Задание 10 </h3>";
    $date='2013-12-31';
    echo $date, "<br>", date("d.m.Y", strtotime($date));
    
    echo "<h3> Задание 11 </h3>";
    for($i=1; $i<10; $i++)
    {
      echo str_repeat($i, $i), "<br>";
    }

    echo "<h3> Задание 12 </h3>";
    $arr=[3, 11, 13, 31, 28, 34];
    for($i=0; $i<count($arr); $i++)
    {
      if(substr_count(strval($arr[$i]), '3')>=1)
        echo $arr[$i], ' ';
    }
?>
