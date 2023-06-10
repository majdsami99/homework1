<?php
/////Write a PHP function that accepts an array of integers and return a new array after removing odd
//numbers.
function removeOdd($array) {
    $result = [];

    foreach ($array as $number) {
        if ($number % 2 === 0) {
            $result[] = $number;
        }
    }

    return $result;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filteredNumbers = removeOdd($numbers);

print_r($filteredNumbers);

/*الفرقق بين الايكو والبرينت والبرينت أر 
The print and echo are both language constructs to display strings.
The echo has a void return type, whereas print has a return value of 1
 so it can be used in expressions.
  The print_r is used to display human-readable information about a variable.*/