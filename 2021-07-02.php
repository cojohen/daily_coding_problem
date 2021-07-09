<?php
/**
 *      
 *      PROBLEM:
 *      
 *      Given a list of numbers and a number k, return 
 *      whether any two numbers from the list add up to k.
 *      
 *      For example, given [10, 15, 3, 7] and k of 17, 
 *      return true since 10 + 7 is 17.
 * 
 *      Bonus: Can you do this in one pass?
 * 
 */

function SumChecker( $list = array(), $sum){

    /**
     *  Attempt 1
     * 
     *  Complexity: O(n^2)
     *  Space:      O(n^2)
     * 
     */
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

$testList = array (10, 15, 3, 7);

var_dump($testList);

$inThere = SumChecker($testList, 25);

echo ($inThere ? "True" : "False");

?>