<?php    
  # Работа с датами
  echo '<h1>Задание 1</h1>';
  $dt_now = new DateTime();
  $date = new DateTime('2010-09-01 7:25:59');
  #$interval = date_diff($dt_now, $date);  
  $inter_sec = $dt_now->getTimestamp() - $date->getTimestamp();
  echo 'Total Sec - '.$inter_sec."</dr>";


  echo '<h1>Задание 2</h1>';  
  $dt_now = new DateTime();
  $str_dt_now = ((new DateTime())->format('Y-m-d'));
  $dt_morning = new DateTime(''.($str_dt_now).' 7:23:48');  
  #$interval = date_diff($dt_now, $dt_morning);  
  $interval = $dt_now->diff($dt_morning);
  
  echo 'Now - '.($dt_now->format('Y-m-d H:i:s')).'</br>';
  echo 'Morning - '.($dt_morning->format('Y-m-d H:i:s')).'</br>';
  echo 'Total Hours - '.($interval->format('%H hours'))."</dr>";

  echo '<h1>Задание 3</h1>'; 
  #'2025-12-31', '31.12.2025', '31.12.25', '12:59:59'.
  $dt_now = new DateTime();
  echo 'First - '.($dt_now->format('Y-m-d')).'</br>';
  echo 'Second - '.($dt_now->format('Y.m.d')).'</br>';
  echo 'Third - '.($dt_now->format('H:i:s'))."</dr>";


  echo '<h1>Задание 4</h1>'; 
  $days = array( 
    1=> "Monday",
    2=> "Tuesday",
    3=> "Wednesday",
    4=> "Thursday",
    5=> "Friday",
    6=> "Saturday",
    7=> "Sunday" 
  );
  
  #date('w'); // day of week
  #date('l'); // dayname

  $date = '2010-09-01';
  $num_day = date('N', strtotime($date));
  echo 'Day of weak - '.($days[$num_day])."</dr>"; 

  echo '<h1>Задание 5</h1>'; 
   $months = array( 
    1=> "Jan",
    2=> "Feb",
    3=> "Mar",
    4=> "Apr",
    5=> "May",
    6=> "Jun",
    7=> "Jul",
    8=> "Aug",
    9=> "Sep",
    10=> "Oct",
    11=> "Nov",
    12=> "Dec"
    );  

    #date('w'); // day of week
    #date('l'); // dayname
    #date('N', strtotime($date)); // day number

    $dt_curr = (new DateTime())->format('Y-m-d');
    $num_mon = date('m', strtotime($dt_curr));
    echo 'Day of weak - '.($months[$num_mon])."</dr>"; 

   echo '<h1>Задание 6</h1>'; 
   $src_date = '2025-12-31';
   $res_date = (new DateTime($src_date))->format('d-m-Y');
  
   echo 'Date in format [d-m-Y] -> '.( $res_date )."</dr>"; 
  
   echo '<h1>Задание 7</h1>';
   $date = new DateTime('2025-12-31');
   #Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.
   #$res_date = date->modify("+2 Day +1 Month +3 Day +1 Year -3 Day"));
   $res_date = $date->modify("+2 Day +1 Month +1 Year");
   echo 'Date in format [d-m-Y] -> '.( $res_date->format('d-m-Y') )."</dr>"; 

  echo '<h1>Задание 8</h1>';
  // current time
  $today = new DateTime();      
  # New Year  
  $next_year = ($today->modify('+1 Year')->format('Y') );
  $new_year = new DateTime($next_year.'-01-01 00:00:01');        
  
  $diff = ($new_year->diff($today)->format("%a")); # Dif in days 
  echo $diff." days left until New Year!"."</br>";
  
  # It may remove-------------------------------
  #$diff = $new_year->diff($today)->format("%r%a");

  #echo ($today->format('d-m-Y'))." is today"."</br>"; 
  #echo ($today->modify('-1 Year')->format('d-m-Y'))." is today"."</br>"; 
  #echo $next_year." is Next Year"."</br>";   
  #echo ($new_year->format('d-m-Y'))." is New Year"."</br>"; 
  #echo ($new_year->diff($today)->format("%a"))." is difference"."</br>";  
  # It may remove-------------------------------

  echo '<h1>Задание 9</h1>';
  #date('w'); // day of week
  #date('l'); // dayname
  #date('N', strtotime($date)); // day number

  $dt_curr = new DateTime();
  $hund_ago = $dt_curr->modify('-100 Day')->format('d-m-Y');
  $weak_day = date('l', strtotime($hund_ago));
  echo '100 days ago was '.$weak_day.' of weak</br>'; 
  
  echo '<h1>Задание 10</h1>';
  # 1) Find the first Friday of the year, adding it to an array;
  # 2) Loop which increments by 7, adding each additional Friday 
  #    to an array until the year no longer matches.  
  
  # Curr Year
  $y = '2017';

  $fridays = array();
  # Find the first Friday of the year    
  $dt = strtotime("{$y}-01-01 Friday");
  # Count the current weak number
  $wk = 0;
  # date(j, [datetime]) - Day of the month without leading zeros	1 to 31
  $d  = date('j', $dt);
  
  # Loop which increments by 7 until the year (in year 52 weaks, google in helping:)) 
  # no longer matches.
  while ($wk < 52) {
    $fridays[] = $dt; # Add the Friday in array
    $wk++; # increments weak
    $d += 7; # Days increments by 7
    # Unix timestamp corresponding to the args given mktime ([hour, minute, second, month, day, year])
    $dt = mktime(0, 0, 0, 1, $d, $y); # Get a next Friday
  }  
  
  $fridays_13th = array();
  foreach($fridays as $friday) {
      if(date('d', $friday) == 13)
        $fridays_13th[] = $friday;
  }
  
  # Show 13th Fridays
  foreach($fridays_13th as $friday) {
        echo  date( "Y-m-d", $friday).'</br>';
  }  

  # Работа с регулярными выражениями
  echo '<h2>Задание 11</h2>';
  $str = 'ahb acb aeb aeeb adcb axeb';  
  echo preg_replace('/a.b/', '!', $str).'</br>';
  
  echo '<h2>Задание 12</h2>';
  $str = 'aa aba abba abbba abca abea';  
  echo preg_replace('/a[b]+a/', '!', $str).'</br>';  

  echo '<h2>Задание 13</h2>';
  $str = 'aa aba abba abbba abca abea';  
  echo preg_replace('/a[b]{0,1}a/', '!', $str).'</br>';  

  echo '<h2>Задание 14</h2>';
  $str = 'aa aba abba abbba abbbba abbbbba';  
  echo preg_replace('/a[b]{2,4}a/', '!', $str).'</br>';
  
  echo '<h2>Задание 15</h2>';
  $email = 'https://site.com/';  
  echo (preg_match('/^(http:\/\/)|^(https:\/\/)/', $email) ? 'Secure' : 'Not Secure' ).'</br>';

  echo '<h2>Задание 16</h2>';
  #$src_file_name = 'image.jpeg';
  $src_file_name = 'image.bpm';
  echo (preg_match('/(\.jpeg)|(\.gif)$/', $src_file_name) ? 'SUIT File Extension' : 'IS NOT SUIT File Extension').'</br>';  

  echo '<h2>Задание 17</h2>';
  $str = 'asf5asg 2asg sahh3';  
  preg_match_all('/\\d+/', $str, $matches);
  $sum = array_sum($matches[0]);
  echo 'Sum: '.$sum.'</br>';  

  echo '<h2>Задание 18</h2>';
  $email = 'mail@yandex.ru';  
  echo (preg_match('/[a-zA-Z\d]+@yandex\.(ru|com)/', $email) ? 'Is an Email' : 'IS not an Email' ).'</br>';
  #echo (preg_match('/[a-zA-Z\d]+@[a-zA-Z\d]+\.(ru|com)/', $email) ? 'Is an Email' : 'IS not an Email' ).'</br>';
?>