<?php 


$haystack =  ['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false];

function findNeedle($haystack) {
    for ($i=0; $i<count($haystack); $i++){
        if($haystack[$i] == "needle"){
            return "found the needle at position " . $i;
        }
    }
}

function findNeedle2($haystack){
    return "found the needle at position " . array_search('needle', $haystack);
}

echo findNeedle2($haystack);