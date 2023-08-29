<?php

function test(){
    return 'test';
}

if (function_exists('test')){
    echo '<h1>' .'Test Fonksiyonu zaten var'. '</h1>';
}
else{
    echo '<h1>' .'Test Fonksiyonu Yoktur'. '</h1>';
}
echo '<hr>'

?>