<?php


// php da stringini so'zlarini sanash uchun str_word_count() funcksiyasidan foydalanamiz


function word_count($str)
{
    $a = str_word_count($str);

    echo "Siz kiritgan matn $a ta so'zdan iborat ekan";

}

$str = readline("Matn kiriting: ");

word_count($str);