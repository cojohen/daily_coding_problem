<?php
/**
 *      Title:      2021-07-12.php
 *      Author:     Joe Cohen
 *      Contact:    <deskofjoe@gmail.com>
 *      GitHub:     https://github.com/cojohen
 * 
 *      PROBLEM: 
 *      
 * Implement an autocomplete system. That is, given a query 
 * string s and a set of all possible query strings, return all 
 * strings in the set that have s as a prefix.
 * 
 * For example, given the query string de and the set of strings 
 * [dog, deer, deal], return [deer, deal].
 * 
 * Hint: Try preprocessing the dictionary into a more efficient 
 * data structure to speed up queries.
 */

class AutoCompleter{

    public string $prefix;
    public array $field;

    public function __construct($s = NULL, $field = NULL){

        $this->prefix = $s;
        $this->field = $field;

    }

    public function complete(){

        $results = array();

        foreach( $this->field as $fieldItem){
            // case insensitive: match all cases
            if( str_starts_with(strtoupper($fieldItem), strtoupper($this->prefix) ) )
                $results[] = $fieldItem;
        }

        return $results;
    }
}

/**
 *      Demonstrate Solution
 */

 $testFields = array( "dog", "deer", "deal", "disney", "dalmation", "divemaster", "diver", "Deep end");
 
 $AutoComplete = new AutoCompleter("di", $testFields);

 // display the testFields as [ a, b, c ]
 echo "Test field is: \t\t[";
 foreach($testFields as $field){
     echo "$field, ";
 }
 echo chr(8).chr(8)."] \n";

 echo "Auto completing: \t'de'\n";
 
 $autoResult = $AutoComplete->complete();
 
 echo "Results found: \t\t". sizeof($autoResult) . "\n";
 
 echo "Results are: \t\t[";
 foreach($autoResult as $field){
     echo "$field, ";
 }
 echo chr(8).chr(8)."] \n";

?>