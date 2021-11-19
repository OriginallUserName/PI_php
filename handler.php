<?php
$precision = $_GET['precision'];
$int_precision = intval($precision);
//echo $int_precision;
    $theValue = 100000;
    $bottom = 1;
    $pi = floatval(0);
for ($i=1; $i<$theValue; $i++)
{
    if($i%2==1)
    {
        $pi+=4/$bottom;
    }
    else
    {
        $pi-=4/$bottom;
    }
      $bottom+=2;
    // $pi=round($pi,$i, PHP_ROUND_HALF_DOWN);
}
//echo $pi;
echo number_format($pi, $precision);
?>
