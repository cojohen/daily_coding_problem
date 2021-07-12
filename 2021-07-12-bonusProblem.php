<?php
/**
 *      Title:      <2021-07012-bonusProblem.php
 *      Author:     Joe Cohen
 *      Contact:    <deskofjoe@gmail.com>
 *      GitHub:     https://github.com/cojohen
 * 
 *      PROBLEM:
 *      Given a string s, find the length of the longest substring 
 *      without repeating characters.
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        
        /**
         *  Build an array of letters in the alphabet 
         *  array = [ a = NULL, b = NULL, ... ]
         */
        $alphTable = str_split('abcdefghijklmnopqrstuvwxyz', 1);
        $alphTable = array_flip($alphTable);

        foreach($alphTable as &$row){
            $row = NULL;
        }

        /**
         *  Iterate over string $s
         */
        $searchStr = str_split($s);

        $i = 0;
        $greatestCount = 0;
        $greatestRepeat = 0;
        foreach($searchStr as $char){
            if(isset($alphTable[$char])){
                $greatestCount=( ($i-$alphTable[$char]) > $greatestCount ? ($i-$alphTable[$char]) : $greatestCount);
                //$greatestCount=( ( $i-$greatestRepeat > $greatestCount )? $i-$greatestRepeat : $greatestCount);
                //$greatestRepeat = ($alphTable[$char]>1 ? $alphTable[$char] : 0 );
            }
            $alphTable[$char] = $i;
            $i++;
        }

        
        return ($greatestCount==0 ? strlen($s) : $greatestCount);
    }
}

/**
 *  Testing solution
 */
$a = 'ab';
$b = 'aab';
$c = 'pwwkqwertyuiopasdfghjk';

$solution = new Solution();

echo "Testing '$a' -> ". $solution->lengthOfLongestSubstring($a)."\n";
echo "Testing '$b' -> ". $solution->lengthOfLongestSubstring($b)."\n";
echo "Testing '$c' -> ". $solution->lengthOfLongestSubstring($c)."\n";

?> 