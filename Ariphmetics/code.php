<html>
<head>
</head>
<body>
<?php
    echo "<h3>Задание 1</h3>";
    $course_name = "Основы PHP";
    echo "<h1>Курс $course_name</h1>";
    $numbg  = "Группа: 1651";
    $namemy = "Меня зовут Никифоров Вадим";
    echo "$numbg </br> $namemy";

    echo "<h3>Задание 2</h3>";
    $a = 94;
    $b = 159;
    echo "$a + $b = ", $a + $b, "</br>";
    echo "$a * $b = ", $a * $b, "</br>";
    echo "($a + $b)/2 = ", ($a + $b) / 2, "</br>";
    echo "$a^2 + $b^2 = ", (pow($a, 2) + pow($b, 2)), "</br>";

    echo "<h3>Задание 3</h3>";

    $x = 4;
    $y = 8;
    $z = 4;
    echo "x = $x, y = $y, z = $z </br> 
    Рачет по формуле = 
    ", Pow(($x + 1), 4) - 2 * ($z - 2 * Pow($x, 2) + Pow($y, 2)) + Sqrt(Abs(sin($y))), "</br> 
    После окургления = ", Round(Pow(($x + 1), 4) - 2 * ($z - 2 * Pow($x, 2) + Pow($y, 2)) + Sqrt(Abs(sin($y)))), "";

    echo "<h3>Задание 4</h3>";

    $number = 276; 
    $x = floor($number * .01);
    $y = floor(($number - ($x * 100)) * .1);
    $z = $number - (floor(($x * 100) + (floor(($number - ($x * 100)) * .1) * 10)));    
    $sum_numbers = $x + $y + $z;

    echo "x = ".$number."</br>";
    echo "a = ".$x." b = ".$y."c = ".$z."</br>";
    echo "Сумма цифр = ", $x + $y + $z, "</br>";

    echo "<h3>Задание 5</h3>";

    $f = 167;
    echo "a = $f </br>";
    
    echo ($f % 2 == 0) 
    ? "Уменшаем - ".($f / 2) 
    : "Увеличиваем - ".($f * 3);        
        

    echo "<h3>Задание 6</h3>";

    $d = 1;
    echo "a = $d </br>";
    if ($d > 50)
        echo "Больше 50. ", Pow($d, 2), "";
    else if ($d > 10 and $d < 30)
        echo "0";
    else
        echo "Ошибка";

    echo "<h3>Задание 7</h3>";

    $p1 = 57;
    $p2 = 96;
    echo "a = $p1, b = $p2 </br>";
    echo !(Abs($p1 - $p2) > 20) ? "Да" : "Нет";    

    echo "<h3>Задание 8</h3>";

    $dn = 2;
    echo "день = $dn</br>";
    switch ($dn) {
        case 1:
            echo "Понедельник";
            break;
        
        case 2:
            echo "Вторник";
            break;
        
        case 3:
            echo "Среда";
            break;
        
        case 4:
            echo "Четверг";
            break;
        
        case 5:
            echo "Пятница";
            break;
        
        case 6:
            echo "Суббота";
            break;
        
        case 7:
            echo "Воскресенье";
            break;
        
        default:
            echo "Неизвестный день";
            break;
    }

    echo "<h3>Задание 9</h3>";

    $mc = 9;
    echo "месяц = $mc </br>";
    switch ($mc) {
        case 1:
        case 2:
        case 12:
            echo "Зима";
            break;
        
        case 3:
        case 4:
        case 5:
            echo "Весна";
            break;
        
        case 6:
        case 7:
        case 8:
            echo "Лето";
            break;
        
        case 9:
        case 10:
        case 11:
            echo "Осень";
            break;
    }

    echo "<h3>Задание 10</h3>";

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 1)
            echo "$i ";
    }

    echo "<h3>Задание 11</h3>";

    for ($i = 2; $i <= 50; $i += 2) {
        echo "$i ";
    }

    echo "<h3>Задание 12</h3>";

    $wl = 46;
    $s  = 0;
    while ($wl <= 102) {
        $s = $s + $wl;
        $wl += 2;
    }
    echo "$s";

    echo "<h3>Задание 13</h3>";

    $dw = 11;
    do {
        echo "$dw ";
        $dw += 11;
    } while ($dw <= 55);

    echo "<h3>Задание 14</h3>";

    $cols = rand(1, 10);
    $rows = rand(1, 10);
    echo "cols = $cols; <br/> rows = $rows;";
    echo '<table style="border:1px solid black;">';
    for ($i = 1; $i <= $cols; $i++) {
        echo '<tr style="border:1px solid black;">';
        for ($j = 1; $j <= $rows; $j++) {
            echo '<td style="border:1px solid black;">', $i * $j, '</td>';
        }
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>
