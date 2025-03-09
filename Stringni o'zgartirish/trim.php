<?php



// php da strinlarni bo'sh joyini olib tashlash uchun trim() funksiyasidan foydalanamiz 
// trim() bu stringni ikkala bo'sh joyini olib tashlaydi

function trim_text($text)
{


    $a  =   trim($text);
    echo $a;

}

$text = readline("Matn kiriting: ");
trim_text($text);