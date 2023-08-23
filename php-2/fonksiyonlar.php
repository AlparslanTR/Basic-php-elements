<?php

function Name(){
    echo "Alparslan";
}
Name();

$surname = "Akbaş";

function MyName(){
    return $GLOBALS ['surname'] . ' ' . Name();
}

echo MyName();