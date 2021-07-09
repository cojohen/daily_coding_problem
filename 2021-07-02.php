<?php
/**
 *      PROBLEM:
 *      
 *      Given a list of numbers and a number k, return 
 *      whether any two numbers from the list add up to k.
 *      
 *      For example, given [10, 15, 3, 7] and k of 17, 
 *      return true since 10 + 7 is 17.
 * 
 *      Bonus: Can you do this in one pass?
 */

 /**
 *      Attempt 1
 * 
 *      Complexity: O(n^2)
 * 
 */
function SumChecker( $list = array(), $sum){

    $foundIt = FALSE;
    for($i=0; $i<sizeof($list); $i++){
        for($j=0; $j<sizeof($list); $j++){
            if($i===$j){
                continue;
            }elseif( ($list[$i]+$list[$j])==$sum){  
                $foundIt = TRUE;
                break;
            }
        }
    }
    return $foundIt;
}

/**
 *      Attempt 2
 * 
 *      Complexity: O(n)
 *      
 */
function SumChecker2( $list = array(), $sum){

    $foundIt = FALSE;

    foreach($list as $listItem){
        /** 
         * in_array(mixed $needle, array $haystack, bool $strict = false): bool
        */
        if(in_array(abs($listItem-$sum), $list)){
            $foundIt = TRUE;
            break;
        }
    }
    return $foundIt;
}

$testList = array (4, 22, 10, 15, 3, 7);
$testInt = 11;

echo "Testing sum $testInt in this list: [";
foreach($testList as $item){ echo $item.", "; }
echo chr(8).chr(8)."] \n";       // double backspace removes last comma chr(8)chr(8)

echo (SumChecker($testList, 25) ? "True" : "False");
echo "\n";
echo (SumChecker2($testList, 25) ? "True" : "False");
echo "\n";

?>