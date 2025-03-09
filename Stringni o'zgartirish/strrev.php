<?php


// php da strinigni teskari o'girish uchun strrev funksiyasidan foydalanamiz


function reverse_string($text)
{

    $a  = strrev($text);
    echo $a;

}


$text = readline("Matn kiriting: "); 
reverse_string($text);