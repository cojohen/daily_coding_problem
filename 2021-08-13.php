<?php

/**
 *      Title:      Problem #43
 *      Author:     Joe Cohen
 *      Contact:    <joe@dingosolutions.com>
 *      GitHub:     https://github.com/cojohen
 * 
 *      PROBLEM:
 *      
 *      Implement a stack that has the following methods:
 *      -push(val), which pushes an element onto the stack
 *      -pop(), which pops off and returns the topmost element of the stack. 
 *          If there are no elements in the stack, then it should throw an 
 *          error or return null.
 *      -max(), which returns the maximum value in the stack currently. 
 *          If there are no elements in the stack, then it should throw an 
 *          error or return null.
 * 
 *      Each method should run in constant time.
 */
namespace Problem\FourThree;

class Stack
{

    public function __construct(    // promoted properties - wow
        private array $stack = array(),
        private int $max = -1
    ) {}

    public function push($val): void
    {
        array_push($this->stack, $val);

        // update max value
        $this->max = max($this->stack);
    }

    public function pop(): int
    {
        try {
            return array_pop($this->stack);
        } catch(Exception $e)
        {
            echo "Caught exception: ", $e->getMessage(), "\n";
        }
    }

    public function max(): int
    {
        if (count($this->stack)) {
            return $this->max;
        } else {
            echo 'Error: Stack is empty: there is no max', "\n";
        }
    }
}

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->pop();
$stack->push(103);
echo 'stack max is ', $stack->max(), "\n";



?> 