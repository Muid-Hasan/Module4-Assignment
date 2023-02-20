<?php

/*1. Write a PHP function to sort an array of strings by their length, 
in ascending order*/
function len($x){

    usort($x,function($a,$b){
        if(strlen($a)==strlen($b)){
            return 0;
        }
        return (strlen($a) < strlen($b)) ? -1 : 1; });

        return $x;

    }

echo "Answer to the question no. 01 ". "\n";
$name= array("aa","bbbbbbb","cccc");
$SortedString=len($name);
print_r($SortedString);

echo "\n";


/*2.Write a PHP function to concatenate two strings, 
but with the second string starting from the end of the first string.*/

function concatenate($string1, $string2) {
    $length1 = strlen($string1);
    $length2 = strlen($string2);
    $result = '';

    for ($i = 0; $i < $length1 + $length2; $i++) {
        if ($i < $length1) {
            $result .= $string1[$i];
        } else {
            $result .= $string2[$i - $length1];
        }
    }

    return $result;
}


echo "Answer to the question no. 02 ". "\n";
$string1 = "Muid";
$string2 = "Hasan";
$result = concatenate($string1, $string2);
echo $result; 
echo "\n";


/*3.Write a PHP function to remove the first and last element from an 
array and return the remaining elements as a new array. */

function ShiftPop($array){

    array_shift($array);
    array_pop($array);

    return $array;

}

echo "Answer to the question no. 03 ". "\n";

$name= array('Syed ','Muid','Hasan','Enar');

$newArray=ShiftPop($name);

$n=count($newArray);

for($i=0; $i<$n; $i++){
    echo $newArray[$i]. "\n";
}

echo "\n";

/*4.Write a PHP function to check if a string contains 
only letters and whitespace. */

function check($string) {
    return preg_match('/^[a-zA-Z\s]+$/', $string) === 1;
}

echo "Answer to the question no. 04 ". "\n";

$string1="My name is Enar";
$string2="My name is 123";

if(check($string1)){
    echo "$string1 ,  contains only letters and whitespace ". "\n" ;
}
else{
    echo "$string1 ,  contains NOT only letters and whitespace ". "\n" ;
}

if(check($string2)){
    echo "$string2 ,  contains only letters and whitespace ". "\n" ;
}
else{
    echo "$string2 ,  contains NOT only letters and whitespace ". "\n" ;
}
echo "\n";

/* 5.Write a PHP function to find the second largest number 
in an array of numbers. */

function SecondLeargestNumber($arr) {
    if (count($arr) < 2) {
        return null; 
    }

    $largest = $arr[0];
    $second_largest = null;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $second_largest = $largest;
            $largest = $arr[$i];
        } else if ($second_largest === null || ($arr[$i] > $second_largest && $arr[$i] != $largest)) {
            $second_largest = $arr[$i];
        }
    }

    return $second_largest;
}

echo "Answer to the question no. 05 ". "\n";


$n = [3,54,23,2,13];

$second_largest = SecondLeargestNumber($n);

echo "The second largest number in the array is: $second_largest\n";
echo "\n";