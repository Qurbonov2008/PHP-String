<?php 



// Stringini uzunligini o'lchash uchun strlen() funcksiyasidan foydalanamiz

// strlen() string ichidagi harflarni sanaydi 

function matn_uzunligi()
{
$status = readline("Matn kiriting: "); // Unutmang kiritilgan matn orasi ochiq bo'lsa ham uni ham 1 deb sanaydi

$strlen = strlen($status);
echo "Siz kiritgan matn $strlen ta harf ekan";

}


matn_uzunligi();