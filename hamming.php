<?php
function distance($strandA,$strandB) {
    $result = 0;
    for($i = 0; $i < strlen($strandA); $i++) {
        if($strandA[$i] !== $strandB[$i]) {
            $result++;
        }
    }
        return $result;

}    
echo distance('ROSE','RUSE');