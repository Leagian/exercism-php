# solution 1

<?php
function reverseString($text) {
    return strrev($text);
}
echo reverseString("bonjour");
?>

# solution 2

<?php 
function reverseStringTwo($text) {
    $arr = str_split($text);
    $newArr = array_reverse($arr);
    $finalStr = implode($newArr);

    return $finalStr;
}
echo reverseStringTwo("bonsoir");