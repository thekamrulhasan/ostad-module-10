<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);
    
    
    $reversedString = strrev($string);
    
    
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

