<?php
$max = 100;
$arr = array();
for($i=0;$i<$max;$i++){
    $arr[$i]= mt_rand(0,100);
}

sort($arr);
for($i=0;$i<$max;$i++){
    echo $arr[$i];
    echo " ";
}
echo "\n";
echo rsort($arr);
for($i=0;$i<$max;$i++){
    echo $arr[$i];
    echo " ";
}

?>
