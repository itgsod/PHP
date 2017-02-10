<?php
$x = 3.14159;
$str= "Hello World";

function test_global(){
    echo $GLOBALS['x'];
    echo $GLOBALS['str'];
}

test_global();
echo "\n";
function test_superglobal(){
    
    
}
test_superglobal();
?>
