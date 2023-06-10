<?php
//Write a function to calculate the factorial of a number (a non-negative integer)
//. The function accept the number as an argument
function factorial($number) {
   //يجب فحص العدد مسيبقا  اذا كان سالب ام موجب 
   //مممكن نعمل ميثود الالبسليوت 
    if ($number < 0) {
        return null;
    }

 
    if ($number === 0) {
        return 1;
    }

   //حيبدا يسمك الرقم وينقص منو واحد ليوص للصفر
    return $number * factorial($number - 1);
}


$number = 5;
$factorial = factorial($number);

echo "The factorial of $number is: $factorial";
