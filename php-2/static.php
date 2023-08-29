<?php

function countNumber(){
 static $number = '<h1>' . 43 . '</h1>';
 echo  $number . '<br>';
 $number ++;
}
countNumber();
countNumber();
countNumber();
countNumber();
countNumber();

?>
