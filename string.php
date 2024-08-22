
<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countvalue($string){
    $vowels=['a', 'e', 'i', 'o', 'u'];
    $count=0;
    $string=strtolower($string);
    for($i=0;$i<strlen($string);$i++){
        if(in_array($string[$i], $vowels)){
            $count++;

        }

    }
    return $count;

}
foreach($strings as $string){
    $vowelcount=countvalue($string);
    $reverse=strrev($string);
    echo "Original String: $string, Vowel Count: $vowelcount, Reversed String: $reverse <br>";

}


?>

