<?php
/////////Write a function to check whether a number is prime or not.

function isPrime($number) {
    // بما انو العدد 2 هو اولي ولا ينطبق عليه شرط الموود نضعه بشرط وحي د
    if ($number < 2) {
        return false;
    }

    /// شرط لبقاي الاعداد الاولية
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
//
$number = 13;

if (isPrime($number)) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
