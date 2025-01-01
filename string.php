<?php
$strings=["Hello","World","PHP","Programming"];
foreach($strings as $string){
    $vowelCount= preg_match_all("/[aeiou]/i", $string)?:0;
    $stringReverse= strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String : $stringReverse \n <br>";
}

?>