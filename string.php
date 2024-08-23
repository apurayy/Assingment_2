<?php
function processStrings($strings) {
    foreach ($strings as $string) {
        
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

        $reversedString = strrev($string);

        echo "Original String: $string\n";
        echo "Vowel Count: $vowelCount\n";
        echo "Reversed String: $reversedString\n";
        echo "------------------------\n";
    }
}

$inputStrings = ["Hello", "World", "PHP", "Programming"];
processStrings($inputStrings);

?>
