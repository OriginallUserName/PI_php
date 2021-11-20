<?php
$precision = $_GET['precision'];
$int_precision = intval($precision);
   $theValue = 10000000;
   $dx = 1./$theValue;
   $g=doubleval(0);
$y=doubleval(0);
$s=doubleval(0);
$m=doubleval(1/1.00001);
$k=doubleval(0);
$ds=doubleval(0);


   for ($i=0;$i<$theValue;$i++){
       $g=$k+$dx;
       if($g>=1) {$g=$m;}
       $y=sqrt(1-($k*$k))-((sqrt(1-($k*$k))-sqrt(1-($g*$g)))/2);
       $s=$y*$dx;
       $ds+=$s;
       $k+=$dx;
   }
   $pi=doubleval(4)*$ds;


echo number_format($pi, $precision)
?>
