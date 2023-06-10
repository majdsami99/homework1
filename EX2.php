<?php
////Write a PHP function that accepts an array of strings and return the longest string found in the array,
//the function should have a 2nd argument that will hold the index of the item that have the longest
//string in the input array.
function findLongestString($strings, &$longestStringIndex) {
    //& by reference حتى ياشر على نفس الاندكس 
    $longestStringIndex = -1;
    $maxLength = 0;

    foreach ($strings as $index => $string) {
        $length = strlen($string);

        if ($length > $maxLength) {
            $maxLength = $length;
            $longestStringIndex = $index;
        }
    }

    return ($longestStringIndex !== -1) ? $strings[$longestStringIndex] : null;
}

// Test case
$strings = ["Hello", "World", "OpenAI", "GPT-3", "Language", "Model"];
$index = -1;

$longestString = findLongestString($strings, $index);
echo "The longest string is: $longestString<br>";
echo "The index of the longest string is: $index<br>";

////another way from chat GPT and i understand it 
//Write a PHP function that accepts an array of strings and return the longest string 
//found in the array,the function should have a 2nd argument that will hold the index of the 
// item that have the longest string in the input array

function findLongest($array, &$index) {
    // index must be with reference to return the value of it 
    $maxLength = 0;
    $longestString = '';

    foreach ($array as $key => $string) {
        $length = strlen($string);

        if ($length > $maxLength) {
            $maxLength = $length;
            $longestString = $string;
            $index = $key;
        }
    }

    return $longestString;
}

// Test case
$strings = ["apple", "banana", "cherry", "durian"];
$longest = findLongest($strings, $index);

echo "The longest string is: $longest\n";
echo "Index of the longest string: $index\n";
