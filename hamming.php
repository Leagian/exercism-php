<?php
function distance($strandA,$strandB) {
    if (strlen($strandA) !== strlen($strandB)) {
        throw new Error("Strings must be of the same length");
      }
    $result = 0;
    for($i = 0; $i < strlen($strandA); $i++) {
        if($strandA[$i] !== $strandB[$i]) {
            $result++;
        }
    }
        return $result;

}    
echo distance('ROSE','RUSE');