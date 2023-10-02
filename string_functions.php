<?php
$name = "Saptarshi Mandal";
echo $name;
echo "<br>";

// Length of a String: strlen($string)
echo "The length of my string is " . strlen($name) . "<br>";

// Count no. of words: str_word_count($string)
echo "The number of words in my string is " . str_word_count($name) . "<br>";

// Reverse a string: strrev($string)
echo "The reversed string is " . strrev($name) . "<br>";

// Find the starting position of some letter or word in a string: strpos($string, "letter")
// Returns the value in index number (starts counting from 0)
// If the letter parameter is not present in the string, it does not return anything
echo "The position of hi in the string is " . strpos($name, "hi") . "<br>";

// Replace some text in a string: str_replace("To be replaced", "To replace", $string)
echo "The replaced string is " . str_replace("Mandal", "Mew", $name) . "<br>";

// Repeat a string: str_repeat($string, repeat times)
echo "The string repeated 5 times is " . str_repeat($name, 5) . "<br>";

// Trim a text from left or right: rtrim($string) or ltrim($string)
// It removes the unwanted spaces from extreme right or extreme left
// Use pre tag as HTML itself removes any space given, pre tag displays the text as it is
echo "Trim Function: <br>";
echo "<pre>" . rtrim("   this is a php   ") . "</pre>";
echo "<pre>" . ltrim("   this is a php   ") . "</pre>";
?>