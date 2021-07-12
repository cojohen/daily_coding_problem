<?php
/**
 *      Title:      2021-07-11.php
 *      Author:     Joe Cohen
 *      Contact:    <deskofjoe@gmail.com>
 *      GitHub:     https://github.com/cojohen
 * 
 *      PROBLEM:
 *      
 *      Implement a job scheduler which takes in a function f and 
 *      an integer n, and calls f after n milliseconds.
 *      
 */


class Scheduler {

    public  $waitTime;      // milliseconds
    public  $callThis;      // function to call

    public function __construct( $n, $f){

        $this->waitTime = $n;
        $this->callThis = $f;
    }
    
    public function execute(){
        /**
         *      sleep(int $microseconds): void
         *      Delays program execution for the given number of microseconds. 
         */
        usleep( $this->waitTime*1000 );  // 1000 microseconds = 1 millisecond
        call_user_func($this->callThis);

    }
}

//  define a function to call
$myCall = function (){ echo "Executed myCallback()\n"; };

$mySchedule = new Scheduler(750, $myCall);  // 750 milliseconds

echo "Preparing to execute\n";
$mySchedule->execute();

?>