
<?php
//Write a function that accepts 2 arrays and return a new array that holds 
//the value of multiplying each
//item in the first array by the corresponding item in the second array.
function multiply($array1, $array2) {
    $result = [];

    // Check if the arrays have the same length
    if (count($array1) !== count($array2)) {
        return $result;
    }

    // ضرب المصفوفة بالثنية حسب الموقع الاندكس 
    foreach ($array1 as $index => $value) {
        $result[] = $value * $array2[$index];
    }

    return $result;
}


$array1 = [2, 4, 6, 8];
$array2 = [2, 4, 6,8];

$resultArray = multiply($array1, $array2);
print_r($resultArray);
?>
