<?php
function findDuplicates($array) {
    $counts = array();  
    $duplicates = array(); 
    
    foreach ($array as $value) {
        if (!isset($counts[$value])) {
            $counts[$value] = 1;  
        } else {
            $counts[$value]++;  
        }
    }
    
    foreach ($counts as $key => $count) {
        if ($count > 1) {
            $duplicates[] = $key;
        }
    }
    
    return $duplicates;
}

$array = [790, 483, 281, 224, 483, 60, 698, 483, 790, 168];
$output = findDuplicates($array);
print_r($output); 
?>
