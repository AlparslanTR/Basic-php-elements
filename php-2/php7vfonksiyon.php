<?php

declare(strict_types=1);
// Katı kurallar açık
function topla(int $number1,int $number2) : string{
    return (string) ($number1 + $number2);
}
echo '<h1>' . topla(15,25) . '<h1/>';
?>