<?php
// PHP String


// String  dagi satrlar bir trinoq yoki qo'shtirnoqda bo'ladi

// Misol uchun 


$a = 'Hello world';
$b = "Hello world";

echo $a . $b;
echo "\n";

// IKKi yoki bittalik qo'shtirnoq bularni farqi bor 
// Agar siz stringni bittalik qo'shtirnoq ichida yozmoqchi bo'lsangiz ishlaydi ammo o'zgaruvchilarni qabul qimaydi

// Misol uchun 
$a = 'World';

$string  = 'Hello $a';
echo $string . "\n";
// Agar siz ikkitalik yani qo'shtirnoqdan foydalanmoqchi bo'lsangiz o'zgaruvchini taniydi va ekranga o'zgaruvchini qiymatini qaytaradi

// Misol uchun 

$a = 'Hello';

echo "$a world \n";


// php da strigni uznligini aniqlash uchun 

// Strlen() funcksiyasidan foydalanamiz

// Sterlen string ichidagi harflarni sanaydi 

$a  = "Hello world";
echo strlen($a);



