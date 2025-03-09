<?php



// php da stringini katta harfdan kichik harfga olib o'tish uchun strtolower() funksiyasidan foydalanamiz


function big_word($text)
{

    $a = strtolower($text);
    echo $a;

}


$text = readline("Matn kiriting: ");
big_word($text);