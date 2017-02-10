

<?php
function sum($x,$y){
    return $x+$y;
}

echo Sum(4,6); // Note that Sum is NOT case-sensitive
echo "\n";
// Recursive function (Not that good!)
function fibonacci ($n)
{
  if ($n == 1 || $n == 2)
  {
    return 1;
  }
  else
  {
    return fibonacci( $n - 1)+fibonacci( $n - 2 );
  }
}
echo fibonacci(30);
echo "\n";

// Non recursive function (Much better!)

function fib_iter($num, $show_series="no") {
  $retval = "";
  if ($num == 1 ) {
    return 1;
  }
  $num1=1;
  $num2=0;
  $retval = "1";

  for ($i = 1; $i < $num; $i++) {
    $fib = $num2 + $num1;
    $num2 = $num1;
    $num1=$fib;
    if ($show_series == 'yes') {
        $retval .= ", ".$fib;
    }
  }
  if ($show_series == 'yes') {
    return $retval;
  } else {
    return $fib;
  }
}
echo (fib_iter(30, "no"));
echo "\n";
echo (fib_iter(50, "no"));

?>


