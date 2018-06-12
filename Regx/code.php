<?php
  echo "<h3>Задани 1</h3>";
  function isSimple($num)
  {
    if (gmp_prob_prime($num))
      return "Число $num п осто ";
    else 
      return "Число $num н п осто ";
  }

  echo isSimple(15),"<br>";
  echo isSimple(17);

  echo "<h3>Задани 2</h3>";
  $arr = [1,2,3,4,5,6,7];
  function printArr($arr)
  {
    echo "[";
    for ($i=0;$i<count($arr)-1;$i++)
    {
      echo $arr[$i],",";
    }
    echo $arr[count($arr)-1], "]";
  }

  echo printArr($arr);

  echo "<h3>Задани 3</h3>";
  function getDivisors($num)
  {
    $arr1=[];
    for ($i=1; $i<=$num; $i++)
    { 
      if ($num % $i==0) 
        $arr1[] = $i;
    }
    return $arr1;
  }

  $arr1 = getDivisors(24);
  echo printArr($arr1);

  echo "<h3>Задани 4</h3>";
  function getTable($cols = 10, $rows = 10)
  {
    echo "cols=$cols<br/>";
    echo "rows=$rows";
    echo '<table border="1">';
    
    for ($tr=1; $tr<=$rows; $tr++)
    {
      echo "<tr>";
      for ($td=1; $td<=$cols; $td++)
      {
        echo "<td>". $tr*$td ."</td>";
      }
      echo "</tr>";
    }
    
    echo "</table>";
  }

  getTable();
  
  echo "<h3>Задани 5</h3>";
  function Change($a)
  {
    $a=explode('_', $a);
    $str = '';
    
    foreach ($a as $key => $elem) 
    {
      if($key != 0) 
        $str .= ucfirst($elem);
      else 
        $str .= $elem;
    }
    
    echo $str;
  }
  echo "Было - var_test_text <br/> Стало - ", Change('var_test_text');

  echo "<h3>Задани 6</h3>";
  function Check($a)
  {
    $sum=0;
    for($i=0; $i<strlen($a);$i++)
    {
      if($a[$i]=='(')
          $sum+=1;
      if($a[$i]==')')
        $sum=$sum-1;
      if($sum<0)
        echo "о ибка на позиции $i";
    
      }
    
    if($sum==0)
      echo "н т о ибок";
    if($sum>0)
      echo "о ибка. н т зак ыва щ йс скобки в конц ";

    echo '<br>', $sum;
  }

  $str = '(x+y)*(x-y)-((z-1)*((z+x+y)-z*x))))+y*z';
  
  echo $str, '<br>';
  Check($str);

  echo "<h3>Задани 7</h3>";

  include("ex-file.php");
  require("ex-file.php");
  
  print($user);
  echo $user;
?>